<?php

function fn_cls_check_data(&$primary_object_id, &$object, &$processed_data, &$skip_record)
{
    static $valid_codes = [];
    if (empty($valid_codes)) {
        $valid_codes = db_get_fields('SELECT lang_code FROM ?:languages');
    }
    if (!in_array($object['lang_code'], $valid_codes)) {
        $skip_record = true;
        $processed_data['S']++;
    }
    if (!$primary_object_id) {
        $object['timestamp'] = TIME;
        $object['user_id'] = $_SESSION['auth']['user_id'];
    }
    return true;
}
function fn_cls_exim_get_query($qid)
{

    return db_get_field('SELECT q FROM ?:csc_live_search_q_base WHERE qid=?i', $qid);
}
function fn_cls_exim_count_requests($qid)
{

    return db_get_field('SELECT COUNT(*) FROM ?:csc_live_search_q_requests WHERE qid=?i', $qid);
}

function fn_cls_exim_get_synonyms($synonyms, $del = '///')
{

    $synonyms = json_decode($synonyms, true);
    return implode($del, $synonyms);
}
function fn_cls_exim_convert_synonyms($synonyms, $del = '///')
{

    $synonyms = explode($del, $synonyms);
    return json_encode($synonyms, JSON_UNESCAPED_UNICODE);
}
