<?php
/* Smarty version 5.4.3, created on 2026-03-09 07:02:38
  from 'tygh:addons/onboarding_guide/views/onboarding_guide/onboarding_guide.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69ae465eb3f515_12910135',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6567b94a3c26b98b3ebb6523d066b7bcdd580795' => 
    array (
      0 => 'addons/onboarding_guide/views/onboarding_guide/onboarding_guide.tpl',
      1 => 1767831039,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:addons/onboarding_guide/components/progress.tpl' => 1,
    'tygh:addons/onboarding_guide/components/step.tpl' => 1,
  ),
))) {
function content_69ae465eb3f515_12910135 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/backend/templates/addons/onboarding_guide/views/onboarding_guide';
\Tygh\Languages\Helper::preloadLangVars(array('onboarding_guide.demo_guide_title','onboarding_guide.demo_guide_description','onboarding_guide.sb_guide_title','onboarding_guide.guide_title','onboarding_guide.completed_steps_progress','onboarding_guide.step_complete','onboarding_guide.step_close'));
if ($_smarty_tpl->getValue('onboarding_guide_steps')) {?>

<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('script')->handle(array('src'=>"js/addons/onboarding_guide/core.js"), $_smarty_tpl);?>


<section class="onboarding_section" id="onboarding-guide">
    <div class="onboarding_section__container">
        <?php if ((!( !$_smarty_tpl->hasVariable('onboarding_guide_is_demo') || empty($_smarty_tpl->getValue('onboarding_guide_is_demo'))))) {?>
            <h3 class="onboarding_section__title">
                <?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("onboarding_guide.demo_guide_title", [], $_smarty_tpl->getSmarty()->getLanguage());?>

            </h3>
            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("onboarding_guide.demo_guide_description", [], $_smarty_tpl->getSmarty()->getLanguage());?>

        <?php } else { ?>
            <h3 class="onboarding_section__title">
                <?php if ((!( !$_smarty_tpl->hasVariable('onboarding_guide_is_store_builder') || empty($_smarty_tpl->getValue('onboarding_guide_is_store_builder'))))) {?>
                    <?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("onboarding_guide.sb_guide_title", [], $_smarty_tpl->getSmarty()->getLanguage());?>

                <?php } else { ?>
                    <?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("onboarding_guide.guide_title", [], $_smarty_tpl->getSmarty()->getLanguage());?>

                <?php }?>
            </h3>
        <?php }?>
        <?php $_smarty_tpl->renderSubTemplate("tygh:addons/onboarding_guide/components/progress.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
        <div class="onboarding_accordion__content">
            <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('onboarding_guide_steps'), 'step', false, 'step_id');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('step_id')->value => $_smarty_tpl->getVariable('step')->value) {
$foreach0DoElse = false;
?>
                <?php $_smarty_tpl->renderSubTemplate("tygh:addons/onboarding_guide/components/step.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('step_id'=>$_smarty_tpl->getValue('step_id'),'step'=>$_smarty_tpl->getValue('step')), (int) 0, $_smarty_current_dir);
?>
            <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
        </div>
    </div>
</section>
<?php }?>

<?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('inline_script')) {
throw new \Smarty\Exception('block tag \'inline_script\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('inline_script')->handle(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
echo '<script'; ?>
>
    (function (_, $) {
        _.tr({
            'onboarding_guide.completed_steps_progress': '<?php echo strtr((string)$_smarty_tpl->getSmarty()->getModifierCallback("__")("onboarding_guide.completed_steps_progress", [], $_smarty_tpl->getSmarty()->getLanguage()), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
						"\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
						"`" => "\\`", "\${" => "\\\$\{"));?>
',
            'onboarding_guide.step_complete': '<?php echo strtr((string)$_smarty_tpl->getSmarty()->getModifierCallback("__")("onboarding_guide.step_complete", [], $_smarty_tpl->getSmarty()->getLanguage()), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
						"\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
						"`" => "\\`", "\${" => "\\\$\{"));?>
',
            'onboarding_guide.step_close': '<?php echo strtr((string)$_smarty_tpl->getSmarty()->getModifierCallback("__")("onboarding_guide.step_close", [], $_smarty_tpl->getSmarty()->getLanguage()), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
						"\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
						"`" => "\\`", "\${" => "\\\$\{"));?>
',
        })
    })(Tygh, Tygh.$);
<?php echo '</script'; ?>
><?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('inline_script')->handle(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
}
}
