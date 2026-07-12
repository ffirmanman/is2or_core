/**
 * Requires "ceObjectSelector" internal plugin to be loaded.
 */

(function (_, $) {
    var defaults = {
        // Select2 settings for parent items select
        parent: {
            loadViaAjax: true,
            enableSearch: true,
            dataUrl: '',
            enableImages: true
        },

        // Select2 settings for child items select
        child: {
            loadViaAjax: true,
            dataUrl: '',
            enableImages: true
        }
    };

    var ChainedPromotionConditionForm = function (config) {
        this.$operatorSelect = $(config.operatorSelect);
        this.$parentSelect = $(config.parentSelect);
        this.$childSelect = $(config.childSelect);
        this.$childInput = $(config.childInput);

        this.settings = $.extend(true, {}, defaults, config.settings || {});
    };

    $.extend(ChainedPromotionConditionForm.prototype, {
        MULTISELECT_OPERATORS: ['in', 'nin'],

        $operatorSelect: null,
        $parentSelect: null,
        $childSelect: null,
        $childInput: null,

        render: function () {
            this.bindEvents();

            var self = this;

            if (this.$parentSelect.val()) {
                var preselection = this.$parentSelect.val();

                this.$parentSelect.empty().val(null).trigger('change');

                $.ceAjax('request', this.settings.parent.dataUrl, {
                    hidden: true,
                    caching: false,
                    data: {
                        preselected: preselection
                    },
                    callback: function (data) {

                        if (data.objects.length) {
                            self.settings.parent.data = data.objects;

                            self.$parentSelect.ceObjectSelector(self.settings.parent);

                            setTimeout(function () {
                                self.initChildSelect(data.objects[0]);
                            }, 200);
                        }
                    }
                });
            } else {
                this.$parentSelect.ceObjectSelector(this.settings.parent);
            }
        },

        bindEvents: function () {
            var self = this;

            this.$parentSelect.on('select2:select', function (e) {
                self.$childSelect.empty().val(null);
                self.$childInput.val(null);

                self.initChildSelect(e.params.data);
            });

            this.$operatorSelect.on('change', function (e) {
                self.$childSelect.empty().val(null);

                self.initChildSelect(self.$parentSelect.select2('data')[0]);
            });

            this.$childSelect.on('select2:select select2:unselect', function (e) {
                self.onChildSelect(e.params.data);
            });
        },

        initChildSelect: function (selectedParentObject) {
            if (this.$childSelect.data('select2')) {
                this.$childSelect.select2('destroy');
            }

            if (selectedParentObject.object.variants) {
                var loadViaAjax = (typeof selectedParentObject.object.variants == 'string');

                var childSelect2Settings = $.extend({}, this.settings.child, {
                    multiple: this.isMultipleSelectOperator(this.getCurrentOperator()),
                    loadViaAjax: loadViaAjax
                });

                if (loadViaAjax) {
                    childSelect2Settings.dataUrl = selectedParentObject.object.variants;
                } else {
                    childSelect2Settings.data = selectedParentObject.object.variants;
                }

                this.$childSelect.attr('multiple', childSelect2Settings.multiple);
                this.$childInput.addClass('hidden');
                this.$childSelect.prop('disabled', false);

                var value = $.makeArray(this.$childSelect.val()).filter(function (val) { return Boolean(val); } );


                if (loadViaAjax && value.length) {
                    var self = this;
                    $.ceAjax('request', childSelect2Settings.dataUrl, {
                        hidden: true,
                        caching: false,
                        data: {
                            preselected: value,
                            page_size: 0
                        },
                        callback: function (data) {
                            if (!data.objects.length) {
                                return;
                            }

                            var childPreselectedObjects = data.objects;
                            $.each(childPreselectedObjects, function(i, object) {
                                object.selected = true;
                            });
                            childSelect2Settings.data = childPreselectedObjects;
                            self.$childSelect.ceObjectSelector(childSelect2Settings);
                        }
                    });
                } else {
                    this.$childSelect.ceObjectSelector(childSelect2Settings);
                }
            } else {
                this.$childSelect.prop('disabled', true).hide();
                this.$childInput.prop('disabled', false).removeClass('hidden');
            }
        },

        onChildSelect: function (selectedChildObject) {
            var serializedValue = this.$childSelect.val();

            if (Array.isArray(serializedValue)) {
                serializedValue = serializedValue.join(',');
            }

            this.$childInput
                .prop('disabled', false)
                .val(serializedValue);
        },

        getCurrentOperator: function () {
            return this.$operatorSelect.val();
        },

        isMultipleSelectOperator: function (operator) {
            return (this.MULTISELECT_OPERATORS.indexOf(operator) > -1);
        }
    });


    _.ChainedPromotionConditionForm = ChainedPromotionConditionForm;
})(Tygh, Tygh.$);




