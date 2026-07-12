<?php
/* Smarty version 5.4.3, created on 2026-03-10 08:44:09
  from 'tygh:views/block_manager/render/location.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69afafa91dd824_03318370',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8b18d3a3521dcf153e5e4c13afd8c24647e41094' => 
    array (
      0 => 'views/block_manager/render/location.tpl',
      1 => 1767831045,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_69afafa91dd824_03318370 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/themes/abt__unitheme2/templates/views/block_manager/render';
\Tygh\Languages\Helper::preloadLangVars(array('choose_your_country'));
?>

<?php if ($_smarty_tpl->getValue('containers')['top_panel']) {?>
<div class="tygh-top-panel clearfix">
    <?php echo $_smarty_tpl->getValue('containers')['top_panel'];?>

</div>
<?php }?>

<?php if ($_smarty_tpl->getValue('containers')['header']) {?>
<div class="tygh-header <?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'container_user_class_header')), ENT_QUOTES, 'UTF-8');?>
 clearfix">
    <?php echo $_smarty_tpl->getValue('containers')['header'];?>

</div>
<?php }?>

<?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"block_manager:frontend_location_content"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
if ($_smarty_tpl->getValue('containers')['content']) {?>
    <div class="tygh-content clearfix">
        <?php echo $_smarty_tpl->getValue('containers')['content'];?>

    </div>
<?php }
$_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"block_manager:frontend_location_content"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>

<?php if ($_smarty_tpl->getValue('containers')['footer']) {?>
<div class="tygh-footer clearfix" id="tygh_footer">
    <?php echo $_smarty_tpl->getValue('containers')['footer'];?>

</div>
<?php }?>

<?php if ($_smarty_tpl->getSmarty()->getModifierCallback('fn_allowed_for')("ULTIMATE")) {?>
        <?php if ($_smarty_tpl->getValue('show_entry_page')) {?>
        <div id="entry_page"></div>
            <?php echo '<script'; ?>
>
                $('#entry_page').ceDialog('open', <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('ldelim')), ENT_QUOTES, 'UTF-8');?>
href: fn_url('companies.entry_page'), resizable: false, title: '<?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("choose_your_country", [], $_smarty_tpl->getSmarty()->getLanguage());?>
', width: 325, height: 420, dialogClass: 'entry-page'<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('rdelim')), ENT_QUOTES, 'UTF-8');?>
);
            <?php echo '</script'; ?>
>
    <?php }
}?>

<?php if ($_smarty_tpl->getSmarty()->getModifierCallback('fn_check_meta_redirect')($_REQUEST['meta_redirect_url'])) {?>
    <meta http-equiv="refresh" content="1;url=<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')($_smarty_tpl->getSmarty()->getModifierCallback('fn_check_meta_redirect')($_REQUEST['meta_redirect_url']))), ENT_QUOTES, 'UTF-8');?>
" />
<?php }
}
}
