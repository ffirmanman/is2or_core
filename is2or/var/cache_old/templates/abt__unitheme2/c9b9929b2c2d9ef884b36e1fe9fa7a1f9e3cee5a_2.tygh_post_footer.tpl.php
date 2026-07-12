<?php
/* Smarty version 5.4.3, created on 2026-03-08 19:21:51
  from 'tygh:addons/product_reviews/views/product_reviews/components/post_footer.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69ada21f5fc076_83442065',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c9b9929b2c2d9ef884b36e1fe9fa7a1f9e3cee5a' => 
    array (
      0 => 'addons/product_reviews/views/product_reviews/components/post_footer.tpl',
      1 => 1767831045,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:addons/product_reviews/views/product_reviews/components/post_images.tpl' => 2,
    'tygh:addons/product_reviews/views/product_reviews/components/post_mini_gallery.tpl' => 2,
    'tygh:addons/product_reviews/views/product_reviews/components/post_votes.tpl' => 2,
  ),
))) {
function content_69ada21f5fc076_83442065 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/themes/abt__unitheme2/templates/addons/product_reviews/views/product_reviews/components';
$_smarty_tpl->getSmarty()->getRuntime('TplFunction')->registerTplFunctions($_smarty_tpl, array (
  'copy_link_content' => 
  array (
    'compiled_filepath' => '/var/www/is2or/var/cache/templates/abt__unitheme2/c9b9929b2c2d9ef884b36e1fe9fa7a1f9e3cee5a_2.tygh_post_footer.tpl.php',
    'uid' => 'c9b9929b2c2d9ef884b36e1fe9fa7a1f9e3cee5a',
    'call_name' => 'smarty_template_function_copy_link_content_194942774069ada21f5ba778_36931293',
  ),
));
\Tygh\Languages\Helper::preloadLangVars(array('abt__ut2.product_reviews.found_this_helpfull','abt__ut2.product_reviews.is_helpfull','abt__ut2.addon_social_buttons.share','abt__ut2.addon_social_buttons.share','abt__ut2.product_reviews.found_this_helpfull','abt__ut2.product_reviews.is_helpfull','abt__ut2.addon_social_buttons.share','abt__ut2.addon_social_buttons.share'));
if ($_smarty_tpl->getValue('runtime')['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "template_content", null, null);
if ($_smarty_tpl->getValue('product_review')) {?>
    <footer class="ty-product-review-post-footer">
        <div class="ty-product-review-post-footer__primary">
            <?php if (!$_smarty_tpl->getValue('no_images') && !$_smarty_tpl->getValue('mini_gallery')) {?>
            <?php $_smarty_tpl->renderSubTemplate("tygh:addons/product_reviews/views/product_reviews/components/post_images.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('images'=>$_smarty_tpl->getValue('product_review')['images'],'preview_id'=>$_smarty_tpl->getSmarty()->getModifierCallback('uniqid')($_smarty_tpl->getValue('product')['product_id'])), (int) 0, $_smarty_current_dir);
}?>
            <?php if ($_smarty_tpl->getValue('mini_gallery')) {?>
                <?php $_smarty_tpl->renderSubTemplate("tygh:addons/product_reviews/views/product_reviews/components/post_mini_gallery.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
            <?php }?>
        </div>

        <div class="ty-product-review-post-footer__secondary">
            <?php if ($_smarty_tpl->getValue('most_helpful')) {?>
                <span class="ty-muted ut2-customer_review-useful">
                    <svg class="ty-valign" width="20" height="20" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M15 17.5H6.667V6.667L12.5.833l1.042 1.042c.097.097.177.23.24.396.062.167.093.326.093.479v.292l-.916 3.625H17.5c.445 0 .834.166 1.167.5.333.333.5.722.5 1.166V10a1.694 1.694 0 0 1-.125.625l-2.5 5.875a1.683 1.683 0 0 1-.625.708A1.628 1.628 0 0 1 15 17.5ZM5 6.667V17.5H1.667V6.667H5Z" fill="currentColor"/></svg>
                    &nbsp;<span class="ty-valign"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("abt__ut2.product_reviews.found_this_helpfull", array($_smarty_tpl->getValue('product_review')['helpfulness']['vote_up']), $_smarty_tpl->getSmarty()->getLanguage());?>
 </span>
                </span>
            <?php } else { ?>
                <span class="ty-muted"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("abt__ut2.product_reviews.is_helpfull", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</span>
                <?php $_smarty_tpl->renderSubTemplate("tygh:addons/product_reviews/views/product_reviews/components/post_votes.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product_review_id'=>$_smarty_tpl->getValue('product_review')['product_review_id'],'vote_up'=>$_smarty_tpl->getValue('product_review')['helpfulness']['vote_up'],'vote_down'=>$_smarty_tpl->getValue('product_review')['helpfulness']['vote_down'],'id_postfix'=>$_smarty_tpl->getValue('sw_id_postfix')), (int) 0, $_smarty_current_dir);
?>
            <?php }?>
            

            <?php if ($_smarty_tpl->getValue('settings')['ab__device'] != "mobile") {?>
            <span class="ty-muted cm-combination ty-hand ut2-customer_review-copy-link" id="sw_copy_review_link_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('product_review')['product_review_id']), ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('product_review')['product_id']), ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('sw_id_postfix')), ENT_QUOTES, 'UTF-8');?>
">
                <svg width="20" height="20" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M5 19.17a1.6 1.6 0 0 1-1.18-.5 1.6 1.6 0 0 1-.49-1.17V8.33c0-.45.17-.85.5-1.17A1.6 1.6 0 0 1 5 6.66h2.5v1.67H5v9.17h10V8.33h-2.5V6.67H15c.46 0 .85.16 1.18.49.32.32.49.72.49 1.17v9.17c0 .46-.17.85-.5 1.18a1.6 1.6 0 0 1-1.17.49H5Zm4.17-5.84v-9.3L7.83 5.34 6.67 4.17 10 .83l3.33 3.34-1.16 1.18-1.34-1.33v9.31H9.17Z" fill="currentColor"/></svg>
                <span><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("abt__ut2.addon_social_buttons.share", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</span>
            </span>
            <div id="copy_review_link_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('product_review')['product_review_id']), ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('product_review')['product_id']), ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('sw_id_postfix')), ENT_QUOTES, 'UTF-8');?>
"  class="cm-popup-box ty-dropdown-box__content ut2-customer_review-copy-link-wrap" style="display: none">

                <div class="ut2-popup-box-title"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")('abt__ut2.product_reviews.copy_link', [], $_smarty_tpl->getSmarty()->getLanguage());?>

                    <div class="ut2-btn-close cm-combination"  id="off_copy_review_link_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('product_review')['product_review_id']), ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('product_review')['product_id']), ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('sw_id_postfix')), ENT_QUOTES, 'UTF-8');?>
" ><i class="ut2-icon-baseline-close"></i></div>
                </div>
                <?php $_smarty_tpl->getSmarty()->getRuntime('TplFunction')->callTemplateFunction($_smarty_tpl, 'copy_link_content', array(), true);?>

            </div>
            <?php } else { ?>
                <span class="ut2-customer_review-copy-link cm-dialog-opener ty-muted"
                      data-ca-target-id="copy_review_link_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('product_review')['product_review_id']), ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('product_review')['product_id']), ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('sw_id_postfix')), ENT_QUOTES, 'UTF-8');?>
"
                      data-ca-dialog-title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")('abt__ut2.product_reviews.copy_link', [], $_smarty_tpl->getSmarty()->getLanguage());?>
"
                >
                     <svg width="20" height="20" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M5 19.17a1.6 1.6 0 0 1-1.18-.5 1.6 1.6 0 0 1-.49-1.17V8.33c0-.45.17-.85.5-1.17A1.6 1.6 0 0 1 5 6.66h2.5v1.67H5v9.17h10V8.33h-2.5V6.67H15c.46 0 .85.16 1.18.49.32.32.49.72.49 1.17v9.17c0 .46-.17.85-.5 1.18a1.6 1.6 0 0 1-1.17.49H5Zm4.17-5.84v-9.3L7.83 5.34 6.67 4.17 10 .83l3.33 3.34-1.16 1.18-1.34-1.33v9.31H9.17Z" fill="currentColor"/></svg>
                    <span><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("abt__ut2.addon_social_buttons.share", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</span>
                </span>
                <div id="copy_review_link_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('product_review')['product_review_id']), ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('product_review')['product_id']), ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('sw_id_postfix')), ENT_QUOTES, 'UTF-8');?>
" data-ca-keep-in-place="true" style="display: none">
                <?php $_smarty_tpl->getSmarty()->getRuntime('TplFunction')->callTemplateFunction($_smarty_tpl, 'copy_link_content', array(), true);?>

                </div>
            <?php }?>
                    </div>
    </footer>
<?php }
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->getValue('auth')['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/product_reviews/views/product_reviews/components/post_footer.tpl" id="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('set_id')->handle(array('name'=>"addons/product_reviews/views/product_reviews/components/post_footer.tpl"), $_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
if ($_smarty_tpl->getValue('product_review')) {?>
    <footer class="ty-product-review-post-footer">
        <div class="ty-product-review-post-footer__primary">
            <?php if (!$_smarty_tpl->getValue('no_images') && !$_smarty_tpl->getValue('mini_gallery')) {?>
            <?php $_smarty_tpl->renderSubTemplate("tygh:addons/product_reviews/views/product_reviews/components/post_images.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('images'=>$_smarty_tpl->getValue('product_review')['images'],'preview_id'=>$_smarty_tpl->getSmarty()->getModifierCallback('uniqid')($_smarty_tpl->getValue('product')['product_id'])), (int) 0, $_smarty_current_dir);
}?>
            <?php if ($_smarty_tpl->getValue('mini_gallery')) {?>
                <?php $_smarty_tpl->renderSubTemplate("tygh:addons/product_reviews/views/product_reviews/components/post_mini_gallery.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
            <?php }?>
        </div>

        <div class="ty-product-review-post-footer__secondary">
            <?php if ($_smarty_tpl->getValue('most_helpful')) {?>
                <span class="ty-muted ut2-customer_review-useful">
                    <svg class="ty-valign" width="20" height="20" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M15 17.5H6.667V6.667L12.5.833l1.042 1.042c.097.097.177.23.24.396.062.167.093.326.093.479v.292l-.916 3.625H17.5c.445 0 .834.166 1.167.5.333.333.5.722.5 1.166V10a1.694 1.694 0 0 1-.125.625l-2.5 5.875a1.683 1.683 0 0 1-.625.708A1.628 1.628 0 0 1 15 17.5ZM5 6.667V17.5H1.667V6.667H5Z" fill="currentColor"/></svg>
                    &nbsp;<span class="ty-valign"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("abt__ut2.product_reviews.found_this_helpfull", array($_smarty_tpl->getValue('product_review')['helpfulness']['vote_up']), $_smarty_tpl->getSmarty()->getLanguage());?>
 </span>
                </span>
            <?php } else { ?>
                <span class="ty-muted"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("abt__ut2.product_reviews.is_helpfull", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</span>
                <?php $_smarty_tpl->renderSubTemplate("tygh:addons/product_reviews/views/product_reviews/components/post_votes.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product_review_id'=>$_smarty_tpl->getValue('product_review')['product_review_id'],'vote_up'=>$_smarty_tpl->getValue('product_review')['helpfulness']['vote_up'],'vote_down'=>$_smarty_tpl->getValue('product_review')['helpfulness']['vote_down'],'id_postfix'=>$_smarty_tpl->getValue('sw_id_postfix')), (int) 0, $_smarty_current_dir);
?>
            <?php }?>
            

            <?php if ($_smarty_tpl->getValue('settings')['ab__device'] != "mobile") {?>
            <span class="ty-muted cm-combination ty-hand ut2-customer_review-copy-link" id="sw_copy_review_link_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('product_review')['product_review_id']), ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('product_review')['product_id']), ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('sw_id_postfix')), ENT_QUOTES, 'UTF-8');?>
">
                <svg width="20" height="20" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M5 19.17a1.6 1.6 0 0 1-1.18-.5 1.6 1.6 0 0 1-.49-1.17V8.33c0-.45.17-.85.5-1.17A1.6 1.6 0 0 1 5 6.66h2.5v1.67H5v9.17h10V8.33h-2.5V6.67H15c.46 0 .85.16 1.18.49.32.32.49.72.49 1.17v9.17c0 .46-.17.85-.5 1.18a1.6 1.6 0 0 1-1.17.49H5Zm4.17-5.84v-9.3L7.83 5.34 6.67 4.17 10 .83l3.33 3.34-1.16 1.18-1.34-1.33v9.31H9.17Z" fill="currentColor"/></svg>
                <span><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("abt__ut2.addon_social_buttons.share", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</span>
            </span>
            <div id="copy_review_link_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('product_review')['product_review_id']), ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('product_review')['product_id']), ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('sw_id_postfix')), ENT_QUOTES, 'UTF-8');?>
"  class="cm-popup-box ty-dropdown-box__content ut2-customer_review-copy-link-wrap" style="display: none">

                <div class="ut2-popup-box-title"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")('abt__ut2.product_reviews.copy_link', [], $_smarty_tpl->getSmarty()->getLanguage());?>

                    <div class="ut2-btn-close cm-combination"  id="off_copy_review_link_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('product_review')['product_review_id']), ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('product_review')['product_id']), ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('sw_id_postfix')), ENT_QUOTES, 'UTF-8');?>
" ><i class="ut2-icon-baseline-close"></i></div>
                </div>
                <?php $_smarty_tpl->getSmarty()->getRuntime('TplFunction')->callTemplateFunction($_smarty_tpl, 'copy_link_content', array(), true);?>

            </div>
            <?php } else { ?>
                <span class="ut2-customer_review-copy-link cm-dialog-opener ty-muted"
                      data-ca-target-id="copy_review_link_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('product_review')['product_review_id']), ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('product_review')['product_id']), ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('sw_id_postfix')), ENT_QUOTES, 'UTF-8');?>
"
                      data-ca-dialog-title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")('abt__ut2.product_reviews.copy_link', [], $_smarty_tpl->getSmarty()->getLanguage());?>
"
                >
                     <svg width="20" height="20" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M5 19.17a1.6 1.6 0 0 1-1.18-.5 1.6 1.6 0 0 1-.49-1.17V8.33c0-.45.17-.85.5-1.17A1.6 1.6 0 0 1 5 6.66h2.5v1.67H5v9.17h10V8.33h-2.5V6.67H15c.46 0 .85.16 1.18.49.32.32.49.72.49 1.17v9.17c0 .46-.17.85-.5 1.18a1.6 1.6 0 0 1-1.17.49H5Zm4.17-5.84v-9.3L7.83 5.34 6.67 4.17 10 .83l3.33 3.34-1.16 1.18-1.34-1.33v9.31H9.17Z" fill="currentColor"/></svg>
                    <span><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("abt__ut2.addon_social_buttons.share", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</span>
                </span>
                <div id="copy_review_link_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('product_review')['product_review_id']), ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('product_review')['product_id']), ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('sw_id_postfix')), ENT_QUOTES, 'UTF-8');?>
" data-ca-keep-in-place="true" style="display: none">
                <?php $_smarty_tpl->getSmarty()->getRuntime('TplFunction')->callTemplateFunction($_smarty_tpl, 'copy_link_content', array(), true);?>

                </div>
            <?php }?>
                    </div>
    </footer>
<?php }
}
}
\Tygh\Languages\Helper::preloadLangVars(array('copy','copy'));
/* smarty_template_function_copy_link_content_194942774069ada21f5ba778_36931293 */
if (!function_exists('smarty_template_function_copy_link_content_194942774069ada21f5ba778_36931293')) {
function smarty_template_function_copy_link_content_194942774069ada21f5ba778_36931293(\Smarty\Template $_smarty_tpl,$params) {
$_smarty_current_dir = '/var/www/is2or/design/themes/abt__unitheme2/templates/addons/product_reviews/views/product_reviews/components';
$params = array_merge(array('name'=>"copy_link_content"), $params);
foreach ($params as $key => $value) {
$_smarty_tpl->assign($key, $value);
}
?>

                <?php $_smarty_tpl->assign('hash', "#product_review_".((string)$_smarty_tpl->getValue('product_review')['product_review_id'])."_".((string)$_smarty_tpl->getValue('product_review')['product_id']), false, NULL);?>
                <?php $_smarty_tpl->assign('review_link', ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')("products.view&product_id=".((string)$_smarty_tpl->getValue('product_review')['product_id']))).($_smarty_tpl->getValue('hash')), false, NULL);?>
                <div class="ut2-popup-box-copy-link-content">
                    <input type="text" value="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('review_link')), ENT_QUOTES, 'UTF-8');?>
" class="ty-mb-s ty-block">
                    <button type="button" class="ty-btn ty-btn__outline  ty-product-review-copy-link" data-link="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('review_link')), ENT_QUOTES, 'UTF-8');?>
"><i class="ut2-icon-copy"></i>&nbsp;<?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("copy", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</button>
                </div>
            <?php
}}
/*/ smarty_template_function_copy_link_content_194942774069ada21f5ba778_36931293 */
/* smarty_template_function_copy_link_content_194942774069ada21f5ba778_36931293 */
if (!function_exists('smarty_template_function_copy_link_content_194942774069ada21f5ba778_36931293')) {
function smarty_template_function_copy_link_content_194942774069ada21f5ba778_36931293(\Smarty\Template $_smarty_tpl,$params) {
$_smarty_current_dir = '/var/www/is2or/design/themes/abt__unitheme2/templates/addons/product_reviews/views/product_reviews/components';
$params = array_merge(array('name'=>"copy_link_content"), $params);
foreach ($params as $key => $value) {
$_smarty_tpl->assign($key, $value);
}
?>

                <?php $_smarty_tpl->assign('hash', "#product_review_".((string)$_smarty_tpl->getValue('product_review')['product_review_id'])."_".((string)$_smarty_tpl->getValue('product_review')['product_id']), false, NULL);?>
                <?php $_smarty_tpl->assign('review_link', ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')("products.view&product_id=".((string)$_smarty_tpl->getValue('product_review')['product_id']))).($_smarty_tpl->getValue('hash')), false, NULL);?>
                <div class="ut2-popup-box-copy-link-content">
                    <input type="text" value="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('review_link')), ENT_QUOTES, 'UTF-8');?>
" class="ty-mb-s ty-block">
                    <button type="button" class="ty-btn ty-btn__outline  ty-product-review-copy-link" data-link="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('review_link')), ENT_QUOTES, 'UTF-8');?>
"><i class="ut2-icon-copy"></i>&nbsp;<?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("copy", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</button>
                </div>
            <?php
}}
/*/ smarty_template_function_copy_link_content_194942774069ada21f5ba778_36931293 */
}
