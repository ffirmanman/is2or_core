<?php
/* Smarty version 5.4.3, created on 2026-05-24 21:09:22
  from 'tygh:buttons/helpers.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_6a133ed2183141_10472197',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c19e87a63fba3817fce4bd8177252c3a862bfac4' => 
    array (
      0 => 'buttons/helpers.tpl',
      1 => 1767831036,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_6a133ed2183141_10472197 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/backend/templates/buttons';
$_smarty_tpl->getSmarty()->getRuntime('TplFunction')->registerTplFunctions($_smarty_tpl, array (
  'btn' => 
  array (
    'compiled_filepath' => '/var/www/is2or/var/cache/templates/backend/c19e87a63fba3817fce4bd8177252c3a862bfac4_2.tygh_helpers.tpl.php',
    'uid' => 'c19e87a63fba3817fce4bd8177252c3a862bfac4',
    'call_name' => 'smarty_template_function_btn_20161047636a133ed2152b56_94206274',
  ),
  'dropdown' => 
  array (
    'compiled_filepath' => '/var/www/is2or/var/cache/templates/backend/c19e87a63fba3817fce4bd8177252c3a862bfac4_2.tygh_helpers.tpl.php',
    'uid' => 'c19e87a63fba3817fce4bd8177252c3a862bfac4',
    'call_name' => 'smarty_template_function_dropdown_20161047636a133ed2152b56_94206274',
  ),
));
?>


<?php }
\Tygh\Languages\Helper::preloadLangVars(array('delete_selected','delete','tools'));
/* smarty_template_function_btn_20161047636a133ed2152b56_94206274 */
if (!function_exists('smarty_template_function_btn_20161047636a133ed2152b56_94206274')) {
function smarty_template_function_btn_20161047636a133ed2152b56_94206274(\Smarty\Template $_smarty_tpl,$params) {
$_smarty_current_dir = '/var/www/is2or/design/backend/templates/buttons';
$params = array_merge(array('name'=>"btn",'text'=>'','href'=>'','title'=>'','onclick'=>'','target'=>'','class'=>'','data'=>array(),'form'=>'','method'=>'','raw'=>false), $params);
foreach ($params as $key => $value) {
$_smarty_tpl->assign($key, $value);
}
?>

    <?php if ($_smarty_tpl->getValue('method')) {?>
        <?php $_smarty_tpl->assign('method', mb_strtoupper((string) $_smarty_tpl->getValue('method') ?? '', 'UTF-8'), false, NULL);?>
    <?php }?>

    <?php ob_start();
echo htmlspecialchars((string) ((($tmp = $_smarty_tpl->getValue('method') ?? null)===null||$tmp==='' ? "GET" ?? null : $tmp)), ENT_QUOTES, 'UTF-8');
$_prefixVariable10 = ob_get_clean();
ob_start();
echo htmlspecialchars((string) ((($tmp = $_smarty_tpl->getValue('method') ?? null)===null||$tmp==='' ? "POST" ?? null : $tmp)), ENT_QUOTES, 'UTF-8');
$_prefixVariable11 = ob_get_clean();
if ($_smarty_tpl->getSmarty()->getModifierCallback('fn_check_view_permissions')($_smarty_tpl->getValue('href'),$_prefixVariable10) && $_smarty_tpl->getSmarty()->getModifierCallback('fn_check_view_permissions')($_smarty_tpl->getValue('dispatch'),$_prefixVariable11)) {?>
        <?php if ($_smarty_tpl->getValue('type') === "text" || $_smarty_tpl->getValue('type') === "button") {?>
        <?php if ($_smarty_tpl->getValue('href') && $_smarty_tpl->getValue('method') == "POST") {?>
            <?php $_smarty_tpl->assign('class', "cm-post ".((string)$_smarty_tpl->getValue('class')), false, NULL);?>
        <?php }?>

        <?php if ($_smarty_tpl->getValue('type') === "button") {?>
            <button type="button"
        <?php } else { ?>
            <a
        <?php }?>

        <?php if ($_smarty_tpl->getValue('target')) {?>target="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('target')), ENT_QUOTES, 'UTF-8');?>
"<?php }?> <?php if ($_smarty_tpl->getValue('href')) {?>href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')($_smarty_tpl->getValue('href'))), ENT_QUOTES, 'UTF-8');?>
"<?php }?> <?php if ($_smarty_tpl->getValue('id')) {?>id="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('id')), ENT_QUOTES, 'UTF-8');?>
"<?php }?> <?php if ($_smarty_tpl->getValue('class')) {?>class="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('class')), ENT_QUOTES, 'UTF-8');?>
"<?php }?> <?php if ($_smarty_tpl->getValue('title')) {?>title="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('title')), ENT_QUOTES, 'UTF-8');?>
"<?php }?>
        <?php if ($_smarty_tpl->getValue('data')) {?>
            <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('data'), 'data_value', false, 'data_name');
