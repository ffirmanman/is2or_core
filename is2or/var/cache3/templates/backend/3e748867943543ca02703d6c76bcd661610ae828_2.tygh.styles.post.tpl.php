<?php
/* Smarty version 4.3.0, created on 2025-05-22 19:28:26
  from '/srv/projects/is2or.com/public_html/design/backend/templates/addons/csc_live_search/hooks/index/styles.post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_682fdd4a290521_47644954',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3e748867943543ca02703d6c76bcd661610ae828' => 
    array (
      0 => '/srv/projects/is2or.com/public_html/design/backend/templates/addons/csc_live_search/hooks/index/styles.post.tpl',
      1 => 1741593135,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_682fdd4a290521_47644954 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/function.style.php','function'=>'smarty_function_style',),));
echo smarty_function_style(array('src'=>"addons/csc_live_search/styles.less"),$_smarty_tpl);?>

<?php echo smarty_function_style(array('src'=>"addons/csc_live_search/synonyms.less"),$_smarty_tpl);?>

<?php if ($_smarty_tpl->tpl_vars['runtime']->value['controller'] == "csc_live_search" && $_smarty_tpl->tpl_vars['runtime']->value['mode'] == "styles") {
$_smarty_tpl->_assignInScope('one_of_ten', array('#595154','#50AFD6','#47ADA5','#5A59C4','#b9032f','#fd5461','#d81f83','#7C94C0','#8DE0C6','#FC918B'));
$_smarty_tpl->_assignInScope('one_of_ten_key', rand(0,9));?>
	<style>
        @cls_base: <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['options']->value['base_text_color'], ENT_QUOTES, 'UTF-8');?>
;
        @cls_background: <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['options']->value['active_elements_background'], ENT_QUOTES, 'UTF-8');?>
;
        @cls_link: <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['options']->value['link_color'], ENT_QUOTES, 'UTF-8');?>
;
        @cls_tabs: <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['options']->value['active_elements_color'], ENT_QUOTES, 'UTF-8');?>
;
        @cls_radius: <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['options']->value['border_radius'], ENT_QUOTES, 'UTF-8');?>
px;
		<?php if ($_smarty_tpl->tpl_vars['options']->value['color_type'] == "M") {?>@cls_category_color: <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['one_of_ten']->value[$_smarty_tpl->tpl_vars['one_of_ten_key']->value], ENT_QUOTES, 'UTF-8');?>
;
		<?php } elseif ($_smarty_tpl->tpl_vars['options']->value['color_type'] == "A") {?>@cls_category_color: #<?php echo htmlspecialchars((string) substr(md5(rand(1,200)),0,6), ENT_QUOTES, 'UTF-8');?>
;
		<?php } elseif ($_smarty_tpl->tpl_vars['options']->value['category_e'] && $_smarty_tpl->tpl_vars['options']->value['color_type'] == "E") {?>@cls_category_color: <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['options']->value['category_e'], ENT_QUOTES, 'UTF-8');?>
;<?php }?>
    </style>
    
    
    <style>
        <?php if ($_REQUEST['elm_base_text_color']) {?>@cls_base: #<?php echo htmlspecialchars((string) $_REQUEST['elm_base_text_color'], ENT_QUOTES, 'UTF-8');?>
;<?php }?>
        <?php if ($_REQUEST['elm_active_elements_background']) {?>@cls_background: #<?php echo htmlspecialchars((string) $_REQUEST['elm_active_elements_background'], ENT_QUOTES, 'UTF-8');?>
;<?php }?>
        <?php if ($_REQUEST['elm_link_color']) {?>@cls_link: #<?php echo htmlspecialchars((string) $_REQUEST['elm_link_color'], ENT_QUOTES, 'UTF-8');?>
;<?php }?>
        <?php if ($_REQUEST['elm_active_elements_color']) {?>@cls_tabs: #<?php echo htmlspecialchars((string) $_REQUEST['elm_active_elements_color'], ENT_QUOTES, 'UTF-8');?>
;<?php }?>
        <?php if ($_REQUEST['elm_border_radius']) {?>@cls_radius: <?php echo htmlspecialchars((string) $_REQUEST['elm_border_radius'], ENT_QUOTES, 'UTF-8');?>
px;<?php }?>
		<?php if ($_REQUEST['elm_color_type'] == "M") {?>@cls_category_color: <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['one_of_ten']->value[$_smarty_tpl->tpl_vars['one_of_ten_key']->value], ENT_QUOTES, 'UTF-8');?>
;
		<?php } elseif ($_REQUEST['elm_color_type'] == "A") {?>@cls_category_color: #<?php echo htmlspecialchars((string) substr(md5(rand(1,200)),0,6), ENT_QUOTES, 'UTF-8');?>
;
		<?php } elseif ($_REQUEST['elm_color_type'] == "E" && $_REQUEST['elm_category_e']) {?>@cls_category_color: #<?php echo htmlspecialchars((string) $_REQUEST['elm_category_e'], ENT_QUOTES, 'UTF-8');?>
;
		<?php } elseif ($_REQUEST['elm_color_type'] == "E") {?>@cls_category_color: #50AFD6;<?php }?>
		<?php if ($_REQUEST['elm_show_category_gradient'] == "Y" || ($_smarty_tpl->tpl_vars['options']->value['show_category_gradient'] == "Y" && !$_REQUEST['elm_show_category_gradient'])) {?>@cls_category: linear-gradient(to top, @cls_category_color, #fff 200%);
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
    <?php echo smarty_function_style(array('src'=>"../../themes/responsive/css/addons/csc_live_search/styles.less"),$_smarty_tpl);?>

    <?php if ($_REQUEST['elm_theme']) {?>
    	<?php echo smarty_function_style(array('src'=>"../../themes/responsive/css/addons/".((string)$_REQUEST['elm_theme'])),$_smarty_tpl);?>

    <?php } else { ?>
    	<?php echo smarty_function_style(array('src'=>"../../themes/responsive/css/addons/".((string)$_smarty_tpl->tpl_vars['options']->value['theme'])),$_smarty_tpl);?>

    <?php }?>
	<?php echo smarty_function_style(array('src'=>"addons/csc_live_search/styles_front_changes.less"),$_smarty_tpl);?>

<?php }
}
}
