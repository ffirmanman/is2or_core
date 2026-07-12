<?php
/* Smarty version 5.4.3, created on 2026-03-08 18:23:32
  from 'tygh:addons/ab__product_sets/hooks/index/scripts.post.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69ad9474362d28_29999092',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e49527b8a25c60128273f2875699ef9e68d816cf' => 
    array (
      0 => 'addons/ab__product_sets/hooks/index/scripts.post.tpl',
      1 => 1767831051,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_69ad9474362d28_29999092 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/themes/responsive/templates/addons/ab__product_sets/hooks/index';
if ($_smarty_tpl->getValue('runtime')['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "template_content", null, null);
echo $_smarty_tpl->getSmarty()->getFunctionHandler('script')->handle(array('src'=>"js/addons/ab__product_sets/sol.min.js"), $_smarty_tpl);?>

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
                    noItemsAvailable: '<?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")('ab__ps.multiselect.noItemsAvailable', [], $_smarty_tpl->getSmarty()->getLanguage());?>
',
                    selectAll: '<?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")('ab__ps.multiselect.selectAll', [], $_smarty_tpl->getSmarty()->getLanguage());?>
',
                    selectNone: '<?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")('ab__ps.multiselect.selectNone', [], $_smarty_tpl->getSmarty()->getLanguage());?>
',
                    searchplaceholder: '<?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")('ab__ps.multiselect.searchplaceholder', [], $_smarty_tpl->getSmarty()->getLanguage());?>
',
                    close: '<?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")('close', [], $_smarty_tpl->getSmarty()->getLanguage());?>
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
><?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->getValue('auth')['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/ab__product_sets/hooks/index/scripts.post.tpl" id="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('set_id')->handle(array('name'=>"addons/ab__product_sets/hooks/index/scripts.post.tpl"), $_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
echo $_smarty_tpl->getSmarty()->getFunctionHandler('script')->handle(array('src'=>"js/addons/ab__product_sets/sol.min.js"), $_smarty_tpl);?>

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
                    noItemsAvailable: '<?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")('ab__ps.multiselect.noItemsAvailable', [], $_smarty_tpl->getSmarty()->getLanguage());?>
',
                    selectAll: '<?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")('ab__ps.multiselect.selectAll', [], $_smarty_tpl->getSmarty()->getLanguage());?>
',
                    selectNone: '<?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")('ab__ps.multiselect.selectNone', [], $_smarty_tpl->getSmarty()->getLanguage());?>
',
                    searchplaceholder: '<?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")('ab__ps.multiselect.searchplaceholder', [], $_smarty_tpl->getSmarty()->getLanguage());?>
',
                    close: '<?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")('close', [], $_smarty_tpl->getSmarty()->getLanguage());?>
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
