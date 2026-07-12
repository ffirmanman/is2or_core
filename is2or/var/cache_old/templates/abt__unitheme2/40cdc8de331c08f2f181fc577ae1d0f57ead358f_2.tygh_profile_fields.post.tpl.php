<?php
/* Smarty version 5.4.3, created on 2026-03-08 19:58:37
  from 'tygh:addons/cities/hooks/profiles/profile_fields.post.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69adaabdcb6e39_33588218',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '40cdc8de331c08f2f181fc577ae1d0f57ead358f' => 
    array (
      0 => 'addons/cities/hooks/profiles/profile_fields.post.tpl',
      1 => 1767831051,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_69adaabdcb6e39_33588218 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/themes/responsive/templates/addons/cities/hooks/profiles';
if ($_smarty_tpl->getValue('runtime')['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "template_content", null, null);
if ($_smarty_tpl->getValue('field')['field_name'] == 'b_city') {?>

            <?php echo '<script'; ?>
  class="cm-ajax-force">
            //<![CDATA[

                    Tygh.$("[name='user_data[b_city]']").autocomplete(<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('ldelim')), ENT_QUOTES, 'UTF-8');?>

                        source: function( request, response ) <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('ldelim')), ENT_QUOTES, 'UTF-8');?>


                            var check_country;
                            var check_state;
                            check_country = $("[name='user_data[b_country]']").length ? $("[name='user_data[b_country]']").val() : '';
                            check_state = $("[name='user_data[b_state]']").length ? $("[name='user_data[b_state]']").val() : '';

                            $.ceAjax('request', fn_url('city.autocomplete_city?q=' + request.term + '&check_state=' + check_state + '&check_country=' + check_country), <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('ldelim')), ENT_QUOTES, 'UTF-8');?>

                                callback: function(data) <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('ldelim')), ENT_QUOTES, 'UTF-8');?>

                                    response(data.autocomplete);
                                <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('rdelim')), ENT_QUOTES, 'UTF-8');?>

                            <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('rdelim')), ENT_QUOTES, 'UTF-8');?>
);
                        <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('rdelim')), ENT_QUOTES, 'UTF-8');?>

                    <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('rdelim')), ENT_QUOTES, 'UTF-8');?>
);

            //]]>
            <?php echo '</script'; ?>
>

<?php }
if ($_smarty_tpl->getValue('field')['field_name'] == 's_city') {?>

            <?php echo '<script'; ?>
  class="cm-ajax-force">
            //<![CDATA[

                    Tygh.$("[name='user_data[s_city]']").autocomplete(<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('ldelim')), ENT_QUOTES, 'UTF-8');?>

                        source: function( request, response ) <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('ldelim')), ENT_QUOTES, 'UTF-8');?>


                            var check_country;
                            var check_state;
                            check_country = $("[name='user_data[s_country]']").length ? $("[name='user_data[s_country]']").val() : '';
                            check_state = $("[name='user_data[s_state]']").length ? $("[name='user_data[s_state]']").val() : '';

                            $.ceAjax('request', fn_url('city.autocomplete_city?q=' + request.term + '&check_state=' + check_state + '&check_country=' + check_country), <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('ldelim')), ENT_QUOTES, 'UTF-8');?>

                                callback: function(data) <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('ldelim')), ENT_QUOTES, 'UTF-8');?>

                                    response(data.autocomplete);
                                <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('rdelim')), ENT_QUOTES, 'UTF-8');?>

                            <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('rdelim')), ENT_QUOTES, 'UTF-8');?>
);
                        <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('rdelim')), ENT_QUOTES, 'UTF-8');?>

                    <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('rdelim')), ENT_QUOTES, 'UTF-8');?>
);

            //]]>
            <?php echo '</script'; ?>
>

<?php }
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->getValue('auth')['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/cities/hooks/profiles/profile_fields.post.tpl" id="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('set_id')->handle(array('name'=>"addons/cities/hooks/profiles/profile_fields.post.tpl"), $_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
if ($_smarty_tpl->getValue('field')['field_name'] == 'b_city') {?>

            <?php echo '<script'; ?>
  class="cm-ajax-force">
            //<![CDATA[

                    Tygh.$("[name='user_data[b_city]']").autocomplete(<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('ldelim')), ENT_QUOTES, 'UTF-8');?>

                        source: function( request, response ) <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('ldelim')), ENT_QUOTES, 'UTF-8');?>


                            var check_country;
                            var check_state;
                            check_country = $("[name='user_data[b_country]']").length ? $("[name='user_data[b_country]']").val() : '';
                            check_state = $("[name='user_data[b_state]']").length ? $("[name='user_data[b_state]']").val() : '';

                            $.ceAjax('request', fn_url('city.autocomplete_city?q=' + request.term + '&check_state=' + check_state + '&check_country=' + check_country), <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('ldelim')), ENT_QUOTES, 'UTF-8');?>

                                callback: function(data) <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('ldelim')), ENT_QUOTES, 'UTF-8');?>

                                    response(data.autocomplete);
                                <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('rdelim')), ENT_QUOTES, 'UTF-8');?>

                            <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('rdelim')), ENT_QUOTES, 'UTF-8');?>
);
                        <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('rdelim')), ENT_QUOTES, 'UTF-8');?>

                    <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('rdelim')), ENT_QUOTES, 'UTF-8');?>
);

            //]]>
            <?php echo '</script'; ?>
>

<?php }
if ($_smarty_tpl->getValue('field')['field_name'] == 's_city') {?>

            <?php echo '<script'; ?>
  class="cm-ajax-force">
            //<![CDATA[

                    Tygh.$("[name='user_data[s_city]']").autocomplete(<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('ldelim')), ENT_QUOTES, 'UTF-8');?>

                        source: function( request, response ) <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('ldelim')), ENT_QUOTES, 'UTF-8');?>


                            var check_country;
                            var check_state;
                            check_country = $("[name='user_data[s_country]']").length ? $("[name='user_data[s_country]']").val() : '';
                            check_state = $("[name='user_data[s_state]']").length ? $("[name='user_data[s_state]']").val() : '';

                            $.ceAjax('request', fn_url('city.autocomplete_city?q=' + request.term + '&check_state=' + check_state + '&check_country=' + check_country), <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('ldelim')), ENT_QUOTES, 'UTF-8');?>

                                callback: function(data) <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('ldelim')), ENT_QUOTES, 'UTF-8');?>

                                    response(data.autocomplete);
                                <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('rdelim')), ENT_QUOTES, 'UTF-8');?>

                            <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('rdelim')), ENT_QUOTES, 'UTF-8');?>
);
                        <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('rdelim')), ENT_QUOTES, 'UTF-8');?>

                    <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('rdelim')), ENT_QUOTES, 'UTF-8');?>
);

            //]]>
            <?php echo '</script'; ?>
>

<?php }
}
}
}
