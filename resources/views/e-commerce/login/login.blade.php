@extends('layouts.master')

@section('title', 'Login')

@section('content')


<!---->
<!--banner-->
<div class="banner-top">
    <div class="container">
        <h3>Login</h3>
        <h4><a href="index.html">Home</a><label>/</label>Login</h4>
        <div class="clearfix"> </div>
    </div>
</div>
<!--login-->

<div class="login">

    <div class="main-agileits">
        <div class="form-w3agile">
            <h3>Login</h3>
            <form action="#" method="post">
                <div class="key">
                    <i class="fa fa-envelope" aria-hidden="true"></i>
                    <input type="text" value="Email" name="Email" onfocus="this.value = '';"
                        onblur="if (this.value == '') {this.value = 'Email';}" required="">
                    <div class="clearfix"></div>
                </div>
                <div class="key">
                    <i class="fa fa-lock" aria-hidden="true"></i>
                    <input type="password" value="Password" name="Password" onfocus="this.value = '';"
                        onblur="if (this.value == '') {this.value = 'Password';}" required="">
                    <div class="clearfix"></div>
                </div>
                <input type="submit" value="Login">
            </form>
        </div>
        <div class="forg">
            <a href="#" class="forg-left">Forgot Password</a>
            <a href="register.html" class="forg-right">Register</a>
            <div class="clearfix"></div>
        </div>
    </div>
</div>

<!-- smooth scrolling -->
<script type="text/javascript">
    $(document).ready(function () {
        /*
		   var defaults = {
		   containerID: 'toTop', // fading element id
		   containerHoverID: 'toTopHover', // fading element hover id
		   scrollSpeed: 1200,
		   easingType: 'linear' 
		   };
	   */
        $().UItoTop({
            easingType: 'easeOutQuart'
        });
    });

</script>
<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
<!-- //smooth scrolling -->
<!-- for bootstrap working -->
<script src="{{ asset('') }}asset/frontend/js/bootstrap.js"></script>
<!-- //for bootstrap working -->
<script type='text/javascript' src="{{ asset('') }}asset/frontend/js/jquery.mycart.js"></script>
<script type="text/javascript">
    $(function () {

        var goToCartIcon = function ($addTocartBtn) {
            var $cartIcon = $(".my-cart-icon");
            var $image = $('<img width="30px" height="30px" src="' + $addTocartBtn.data("image") + '"/>')
                .css({
                    "position": "fixed",
                    "z-index": "999"
                });
            $addTocartBtn.prepend($image);
            var position = $cartIcon.position();
            $image.animate({
                top: position.top,
                left: position.left
            }, 500, "linear", function () {
                $image.remove();
            });
        }

        $('.my-cart-btn').myCart({
            classCartIcon: 'my-cart-icon',
            classCartBadge: 'my-cart-badge',
            affixCartIcon: true,
            checkoutCart: function (products) {
                $.each(products, function () {
                    console.log(this);
                });
            },
            clickOnAddToCart: function ($addTocart) {
                goToCartIcon($addTocart);
            },
            getDiscountPrice: function (products) {
                var total = 0;
                $.each(products, function () {
                    total += this.quantity * this.price;
                });
                return total * 1;
            }
        });

    });

</script>

@endsection
