<!doctype html>
<html class="no-js" lang="zxx">
<?php session_start(); ?>
<?php include 'head.php' ?>

<body>


    <!-- header-start -->
    <?php include 'header.php' ?>
    <!-- header-end -->

    <!-- slider_area_start -->
    <div class="slider_area">
        <div class="single_slider  d-flex align-items-center slider_bg_1">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-10 offset-xl-1">
                        <div class="slider_text text-center justify-content-center">
                            <h3>phone villa</h3>
                            <p>Welcome to phone villa a place where you all kind of most popular phones in nigerial</p>

                        </div>
                        <div class="property_form">
                            <form action="#">
                                <div class="row">
                                    <div class="col-xl-12">
                                        <div class="form_wrap d-flex">
                                            <div class="single-field min_width ">
                                                <label for="#">Search for phone
                                                    <div class="button_search">
                                                        <form action="slide.php" method="post">
                                                            <input type="hidden" name="dataPhone" value="Iphone">
                                                            <button type="submit" class="bt" name="category">Iphone</button>
                                                        </form>
                                                        <form action="slide.php" method="post">
                                                            <input type="hidden" name="dataPhone" value="Samsung">
                                                            <button type="submit" class="bt" name="category">Samsung</button>
                                                        </form>
                                                        <form action="slide.php" method="post">
                                                            <input type="hidden" name="dataPhone" value="Tecno">
                                                            <button type="submit" class="bt" name="category">Tecno</button>
                                                        </form>
                                                        <form action="slide.php" method="post">
                                                            <input type="hidden" name="dataPhone" value="Infinix">
                                                            <button type="submit" class="bt" name="category">Infinix</button>
                                                        </form>
                                                        <form action="slide.php" method="post">
                                                            <input type="hidden" name="dataPhone" value="Itel">
                                                            <button type="submit" class="bt" name="category">Itel</button>
                                                        </form>

                                                    </div>
                                                </label>
                                                <input class="wide" type="search" name="" id="">

                                            </div>
                                            <div class="serach_icon">
                                                <button><i class="ti-search"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
    <?php
    include("includes/db.php");
    $Products_id = array();
    if (isset($_POST['category'])) {
        $category_id = $_POST['dataPhone'];
        $FetchProducts = "SELECT * FROM product WHERE category_id = '$category_id'";
        $ProductsRESULT = mysqli_query($con, $FetchProducts);
        while ($rowProduct = mysqli_fetch_array($ProductsRESULT)) {
            $Products_name = $rowProduct['name'];
            $Products_price = $rowProduct['price'];
            $Products_memory = $rowProduct['memory'];
            $Products_id = $rowProduct['id'];
            $Products_pic = $rowProduct['pic1'];
            echo '
            <div class="col-md-3">
            <div class="single_property">
                <div class="property_thumb">
                    <div class="property_tag">
                        available
                    </div>
                    <img src="admin/uploads/' . $Products_pic . '" alt="">
                </div>
                <div class="property_content">
                    <div class="main_pro">
                        <h3><a href="#">' . $Products_name . '</a></h3>
                        <div class="mark_pro">
                            <img src="img/svg_icon/location.svg" alt="">
                            <span>The Phone Vendors</span>
                        </div>
                    </div>
                </div>
                <div class="footer_pro">
                    <ul>
                        <li>
                            <div class="single_info_doc">
                                <span>₦</span>
                                <span>' . number_format($Products_price) . '</span>
                            </div>
                        </li>
                        <li>
                            <div class="single_info_doc">
                                <span>' . $Products_memory . '</span>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="property_content">
                    <div class="main_pro">
                        <form action="includes/add_to_cart.php" method="POST">
                            <input type="hidden" name="cart" value="' . $Products_id . '">
                            <button type="submit" class="amount"> add to cart</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
';
        }
    }

    ?>

    </div>
    </div>





    <!-- footer start -->
    <?php include 'footer.php' ?>
    <!--/ footer end  -->

    <!-- link that opens popup -->

    <script>
        var count, name;
        for (count = 1; count > 0; count++) {
            name = "tag" + count;
            var red = document.getElementById(name);
            if (red.innerHTML.match("land lease") || red.innerHTML.match("land rent") || red.innerHTML.match("house rent")) {
                red.style.backgroundColor = "red";
            }
        }
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://static.codepen.io/assets/common/stopExecutionOnTimeout-de7e2ef6bfefd24b79a3f68b414b87b8db5b08439cac3f1012092b2290c719cd.js"></script>

    <script src=" https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"> </script>
    <!-- JS here -->
    <script src="js/vendor/modernizr-3.5.0.min.js"></script>
    <script src="js/vendor/jquery-1.12.4.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- <script src="js/owl.carousel.min.js"></script> -->
    <script src="js/isotope.pkgd.min.js"></script>
    <script src="js/ajax-form.js"></script>
    <script src="js/waypoints.min.js"></script>
    <script src="js/jquery.counterup.min.js"></script>
    <script src="js/imagesloaded.pkgd.min.js"></script>
    <script src="js/scrollIt.js"></script>
    <script src="js/jquery.scrollUp.min.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/nice-select.min.js"></script>
    <script src="js/jquery.slicknav.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/gijgo.min.js"></script>
    <script src="js/slick.min.js"></script>



    <!--contact js-->
    <script src="js/contact.js"></script>
    <script src="js/jquery.ajaxchimp.min.js"></script>
    <script src="js/jquery.form.js"></script>
    <script src="js/jquery.validate.min.js"></script>
    <script src="js/mail-script.js"></script>


    <script src="js/main.js"></script>
    <script>
        function collision($div1, $div2) {
            var x1 = $div1.offset().left;
            var w1 = 40;
            var r1 = x1 + w1;
            var x2 = $div2.offset().left;
            var w2 = 40;
            var r2 = x2 + w2;

            if (r1 < x2 || x1 > r2)
                return false;
            return true;
        }
        // Fetch Url value 
        var getQueryString = function(parameter) {
            var href = window.location.href;
            var reg = new RegExp('[?&]' + parameter + '=([^&#]*)', 'i');
            var string = reg.exec(href);
            return string ? string[1] : null;
        };
        // End url 
        // // slider call
        $('#slider').slider({
            range: true,
            min: 20,
            max: 200,
            step: 1,
            values: [getQueryString('minval') ? getQueryString('minval') : 20, getQueryString('maxval') ?
                getQueryString('maxval') : 200
            ],

            slide: function(event, ui) {

                $('.ui-slider-handle:eq(0) .price-range-min').html(ui.values[0] + 'K');
                $('.ui-slider-handle:eq(1) .price-range-max').html(ui.values[1] + 'K');
                $('.price-range-both').html('<i>K' + ui.values[0] + ' - </i>K' + ui.values[1]);

                // get values of min and max
                $("#minval").val(ui.values[0]);
                $("#maxval").val(ui.values[1]);

                if (ui.values[0] == ui.values[1]) {
                    $('.price-range-both i').css('display', 'none');
                } else {
                    $('.price-range-both i').css('display', 'inline');
                }

                if (collision($('.price-range-min'), $('.price-range-max')) == true) {
                    $('.price-range-min, .price-range-max').css('opacity', '0');
                    $('.price-range-both').css('display', 'block');
                } else {
                    $('.price-range-min, .price-range-max').css('opacity', '1');
                    $('.price-range-both').css('display', 'none');
                }

            }
        });

        $('.ui-slider-range').append('<span class="price-range-both value"><i>' + $('#slider').slider('values', 0) +
            ' - </i>' + $('#slider').slider('values', 1) + '</span>');

        $('.ui-slider-handle:eq(0)').append('<span class="price-range-min value">' + $('#slider').slider('values', 0) +
            'k</span>');

        $('.ui-slider-handle:eq(1)').append('<span class="price-range-max value">' + $('#slider').slider('values', 1) +
            'k</span>');
    </script>
</body>

</html>