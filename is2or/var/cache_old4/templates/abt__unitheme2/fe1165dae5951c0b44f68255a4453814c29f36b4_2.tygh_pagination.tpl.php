<?php
/* Smarty version 5.4.3, created on 2026-05-06 17:02:46
  from 'tygh:/var/www/is2or/design/themes/responsive/templates/addons/cr_vendor_page_pro/overrides/common/pagination.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69fb4a06d48445_89502134',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fe1165dae5951c0b44f68255a4453814c29f36b4' => 
    array (
      0 => '/var/www/is2or/design/themes/responsive/templates/addons/cr_vendor_page_pro/overrides/common/pagination.tpl',
      1 => 1776438348,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_69fb4a06d48445_89502134 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/themes/responsive/templates/addons/cr_vendor_page_pro/overrides/common';
\Tygh\Languages\Helper::preloadLangVars(array('prev_page','next','prev_page','next'));
if ($_smarty_tpl->getValue('runtime')['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "template_content", null, null);
$_smarty_tpl->assign('id', (($tmp = $_smarty_tpl->getValue('id') ?? null)===null||$tmp==='' ? "pagination_contents" ?? null : $tmp), false, NULL);
$_smarty_tpl->assign('pagination', $_smarty_tpl->getSmarty()->getModifierCallback('fn_generate_pagination')($_smarty_tpl->getValue('search')), false, NULL);?>

<?php if ($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'pagination_open') != "Y") {?>
    <div class="ty-pagination-container cm-pagination-container" id="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('id')), ENT_QUOTES, 'UTF-8');?>
">

    <?php if ($_smarty_tpl->getValue('save_current_page')) {?>
        <input type="hidden" name="page" value="<?php echo htmlspecialchars((string) ((($tmp = $_smarty_tpl->getValue('search')['page'] ?? null)===null||$tmp==='' ? $_REQUEST['page'] ?? null : $tmp)), ENT_QUOTES, 'UTF-8');?>
" />
    <?php }?>

    <?php if ($_smarty_tpl->getValue('save_current_url')) {?>
        <input type="hidden" name="redirect_url" value="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('config')['current_url']), ENT_QUOTES, 'UTF-8');?>
" />
    <?php }
}?>

<?php if ($_smarty_tpl->getValue('pagination')['total_pages'] > 1) {?>
    <?php if ($_smarty_tpl->getValue('settings')['Appearance']['top_pagination'] == "Y" && $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'pagination_open') != "Y" || $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'pagination_open') == "Y") {?>
    <?php $_smarty_tpl->assign('c_url', $_smarty_tpl->getSmarty()->getModifierCallback('fn_query_remove')($_smarty_tpl->getValue('config')['current_url'],"page"), false, NULL);?>

    <?php if (!$_smarty_tpl->getValue('config')['tweaks']['disable_dhtml'] || $_smarty_tpl->getValue('force_ajax')) {?>
        <?php $_smarty_tpl->assign('ajax_class', "cm-ajax cm-ajax-force cm-ajax-full-render", false, NULL);?>
    <?php }?>

    <?php if ($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'pagination_open') == "Y") {?>
    <div class="ty-pagination__bottom">
    <?php }?>
    <div class="ty-pagination">
        <?php if ($_smarty_tpl->getValue('pagination')['prev_range']) {?>
            <a data-ca-scroll=".cm-pagination-container" href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')(((string)$_smarty_tpl->getValue('c_url'))."&page=".((string)$_smarty_tpl->getValue('pagination')['prev_range']).((string)$_smarty_tpl->getValue('extra_url')))), ENT_QUOTES, 'UTF-8');?>
" data-ca-page="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('pagination')['prev_range']), ENT_QUOTES, 'UTF-8');?>
" class="cm-history hidden-phone ty-pagination__item ty-pagination__range <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('ajax_class')), ENT_QUOTES, 'UTF-8');?>
" data-ca-target-id="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('id')), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('pagination')['prev_range_from']), ENT_QUOTES, 'UTF-8');?>
 - <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('pagination')['prev_range_to']), ENT_QUOTES, 'UTF-8');?>
</a>
        <?php }?>
        <a data-ca-scroll=".cm-pagination-container" class="ty-pagination__item ty-pagination__btn <?php if ($_smarty_tpl->getValue('pagination')['prev_page']) {?>ty-pagination__prev cm-history <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('ajax_class')), ENT_QUOTES, 'UTF-8');
}?>" <?php if ($_smarty_tpl->getValue('pagination')['prev_page']) {?>href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')(((string)$_smarty_tpl->getValue('c_url'))."&page=".((string)$_smarty_tpl->getValue('pagination')['prev_page']))), ENT_QUOTES, 'UTF-8');?>
" data-ca-page="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('pagination')['prev_page']), ENT_QUOTES, 'UTF-8');?>
" data-ca-target-id="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('id')), ENT_QUOTES, 'UTF-8');?>
"<?php }?>><i class="ty-pagination__text-arrow"></i>&nbsp;<span class="ty-pagination__text"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("prev_page", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</span></a>

        <div class="ty-pagination__items">
            <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('pagination')['navi_pages'], 'pg');
$foreach34DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('pg')->value) {
$foreach34DoElse = false;
?>
                <?php if ($_smarty_tpl->getValue('pg') != $_smarty_tpl->getValue('pagination')['current_page']) {?>
                    <a data-ca-scroll=".cm-pagination-container" href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')(((string)$_smarty_tpl->getValue('c_url'))."&page=".((string)$_smarty_tpl->getValue('pg')).((string)$_smarty_tpl->getValue('extra_url')))), ENT_QUOTES, 'UTF-8');?>
" data-ca-page="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('pg')), ENT_QUOTES, 'UTF-8');?>
" class="cm-history ty-pagination__item <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('ajax_class')), ENT_QUOTES, 'UTF-8');?>
" data-ca-target-id="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('id')), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('pg')), ENT_QUOTES, 'UTF-8');?>
</a>
                <?php } else { ?>
                    <span class="ty-pagination__selected"><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('pg')), ENT_QUOTES, 'UTF-8');?>
</span>
                <?php }?>
            <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
        </div>

        <a data-ca-scroll=".cm-pagination-container" class="ty-pagination__item ty-pagination__btn <?php if ($_smarty_tpl->getValue('pagination')['next_page']) {?>ty-pagination__next cm-history <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('ajax_class')), ENT_QUOTES, 'UTF-8');
}?>" <?php if ($_smarty_tpl->getValue('pagination')['next_page']) {?>href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')(((string)$_smarty_tpl->getValue('c_url'))."&page=".((string)$_smarty_tpl->getValue('pagination')['next_page']).((string)$_smarty_tpl->getValue('extra_url')))), ENT_QUOTES, 'UTF-8');?>
" data-ca-page="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('pagination')['next_page']), ENT_QUOTES, 'UTF-8');?>
" data-ca-target-id="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('id')), ENT_QUOTES, 'UTF-8');?>
"<?php }?>><span class="ty-pagination__text"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("next", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</span>&nbsp;<i class="ty-pagination__text-arrow"></i></a>

        <?php if ($_smarty_tpl->getValue('pagination')['next_range']) {?>
            <a data-ca-scroll=".cm-pagination-container" href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')(((string)$_smarty_tpl->getValue('c_url'))."&page=".((string)$_smarty_tpl->getValue('pagination')['next_range']).((string)$_smarty_tpl->getValue('extra_url')))), ENT_QUOTES, 'UTF-8');?>
" data-ca-page="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('pagination')['next_range']), ENT_QUOTES, 'UTF-8');?>
" class="cm-history ty-pagination__item hidden-phone ty-pagination__range <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('ajax_class')), ENT_QUOTES, 'UTF-8');?>
" data-ca-target-id="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('id')), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('pagination')['next_range_from']), ENT_QUOTES, 'UTF-8');?>
 - <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('pagination')['next_range_to']), ENT_QUOTES, 'UTF-8');?>
</a>
        <?php }?>
    </div>
    <?php if ($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'pagination_open') == "Y") {?>
        </div>
    <?php }?>
    <?php } else { ?>
        <div><a data-ca-scroll=".cm-pagination-container" href="" data-ca-page="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('pg')), ENT_QUOTES, 'UTF-8');?>
" data-ca-target-id="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('id')), ENT_QUOTES, 'UTF-8');?>
" class="hidden"></a></div>
    <?php }
}?>

<?php if ($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'pagination_open') == "Y") {?>
    <!--<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('id')), ENT_QUOTES, 'UTF-8');?>
--></div>
    <?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "pagination_open", null, null);?>N<?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
} elseif ($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'pagination_open') != "Y") {?>
    <?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "pagination_open", null, null);?>Y<?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
}
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->getValue('auth')['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="/var/www/is2or/design/themes/responsive/templates/addons/cr_vendor_page_pro/overrides/common/pagination.tpl" id="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('set_id')->handle(array('name'=>"/var/www/is2or/design/themes/responsive/templates/addons/cr_vendor_page_pro/overrides/common/pagination.tpl"), $_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
$_smarty_tpl->assign('id', (($tmp = $_smarty_tpl->getValue('id') ?? null)===null||$tmp==='' ? "pagination_contents" ?? null : $tmp), false, NULL);
$_smarty_tpl->assign('pagination', $_smarty_tpl->getSmarty()->getModifierCallback('fn_generate_pagination')($_smarty_tpl->getValue('search')), false, NULL);?>

<?php if ($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'pagination_open') != "Y") {?>
    <div class="ty-pagination-container cm-pagination-container" id="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('id')), ENT_QUOTES, 'UTF-8');?>
">

    <?php if ($_smarty_tpl->getValue('save_current_page')) {?>
        <input type="hidden" name="page" value="<?php echo htmlspecialchars((string) ((($tmp = $_smarty_tpl->getValue('search')['page'] ?? null)===null||$tmp==='' ? $_REQUEST['page'] ?? null : $tmp)), ENT_QUOTES, 'UTF-8');?>
" />
    <?php }?>

    <?php if ($_smarty_tpl->getValue('save_current_url')) {?>
        <input type="hidden" name="redirect_url" value="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('config')['current_url']), ENT_QUOTES, 'UTF-8');?>
" />
    <?php }
}?>

<?php if ($_smarty_tpl->getValue('pagination')['total_pages'] > 1) {?>
    <?php if ($_smarty_tpl->getValue('settings')['Appearance']['top_pagination'] == "Y" && $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'pagination_open') != "Y" || $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'pagination_open') == "Y") {?>
    <?php $_smarty_tpl->assign('c_url', $_smarty_tpl->getSmarty()->getModifierCallback('fn_query_remove')($_smarty_tpl->getValue('config')['current_url'],"page"), false, NULL);?>

    <?php if (!$_smarty_tpl->getValue('config')['tweaks']['disable_dhtml'] || $_smarty_tpl->getValue('force_ajax')) {?>
        <?php $_smarty_tpl->assign('ajax_class', "cm-ajax cm-ajax-force cm-ajax-full-render", false, NULL);?>
    <?php }?>

    <?php if ($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'pagination_open') == "Y") {?>
    <div class="ty-pagination__bottom">
    <?php }?>
    <div class="ty-pagination">
        <?php if ($_smarty_tpl->getValue('pagination')['prev_range']) {?>
            <a data-ca-scroll=".cm-pagination-container" href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')(((string)$_smarty_tpl->getValue('c_url'))."&page=".((string)$_smarty_tpl->getValue('pagination')['prev_range']).((string)$_smarty_tpl->getValue('extra_url')))), ENT_QUOTES, 'UTF-8');?>
" data-ca-page="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('pagination')['prev_range']), ENT_QUOTES, 'UTF-8');?>
" class="cm-history hidden-phone ty-pagination__item ty-pagination__range <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('ajax_class')), ENT_QUOTES, 'UTF-8');?>
" data-ca-target-id="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('id')), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('pagination')['prev_range_from']), ENT_QUOTES, 'UTF-8');?>
 - <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('pagination')['prev_range_to']), ENT_QUOTES, 'UTF-8');?>
</a>
        <?php }?>
        <a data-ca-scroll=".cm-pagination-container" class="ty-pagination__item ty-pagination__btn <?php if ($_smarty_tpl->getValue('pagination')['prev_page']) {?>ty-pagination__prev cm-history <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('ajax_class')), ENT_QUOTES, 'UTF-8');
}?>" <?php if ($_smarty_tpl->getValue('pagination')['prev_page']) {?>href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')(((string)$_smarty_tpl->getValue('c_url'))."&page=".((string)$_smarty_tpl->getValue('pagination')['prev_page']))), ENT_QUOTES, 'UTF-8');?>
" data-ca-page="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('pagination')['prev_page']), ENT_QUOTES, 'UTF-8');?>
" data-ca-target-id="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('id')), ENT_QUOTES, 'UTF-8');?>
"<?php }?>><i class="ty-pagination__text-arrow"></i>&nbsp;<span class="ty-pagination__text"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("prev_page", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</span></a>

        <div class="ty-pagination__items">
            <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('pagination')['navi_pages'], 'pg');
$foreach35DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('pg')->value) {
$foreach35DoElse = false;
?>
                <?php if ($_smarty_tpl->getValue('pg') != $_smarty_tpl->getValue('pagination')['current_page']) {?>
                    <a data-ca-scroll=".cm-pagination-container" href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')(((string)$_smarty_tpl->getValue('c_url'))."&page=".((string)$_smarty_tpl->getValue('pg')).((string)$_smarty_tpl->getValue('extra_url')))), ENT_QUOTES, 'UTF-8');?>
" data-ca-page="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('pg')), ENT_QUOTES, 'UTF-8');?>
" class="cm-history ty-pagination__item <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('ajax_class')), ENT_QUOTES, 'UTF-8');?>
" data-ca-target-id="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('id')), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('pg')), ENT_QUOTES, 'UTF-8');?>
</a>
                <?php } else { ?>
                    <span class="ty-pagination__selected"><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('pg')), ENT_QUOTES, 'UTF-8');?>
</span>
                <?php }?>
            <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
        </div>

        <a data-ca-scroll=".cm-pagination-container" class="ty-pagination__item ty-pagination__btn <?php if ($_smarty_tpl->getValue('pagination')['next_page']) {?>ty-pagination__next cm-history <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('ajax_class')), ENT_QUOTES, 'UTF-8');
}?>" <?php if ($_smarty_tpl->getValue('pagination')['next_page']) {?>href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')(((string)$_smarty_tpl->getValue('c_url'))."&page=".((string)$_smarty_tpl->getValue('pagination')['next_page']).((string)$_smarty_tpl->getValue('extra_url')))), ENT_QUOTES, 'UTF-8');?>
" data-ca-page="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('pagination')['next_page']), ENT_QUOTES, 'UTF-8');?>
" data-ca-target-id="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('id')), ENT_QUOTES, 'UTF-8');?>
"<?php }?>><span class="ty-pagination__text"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("next", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</span>&nbsp;<i class="ty-pagination__text-arrow"></i></a>

        <?php if ($_smarty_tpl->getValue('pagination')['next_range']) {?>
            <a data-ca-scroll=".cm-pagination-container" href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')(((string)$_smarty_tpl->getValue('c_url'))."&page=".((string)$_smarty_tpl->getValue('pagination')['next_range']).((string)$_smarty_tpl->getValue('extra_url')))), ENT_QUOTES, 'UTF-8');?>
" data-ca-page="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('pagination')['next_range']), ENT_QUOTES, 'UTF-8');?>
" class="cm-history ty-pagination__item hidden-phone ty-pagination__range <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('ajax_class')), ENT_QUOTES, 'UTF-8');?>
" data-ca-target-id="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('id')), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('pagination')['next_range_from']), ENT_QUOTES, 'UTF-8');?>
 - <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('pagination')['next_range_to']), ENT_QUOTES, 'UTF-8');?>
</a>
        <?php }?>
    </div>
    <?php if ($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'pagination_open') == "Y") {?>
        </div>
    <?php }?>
    <?php } else { ?>
        <div><a data-ca-scroll=".cm-pagination-container" href="" data-ca-page="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('pg')), ENT_QUOTES, 'UTF-8');?>
" data-ca-target-id="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('id')), ENT_QUOTES, 'UTF-8');?>
" class="hidden"></a></div>
    <?php }
}?>

<?php if ($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'pagination_open') == "Y") {?>
    <!--<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('id')), ENT_QUOTES, 'UTF-8');?>
--></div>
    <?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "pagination_open", null, null);?>N<?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
} elseif ($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'pagination_open') != "Y") {?>
    <?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "pagination_open", null, null);?>Y<?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
}
}
}
}
