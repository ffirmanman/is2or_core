(function(_, $) {
    $.ceEvent('on', 'ce.formajaxpost_form_edit_supplier', function(response, params) {
        if (params.obj[0].name.indexOf('check_cron') === -1) {
            $('.rf-progress').show();
            $('#not_found').removeClass('cm-ajax-onclick-active');
            $('#general').click();
            $('.xml_get_attr').trigger('change');

            let fileUploader = $("div[id*='file_uploader_']");
            let fileUploaderId = fileUploader.attr('id');
            fileUploaderId = fileUploaderId.replace('file_uploader_', '');
            Tygh.fileuploader.clean_form(fileUploaderId);

            my_supplier_switch_parser_status_current(1);
        }
    });

    $.ceEvent('on', 'ce.formajaxpost_form_not_found', function(response, params) {
        if (params.obj[0].name.indexOf('export_not_found') !== -1) {
            my_supplier_switch_parser_status_current(2);
        } else if (response.success) {
            $.each(response.success, function(k,v) {
                var element = $('#not_found_checkbox' + v);
                element.closest('tr').addClass('added');
                element.remove();
            });
        }
    });

    $(document).ready(function() {
        $('.xml_get_attr').trigger('change');
    });

    $('body')
        .on('click', '.rf_stock_parser_save', function () {
            $.ceAjax('request', fn_url('rf_stock_parser.update'), {
                data: {
                    data: $("#supplier_update_form").serialize(),
                    cron_url: $('#elm_supplier_http_url').val()
                },
                method: 'post'
            });
        })
        .on('change', '#rf_stock_parser_cron_select', function () {
            $(".rf_stock_parser_cron").addClass('hidden');
            $("#rf_stock_parser_cron_" + $(this).val()).removeClass('hidden');

            if ($(this).val() === 'http') {
                $('#rf_stock_parser_check_cron').addClass('hidden');
            } else {
                $('#rf_stock_parser_check_cron').removeClass('hidden');
            }
        })
        .on('change', '.additional_columns_select', function () {
            var parent = $(this).parent();
            var value = $(this).val();

            var feature_select;
            let showSelect = false;
            if (value === 'group') {
                feature_select = parent.find('.additional_columns_select_feature1,.additional_columns_select_feature2');
            } else if (value === 'product_field') {
                feature_select = parent.find('.additional_columns_select_feature3');
                showSelect = true;
            } else {
                feature_select = parent.find('.additional_columns_select_feature1');
            }

            var modifier = parent.parent().find('.additional_columns_modifier');
            var popup = parent.find('.ajax-popup-tools .cm-ajax-content-more');
            var selectList = parent.find('.cm-select-list');

            var columnsWithModifiers = $('#columnsWithModifiers').val().split(',');
            var columnsWithFeatures = $('#columnsWithFeatures').val().split(',');

            parent.find('.additional_columns_select_feature').addClass('hidden');
            modifier.addClass('hidden');

            if (columnsWithModifiers.indexOf(value) !== -1) {
                modifier.removeClass('hidden').removeClass('hidden');
                popup.data('caTargetUrl', popup.data('caTargetUrl').replace('&onlyGroup', ''));
            }

            if (columnsWithFeatures.indexOf(value) !== -1 || showSelect) {
                feature_select.removeClass('hidden').removeClass('hidden');

                popup.toggle(true);
                selectList.removeData('ajax_content');
                selectList.html('');

                parent.find('.dropdown-toggle').html($('#not_selected_lang_var').val() + ' <b class="caret"></b>');
                parent.find('input[id^=additional_feature_field_]').val('');
            }

            let dataUrl = feature_select.data('url');
            if (value === 'group') {
                dataUrl = dataUrl + '&onlyGroup'
            }
            popup.data('caTargetUrl', dataUrl);
        })
        .on('change', '.node_name', function () {
            var parent = $(this).closest('tr');
            var select = parent.find('.select_for_xml_attrs');
            var nodeName = $(this).val();

            $.ceAjax('request', fn_url('rf_stock_parser.get_node_attrs'), {
                method: 'post',
                callback: function(response) {
                    var options = '';

                    $.each(response.attrs, function (k,v) {
                        options += '<option value="'+ k + '">' + v + '</option>';
                    })

                    select.html(options);
                },
                data: {
                    nodeName: nodeName,
                    constructorId: $('#constructor_id').val(),
                },
                hidden: true
            });
        })
        .on('change', '#js-avail_strategy_not_in', function () {
            let value = $(this).val();
            let wh_div = $('#js-wh_div');
            let values = ["0", "2"];

            if (values.includes(value)) {
                wh_div.show();
            } else {
                wh_div.hide();
            }
        })
        .on('click', '.rf_pricing_strategy_add_tab', function () {
            let id = $('#pricing_strategy_categories_field_default').val();
            let div = $('.rf_pricing_strategy_tabs');
            let name = $('#sw_pricing_strategy__categories_field_selector_default_wrap_').text();

            if ($('#tabsboxSubPricingStrategy_'+id).length || !id) {
                return false;
            }

            div.append('<li id="tabsboxSubPricingStrategy_'+id+'" class="cm-js"><a>'+name+'</a></li>');
            $('.cm-j-tabs', $('#content_pricing_strategy')).ceTabs();

            $.ceAjax('request', fn_url('rf_stock_parser.get_pricing_strategy_template'), {
                method: 'get',
                data: {
                    id: id
                },
                callback: function(response) {
                    $('#pricing_strategy_anchor').after(response.template)
                    $('#tabsboxSubPricingStrategy_'+id).click();
                },
                hidden: true
            });
        })
        .on('click', '.rf_pricing_strategy_tab_delete', function () {
            let result = confirm("Delete?");
            if (result) {
                let id = $(this).data('ca-target-id');
                $('#content_tabsboxSubPricingStrategy_' + id).remove();
                $('#tabsboxSubPricingStrategy_' + id).remove();
                $('.cm-j-tabs', $('#content_pricing_strategy')).ceTabs();
            }
        });


    let contentObserv = $("#additional_fields_table, #communication_categories_table");
    if (contentObserv.length) {
        let contentObserObj = contentObserv.get(0);
        let observer = new MutationObserver(mutationRecords => {
            rf_stock_parser_trsTableChanged();
        });

        observer.observe(contentObserObj, {
            childList: true,
            subtree: true
        });
    }


    $('#js-avail_strategy_not_in').trigger('change');
}(Tygh, jQuery));

