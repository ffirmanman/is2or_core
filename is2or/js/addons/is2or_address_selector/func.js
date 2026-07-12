(function (_, $) {
  $(document).on('click', '.js-address-selector-select', function (event) {
    event.preventDefault();

    var $button = $(this);
    if ($button.prop('disabled')) {
      return;
    }

    $.ceAjax('request', $button.data('caAddressSelectorUrl'), {
      method: 'post',
      hidden: true,
      data: {
        profile_id: $button.data('caAddressSelectorProfileId'),
        is_checkout_page: Number($button.data('caAddressSelectorIsCheckoutPage'))
      },
      callback: function (response) {
        if (!response || !response.success) {
          if (response && response.edit_url) {
            window.location.href = response.edit_url;
          }
          return;
        }

        $('[data-ca-geo-map-location-element="location"]').text(response.city || '');
        $('[data-ca-geo-map-location-element="location_block"]').each(function () {
          $(this).data('caGeoMapLocationIsLocationDetected', true);
        });

        if (response.reload_checkout) {
          window.location.reload();
        }
      }
    });
  });
})(Tygh, Tygh.$);
