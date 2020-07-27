

    let CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');

    function wishlist(productId) {

        $.ajax({
            type: 'POST',
            url: '/wishlist/add',
            data: {
                _token: CSRF_TOKEN,
                productId: productId
            },
            success: function (count) {
                $('#wishlistCount').text(count);

            }
        });
    }

    let sizeId;
    let colorId;
    let count;

    function choose_size(sizeId) {
        sizeId = sizeId;
    }

    console.log(sizeId);

    function choose_color(colorId) {

    }

    $(".chooseColor").click(function () {
        $(this).addClass("activeOption");
        $(".chooseColor").not(this).removeClass("activeOption");
    });

    $(".chooseSize").click(function () {
        $(this).addClass("activeOption");
        $(".chooseSize").not(this).removeClass("activeOption");
    });








