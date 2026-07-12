<?php
/* Smarty version 5.4.3, created on 2026-05-24 21:09:21
  from 'tygh:addons/csc_live_search/hooks/index/styles.post.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_6a133ed16ee287_12072001',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9c81baf4ec1b7dc9d703a4810d2ae7d70af563ed' => 
    array (
      0 => 'addons/csc_live_search/hooks/index/styles.post.tpl',
      1 => 1767831043,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_6a133ed16ee287_12072001 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/backend/templates/addons/csc_live_search/hooks/index';
echo $_smarty_tpl->getSmarty()->getFunctionHandler('style')->handle(array('src'=>"addons/csc_live_search/styles.less"), $_smarty_tpl);?>

<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('style')->handle(array('src'=>"addons/csc_live_search/synonyms.less"), $_smarty_tpl);?>

<?php if ($_smarty_tpl->getValue('runtime')['controller'] == "csc_live_search" && $_smarty_tpl->getValue('runtime')['mode'] == "styles") {
$_smarty_tpl->assign('one_of_ten', array('#595154','#50AFD6','#47ADA5','#5A59C4','#b9032f','#fd5461','#d81f83','#7C94C0','#8DE0C6','#FC918B'), false, NULL);
$_smarty_tpl->assign('one_of_ten_key', $_smarty_tpl->getSmarty()->getModifierCallback('rand')(0,9), false, NULL);?>
	<style>
        @cls_base: <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('options')['base_text_color']), ENT_QUOTES, 'UTF-8');?>
;
        @cls_background: <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('options')['active_elements_background']), ENT_QUOTES, 'UTF-8');?>
;
        @cls_link: <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('options')['link_color']), ENT_QUOTES, 'UTF-8');?>
;
        @cls_tabs: <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('options')['active_elements_color']), ENT_QUOTES, 'UTF-8');?>
;
        @cls_radius: <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('options')['border_radius']), ENT_QUOTES, 'UTF-8');?>
px;
		<?php if ($_smarty_tpl->getValue('options')['color_type'] == "M") {?>@cls_category_color: <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('one_of_ten')[$_smarty_tpl->getValue('one_of_ten_key')]), ENT_QUOTES, 'UTF-8');?>
;
		<?php } elseif ($_smarty_tpl->getValue('options')['color_type'] == "A") {?>@cls_category_color: #<?php echo htmlspecialchars((string) (substr((string) $_smarty_tpl->getSmarty()->getModifierCallback('md5')($_smarty_tpl->getSmarty()->getModifierCallback('rand')(1,200)), (int) 0, (int) 6)), ENT_QUOTES, 'UTF-8');?>
;
		<?php } elseif ($_smarty_tpl->getValue('options')['category_e'] && $_smarty_tpl->getValue('options')['color_type'] == "E") {?>@cls_category_color: <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('options')['category_e']), ENT_QUOTES, 'UTF-8');?>
;<?php }?>
    </style>
    
    
    <style>
        <?php if ($_REQUEST['elm_base_text_color']) {?>@cls_base: #<?php echo htmlspecialchars((string) ($_REQUEST['elm_base_text_color']), ENT_QUOTES, 'UTF-8');?>
;<?php }?>
        <?php if ($_REQUEST['elm_active_elements_background']) {?>@cls_background: #<?php echo htmlspecialchars((string) ($_REQUEST['elm_active_elements_background']), ENT_QUOTES, 'UTF-8');?>
;<?php }?>
        <?php if ($_REQUEST['elm_link_color']) {?>@cls_link: #<?php echo htmlspecialchars((string) ($_REQUEST['elm_link_color']), ENT_QUOTES, 'UTF-8');?>
;<?php }?>
        <?php if ($_REQUEST['elm_active_elements_color']) {?>@cls_tabs: #<?php echo htmlspecialchars((string) ($_REQUEST['elm_active_elements_color']), ENT_QUOTES, 'UTF-8');?>
;<?php }?>
        <?php if ($_REQUEST['elm_border_radius']) {?>@cls_radius: <?php echo htmlspecialchars((string) ($_REQUEST['elm_border_radius']), ENT_QUOTES, 'UTF-8');?>
px;<?php }?>
		<?php if ($_REQUEST['elm_color_type'] == "M") {?>@cls_category_color: <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('one_of_ten')[$_smarty_tpl->getValue('one_of_ten_key')]), ENT_QUOTES, 'UTF-8');?>
;
		<?php } elseif ($_REQUEST['elm_color_type'] == "A") {?>@cls_category_color: #<?php echo htmlspecialchars((string) (substr((string) $_smarty_tpl->getSmarty()->getModifierCallback('md5')($_smarty_tpl->getSmarty()->getModifierCallback('rand')(1,200)), (int) 0, (int) 6)), ENT_QUOTES, 'UTF-8');?>
;
		<?php } elseif ($_REQUEST['elm_color_type'] == "E" && $_REQUEST['elm_category_e']) {?>@cls_category_color: #<?php echo htmlspecialchars((string) ($_REQUEST['elm_category_e']), ENT_QUOTES, 'UTF-8');?>
;
		<?php } elseif ($_REQUEST['elm_color_type'] == "E") {?>@cls_category_color: #50AFD6;<?php }?>
		<?php if ($_REQUEST['elm_show_category_gradient'] == "Y" || ($_smarty_tpl->getValue('options')['show_category_gradient'] == "Y" && !$_REQUEST['elm_show_category_gradient'])) {?>@cls_category: linear-gradient(to top, @cls_category_color, #fff 200%);
		<?php } else { ?>
			@cls_category: linear-gradient(@cls_category_color, @cls_category_color);
		<?php }?>
		
		<?php if ($_REQUEST['elm_show_category'] == "Y") {?>.clsLabel{ display: flex !important;}<?php }?>
		<?php if ($_REQUEST['elm_show_category'] == "N") {?>.clsLabel{ display: none !important;}<?php }?>		
		
		<?php if ($_REQUEST['elm_show_price'] == "D") {?>.clsPrices{ display: none !important;}<?php }?>
		<?php if ($_REQUEST['elm_show_price'] && $_REQUEST['elm_show_price'] != "D") {?>.clsPrices{ display: block !important;}<?php }?>
		
		<?php if ($_REQUEST['elm_show_cart'] == "D") {?>a[type="cartAdd"]{ display: none !important;}<?php }?>
		<?php if ($_REQUEST['elm_show_cart'] && $_REQUEST['elm_show_cart'] != "D") {?>a[type="cartAdd"]{ display: inline !important;}<?php }?>
		
		<?php if ($_REQUEST['elm_show_product_code'] == "Y") {?>.clsArt{ display: block !important;}<?php }?>
		<?php if ($_REQUEST['elm_show_product_code'] == "N") {?>.clsArt{ display: none !important;}<?php }?>
		
		<?php if ($_REQUEST['elm_show_wish'] == "Y") {?>a[type="wishAdd"]{ display: inline !important;}<?php }?>
		<?php if ($_REQUEST['elm_show_wish'] == "N") {?>a[type="wishAdd"]{ display: none !important;}<?php }?>
		
		<?php if ($_REQUEST['elm_show_compare'] == "Y") {?>a[type="compAdd"]{ display: inline !important;}<?php }?>
		<?php if ($_REQUEST['elm_show_compare'] == "N") {?>a[type="compAdd"]{ display: none !important;}<?php }?>	
		
		<?php if ($_REQUEST['elm_show_quick_view'] == "Y") {?>a[type="viewAdd"]{ display: inline !important;}<?php }?>
		<?php if ($_REQUEST['elm_show_quick_view'] == "N") {?>a[type="viewAdd"]{ display: none !important;}<?php }?>	
		
					
		
		
		
		
		
    </style>
    <?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('style')->handle(array('src'=>"../../themes/responsive/css/addons/csc_live_search/styles.less"), $_smarty_tpl);?>

    <?php if ($_REQUEST['elm_theme']) {?>
    	<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('style')->handle(array('src'=>"../../themes/responsive/css/addons/".((string)$_REQUEST['elm_theme'])), $_smarty_tpl);?>

    <?php } else { ?>
    	<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('style')->handle(array('src'=>"../../themes/responsive/css/addons/".((string)$_smarty_tpl->getValue('options')['theme'])), $_smarty_tpl);?>

    <?php }?>
	<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('style')->handle(array('src'=>"addons/csc_live_search/styles_front_changes.less"), $_smarty_tpl);?>

<?php }
}
}
