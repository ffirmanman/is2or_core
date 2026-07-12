(function (_, $) {
    $.ceEvent('on', 'ce.ajaxdone', function (elms, inline_scripts, params, data, response_text) {
        const hasDispatchKey = Object.keys(params.data).some(key => key.startsWith('dispatch[checkout.add'));
        if(hasDispatchKey) {
            $elem = $('[id^="cart_status_"]').children('[id^="sw_dropdown_"]')
            $.toggleCombination($elem);
        }

    });
})(Tygh, Tygh.$);