$foreach4DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('data_name')->value => $_smarty_tpl->getVariable('data_value')->value) {
$foreach4DoElse = false;
?>
                <?php if ($_smarty_tpl->getValue('data_value')) {?>
                    <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('data_name')), ENT_QUOTES, 'UTF-8');?>
="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('data_value')), ENT_QUOTES, 'UTF-8');?>
"
                <?php }?>
            <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
        <?php }?>
        <?php if ($_smarty_tpl->getValue('onclick')) {?>onclick="<?php echo $_smarty_tpl->getValue('onclick');?>
; return false;"<?php }?>
        >
        <?php if ($_smarty_tpl->getValue('icon') && $_smarty_tpl->getValue('icon_first')) {?><span class="btn__icon <?php if ($_smarty_tpl->getValue('text')) {?>btn__icon--with-text<?php }?>"><?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('include_ext')->handle(array('file'=>"common/icon.tpl",'class'=>$_smarty_tpl->getValue('icon')), $_smarty_tpl);?>
</span><?php }?>
            <?php if ($_smarty_tpl->getValue('raw') == false) {?>
                <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('text')), ENT_QUOTES, 'UTF-8');?>

            <?php } else { ?>
                <?php echo $_smarty_tpl->getValue('text');?>

            <?php }?>
        <?php if ($_smarty_tpl->getValue('icon') && !$_smarty_tpl->getValue('icon_first')) {?><span class="btn__icon btn__icon--last <?php if ($_smarty_tpl->getValue('text')) {?>btn__icon--with-text<?php }?>"><?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('include_ext')->handle(array('file'=>"common/icon.tpl",'class'=>$_smarty_tpl->getValue('icon')), $_smarty_tpl);?>
</span><?php }?>

        <?php if ($_smarty_tpl->getValue('type') === "button") {?>
            </button>
        <?php } else { ?>
            </a>
        <?php }?>
    <?php }?>

        <?php if ($_smarty_tpl->getValue('type') == "list") {?>
        <?php if (!$_smarty_tpl->getValue('href') && !$_smarty_tpl->getValue('process')) {?>
            <?php $_smarty_tpl->assign('class', "cm-process-items cm-submit ".((string)$_smarty_tpl->getValue('class')), false, NULL);?>
        <?php }?>
        <?php $_tmp_array = $_smarty_tpl->getValue('data') ?? [];
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array['data-ca-target-form'] = $_smarty_tpl->getValue('form');
$_smarty_tpl->assign('data', $_tmp_array, false, NULL);?>
        <?php $_tmp_array = $_smarty_tpl->getValue('data') ?? [];
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array['data-ca-dispatch'] = $_smarty_tpl->getValue('dispatch');
$_smarty_tpl->assign('data', $_tmp_array, false, NULL);?>
        <?php $_smarty_tpl->getSmarty()->getRuntime('TplFunction')->callTemplateFunction($_smarty_tpl, 'btn', array('type'=>"text",'target'=>$_smarty_tpl->getValue('target'),'href'=>$_smarty_tpl->getValue('href'),'data'=>$_smarty_tpl->getValue('data'),'class'=>$_smarty_tpl->getValue('class'),'onclick'=>$_smarty_tpl->getValue('onclick'),'text'=>$_smarty_tpl->getValue('text'),'method'=>$_smarty_tpl->getValue('method'),'raw'=>$_smarty_tpl->getValue('raw'),'icon'=>''), true);?>

    <?php }?>

        <?php if ($_smarty_tpl->getValue('type') == "delete_selected") {?>
        <?php if ($_smarty_tpl->getValue('icon')) {?>
            <?php $_smarty_tpl->assign('class', "btn ".((string)$_smarty_tpl->getValue('class')), false, NULL);?>
            <?php $_smarty_tpl->assign('text', " ", false, NULL);?>
        <?php }?>
        <?php $_tmp_array = $_smarty_tpl->getValue('data') ?? [];
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array['data-ca-target-form'] = $_smarty_tpl->getValue('form');
$_smarty_tpl->assign('data', $_tmp_array, false, NULL);?>
        <?php $_tmp_array = $_smarty_tpl->getValue('data') ?? [];
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array['data-ca-dispatch'] = $_smarty_tpl->getValue('dispatch');
$_smarty_tpl->assign('data', $_tmp_array, false, NULL);?>
        <?php $_smarty_tpl->getSmarty()->getRuntime('TplFunction')->callTemplateFunction($_smarty_tpl, 'btn', array('type'=>"text",'target'=>$_smarty_tpl->getValue('target'),'href'=>$_smarty_tpl->getValue('href'),'data'=>$_smarty_tpl->getValue('data'),'class'=>"cm-process-items cm-submit cm-confirm ".((string)$_smarty_tpl->getValue('class')),'click'=>$_smarty_tpl->getValue('click'),'text'=>(($tmp = $_smarty_tpl->getValue('text') ?? null)===null||$tmp==='' ? $_smarty_tpl->getSmarty()->getModifierCallback("__")("delete_selected", [], $_smarty_tpl->getSmarty()->getLanguage()) ?? null : $tmp),'method'=>$_smarty_tpl->getValue('method')), true);?>

    <?php }?>

        <?php if ($_smarty_tpl->getValue('type') == "delete") {?>
        <?php $_tmp_array = $_smarty_tpl->getValue('data') ?? [];
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array['data-ca-target-form'] = $_smarty_tpl->getValue('form');
$_smarty_tpl->assign('data', $_tmp_array, false, NULL);?>
        <?php $_tmp_array = $_smarty_tpl->getValue('data') ?? [];
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array['data-ca-dispatch'] = $_smarty_tpl->getValue('dispatch');
$_smarty_tpl->assign('data', $_tmp_array, false, NULL);?>
        <?php $_smarty_tpl->getSmarty()->getRuntime('TplFunction')->callTemplateFunction($_smarty_tpl, 'btn', array('type'=>"text",'target'=>$_smarty_tpl->getValue('target'),'href'=>$_smarty_tpl->getValue('href'),'data'=>$_smarty_tpl->getValue('data'),'class'=>((string)$_smarty_tpl->getValue('class')),'click'=>$_smarty_tpl->getValue('click'),'text'=>(($tmp = $_smarty_tpl->getValue('text') ?? null)===null||$tmp==='' ? $_smarty_tpl->getSmarty()->getModifierCallback("__")("delete", [], $_smarty_tpl->getSmarty()->getLanguage()) ?? null : $tmp),'method'=>$_smarty_tpl->getValue('method')), true);?>

    <?php }?>

        <?php if ($_smarty_tpl->getValue('type') == "dialog") {?>
        <?php $_tmp_array = $_smarty_tpl->getValue('data') ?? [];
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array['data-ca-target-form'] = $_smarty_tpl->getValue('form');
$_smarty_tpl->assign('data', $_tmp_array, false, NULL);?>
        <?php $_tmp_array = $_smarty_tpl->getValue('data') ?? [];
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array['data-ca-target-id'] = $_smarty_tpl->getValue('target_id');
$_smarty_tpl->assign('data', $_tmp_array, false, NULL);?>
        <?php $_smarty_tpl->getSmarty()->getRuntime('TplFunction')->callTemplateFunction($_smarty_tpl, 'btn', array('type'=>"text",'text'=>$_smarty_tpl->getValue('text'),'class'=>"cm-dialog-opener ".((string)$_smarty_tpl->getValue('class')),'href'=>$_smarty_tpl->getValue('href'),'id'=>$_smarty_tpl->getValue('id'),'title'=>$_smarty_tpl->getValue('title'),'data'=>$_smarty_tpl->getValue('data'),'method'=>$_smarty_tpl->getValue('method'),'raw'=>$_smarty_tpl->getValue('raw')), true);?>

    <?php }?>

        <?php if ($_smarty_tpl->getValue('type') == "multiple") {?>
        <?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('script')->handle(array('src'=>"js/tygh/node_cloning.js"), $_smarty_tpl);?>


        <?php $_smarty_tpl->assign('tag_level', (($tmp = $_smarty_tpl->getValue('tag_level') ?? null)===null||$tmp==='' ? "1" ?? null : $tmp), false, NULL);?>
        <?php if ($_smarty_tpl->getValue('only_delete') != "Y") {
if (!$_smarty_tpl->getValue('hide_add')) {?><li><?php $_smarty_tpl->getSmarty()->getRuntime('TplFunction')->callTemplateFunction($_smarty_tpl, 'btn', array('type'=>"text",'onclick'=>"Tygh."."$"."('#box_' + this.id).cloneNode(".((string)$_smarty_tpl->getValue('tag_level'))."); ".((string)$_smarty_tpl->getValue('on_add')),'id'=>$_smarty_tpl->getValue('item_id'),'method'=>$_smarty_tpl->getValue('method')), true);?>
</li><?php }
if (!$_smarty_tpl->getValue('hide_clone')) {?><li><?php $_smarty_tpl->getSmarty()->getRuntime('TplFunction')->callTemplateFunction($_smarty_tpl, 'btn', array('type'=>"text",'onclick'=>"Tygh."."$"."('#box_' + this.id).cloneNode(".((string)$_smarty_tpl->getValue('tag_level')).", true);",'id'=>$_smarty_tpl->getValue('item_id'),'method'=>$_smarty_tpl->getValue('method')), true);?>
</li><?php }
}?><li><?php $_smarty_tpl->getSmarty()->getRuntime('TplFunction')->callTemplateFunction($_smarty_tpl, 'btn', array('type'=>"text",'only_delete'=>$_smarty_tpl->getValue('only_delete'),'class'=>"cm-delete-row",'method'=>$_smarty_tpl->getValue('method')), true);?>
</li>
    <?php }?>

        <?php if ($_smarty_tpl->getValue('type') == "add") {?>
        <?php $_smarty_tpl->getSmarty()->getRuntime('TplFunction')->callTemplateFunction($_smarty_tpl, 'btn', array('type'=>"text",'title'=>$_smarty_tpl->getValue('title'),'class'=>"cm-tooltip btn",'icon'=>"icon-plus",'href'=>$_smarty_tpl->getValue('href'),'method'=>$_smarty_tpl->getValue('method')), true);?>

    <?php }?>

        <?php if ($_smarty_tpl->getValue('type') == "text_add") {?>
        <?php $_smarty_tpl->getSmarty()->getRuntime('TplFunction')->callTemplateFunction($_smarty_tpl, 'btn', array('type'=>"text",'text'=>$_smarty_tpl->getValue('text'),'class'=>"btn btn-primary ".((string)$_smarty_tpl->getValue('class')),'icon'=>"icon-plus",'icon_first'=>true,'href'=>$_smarty_tpl->getValue('href'),'method'=>$_smarty_tpl->getValue('method')), true);?>

    <?php }?>

    <?php }
}}
/*/ smarty_template_function_btn_20161047636a133ed2152b56_94206274 */
/* smarty_template_function_dropdown_20161047636a133ed2152b56_94206274 */
if (!function_exists('smarty_template_function_dropdown_20161047636a133ed2152b56_94206274')) {
function smarty_template_function_dropdown_20161047636a133ed2152b56_94206274(\Smarty\Template $_smarty_tpl,$params) {
$_smarty_current_dir = '/var/www/is2or/design/backend/templates/buttons';
$params = array_merge(array('name'=>"dropdown",'text'=>'','title'=>'','class'=>'','content'=>'','icon'=>'','no_caret'=>false,'placement'=>"left"), $params);
foreach ($params as $key => $value) {
$_smarty_tpl->assign($key, $value);
}
?>

    <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getModifierCallback('replace')(strip_tags((string) $_smarty_tpl->getValue('content')),"&nbsp;",'')) != '') {?>
        <div class="btn-group<?php if ($_smarty_tpl->getValue('placement') == "left") {?> dropleft<?php }?> <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('class')), ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->getValue('id')) {?>id="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('id')), ENT_QUOTES, 'UTF-8');?>
