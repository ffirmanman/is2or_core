<?php
/* Smarty version 5.4.3, created on 2026-03-10 08:45:22
  from 'tygh:addons/abt__unitheme2/blocks/abt__ut2_advanced_subcategories_menu.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69afaff213a820_04252815',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '015c28a4b723ff2a27fcd4f7a7be190957042a6f' => 
    array (
      0 => 'addons/abt__unitheme2/blocks/abt__ut2_advanced_subcategories_menu.tpl',
      1 => 1767831045,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:addons/abt__unitheme2/blocks/components/abt__ut2_advanced_subcategories_menu_level.tpl' => 2,
  ),
))) {
function content_69afaff213a820_04252815 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/themes/abt__unitheme2/templates/addons/abt__unitheme2/blocks';
if ($_smarty_tpl->getValue('runtime')['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "template_content", null, null);
if ($_smarty_tpl->getValue('abt__ut2_subcategories')['category_tree']) {?>
    <?php $_smarty_tpl->assign('parent', true, false, NULL);?>

    <div class="ut2-subcategories">
        <?php $_smarty_tpl->renderSubTemplate("tygh:addons/abt__unitheme2/blocks/components/abt__ut2_advanced_subcategories_menu_level.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('categories'=>$_smarty_tpl->getValue('abt__ut2_subcategories')['category_tree'],'level'=>$_smarty_tpl->getValue('abt__ut2_subcategories')['first_level']+1,'parent'=>$_smarty_tpl->getValue('parent')), (int) 0, $_smarty_current_dir);
?>
    </div>
<?php }?>

<?php echo '<script'; ?>
>
    (function(_, $) {
        $(document).ready(function () {
            $(".ut2-more-btn").on("click", function () {
                const $this = $(this);
                const action = $this.data("action");
                const $hiddenItems = $this.siblings(".hidden-item");

                if (action === "show") {
                    $hiddenItems.removeClass("hidden");
                    $this.hide();
                    $this.siblings('[data-action="hide"]').show();
                } else if (action === "hide") {
                    $hiddenItems.addClass("hidden");
                    $this.hide();
                    $this.siblings('[data-action="show"]').show();
                }
            });
        });
    }(Tygh, Tygh.$));
<?php echo '</script'; ?>
>

<?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->getValue('auth')['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/abt__unitheme2/blocks/abt__ut2_advanced_subcategories_menu.tpl" id="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('set_id')->handle(array('name'=>"addons/abt__unitheme2/blocks/abt__ut2_advanced_subcategories_menu.tpl"), $_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
if ($_smarty_tpl->getValue('abt__ut2_subcategories')['category_tree']) {?>
    <?php $_smarty_tpl->assign('parent', true, false, NULL);?>

    <div class="ut2-subcategories">
        <?php $_smarty_tpl->renderSubTemplate("tygh:addons/abt__unitheme2/blocks/components/abt__ut2_advanced_subcategories_menu_level.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('categories'=>$_smarty_tpl->getValue('abt__ut2_subcategories')['category_tree'],'level'=>$_smarty_tpl->getValue('abt__ut2_subcategories')['first_level']+1,'parent'=>$_smarty_tpl->getValue('parent')), (int) 0, $_smarty_current_dir);
?>
    </div>
<?php }?>

<?php echo '<script'; ?>
>
    (function(_, $) {
        $(document).ready(function () {
            $(".ut2-more-btn").on("click", function () {
                const $this = $(this);
                const action = $this.data("action");
                const $hiddenItems = $this.siblings(".hidden-item");

                if (action === "show") {
                    $hiddenItems.removeClass("hidden");
                    $this.hide();
                    $this.siblings('[data-action="hide"]').show();
                } else if (action === "hide") {
                    $hiddenItems.addClass("hidden");
                    $this.hide();
                    $this.siblings('[data-action="show"]').show();
                }
            });
        });
    }(Tygh, Tygh.$));
<?php echo '</script'; ?>
>

<?php }
}
}
