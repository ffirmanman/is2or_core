<?php

/*
*                                                                            *
*          All rights reserved! CS-Commerce Software Solutions               *
*           http://www.cs-commerce.com/license-agreement.html                *
*                                                                            *
*/

use Tygh\Registry;
use Tygh\CscLiveSearch;

if (!defined('BOOTSTRAP')) {
    exit('Access denied');
}

class ClsRedis
{
    public $ls_settings = [];

    public function __construct($params, $ls_settings = [])
    {
        if (empty($ls_settings)) {
            $company_id = fn_cls_get_current_company_id($params);
            $ls_settings = CscLiveSearch::_get_option_values(true, $company_id);
        }

        $this->client = new Redis();
        @$this->client->connect($ls_settings['redis_server'], $ls_settings['redis_port'], 2);
        if ($ls_settings['need_redis_auth'] == 'Y' && $ls_settings['redis_pass']) {
            if ($ls_settings['redis_login']) {
                $auth[] = $ls_settings['redis_login'];
            }
            if ($ls_settings['redis_pass']) {
                $auth[] = $ls_settings['redis_pass'];
            }
            $this->client->auth(implode(':', $auth));
        }
        $this->ls_settings = $ls_settings;
        if (!empty($params)) {
            $this->rkey = 'cls:' . $this->getKey($params);
        }
    }

    public function getKey($params)
    {

        $keys = [
            'page', 'lang_code', 'currency', 'runtime_company_id', 'runtime_storefront_id', 'q', 'cid', 'group_by', 'current_cid',
        ];
        $result = array_filter($params, function ($v, $k) use ($keys) {

            return in_array($k, $keys);
        }, ARRAY_FILTER_USE_BOTH);
        ksort($result);
        $clusters = $this->getClusters($params['q']);
        return implode(':', $clusters) . ':' . md5(json_encode($result) . 'salt');
    }

    public function getClusters($q)
    {

        $words = ClsSearchSpeedup::_speedup_prepare_words($q);
        $clusters = [];
        foreach ($words as $word) {
            $cluster_word = ClsSearchSpeedup::_speedup_word_to_claster($word);
            $cluster = mb_substr($cluster_word, 0, $this->ls_settings['speedup_cluster_size'], 'utf-8');
            if (mb_strlen($cluster, 'utf-8') >= $this->ls_settings['speedup_cluster_size']) {
                $clusters[] = mb_strtolower($cluster, 'utf-8');
            }
        }
        $clusters = array_unique($clusters);
        asort($clusters);
        return $clusters;
    }

    public function get()
    {

        $data = false;
        if ($this->client->exists($this->rkey)) {
            if ($response = $this->client->get($this->rkey)) {
                $data = json_decode($response, true);
                $this->client->close();
            }
        }
        return $data;
    }

    public function set($value)
    {

        if ($this->ls_settings['turbo_cache_ttl']) {
            $this->client->set($this->rkey, json_encode($value), 3600 * $this->ls_settings['turbo_cache_ttl']);
        } else {
            $this->client->set($this->rkey, json_encode($value));
        }
        $this->client->close();
    }

    public function clear_by_pid($product_id)
    {

        $names = db_get_fields('SELECT description FROM ?:csc_search_speedup_index WHERE product_id=?i', $product_id);
        foreach ($names as $name) {
            $clusters = $this->getClusters($name);
            foreach ($clusters as $cluster) {
                $arList = $this->client->keys("cls*:{$cluster}:*");
                $this->client->del($arList);
            }
        }
        $this->client->close();
    }

    public function clear()
    {

        $arList = $this->client->keys('cls*:*');
        $this->client->del($arList);
        $this->client->close();
    }
}
