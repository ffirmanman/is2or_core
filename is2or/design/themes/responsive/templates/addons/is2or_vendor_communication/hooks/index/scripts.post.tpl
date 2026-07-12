<script>
(function(_, $) {
    $.extend(_, {
        is2or_vendor_communication: {$addons.is2or_vendor_communication|json_encode nofilter}    
    });

    _.tr({
        "is2or_vendor_communication.short_address_is_required": '{__("is2or_vendor_communication.short_address_is_required")|escape:"javascript"}',
    })
})(Tygh, Tygh.$);
</script>

{script src="js/addons/is2or_vendor_communication/func.js"}