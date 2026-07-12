<?php
/* Smarty version 4.3.0, created on 2025-05-22 19:29:17
  from '/srv/projects/is2or.com/public_html/design/themes/responsive/templates/addons/ab__product_sets/hooks/index/scripts.post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_682fdd7d01e8e3_37371284',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7091a397f7f2c182f98ceae04346a61a22e45bfe' => 
    array (
      0 => '/srv/projects/is2or.com/public_html/design/themes/responsive/templates/addons/ab__product_sets/hooks/index/scripts.post.tpl',
      1 => 1747376510,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_682fdd7d01e8e3_37371284 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/function.script.php','function'=>'smarty_function_script',),1=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/modifier.trim.php','function'=>'smarty_modifier_trim',),2=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);
echo smarty_function_script(array('src'=>"js/addons/ab__product_sets/sol.min.js"),$_smarty_tpl);?>

<?php echo '<script'; ?>
>
    (function (_, $) {
        var additional_params = [];
        var selected = [];

        function ab_init(elem) {
            var product_id = elem.data('caProductId');

            elem.searchableOptionList({
                showSelectAll: true,
                allowNullSelection: true,
                texts: {
                    noItemsAvailable: '<?php echo $_smarty_tpl->__('ab__ps.multiselect.noItemsAvailable');?>
',
                    selectAll: '<?php echo $_smarty_tpl->__('ab__ps.multiselect.selectAll');?>
',
                    selectNone: '<?php echo $_smarty_tpl->__('ab__ps.multiselect.selectNone');?>
',
                    searchplaceholder: '<?php echo $_smarty_tpl->__('ab__ps.multiselect.searchplaceholder');?>
',
                    close: '<?php echo $_smarty_tpl->__('close');?>
'

                },
                events: {
                    onInitialized: function (sol) {
                        $('#results_ab__product_sets').on('click', '.ab__ps-item_quick-delete', function () {
                            var p_id = $(this).data('caProductid');
                            if (sol !== null && p_id !== undefined) {
                                sol.$selectionContainer.find('input[type="checkbox"][value=' + p_id + ']').prop('checked', false).trigger('change');

                            }
                        });

                        if (selected.length) {
                            sol.$originalElement.val(selected);
                            $.each(selected, function (k,p_id) {
                                sol.$selectionContainer.find('input[type="checkbox"][value=' + p_id + ']').prop('checked', true);
                            });
                            sol.config.events.onChange(sol);
                        }
                    },
                    onRendered: function (sol) {
                        sol.$showSelectionContainer.hide();
                    },
                    onChange: function (sol){
                        selected = sol.$originalElement.val();
                        $.ceAjax('request', fn_url('ab__product_sets.calculate'), {
                            method: 'post',
                            data: {
                                selected_products: selected,
                                product_id: product_id,
                                params: additional_params[product_id] || []
                            },
                            callback: function (data) {
                                $('#results_ab__product_sets').html(data.text);
                            }
                        });
                    }
                }
            });
        }

        $(document).ready(function () {
            var elem = $('#ab__product_sets');
            elem.length && ab_init(elem);

            $.ceEvent('on', 'ce.commoninit', function(context) {
                var elem = $('#ab__product_sets', context);
                elem.each(function () {
                    ab_init($(this));
                });
            });

            $.ceEvent('on', 'ce.product_option_changed', function(obj_id, id, option_id, update_ids, params) {
                additional_params[id] = params;
            });

            $.ceEvent('on', 'dispatch_event_pre', function (e, jelm, processed) {
                var wrapper = $(e.target).closest('.sol-container.sol-active');
                if (wrapper.length) {
                    processed.status = true;
                }
            });
        });
    })(Tygh, Tygh.$);
<?php echo '</script'; ?>
><?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (smarty_modifier_trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/ab__product_sets/hooks/index/scripts.post.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/ab__product_sets/hooks/index/scripts.post.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
echo smarty_function_script(array('src'=>"js/addons/ab__product_sets/sol.min.js"),$_smarty_tpl);?>

<?php echo '<script'; ?>
>
    (function (_, $) {
        var additional_params = [];
        var selected = [];

        function ab_init(elem) {
            var product_id = elem.data('caProductId');

            elem.searchableOptionList({
                showSelectAll: true,
                allowNullSelection: true,
                texts: {
                    noItemsAvailable: '<?php echo $_smarty_tpl->__('ab__ps.multiselect.noItemsAvailable');?>
',
                    selectAll: '<?php echo $_smarty_tpl->__('ab__ps.multiselect.selectAll');?>
',
                    selectNone: '<?php echo $_smarty_tpl->__('ab__ps.multiselect.selectNone');?>
',
                    searchplaceholder: '<?php echo $_smarty_tpl->__('ab__ps.multiselect.searchplaceholder');?>
',
                    close: '<?php echo $_smarty_tpl->__('close');?>
'

                },
                events: {
                    onInitialized: function (sol) {
                        $('#results_ab__product_sets').on('click', '.ab__ps-item_quick-delete', function () {
                            var p_id = $(this).data('caProductid');
                            if (sol !== null && p_id !== undefined) {
                                sol.$selectionContainer.find('input[type="checkbox"][value=' + p_id + ']').prop('checked', false).trigger('change');

                            }
                        });

                        if (selected.length) {
                            sol.$originalElement.val(selected);
                            $.each(selected, function (k,p_id) {
                                sol.$selectionContainer.find('input[type="checkbox"][value=' + p_id + ']').prop('checked', true);
                            });
                            sol.config.events.onChange(sol);
                        }
                    },
                    onRendered: function (sol) {
                        sol.$showSelectionContainer.hide();
                    },
                    onChange: function (sol){
                        selected = sol.$originalElement.val();
                        $.ceAjax('request', fn_url('ab__product_sets.calculate'), {
                            method: 'post',
                            data: {
                                selected_products: selected,
                                product_id: product_id,
                                params: additional_params[product_id] || []
                            },
                            callback: function (data) {
                                $('#results_ab__product_sets').html(data.text);
                            }
                        });
                    }
                }
            });
        }

        $(document).ready(function () {
            var elem = $('#ab__product_sets');
            elem.length && ab_init(elem);

            $.ceEvent('on', 'ce.commoninit', function(context) {
                var elem = $('#ab__product_sets', context);
                elem.each(function () {
                    ab_init($(this));
                });
            });

            $.ceEvent('on', 'ce.product_option_changed', function(obj_id, id, option_id, update_ids, params) {
                additional_params[id] = params;
            });

            $.ceEvent('on', 'dispatch_event_pre', function (e, jelm, processed) {
                var wrapper = $(e.target).closest('.sol-container.sol-active');
                if (wrapper.length) {
                    processed.status = true;
                }
            });
        });
    })(Tygh, Tygh.$);
<?php echo '</script'; ?>
><?php }
}
}
