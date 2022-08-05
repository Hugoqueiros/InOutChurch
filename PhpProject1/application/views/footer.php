<section class="w3l-footer-22">
    <!-- footer-22 -->
    <div class="footer-hny py-5">
        <div class="container py-lg-5">
            <div class="text-txt row">
                <div class="left-side col-lg-4">
                    <h3><a class="logo-footer" href="index.html">
                            <span class="lohny">JH</span>Shop</a></h3>
                    <p>Loja online de roupa para homem e mulher. Temos de tudo para todos os gostos e todas as personalidades. </p>
                    <ul class="social-footerhny mt-lg-5 mt-4">
                        <li><a class="facebook" href="#"><span class="fa fa-facebook" aria-hidden="true"></span></a>
                        </li>
                        <li><a class="twitter" href="#"><span class="fa fa-twitter" aria-hidden="true"></span></a>
                        </li>
                        <li><a class="instagram" href="#"><span class="fa fa-instagram" aria-hidden="true"></span></a>
                        </li>
                    </ul>
                </div>
                <div class="left-side col-lg-4">
                    <div class="sub-one-left">
                        <h6>Endereço</h6>
                        <p class="mb-5">Av. dos Descobrimentos 333, 4400-103 Vila Nova de Gaia</p>
                    </div>
                </div>

                <div class="left-side col-lg-4">
                    <div class="sub-one-left" >
                        <h6>Métodos de Pagamento:</h6>
                        <ul style="display: inline-flex">
                            <li><a class="pay-method" href="#"><span class="fa fa-cc-visa"
                                                                     aria-hidden="true"></span></a>
                            </li>
                            <li><a class="pay-method" href="#"><span class="fa fa-cc-mastercard"
                                                                     aria-hidden="true"></span></a>
                            </li>
                            <li><a class="pay-method" href="#"><span class="fa fa-cc-paypal"
                                                                     aria-hidden="true"></span></a>
                            </li>
                            <li><a class="pay-method" href="#"><span class="fa fa-cc-amex"
                                                                     aria-hidden="true"></span></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="below-section row">
                <div class="columns col-lg-6">
                    <ul class="jst-link">
                        <li><a href="#">Politica de Privacidade </a> </li>
                        <li><a href="#">Termos de Uso</a></li>
                    </ul>
                </div>
                <div class="columns col-lg-6 text-lg-right">
                    <p>© 2020 <a href="<?php base_url() ?>">JHShop</a>. Todos os direitos Reservados.
                    </p>
                </div>
                <button onclick="topFunction()" id="movetop" title="Go to top">
                    <span class="fa fa-angle-double-up"></span>
                </button>
            </div>
        </div>
    </div>
    <!-- //titels-5 -->
    <!-- move top -->

    <script>
        // When the user scrolls down 20px from the top of the document, show the button
        window.onscroll = function () {
            scrollFunction()
        };

        function scrollFunction() {
            if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                document.getElementById("movetop").style.display = "block";
            } else {
                document.getElementById("movetop").style.display = "none";
            }
        }

        // When the user clicks on the button, scroll to the top of the document
        function topFunction() {
            document.body.scrollTop = 0;
            document.documentElement.scrollTop = 0;
        }
    </script>
    <!-- /move top -->
</section>


</body>

</html>

<script src="<?php base_url() ?>/assets/js/jquery-3.3.1.min.js"></script>
<script src="<?php base_url() ?>assets/js/jquery-2.1.4.min.js"></script>
<!--/login-->
<script>
        $(document).ready(function () {
            $(".button-log a").click(function () {
                $(".overlay-login").fadeToggle(200);
                $(this).toggleClass('btn-open').toggleClass('btn-close');
            });
        });
        $('.overlay-close-login').on('click', function () {
            $(".overlay-login").fadeToggle(200);
            $(".button-log a").toggleClass('btn-open').toggleClass('btn-close');
            open = false;
        });
        $(".button-register").click(function () {
            $(".overlay-login").css("display", "none");
            $(".overlay-register").fadeToggle(200);
            $(this).toggleClass('btn-open').toggleClass('btn-close');
        });
        $('.overlay-close-register').on('click', function () {
            $(".overlay-register").fadeToggle(200);
            $(".button-register").toggleClass('btn-open').toggleClass('btn-close');
            open = false;
        });

</script>
<!--//login-->
<script>
// optional
    $('#customerhnyCarousel').carousel({
        interval: 5000
    });
</script>
<!-- cart-js -->
<script src="<?php base_url() ?>assets/js/minicart.js"></script>
<script>
    transmitv.render();

    transmitv.cart.on('transmitv_checkout', function (evt) {
        var items, len, i;

        if (this.subtotal() > 0) {
            items = this.items();

            for (i = 0, len = items.length; i < len; i++) {
            }
        }
    });
</script>
<!-- //cart-js -->
<!--pop-up-box-->
<script src="<?php base_url() ?>assets/js/jquery.magnific-popup.js"></script>
<!--//pop-up-box-->
<script>
    $(document).ready(function () {
        $('.popup-with-zoom-anim').magnificPopup({
            type: 'inline',
            fixedContentPos: false,
            fixedBgPos: true,
            overflowY: 'auto',
            closeBtnInside: true,
            preloader: false,
            midClick: true,
            removalDelay: 300,
            mainClass: 'my-mfp-zoom-in'
        });

    });
</script>
<!--//search-bar-->
<!-- disable body scroll which navbar is in active -->

<script>
    $(function () {
        $('.navbar-toggler').click(function () {
            $('body').toggleClass('noscroll');
        })
    });
</script>
<!-- disable body scroll which navbar is in active -->
<script src="<?php base_url() ?>assets/js/bootstrap.min.js"></script>


