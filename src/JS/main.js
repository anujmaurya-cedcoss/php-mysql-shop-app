$(document).ready(function () {
    // action on sign-in submit
    $(document).on('click', ".register-btn", function () {
        name1 = $(".form-name").val();
        mail = $(".form-email").val();
        pass = $(".form-pass").val();
        repass = $(".form-repass").val();
        address = $(".form-address").val();
        console.log(name1);
        // if (!validateName(name1)) {
        //     // show name error
        //     $(".form-name").css('border-color', 'red');
        //     $(".form-email").css('border-color', 'black');
        //     $(".form-repass").css('border-color', 'black');
        // } else if (!validateEmail(mail)) {
        //     // show e-mail error message
        //     $(".form-email").css('border-color', 'red');
        //     $(".form-name").css('border-color', 'black');
        //     $(".form-repass").css('border-color', 'black');
        // } else if (!pass == repass || (pass.length < 1) || (repass.length < 1)) {
        //     // show password error
        //     $(".form-repass").css('border-color', 'red');
        //     $(".form-email").css('border-color', 'black');
        //     $(".form-name").css('border-color', 'black');
        // } else {

        // make an ajax call
        $.ajax({
            type: "POST",
            url: "./db_conn_signup.php",
            data: { 'name': name1, 'mail': mail, 'pass': pass, 'address': address },
            dataType: 'text',
            success: function (result) {
                window.location.href = "./login.php";
            }
        });
        // }
    });
    // action on log-in button click
    $(document).on('click', '.login-btn', function () {
        mail = $(".login-email").val();
        pass = $(".login-pass").val();

        jQuery.ajax({
            type: "POST",
            url: "./db_conn_login.php",
            data: { 'mail': mail, 'pass': pass },
            dataType: 'text',
            success: function (res) {
                console.log(res);
                if (res == 'success') {
                    window.location.href = "../index.php";
                } else {
                    // show the error message
                    $('.login-error').html("Either you're not yet verified<br>or Invalid Credentials");
                }
            }
        })
    });

    if (typeof $.cookie('user') != 'undefined') {
        $('.log-in-btn').hide();
        $(".sign-in-btn").hide();
        $(".sign-out-btn").show();
    }

    // add to wishlist 
    $(document).on('click', ".add-to-wishlist", function () {
        id = $(this).attr('id');
        $.ajax({
            type: "POST",
            url: "./add_to_wishlist.php",
            data: { 'id': id },
            dataType: "text",
            success: function (res) {
                console.log(res);
            }
        })
    })
    // delete from wishlist
    $(document).on('click', '.delete-from-cart', function () {
        id = $(this).attr('id');
        $.ajax({
            // add_to_wishlist is able to handle both add, and delete request
            type: "POST",
            url: "./add_to_wishlist.php",
            data: { 'id': id },
            dataType: 'text',
            success: function (res) {
                console.log(res);
            }
        })
    })

    // add to cart 
    $(document).on('click', ".add-to-cart", function () {
        id = $(this).attr('id');
        $.ajax({
            type: "POST",
            url: "./add_to_cart.php",
            data: { 'id': id },
            dataType: "text",
            success: function (res) {
                console.log(res);
            }
        })
    })


    // show product
    $(document).on('click', '.product', function () {
        console.log('show product');
        id = $(this).attr('id');
        console.log(id);
        $.ajax({
            type: "POST",
            url: "../process_show_product.php",
            data: { 'id': id },
            dataType: "text",
            success: function (res) {
                window.location.href = "./show_product.php";
            }
        })
    })

    // increment quantity
    $(document).on('click', '.increment-quantity', function () {
        console.log('increment clicked!');
        console.log($(this).id);
    })
});

function increment(id) {
    $.ajax({
        type: "POST",
        url: "../actions.php",
        data: { 'id': id, 'type': 'increment' },
        dataType: 'text',
        success: function (res) {
            // on success display the cart in every functionality
            console.log(res);
        }

    })
}

function decrement(id) {
    $.ajax({
        type: "POST",
        url: "../actions.php",
        data: { 'id': id, 'type': 'decrement' },
        dataType: 'text',
        success: function (res) {
            console.log(res);
            // window.location.href = "./show_cart.php";
        }
    })
}

// delete from cart
function del(id) {
    $.ajax({
        type: "POST",
        url: "../actions.php",
        data: { 'id': id, 'type': 'delete' },
        dataType: 'text',
        success: function (res) {
            console.log(res);
            // window.location.href = "./show_cart.php";
        }
    })
}

// empty cart
function emptyCart() {
    $.ajax({
        type: "POST",
        url: '../actions.php',
        data: { 'type': 'emptyCart' },
        dataType: 'text',
        success: function () {
            // display cart
        }
    })
}
// checkout cart
function checkoutCart() {
    $.ajax({
        type: "POST",
        url: "../actions.php",
        data: { 'type': 'checkout' },
        dataType: 'text',
        success: function (res) {
            console.log(res);
            if (res == 'false') {
                window.location.href = '../login.php';
            }
        }
    })
}

// action on sign-out button
$(document).on('click', '.sign-out-btn', function() {
    $.ajax({
        type : "POST",
        url : "../signout.php",
        success : function(res) {
            console.log(res);
            // window.location.href = '../index.php';
        }
    })
})