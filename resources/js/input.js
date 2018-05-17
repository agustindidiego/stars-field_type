(function ($) {

    var decimals = $('input[data-provides="rage.field_type.stars"]:not([data-initialized])');

    decimals.attr('data-initialized', '');

    // Initialize decimals
    decimals.on('change', function () {

        if ($(this).val() == '') {
            return;
        }

        $(this).val(Number($(this).val()).toFixed($(this).data('decimals')));
    });

    decimals.rating({
        hoverOnClear: false,
        theme: 'krajee-fa'
    });
})(jQuery);
