<?php

/*
*                                                                            *
*          All rights reserved! CS-Commerce Software Solutions               *
*           http://www.cs-commerce.com/license-agreement.html                *
*                                                                            *
*/

if (!defined('BOOTSTRAP')) {
    exit('Access denied');
}
class ClsYandexSpeller
{
    public static function _get($text, $lang_code = '')
    {
        $result = self::_request($text, $lang_code);
        if (!empty($result)) {
            $combinations = [];
            foreach ($result as $k => $corr) {
                if (!empty($corr['s'])) {
                    $combinations[$corr['word']] = reset($corr['s']);
                }
            }
            $corrections['q'] = $text;
            foreach ($combinations as $word => $replace) {
                $corrections['q'] = str_replace($word, $replace, $corrections['q']);
            }
            return [$corrections];
        }
        return [];
    }

    public static function _request($text, $lang_code = '')
    {
        if ($lang_code != 'ru') {
            $lang_code = 'en';
        }
        $url = "https://speller.yandex.net/services/spellservice.json/checkText?lang={$lang_code}&text=" . urlencode($text);
        $arrContextOptions = ['ssl' => ['verify_peer' => false, 'verify_peer_name' => false]];
        if (ini_get('allow_url_fopen')) {
            $result = file_get_contents($url, false, stream_context_create($arrContextOptions));
        } else {
            $c = curl_init();
            curl_setopt($c, CURLOPT_URL, $url);
            curl_setopt($c, CURLOPT_RETURNTRANSFER, true);
            $result = curl_exec($c);
            curl_close($c);
        }
        return json_decode($result, true);
    }
}
