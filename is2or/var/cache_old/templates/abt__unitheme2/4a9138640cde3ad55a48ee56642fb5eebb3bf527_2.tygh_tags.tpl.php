<?php
/* Smarty version 5.4.3, created on 2026-03-08 19:21:02
  from 'tygh:addons/tags/views/tags/components/tags.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69ada1eea7f319_89678582',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4a9138640cde3ad55a48ee56642fb5eebb3bf527' => 
    array (
      0 => 'addons/tags/views/tags/components/tags.tpl',
      1 => 1767831051,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_69ada1eea7f319_89678582 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/themes/responsive/templates/addons/tags/views/tags/components';
if ($_smarty_tpl->getValue('runtime')['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "template_content", null, null);
if ($_smarty_tpl->getValue('object')['tags']) {?>
<div id="content_tags_tab">
    <div class="ty-control-group">
        <ul class="ty-tags-list clearfix">
            <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('object')['tags'], 'tag', false, NULL, 'tags', array (
));
$foreach70DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('tag')->value) {
$foreach70DoElse = false;
?>
                <?php $_smarty_tpl->assign('tag_name', rawurlencode((string)$_smarty_tpl->getValue('tag')['tag']), false, NULL);?>
                <li class="ty-tags-list__item">
                    <a class="ty-tags-list__a" href="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('fn_url')("tags.view?tag=".((string)$_smarty_tpl->getValue('tag_name')));?>
">
                        <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('tag')['tag']), ENT_QUOTES, 'UTF-8');?>

                    </a>
                </li>
            <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
        </ul>
    </div>  
</div>
<?php }
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->getValue('auth')['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/tags/views/tags/components/tags.tpl" id="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('set_id')->handle(array('name'=>"addons/tags/views/tags/components/tags.tpl"), $_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
if ($_smarty_tpl->getValue('object')['tags']) {?>
<div id="content_tags_tab">
    <div class="ty-control-group">
        <ul class="ty-tags-list clearfix">
            <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('object')['tags'], 'tag', false, NULL, 'tags', array (
));
$foreach71DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('tag')->value) {
$foreach71DoElse = false;
?>
                <?php $_smarty_tpl->assign('tag_name', rawurlencode((string)$_smarty_tpl->getValue('tag')['tag']), false, NULL);?>
                <li class="ty-tags-list__item">
                    <a class="ty-tags-list__a" href="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('fn_url')("tags.view?tag=".((string)$_smarty_tpl->getValue('tag_name')));?>
">
                        <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('tag')['tag']), ENT_QUOTES, 'UTF-8');?>

                    </a>
                </li>
            <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
        </ul>
    </div>  
</div>
<?php }
}
}
}