function fn_promotion_add(id, skip_select, type)
{
    var $ = Tygh.$,
        new_group = false,
        new_id = $('#container_' + id).cloneNode(0, true, true).str_replace('container_', ''),
        $new_container = $('#container_' + new_id),
        $input = null;

    skip_select = skip_select || false;

    // Iterate through all previous elements
    $new_container.prevAll('[id^="container_"]').each(function() {
        var $this = $(this);
        $input = $('input[name^=category_data]:first', $this).clone();
        if ($input.length == 0) {
            $input = $('input[data-ca-input-name^=category_data]:first', $this).clone();
        }

        if ($input.length == 0) {

        } else {
            if ($input.val() != 'undefined' && $input.val() != '') {
                $input.val('');
            }

            return false;
        }
    });

    // We added new group, so we need to get input from parent element or this is the new condition
    if ($input === null || !$input.get(0)) {
        $input = $('input[name^=category_data]:first', $new_container.parents('li:first')).clone(); // for group

        $('.no-node.no-items', $new_container.parents('ul:first')).hide(); // hide conainer with "no items" text

        // new condition
        if (!$input.get(0)) {
            var n = "category_data[virtual_conditions][conditions][0][condition]";
            $input = $('<input type="hidden" name="'+ n +'" value="" />');
        } else {
            new_group = true;
        }
    }

    var _name = $input.prop('name').length > 0 ? $input.prop('name') : $input.data('caInputName');
    var val = parseInt(_name.match(/(.*)\[(\d+)\]/)[2]);
    var name = new_group ? _name : _name.replace(/(.*)\[(\d+)\]/, '$1[' + (val + 1) +']');

    $input.attr('name', name);
    $new_container.append($input);
    name = name.replace(/\[(\w+)\]$/, '');

    if (new_group) {
        name += '[conditions][1]';
    }

    $new_container.prev().removeClass('cm-last-item'); // remove tree node closure from previous element
    $new_container.addClass('cm-last-item').show(); // add tree node closure to new element
    // Update selector with name with new index
    if (skip_select == false) {
        $('#container_' + new_id + ' select').prop('id', new_id).prop('name', name);

    // Or just return id and name (for group)
    } else {
        $new_container.empty(); // clear node contents
        return {
            new_id: new_id,
            name: name
        };
    }
}

function fn_promotion_add_group(id, zone)
{
    var $ = Tygh.$;
    var res = fn_promotion_add(id, true, 'condition');
    $.ceAjax('request', fn_url('categories.cvc_dynamic?prefix=' + encodeURIComponent(res.name) + '&group=new&elm_id=' + res.new_id), {
        result_ids: 'container_' + res.new_id
    });
}