"<?php }?>>
            <a href="#" class="btn dropdown-toggle <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('class_toggle')), ENT_QUOTES, 'UTF-8');?>
" data-toggle="dropdown" <?php if ($_smarty_tpl->getValue('title')) {?>title="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('title')), ENT_QUOTES, 'UTF-8');?>
"<?php }?>>
                <?php $_smarty_tpl->assign('icon', (($tmp = $_smarty_tpl->getValue('icon') ?? null)===null||$tmp==='' ? "icon-cog dropdown-icon--tools" ?? null : $tmp), false, NULL);?>
                <span class="btn__icon btn__icon--caret">
                    <?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('include_ext')->handle(array('file'=>"common/icon.tpl",'class'=>"dropdown-icon ".((string)$_smarty_tpl->getValue('icon'))), $_smarty_tpl);?>

                </span>
                <?php if ($_smarty_tpl->getValue('text')) {?>
                    <?php echo (($tmp = $_smarty_tpl->getValue('text') ?? null)===null||$tmp==='' ? $_smarty_tpl->getSmarty()->getModifierCallback("__")("tools", [], $_smarty_tpl->getSmarty()->getLanguage()) ?? null : $tmp);?>

                <?php }?>
                <?php if (!$_smarty_tpl->getValue('no_caret')) {?>
                    <span class="caret"></span>
                <?php }?>
            </a>
            <ul class="dropdown-menu">
                <?php echo $_smarty_tpl->getValue('content');?>

            </ul>
        </div>
    <?php }
}}
/*/ smarty_template_function_dropdown_20161047636a133ed2152b56_94206274 */
}
