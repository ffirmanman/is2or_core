<?php
/* Smarty version 4.3.0, created on 2025-05-26 04:37:36
  from '/srv/projects/is2or.com/public_html/design/themes/responsive/templates/addons/cities/hooks/profiles/profile_fields.post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_68345280bcd943_99538888',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'abf0a39e0f046e426bdf37d366902fee4ae19b91' => 
    array (
      0 => '/srv/projects/is2or.com/public_html/design/themes/responsive/templates/addons/cities/hooks/profiles/profile_fields.post.tpl',
      1 => 1747641041,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_68345280bcd943_99538888 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/modifier.trim.php','function'=>'smarty_modifier_trim',),1=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);
if ($_smarty_tpl->tpl_vars['field']->value['field_name'] == 'b_city') {?>

            <?php echo '<script'; ?>
  class="cm-ajax-force">
            //<![CDATA[

                    Tygh.$("[name='user_data[b_city]']").autocomplete(<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['ldelim']->value, ENT_QUOTES, 'UTF-8');?>

                        source: function( request, response ) <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['ldelim']->value, ENT_QUOTES, 'UTF-8');?>


                            var check_country;
                            var check_state;
                            check_country = $("[name='user_data[b_country]']").length ? $("[name='user_data[b_country]']").val() : '';
                            check_state = $("[name='user_data[b_state]']").length ? $("[name='user_data[b_state]']").val() : '';

                            $.ceAjax('request', fn_url('city.autocomplete_city?q=' + request.term + '&check_state=' + check_state + '&check_country=' + check_country), <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['ldelim']->value, ENT_QUOTES, 'UTF-8');?>

                                callback: function(data) <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['ldelim']->value, ENT_QUOTES, 'UTF-8');?>

                                    response(data.autocomplete);
                                <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['rdelim']->value, ENT_QUOTES, 'UTF-8');?>

                            <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['rdelim']->value, ENT_QUOTES, 'UTF-8');?>
);
                        <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['rdelim']->value, ENT_QUOTES, 'UTF-8');?>

                    <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['rdelim']->value, ENT_QUOTES, 'UTF-8');?>
);

            //]]>
            <?php echo '</script'; ?>
>

<?php }
if ($_smarty_tpl->tpl_vars['field']->value['field_name'] == 's_city') {?>

            <?php echo '<script'; ?>
  class="cm-ajax-force">
            //<![CDATA[

                    Tygh.$("[name='user_data[s_city]']").autocomplete(<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['ldelim']->value, ENT_QUOTES, 'UTF-8');?>

                        source: function( request, response ) <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['ldelim']->value, ENT_QUOTES, 'UTF-8');?>


                            var check_country;
                            var check_state;
                            check_country = $("[name='user_data[s_country]']").length ? $("[name='user_data[s_country]']").val() : '';
                            check_state = $("[name='user_data[s_state]']").length ? $("[name='user_data[s_state]']").val() : '';

                            $.ceAjax('request', fn_url('city.autocomplete_city?q=' + request.term + '&check_state=' + check_state + '&check_country=' + check_country), <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['ldelim']->value, ENT_QUOTES, 'UTF-8');?>

                                callback: function(data) <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['ldelim']->value, ENT_QUOTES, 'UTF-8');?>

                                    response(data.autocomplete);
                                <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['rdelim']->value, ENT_QUOTES, 'UTF-8');?>

                            <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['rdelim']->value, ENT_QUOTES, 'UTF-8');?>
);
                        <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['rdelim']->value, ENT_QUOTES, 'UTF-8');?>

                    <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['rdelim']->value, ENT_QUOTES, 'UTF-8');?>
);

            //]]>
            <?php echo '</script'; ?>
>

<?php }
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (smarty_modifier_trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/cities/hooks/profiles/profile_fields.post.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/cities/hooks/profiles/profile_fields.post.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
if ($_smarty_tpl->tpl_vars['field']->value['field_name'] == 'b_city') {?>

            <?php echo '<script'; ?>
  class="cm-ajax-force">
            //<![CDATA[

                    Tygh.$("[name='user_data[b_city]']").autocomplete(<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['ldelim']->value, ENT_QUOTES, 'UTF-8');?>

                        source: function( request, response ) <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['ldelim']->value, ENT_QUOTES, 'UTF-8');?>


                            var check_country;
                            var check_state;
                            check_country = $("[name='user_data[b_country]']").length ? $("[name='user_data[b_country]']").val() : '';
                            check_state = $("[name='user_data[b_state]']").length ? $("[name='user_data[b_state]']").val() : '';

                            $.ceAjax('request', fn_url('city.autocomplete_city?q=' + request.term + '&check_state=' + check_state + '&check_country=' + check_country), <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['ldelim']->value, ENT_QUOTES, 'UTF-8');?>

                                callback: function(data) <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['ldelim']->value, ENT_QUOTES, 'UTF-8');?>

                                    response(data.autocomplete);
                                <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['rdelim']->value, ENT_QUOTES, 'UTF-8');?>

                            <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['rdelim']->value, ENT_QUOTES, 'UTF-8');?>
);
                        <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['rdelim']->value, ENT_QUOTES, 'UTF-8');?>

                    <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['rdelim']->value, ENT_QUOTES, 'UTF-8');?>
);

            //]]>
            <?php echo '</script'; ?>
>

<?php }
if ($_smarty_tpl->tpl_vars['field']->value['field_name'] == 's_city') {?>

            <?php echo '<script'; ?>
  class="cm-ajax-force">
            //<![CDATA[

                    Tygh.$("[name='user_data[s_city]']").autocomplete(<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['ldelim']->value, ENT_QUOTES, 'UTF-8');?>

                        source: function( request, response ) <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['ldelim']->value, ENT_QUOTES, 'UTF-8');?>


                            var check_country;
                            var check_state;
                            check_country = $("[name='user_data[s_country]']").length ? $("[name='user_data[s_country]']").val() : '';
                            check_state = $("[name='user_data[s_state]']").length ? $("[name='user_data[s_state]']").val() : '';

                            $.ceAjax('request', fn_url('city.autocomplete_city?q=' + request.term + '&check_state=' + check_state + '&check_country=' + check_country), <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['ldelim']->value, ENT_QUOTES, 'UTF-8');?>

                                callback: function(data) <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['ldelim']->value, ENT_QUOTES, 'UTF-8');?>

                                    response(data.autocomplete);
                                <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['rdelim']->value, ENT_QUOTES, 'UTF-8');?>

                            <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['rdelim']->value, ENT_QUOTES, 'UTF-8');?>
);
                        <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['rdelim']->value, ENT_QUOTES, 'UTF-8');?>

                    <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['rdelim']->value, ENT_QUOTES, 'UTF-8');?>
);

            //]]>
            <?php echo '</script'; ?>
>

<?php }
}
}
}
