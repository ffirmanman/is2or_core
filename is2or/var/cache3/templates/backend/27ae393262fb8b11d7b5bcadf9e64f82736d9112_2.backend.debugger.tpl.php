<?php
/* Smarty version 4.3.0, created on 2025-05-22 19:51:32
  from '/srv/projects/is2or.com/public_html/design/backend/templates/views/debugger/debugger.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_682fe2b4d16f84_79412198',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '27ae393262fb8b11d7b5bcadf9e64f82736d9112' => 
    array (
      0 => '/srv/projects/is2or.com/public_html/design/backend/templates/views/debugger/debugger.tpl',
      1 => 1728377996,
      2 => 'backend',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_682fe2b4d16f84_79412198 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/function.script.php','function'=>'smarty_function_script',),1=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/block.inline_script.php','function'=>'smarty_block_inline_script',),2=>array('file'=>'/srv/projects/is2or.com/public_html/app/lib/vendor/smarty/smarty/libs/plugins/modifier.number_format.php','function'=>'smarty_modifier_number_format',),));
echo smarty_function_script(array('src'=>"js/lib/highlight/highlight.pack.js"),$_smarty_tpl);?>



<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('inline_script', array());
$_block_repeat=true;
echo smarty_block_inline_script(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo '<script'; ?>
>

(function($){

var codeArr={};

$(document).ready(function() {

    $(window).on('keydown', function(e) {
        codeArr[e.keyCode] = true;

        if (codeArr[17] && codeArr[18] && e.keyCode !== 17 && e.keyCode !== 18) {
            // show toolbar on ctrl+alt+d
            if (e.keyCode == 68) {
                $('.deb-content').toggle();
            }

            codeArr={};
        }
    });

    $(window).on('keyup', function(e) {
        delete(codeArr[e.keyCode]);
    });

    $('body').on('click', '[data-ca-query-backtrace-trigger]', function(e) {
        e.preventDefault();
        var queryID = $(this).data('caQueryBacktraceTrigger');
        $('[data-ca-query-backtrace="' + queryID + '"]').toggle();
    });

    // show hide toolbar
    $('.deb-bug').on('click', function(){
        $('.deb-content').toggle();
        localStorage.removeItem('debugToolbarTab');
        localStorage.removeItem('debugToolbarTabContent');
        if($('.deb-content').is(':visible')){
            localStorage.setItem('debugToolbarTab', true);
        }
    });

    $('.deb-menu li').on('click', function(e){
        var tab = $(this).find('a').data('tab-content-id');
        localStorage.setItem('debugToolbarTabContent', tab);

        $('.deb-menu li').removeClass('active');
        $(this).addClass('active');

        if($(tab).is(':visible')) {
            $(tab).css('display','none');
            $(this).removeClass('active');
            localStorage.removeItem('debugToolbarTabContent');
        } else {
            $('.deb-tab').hide();
            $(tab).css('display','block');
        }

    });

    // show if opened
    if(localStorage.getItem("debugToolbarTabContent") !== null){
        var viewTab = localStorage.getItem("debugToolbarTabContent");
        $('.deb-content').show();
        $('.deb-menu li a[data-tab-content-id="'+viewTab+'"]').click();
    }

    if(localStorage.getItem("debugToolbarTab") !== null){
        $('.deb-content').show();
    }

    $('.deb-close').on('click', function(){
        $('.deb-tab').hide();
        localStorage.removeItem('debugToolbarTabContent');
        $('.deb-menu li').removeClass('active');
    });


    // after ajax init
    $.ceEvent('on', 'ce.ajaxdone', function(elms, inline_scripts, params, data, response_text){

        // code highlight
        $('pre code').each(function(i, e) {
            hljs.highlightBlock(e)
        });

        // template tree
        $('.tree li').each(function(){
            if($(this).children('ul').length > 0){
                $(this).addClass('parent');
            }
        });
        $('.tree li.parent > a').click(function(){
            $(this).parent().toggleClass('active');
            $(this).parent().children('ul').slideToggle('fast');
        });

        // Sub tabs
        if (params.result_ids) {
            var active_tab = $('#' + params['result_ids']);
            var defaultTab = $('.deb-sub-tab ul li.active a', active_tab).data('sub-tab-id');
            $('#'+defaultTab).show();
        }

        $('.deb-sub-tab ul li a').on('click', function(e){
            var subTab = $(this).data('sub-tab-id');
            $('.deb-sub-tab ul li').removeClass('active');
            $(this).parent().addClass('active');

            $('.deb-sub-tab-content').hide();
            $('#'+subTab).show();
        });

        // change tab on sql query click
        $('#DebugToolbarSubTabSQLListTable .query').on('click', function(e){
            $('.deb-sub-tab li:last-child a').click();
        });

        // chenge value on submit
        $('#DebugToolbarSubTabSQLParseSubmit').on('click',function(){
            var value = $('#DebugToolbarSQLQueryValue').text();
            $('#DebugToolbarSQLQuery').val(value);
        });
    });

});

})(Tygh.$);

<?php echo '</script'; ?>
><?php $_block_repeat=false;
echo smarty_block_inline_script(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

<style>
        pre code.sql{
          display: block; padding: 0.5em;
          white-space: initial;
        }

        pre .comment,
        pre .annotation,
        pre .template_comment,
        pre .diff .header,
        pre .chunk,
        pre .apache .cbracket {
          color: rgb(0, 128, 0);
        }

        pre .keyword,
        pre .id,
        pre .built_in,
        pre .smalltalk .class,
        pre .winutils,
        pre .bash .variable,
        pre .tex .command,
        pre .request,
        pre .status,
        pre .nginx .title,
        pre .xml .tag,
        pre .xml .tag .value {
          color: rgb(0, 0, 255);
        }

        pre .string,
        pre .title,
        pre .parent,
        pre .tag .value,
        pre .rules .value,
        pre .rules .value .number,
        pre .ruby .symbol,
        pre .ruby .symbol .string,
        pre .aggregate,
        pre .template_tag,
        pre .django .variable,
        pre .addition,
        pre .flow,
        pre .stream,
        pre .apache .tag,
        pre .date,
        pre .tex .formula {
          color: rgb(163, 21, 21);
        }

        pre .ruby .string,
        pre .decorator,
        pre .filter .argument,
        pre .localvars,
        pre .array,
        pre .attr_selector,
        pre .pseudo,
        pre .pi,
        pre .doctype,
        pre .deletion,
        pre .envvar,
        pre .shebang,
        pre .preprocessor,
        pre .userType,
        pre .apache .sqbracket,
        pre .nginx .built_in,
        pre .tex .special,
        pre .prompt {
          color: rgb(43, 145, 175);
        }

        pre .phpdoc,
        pre .javadoc,
        pre .xmlDocTag {
          color: rgb(128, 128, 128);
        }

        pre .vhdl .typename { font-weight: bold; }
        pre .vhdl .string { color: #666666; }
        pre .vhdl .literal { color: rgb(163, 21, 21); }
        pre .vhdl .attribute { color: #00B0E8; }

        pre .xml .attribute { color: rgb(255, 0, 0); }


        #DebugToolbar {
            font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
            color: #2d2d2d;
        }
        #DebugToolbar *,
        #DebugToolbar:after,
        #DebugToolbar:before {
            box-sizing: border-box;
        }
        #DebugToolbar pre, code {
            padding: 0px !important;
            font-size: 14px !important;
            margin: 0px !important;
            background: white;
            border: 0px !important;
            border-radius: 0px !important;
            font-family: monospace !important;
            line-height: 18px;
            color: #2d2d2d;
        }
        #DebugToolbar ul, #DebugToolbar li {
            padding: 0px;
            margin: 0px;
        }
        #DebugToolbar a {
            text-decoration: none;
            color: #333;
        }
        #DebugToolbar .btn {
            display: inline-flex;
            padding: 5px 13px;
            color: #2d2d2d;
            text-shadow: 0 1px 1px rgba(255, 255, 255, 0.75);
            background: #fff;
            border: 1px solid #dde4ef;
            border-bottom-color: #bac8df;
            border-radius: 6px;
        }
        #DebugToolbar .btn:hover,
        #DebugToolbar .btn:focus {
            color: #2d2d2d;
            background: #f1f5fa;
        }
        #DebugToolbar .btn-primary {
            color: #fff;
            text-shadow: 0 1px 1px rgba(0, 0, 0, 0.25);
            background: #1d9ff8;
            border-top-color: #1d8df8;
            border-right-color: #1d8df8;
            border-bottom-color: #0773db;
            border-left-color: #1d8df8;
        }
        #DebugToolbar .btn-primary:hover,
        #DebugToolbar .btn-primary:focus,
        #DebugToolbar .btn-primary:active,
        #DebugToolbar .btn-primary.active,
        #DebugToolbar .btn-primary.disabled,
        #DebugToolbar .btn-primary[disabled] {
            color: #fff;
            background-color: #1d8df8;
        }
        #DebugToolbar hr {
            border-top-color: #eee;
            border-bottom-color: #fff;
        }
        #DebugToolbar .deb-bug {
            width: 32px;
            height: 32px;
            position: fixed;
            top: 24px;
            right: 22px;
            z-index: 99999;
            cursor: pointer;
        }
        #DebugToolbar .deb-x {
            color: white;
            position: absolute;
            top: 58px;
            left: -24px;
            display: block;
            padding: 5px 7px;
            -webkit-border-radius: 4px 0 0 4px;
            -moz-border-radius: 4px 0 0 4px;
            border-radius: 4px 0 0 4px;
            background: #4d4d4d;
            text-decoration: none;
            visibility: hidden;
            opacity: 0;
        }
        #DebugToolbar .deb-logo {
            width: 86px;
            height: 19px;
            display: block;
            position: absolute;
            top: 25px;
            right: 94px;
            z-index: 99999;
        }
        #DebugToolbar .deb-content {
            display: none;
        }
        #DebugToolbar .deb-panel {
            background: #111111;
            width: 200px;
            position: fixed;
            right: 0px;
            top: 0px;
            bottom: 0px;
            z-index: 99998;
            color: white;
            min-height: 630px;
        }
        #DebugToolbar .deb-panel:hover .deb-x {
            visibility: visible;
            opacity: 1;
            -webkit-transition: all 0.2s ease;
            -moz-transition: all 0.2s ease;
            -ms-transition: all 0.2s ease;
            -o-transition: all 0.2s ease;
            transition: all 0.2s ease;
        }
        #DebugToolbar .deb-panel .deb-menu {
            margin-top: 85px;
            border-top: 1px solid #464545;
        }
        #DebugToolbar .deb-panel .deb-menu .active a {
            background: #4b4b4b;
        }
        #DebugToolbar .deb-panel .deb-menu li {
            list-style-type: none;
        }
        #DebugToolbar .deb-panel .deb-menu li a {
            color: white;
            display: block;
            font-size: 16px;
            padding: 15px 20px;
        }
        #DebugToolbar .deb-panel .deb-menu li a:hover {
            background: #323232;
        }
        #DebugToolbar .deb-panel ul li a small {
            display: block;
            font-size: 11px;
            color: #999999;
        }
        #DebugToolbar .deb-panel .deb-down-wrap {
            position: absolute;
            right: 0px;
            bottom: 20px;
        }
        #DebugToolbar .deb-panel .deb-down-content {
            padding: 0px 16px;
            margin-bottom: 15px;
        }
        #DebugToolbar .deb-panel .deb-down-help-text {
            color: #999;
            font-size: 12px;
            line-height: 16px;
        }
        #DebugToolbar .deb-panel .deb-resource-usage {
            border-top: 1px solid #464545;
            font-size: 12px;
            padding: 10px 15px 0px 15px;
            width: 170px;
        }
        #DebugToolbar .deb-panel .deb-resource-usage li {
            list-style-type: none;
            padding-bottom: 2px;
            color: #999999;
        }
        #DebugToolbar .deb-panel .deb-resource-usage li small {
            color: white;
        }
        #DebugToolbar .deb-panel .deb-resource-usage .deb-title {
            font-size: 16px;
            padding-bottom: 20px;
            color: white;
        }
        #DebugToolbar .deb-tab {
            z-index: 99997;
            background-color: #eeeeee;
            position: fixed;
            top: 0px;
            bottom: 0px;
            left: 0px;
            right: 200px;
            padding: 0px;
            display: none;
            overflow: auto;
        }
        #DebugToolbar .deb-tab-title {
            background-color: #ffffcc;
            padding: 10px 20px;
            position: relative;
            box-shadow: 0px 0px 10px #797979;
            z-index: 20;
        }
        #DebugToolbar .deb-tab-title h1 {
            font-size: 22px;
            padding: 0px;
            margin: 0px;
            line-height: 22px;
        }
        #DebugToolbar .deb-tab-content {
            padding: 25px 20px;
        }
        #DebugToolbar .deb-sub-tab {
            margin-bottom: 20px;
            border-bottom: 1px solid #dddddd;
        }
        #DebugToolbar .deb-sub-tab-content {
            display: none;
        }
        #DebugToolbar .deb-sub-tab > ul li {
            display: inline-block;
            margin-bottom: -1px;
        }
        #DebugToolbar .deb-sub-tab > ul li.active a {
            background: #dddddd !important;
            color: #333333;
            border-bottom: 1px solid #aeaeae !important;
        }
        #DebugToolbar .deb-sub-tab > ul li:hover a {
            background: #e5e5e5;
            border-bottom: 1px solid #c5c5c5;
        }
        #DebugToolbar .deb-sub-tab > ul li a {
            display: block;
            padding: 8px 15px;
            border-bottom: 1px solid #dddddd;
            -webkit-border-top-left-radius: 2px;
            -webkit-border-top-right-radius: 2px;
            -moz-border-radius-topleft: 2px;
            -moz-border-radius-topright: 2px;
            border-top-left-radius: 2px;
            border-top-right-radius: 2px;
        }
        #DebugToolbar .deb-close {
            font-size: 20px;
            position: absolute;
            top: 11px;
            right: 25px;
            color: black;
        }
        #DebugToolbar .deb-table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }
        #DebugToolbar .deb-table caption {
            text-align: left;
            font-size: 18px;
            padding-bottom: 15px;
        }
        #DebugToolbar .deb-table th, #DebugToolbar .deb-table td {
            margin: 0px;
            padding: 0px;
            outline: 0px;
            text-align: left;
            border: 1px solid #cccccc;
            padding: 7px 10px;
            color: #424242;
            font-size: 13px;
            background-color: #ffffff;
            -moz-hyphens: auto;
            hyphens: auto;
            word-break: break-word;
            word-wrap: break-word;
            overflow-wrap: break-word;
        }
        #DebugToolbar .deb-table tr:hover td {
            background-color: #F7F7F7;
        }
        #DebugToolbar .deb-table tr:hover td code, #DebugToolbar .deb-table tr:hover td pre {
            background: transparent;
        }
        #DebugToolbar .deb-table td a {
            color: #333333;
        }
        #DebugToolbar .deb-table th {
            background-color: #f5f5f5;
        }
        #DebugToolbar .deb-font-gray {
            color: gray;
        }
        #DebugToolbar .deb-table .deb-light-red, #DebugToolbar .deb-table .deb-light-red pre, #DebugToolbar .deb-table .deb-light-red pre code {
            background-color : #FFF2F2;
        }
        #DebugToolbar .deb-table tr:hover .deb-light-red{
            background-color : #FFE4E4;
        }
        #DebugToolbar .deb-table .deb-light2-red, #DebugToolbar .deb-table .deb-light2-red pre, #DebugToolbar .deb-table .deb-light2-red pre code {
            background-color: #fcdede;
        }
        #DebugToolbar .deb-table .deb-light3-red {
            background-color: #ffeeee;
        }
        #DebugToolbar .deb-variables {
            height: 100%;
            background: #333333;
            position: fixed;
            padding: 0px 0px 4px 0px;
            right: 200px;
            top: 0px;
            z-index: 10000;
        }
        #DebugToolbar .deb-variables a {
            display: block;
            padding: 2px 18px;
            color: #999999;
        }
        #DebugToolbar .deb-variables h4 {
            color: white;
            padding: 5px 18px;
        }
        #DebugToolbar .deb-variables a:hover {
            color: #999999;
            background: #4b4b4b;
        }
        #DebugToolbar #DebugToolbarTabTemplates .deb-table {
            width: 88%;
        }
        #DebugToolbar .tree {
            border-color: #BFC0C2 #BFC0C2 #B6B7BA;
            border-style: solid;
            border-width: 1px;
            display: inline-block;
            margin: 0 0 20px;
            width: 88%;
            background-color: white;
        }
        #DebugToolbar .tree ul {
            list-style: none outside none;
        }
        #DebugToolbar .tree ul li {
            padding: 4px 10px;
        }
        #DebugToolbar .tree ul > li:hover {
            background-color: #f7f7f7;
        }
        #DebugToolbar .tree li a {
            line-height: 25px;
        }
        #DebugToolbar .tree > ul > li  a {
            color: #3B4C56;
        }
        #DebugToolbar .tree > ul > li > a {
            display: block;
            font-weight: normal;
            position: relative;
            text-decoration: none;
        }
        #DebugToolbar .tree li.parent > a {
            padding: 0 0 0 17px;
            font-weight: bold;
        }
        #DebugToolbar .tree li.parent > a:before {
            background-image: url("design/backend/media/images/debugger/plus_minus_icons.png");
            background-position: 14px center;
            content: "";
            display: block;
            height: 21px;
            left: 0;
            position: absolute;
            top: 2px;
            vertical-align: middle;
            width: 14px;
        }
        #DebugToolbar .tree ul li.active > a:before {
            background-position: 0 center;
        }
        #DebugToolbar .tree ul li ul {
            display: none;
            margin: 0 0 0 12px;
            overflow: hidden;
            padding: 0 0 0 25px;
        }
        #DebugToolbar .tree ul li ul li {
            position: relative;
        }
        #DebugToolbar .tree ul li ul li:before {
            content: "";
            left: -20px;
            position: absolute;
            top: 17px;
            width: 15px;
        }
        #DebugToolbar h1 {
            font-size: 18px;
        }
        #DebugToolbar textarea {
            width: 99%;
            background-color: #fff;
            border: 1px solid #dde4ef;
            color: #2d2d2d;
        }
        #DebugToolbar textarea:focus {
            border-color: #1d9ff8;
        }
        #DebugToolbar [type="checkbox"] {
            margin: 0px;
        }
        #DebugToolbar input[type="checkbox"] {
            -moz-appearance: none;
            -webkit-appearance: none;
            width: 16px;
            height: 16px;
            position: relative;
            border: 2px solid #dde4ef;
            border-radius: 4px;
            box-shadow: none;
            border-color: #dde4ef;
            background: #fff;
            cursor: pointer;
            font-size: 11px;
        }
        #DebugToolbar input[type="checkbox"]:checked,
        #DebugToolbar input[type="checkbox"]:indeterminate {
            background: #1d9ff8;
            border-color: #1d9ff8;
        }
        #DebugToolbar input[type="checkbox"]:not(:checked):hover {
            border-color: #2d2d2d;
        }
        #DebugToolbar input[type="checkbox"]:before {
            content: '';
            position: absolute;
            display: block;
            width: 34px;
            height: 34px;
            transform: translate(-11px, -11px);
        }
        #DebugToolbar input[type="checkbox"]:checked:after,
        #DebugToolbar input[type="checkbox"]:indeterminate:after {
            display: flex;
            justify-content: center;
            align-items: center;
            width: 100%;
            height: 100%;
            color: white;
        }
        #DebugToolbar input[type="checkbox"]:checked:after {
            transform: translate(-0.5px, 1px);
            content: url("data:image/svg+xml,%3Csvg viewBox='0 0 20 20' width='20' height='20' fill='%23fff' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='m15.9754 5.89958c.3661.36611.3661.9597 0 1.32582l-6.83034 6.8305c-.17581.1759-.41427.2746-.66292.2746-.24864 0-.4871-.0987-.66292-.2746l-3.79464-3.7947c-.36611-.36609-.36611-.95968.00001-1.32579.36612-.36612.95972-.36611 1.32583.00001l3.13172 3.13178 6.16746-6.1676c.3661-.36613.9597-.36613 1.3258-.00002z'/%3E%3C/svg%3E");
        }
        #DebugToolbar input[type="checkbox"]:indeterminate:after {
            transform: translate(-0.5px, 1px);
            content: url("data:image/svg+xml,%3Csvg viewBox='0 0 20 20' width='20' height='20' fill='%23fff' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='m4.0625 10c0-.51777.41973-.9375.9375-.9375h10.625c.5178 0 .9375.41973.9375.9375 0 .5178-.4197.9375-.9375.9375h-10.625c-.51777 0-.9375-.4197-.9375-.9375z'/%3E%3C/svg%3E");
        }
        #DebugToolbar #DebugToolbarSubTabSQLList,
        #DebugToolbar #DebugToolbarSubTabCacheQueriesList {
            display: block;
        }

        #DebugToolbar .deb-warning {
            background-color: #FF3D3C;
            color: white;
            text-align: center;
            font-weight: bold;
            display: inline-block;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
        }

        #DebugToolbar .deb-menu .deb-warning {
            line-height: 16px;
            width: 16px;
            height: 16px;
            border-radius: 8px;
            font-size: 15px;
        }

        #DebugToolbar .deb-sub-tab .deb-warning {
            line-height: 14px;
            width: 14px;
            height: 14px;
            border-radius: 7px;
            font-size: 11px;
            letter-spacing: 1px;
        }

        #DebugToolbar .deb-notice {
            background-color : #ffc8c8;
            padding: 10px;
            margin-bottom: 15px;
        }

        #DebugToolbar .deb-notice strong {
            margin-right: 10px;
        }

        .unedited-element, .undeleted-element {
            cursor: not-allowed;
        }

        #DebugToolbar .deb-backtrace {
            margin-top: 10px; color: #2e3a47; font-weight: 600; display:none; font-family: monospace;
        }
        #DebugToolbar .deb-backtrace__item {
            list-style: disc inside;

        }
        #DebugToolbar .deb-backtrace-item_who {
            font-size: 14px;
            white-space: nowrap;
        }
        #DebugToolbar .deb-backtrace-item_where {
            font-size: 12px;
            white-space: nowrap;
        }

        #DebugToolbar .deb-table__actions-cell {}

        #DebugToolbar .deb-table td.deb-table__actions-cell a.deb-table__action-link {
            text-decoration: none;
            border-bottom: 1px dashed;
            line-height: 1.75;
            vertical-align: middle;
        }
    </style>

<div id="DebugToolbar">
    <img src="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['debugger_images_dir']->value, ENT_QUOTES, 'UTF-8');?>
/bug.png" class="deb-bug" />
    <div class="deb-content">
    <div class="deb-panel">
        <a href="#" class="deb-logo"><img src="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['debugger_images_dir']->value, ENT_QUOTES, 'UTF-8');?>
/logo.png"></a>
        <?php if ((defined('DEBUG_MODE') ? constant('DEBUG_MODE') : null) !== true) {?>
            <?php $_smarty_tpl->_assignInScope('current_url', fn_query_remove($_smarty_tpl->tpl_vars['config']->value['current_url'],$_smarty_tpl->tpl_vars['config']->value['debugger_token']));?>
            <?php $_smarty_tpl->_assignInScope('current_url', rawurlencode((string)$_smarty_tpl->tpl_vars['current_url']->value));?>
            <a href="<?php echo htmlspecialchars((string) fn_url("debugger.quit?redirect_url=".((string)$_smarty_tpl->tpl_vars['current_url']->value)), ENT_QUOTES, 'UTF-8');?>
" id="DebugToolbarQuit" class="deb-x">&#10006;</a>
        <?php }?>
        <ul class="deb-menu">
            <li><a class="cm-ajax cm-ajax-cache" href="<?php echo htmlspecialchars((string) fn_url("debugger.server?debugger_hash=".((string)$_smarty_tpl->tpl_vars['debugger_hash']->value)), ENT_QUOTES, 'UTF-8');?>
" data-ca-target-id="DebugToolbarTabServerContent" data-tab-content-id="#DebugToolbarTabServer">Server<small><?php echo htmlspecialchars((string) (defined('PRODUCT_NAME') ? constant('PRODUCT_NAME') : null), ENT_QUOTES, 'UTF-8');?>
: version <b><?php echo htmlspecialchars((string) (defined('PRODUCT_VERSION') ? constant('PRODUCT_VERSION') : null), ENT_QUOTES, 'UTF-8');?>
 <?php echo htmlspecialchars((string) (defined('PRODUCT_EDITION') ? constant('PRODUCT_EDITION') : null), ENT_QUOTES, 'UTF-8');?>
 <?php if ((defined('PRODUCT_STATUS') ? constant('PRODUCT_STATUS') : null) != '') {?> (<?php echo htmlspecialchars((string) (defined('PRODUCT_STATUS') ? constant('PRODUCT_STATUS') : null), ENT_QUOTES, 'UTF-8');?>
)<?php }?> <?php if ((defined('PRODUCT_BUILD') ? constant('PRODUCT_BUILD') : null) != '') {?> <?php echo htmlspecialchars((string) (defined('PRODUCT_BUILD') ? constant('PRODUCT_BUILD') : null), ENT_QUOTES, 'UTF-8');
}?></b></small></a></li>
            <li><a class="cm-ajax cm-ajax-cache" href="<?php echo htmlspecialchars((string) fn_url("debugger.request?debugger_hash=".((string)$_smarty_tpl->tpl_vars['debugger_hash']->value)), ENT_QUOTES, 'UTF-8');?>
" data-ca-target-id="DebugToolbarTabRequestContent" data-tab-content-id="#DebugToolbarTabRequest">Request</a></li>
            <li><a class="cm-ajax cm-ajax-cache" href="<?php echo htmlspecialchars((string) fn_url("debugger.config?debugger_hash=".((string)$_smarty_tpl->tpl_vars['debugger_hash']->value)), ENT_QUOTES, 'UTF-8');?>
" data-ca-target-id="DebugToolbarTabConfigContent" data-tab-content-id="#DebugToolbarTabConfig">Config</a></li>
            <li><a class="cm-ajax cm-ajax-cache" href="<?php echo htmlspecialchars((string) fn_url("debugger.sql?debugger_hash=".((string)$_smarty_tpl->tpl_vars['debugger_hash']->value)), ENT_QUOTES, 'UTF-8');?>
" data-ca-target-id="DebugToolbarTabSQLContent" data-tab-content-id="#DebugToolbarTabSQL">SQL<?php if ($_smarty_tpl->tpl_vars['warnings']->value['sql']) {?> <span class="deb-warning">!</span><?php }?><small><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['totals']->value['count_queries'], ENT_QUOTES, 'UTF-8');?>
 queries <?php echo htmlspecialchars((string) smarty_modifier_number_format($_smarty_tpl->tpl_vars['totals']->value['time_queries'],"4"), ENT_QUOTES, 'UTF-8');?>
 s</small></a></li>
            <li><a class="cm-ajax cm-ajax-cache" href="<?php echo htmlspecialchars((string) fn_url("debugger.cache_queries?debugger_hash=".((string)$_smarty_tpl->tpl_vars['debugger_hash']->value)), ENT_QUOTES, 'UTF-8');?>
" data-ca-target-id="DebugToolbarTabCacheQueriesContent" data-tab-content-id="#DebugToolbarTabCacheQueries">Cache queries<small><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['totals']->value['count_cache_queries'], ENT_QUOTES, 'UTF-8');?>
 queries <?php echo htmlspecialchars((string) smarty_modifier_number_format($_smarty_tpl->tpl_vars['totals']->value['time_cache_queries'],"4"), ENT_QUOTES, 'UTF-8');?>
 s</small></a></li>
            <li><a class="cm-ajax cm-ajax-cache" href="<?php echo htmlspecialchars((string) fn_url("debugger.logging?debugger_hash=".((string)$_smarty_tpl->tpl_vars['debugger_hash']->value)), ENT_QUOTES, 'UTF-8');?>
" data-ca-target-id="DebugToolbarTabLoggingContent" data-tab-content-id="#DebugToolbarTabLogging">Logging</a></li>
            <li><a class="cm-ajax cm-ajax-cache" href="<?php echo htmlspecialchars((string) fn_url("debugger.templates?debugger_hash=".((string)$_smarty_tpl->tpl_vars['debugger_hash']->value)), ENT_QUOTES, 'UTF-8');?>
" data-ca-target-id="DebugToolbarTabTemplatesContent" data-tab-content-id="#DebugToolbarTabTemplates" >Templates<small><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['totals']->value['count_tpls'], ENT_QUOTES, 'UTF-8');?>
 included templates</small></a></li>
            <?php if ((defined('AREA') ? constant('AREA') : null) == 'C') {?>
                <li><a class="cm-ajax cm-ajax-cache" href="<?php echo htmlspecialchars((string) fn_url("debugger.blocks?debugger_hash=".((string)$_smarty_tpl->tpl_vars['debugger_hash']->value)), ENT_QUOTES, 'UTF-8');?>
" data-ca-target-id="DebugToolbarTabBlocksContent" data-tab-content-id="#DebugToolbarTabBlocks">Blocks<small><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['totals']->value['blocks_rendered'], ENT_QUOTES, 'UTF-8');?>
 (<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['totals']->value['blocks_from_cache'], ENT_QUOTES, 'UTF-8');?>
 from cache) blocks rendered in <?php echo htmlspecialchars((string) smarty_modifier_number_format($_smarty_tpl->tpl_vars['totals']->value['blocks_time'],"4"), ENT_QUOTES, 'UTF-8');?>
 s</small></a></li>
            <?php }?>
        </ul>
        <div class="deb-down-wrap">
        <div class="deb-down-content">
            <p class="deb-down-help-text">
            Ctrl+Alt+D - show/hide toolbar
        </p>
        </div>
        <ul class="deb-resource-usage">
            <li>Page generating time <small><?php echo htmlspecialchars((string) smarty_modifier_number_format($_smarty_tpl->tpl_vars['totals']->value['time_page'],"4"), ENT_QUOTES, 'UTF-8');?>
 s</small></li>
            <li>Memory usage <small><?php echo htmlspecialchars((string) smarty_modifier_number_format($_smarty_tpl->tpl_vars['totals']->value['memory_page'],"2","."," "), ENT_QUOTES, 'UTF-8');?>
 KB</small></li>
            <?php if ((defined('AREA') ? constant('AREA') : null) == 'A') {?>
                <?php if (fn_allowed_for("ULTIMATE") && !$_smarty_tpl->tpl_vars['runtime']->value['company_id']) {?>
                    <li>Debugger ID is <small><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['debugger_id']->value, ENT_QUOTES, 'UTF-8');?>
</small></li>
                <?php } elseif (fn_allowed_for("MULTIVENDOR")) {?>
                    <li>Debug on <a href="<?php echo htmlspecialchars((string) fn_url("?".((string)$_smarty_tpl->tpl_vars['config']->value['debugger_token'])."=".((string)$_smarty_tpl->tpl_vars['debugger_id']->value),'C'), ENT_QUOTES, 'UTF-8');?>
" target="_blank" >storefront</a></li>
                <?php } else { ?>
                    <li>Debug on <a href="<?php echo htmlspecialchars((string) fn_url("?".((string)$_smarty_tpl->tpl_vars['config']->value['debugger_token'])."=".((string)$_smarty_tpl->tpl_vars['debugger_id']->value)."&company_id=".((string)$_smarty_tpl->tpl_vars['runtime']->value['company_id']),'C'), ENT_QUOTES, 'UTF-8');?>
" target="_blank" >storefront</a></li>
                <?php }?>
            <?php }?>
        </ul>
        </div>
    </div>
    <!--Sever tab-->
    <div class="deb-tab" id="DebugToolbarTabServer">
        <div class="deb-tab-title">
            <h1>Server</h1>
            <a href="#" class="deb-close">&#10006;</a>
        </div>
        <div class="deb-tab-content" id="DebugToolbarTabServerContent">
        </div>
    </div>

    <!--Request tab-->
    <div class="deb-tab" id="DebugToolbarTabRequest">
        <div class="deb-tab-title">
            <h1>Request</h1>
            <a href="#" class="deb-close">&#10006;</a>
        </div>
        <div class="deb-tab-content" id="DebugToolbarTabRequestContent">
        </div>
    </div>

    <!--Config tab-->
    <div class="deb-tab" id="DebugToolbarTabConfig">
        <div class="deb-tab-title">
            <h1>Config</h1>
            <a href="#" class="deb-close">&#10006;</a>
        </div>
        <div class="deb-tab-content" id="DebugToolbarTabConfigContent">
        </div>
    </div>

    <!--SQL tab-->
    <div class="deb-tab" id="DebugToolbarTabSQL">
        <div class="deb-tab-title">
            <h1>SQL</h1>
            <a href="#" class="deb-close">&#10006;</a>
        </div>
        <div class="deb-tab-content" id="DebugToolbarTabSQLContent">
        </div>
    </div>

    <!--Cache queries tab-->
    <div class="deb-tab" id="DebugToolbarTabCacheQueries">
        <div class="deb-tab-title">
            <h1>Cache queries</h1>
            <a href="#" class="deb-close">&#10006;</a>
        </div>
        <div class="deb-tab-content" id="DebugToolbarTabCacheQueriesContent">
        </div>
    </div>

    <!--Logging tab-->
    <div class="deb-tab" id="DebugToolbarTabLogging">
        <div class="deb-tab-title">
            <h1>Logging</h1>
            <a href="#" class="deb-close">&#10006;</a>
        </div>
        <div class="deb-tab-content" id="DebugToolbarTabLoggingContent">
        </div>
    </div>

    <!--Templates tab-->
    <div class="deb-tab" id="DebugToolbarTabTemplates">
        <div class="deb-tab-title">
            <h1>Templates</h1>
            <a href="#" class="deb-close">&#10006;</a>
        </div>
        <div class="deb-tab-content" id="DebugToolbarTabTemplatesContent">
        </div>
    </div>

    <!--Blocks tab-->
    <div class="deb-tab" id="DebugToolbarTabBlocks">
        <div class="deb-tab-title">
            <h1>Blocks</h1>
            <a href="#" class="deb-close">&#10006;</a>
        </div>
        <div class="deb-tab-content" id="DebugToolbarTabBlocksContent">
        </div>
    </div>
    </div>
</div>
<?php }
}