function rf_stock_parser_trsTableChanged()
{
    $('.additional_columns_select, .communication_categories_select').each(function () {
        if ($(this).data('fixed')) {
            return;
        }

        $(this).data('fixed', true);

        if ($(this).hasClass('communication_categories_select')) {
            var parent = $(this);
        } else {
            var parent = $(this).parent();
            $(this).closest('tr').find('.select_for_xml_attrs').html('');
        }

        parent.find(".dropdown-menu").on('click', function (e) {
            var jelm = $(e.target);

            if (jelm.parents('.cm-dropdown-skip-processing').length) {
                e.stopPropagation();
                return true;
            }

            if (jelm.is('a')) {
                if ($('input[type=checkbox]:enabled', jelm).length) {
                    $('input[type=checkbox]:enabled', jelm).click();
                } else if (jelm.hasClass('cm-ajax')) {
                    // close dropdown manually
                    $('a.dropdown-toggle',jelm.parents('.dropdown:first')).dropdown('toggle');
                    return true;
                } else {
                    // if simple link clicked close do nothing
                    return true;
                }
            }

            // process clicks
            $.dispatchEvent(e);

            // Prevent dropdown closing
            e.stopPropagation();
        });

        parent.find('.dropdown-toggle').text($('#not_selected_lang_var').val());

        if ($(this).hasClass('communication_categories_select')) {
            parent.parent().find('input[id^="communication_categories_field"]').val('');
        } else {
            parent.find('input[id^=additional_feature_field_]').val('');
        }

        $(this).change();
    });
}

function my_supplier_switch_parser_status() {
    let progressBars = $('.rf-progress');
    let ids = [];

    progressBars.each(function (k,v) {
        let id = $(v).data('id');
        ids.push(id);
    });

    let update = function () {
        $.ceAjax('request', fn_url('rf_stock_parser.processStatus'), {
            method: 'post',
            data: {
                ids: ids,
                type: 1,
            },
            callback: function(response) {
                for (let key in response.status) {
                    let progress = $('.rf-progress[data-id="'+ key +'"]').find('.rf-progress-bar');
                    rf_change_status(response.status[key], null, progress);
                }
                setTimeout(update, 3000);
            },
            hidden: true
        });
    };
    update();
}

function my_supplier_switch_parser_status_current(type) {
    window.scrollTo({
        top: 0,
        behavior: "smooth"
    });

    let id = $('[name="my_supplier_id"]').val();
    let comet_container = $('#comet_container_controller');

    comet_container.ceProgress('setValue', {
        'progress' : 0,
        'text' : 'start'
    });
    comet_container.data('rfInit', true);

    let update = function () {
        $.ceAjax('request', fn_url('rf_stock_parser.processStatus'), {
            method: 'post',
            data: {
                ids: [id],
                simple: true,
                type: type,
                last_change: $('#processing_last_change').val()
            },
            callback: function(response) {
                let status = rf_change_status(response.status, comet_container);
                if (status) {
                    setTimeout(update, 3000);
                }
            },
            hidden: true
        });
    };
    update();
}

function rf_change_status(status, comet_container, progress)
{
    if (status === false) {
        return true;
    }

    const Strings = {};
    Strings.orEmpty = function( entity ) {
        return entity || "";
    };

    if (progress) {
        progress.css('width', status.percent + '%');
        var parent = progress.parent();
    }

    let rf_error = $('.rf-error');

    if (status.percent === '100') {
        if (comet_container && comet_container.data('rfInit')) {
            comet_container.data('rfInit', false);
            $('#processing_last_change').val(status.last_change);
            comet_container.ceProgress('setValue', {
                'progress' : 100,
                'text' : Strings.orEmpty(status.process_message)
            });
            setTimeout(function () {
                comet_container.ceProgress('finish');

                if (Strings.orEmpty(status.data.type) === 'readfile') {
                    window.location.href = status.data.data;
                }
            }, 1000);

            rf_error.hide();
            $('#logs').removeClass('cm-ajax-onclick-active');

            return false;
        } else if (progress) {
            progress.css('width', '0%');
            parent.hide();
        }
    } else if (status.running == 1) {
        if (comet_container) {
            comet_container.ceProgress('setValue', {
                'progress' : status.percent,
                'text' : Strings.orEmpty(status.process_message)
            });
            comet_container.data('rfInit', true);
        } else if (progress) {
            parent.show();
        }
    }

    if (Strings.orEmpty(status.error_message !== '')) {
        rf_error.show();
        rf_error.find('.rf-error-text').text(status.error_message);

        if (comet_container && comet_container.data('rfInit')) {
            comet_container.data('rfInit', false);
            $('#processing_last_change').val(status.last_change);
            comet_container.ceProgress('finish');
            return false;
        }
    } else {
        rf_error.hide();
    }

    return true;
}


function fn_rf_stock_parser_change_vendor(elm) {
    $.ceAjax('request', Tygh.current_url, {
        data: {
            page_data: {
                company_id: $('[name="supplier_data[company_id]"]').val()
            }
        },
        result_ids: 'div_for_brands'
    });
}
