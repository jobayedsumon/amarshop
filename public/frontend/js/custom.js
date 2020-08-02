function sweetAlter(icon, title) {
    Swal.fire({
        position: 'top-end',
        icon: icon,
        title: title,
        showConfirmButton: false,
        timer: 1500
    });
}



    function wishlist(productId) {

        let CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');

        $.ajax({
            type: 'POST',
            url: '/wishlist/add',
            data: {
                _token: CSRF_TOKEN,
                productId: productId
            },
            success: function (count) {
                sweetAlter('success', 'Product added to wishlist');
                $('#wishlistCount').text(count);

            }
        });
    }

    $('#addToCart').click(function (e) {

        let CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');

        productId = $('#productId').val();
        colorId = $("input[name='color']:checked").val();
        sizeId = $("input[name='size']:checked").val();
        count = $('#count').val();

        $.ajax({
            type: 'POST',
            url: '/cart/add',
            data: {
                _token: CSRF_TOKEN,
                product_id: productId,
                color_id: colorId,
                size_id: sizeId,
                count: count,
            },
            success: function (data) {
                sweetAlter('success', 'Product added to cart');
                $('.cart_sub_total').text('BDT ' + data.cart_sub_total);
                let cart_total_amount = parseInt(data.cart_sub_total) + 100;
                $('.cart_total_amount').text('BDT ' + cart_total_amount);
                $('.cart_items_count').text(data.cart_items_count);
            }
        });

    });






    $(".chooseColor").click(function () {
        $(this).addClass("activeOption");
        $(".chooseColor").not(this).removeClass("activeOption");
    });

    $(".chooseSize").click(function () {
        $(this).addClass("activeOption");
        $(".chooseSize").not(this).removeClass("activeOption");
    });



    $('.quickButton').click(function (e) {

        var url = $(this).data('url');

        $('#dynamic-content').html(''); // leave it blank before ajax call
        $('#modal-loader').show();      // load ajax loader

        $.ajax({
            url: url,
            type: 'GET',
            dataType: 'html'
        })
            .done(function (data) {
                $('#dynamic-content').html('');
                $('#dynamic-content').html(data); // load response
                $('#modal-loader').hide();        // hide ajax loader
            })
            .fail(function () {
                $('#dynamic-content').html('<i class="glyphicon glyphicon-info-sign"></i> Something went wrong, Please try again...');
                $('#modal-loader').hide();
            })
    });