function fn_promotion_rebuild_mixed_data(items, value, id, element_id, condition_value, condition_value_name)
{
    var $ = Tygh.$;
    var opts = '';
    var first_variant = '';

    for (var k in items) {
        if (items[k]['is_group']) {
            for (var l in items[k]['items']) {
                first_variant = '';
                if (l == value) {
                    if (items[k]['items'][l]['variants']) {
                        var count = 0;
                        for (var m in items[k]['items'][l]['variants']) {
                            if (!first_variant) {
                                first_variant = m;
                            }
                            opts += '<option value="' + m + '"' + (m == condition_value ? ' selected="selected"' : '') + '>' + items[k]['items'][l]['variants'][m] + '</option>';
                            count++;
                        }
                        if (count < 100) {
                            $('#mixed_ajax_select_' + id).parents('.cm-ajax-select-object').hide();
                            $('#mixed_select_' + id).html(opts).show().prop('disabled', false);
                            $('#mixed_input_' + id).hide().prop('disabled', true);
                            $('#mixed_input_' + id + '_name').hide().prop('disabled', true);
                        } else {
                            $('#mixed_ajax_select_' + id).data('ajax_content', null);
                            $('#mixed_select_' + id).hide().prop('disabled', true);
                            $('#mixed_ajax_select_' + id).html('');
                            $('#mixed_ajax_select_' + id).parents('.cm-ajax-select-object').show();
                            $('.cm-ajax-content-more', $('#scroller_mixed_ajax_select_' + id)).show();
                            $('#content_loader_mixed_ajax_select_' + id).attr('data-ca-target-url', fn_url('product_features.get_feature_variants_list?enter_other=N&feature_id=' + l));
                            $('#sw_mixed_ajax_select_' + id + '_wrap_').html(items[k]['items'][l]['variants'][first_variant]);
                            $('#mixed_input_' + id + '_name').hide().prop('disabled', false);
                            $('#mixed_input_' + id + '_name').val(items[k]['items'][l]['variants'][first_variant]);
                            $('#mixed_input_' + id).hide().prop('disabled', false);
                            $('#mixed_input_' + id).val(first_variant);
                            if (condition_value && element_id == l) {
                                $('#sw_mixed_ajax_select_' + id + '_wrap_').html(condition_value_name);
                                $('#mixed_input_' + id + '_name').val(condition_value_name);
                                $('#mixed_input_' + id).val(condition_value);
                            }
                        }
                    } else {
                        $('#mixed_input_' + id).val(element_id == l ? condition_value : '').show().prop('disabled', false);
                        $('#mixed_select_' + id).hide().prop('disabled', true);
                        $('#mixed_ajax_select_' + id).parents('.cm-ajax-select-object').hide();
                        $('#mixed_input_' + id + '_name').val('').hide().prop('disabled', true);
                    }
                }
            }
        } else {
            if (k == value) {
                if (items[k]['variants']) {
                    var count = 0;
                    for (var m in items[k]['variants']) {
                        if (!first_variant) {
                            first_variant = m;
                        }
                        opts += '<option value="' + m + '"' + (m == condition_value ? ' selected="selected"' : '') + '>' + items[k]['variants'][m] + '</option>';
                        count++;
                    }
                    if (count < 100) {
                        $('#mixed_ajax_select_' + id).parents('.cm-ajax-select-object').hide();
                        $('#mixed_select_' + id).html(opts).show().prop('disabled', false);
                        $('#mixed_input_' + id).hide().prop('disabled', true);
                        $('#mixed_input_' + id + '_name').hide().prop('disabled', true);
                    } else {
                        $('#mixed_ajax_select_' + id).data('ajax_content', null);
                        $('#mixed_select_' + id).hide().prop('disabled', true);
                        $('#mixed_ajax_select_' + id).html('');
                        $('#mixed_ajax_select_' + id).parents('.cm-ajax-select-object').show();
                        $('.cm-ajax-content-more', $('#scroller_mixed_ajax_select_' + id)).show();
                        $('#content_loader_mixed_ajax_select_' + id).attr('data-ca-target-url', fn_url('product_features.get_feature_variants_list?enter_other=N&feature_id=' + k));
                        $('#sw_mixed_ajax_select_' + id + '_wrap_').html(items[k]['variants'][first_variant]);
                        $('#mixed_input_' + id + '_name').hide().prop('disabled', false);
                        $('#mixed_input_' + id + '_name').val(items[k]['variants'][first_variant]);
                        $('#mixed_input_' + id).hide().prop('disabled', false);
                        $('#mixed_input_' + id).val(first_variant);
                        if (condition_value && element_id == k) {
                            $('#sw_mixed_ajax_select_' + id + '_wrap_').html(condition_value_name);
                            $('#mixed_input_' + id + '_name').val(condition_value_name);
                            $('#mixed_input_' + id).val(condition_value);
                        }
                    }
                } else {
                    $('#mixed_input_' + id).val(element_id == l ? condition_value : '').show().prop('disabled', false).removeClass('hidden');
                    $('#mixed_select_' + id).hide().prop('disabled', true);
                    $('#mixed_ajax_select_' + id).parents('.cm-ajax-select-object').hide();
                    $('#mixed_input_' + id + '_name').val('').hide().prop('disabled', true);
                }
            }
        }
    }
}

