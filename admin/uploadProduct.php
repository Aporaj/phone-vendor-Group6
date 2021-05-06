<!doctype html>
<html class="no-js" lang="zxx">

<?php include 'head.php' ?>

<body>
    <!-- header-start -->
    <?php include 'header.php' ?>
    <!-- header-end -->

    <!-- slider_area_start -->
    <div class="slider_area">
        <div class="single_slider single_slider2  d-flex align-items-center property_bg overlay2">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-10 offset-xl-1">
                        <div class="property_wrap">
                            <div class="slider_text text-center justify-content-center">
                                <h3>Upload a Product</h3>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- slider_area_end -->
    <div class="container" style="margin-left: 22%;">
        <div class="mt-10">
            <div class="col-lg-8 col-md-8"><br>
                <h2 class="mb-30" style="text-align: center;">Add phones</h2>
                <form method="post" action="uploadProduct.php" enctype="multipart/form-data">
                    <?php
                    //require('PHPMailer/PHPMailerAutoload.php'); 
                    //require('crediantial.php');
                    include("includes/db.php");
                    if (isset($_POST["submit"])) {
                        $name = trim(mysqli_real_escape_string($con, $_POST['name']));
                        $category = trim(mysqli_real_escape_string($con, $_POST['category']));
                        $price = trim(mysqli_real_escape_string($con, $_POST['price']));
                        $memory = trim(mysqli_real_escape_string($con, $_POST['memory']));
                        $display = trim(mysqli_real_escape_string($con, $_POST['display']));
                        $camera = trim(mysqli_real_escape_string($con, $_POST['camera']));
                        $sensor = trim(mysqli_real_escape_string($con, $_POST['sensor']));
                        $battery = trim(mysqli_real_escape_string($con, $_POST['battery']));
                        $os = trim(mysqli_real_escape_string($con, $_POST['os']));
                        $network = trim(mysqli_real_escape_string($con, $_POST['network']));
                        $description = trim(mysqli_real_escape_string($con, $_POST['description']));

                        //Image works
                        // File upload path
                        $targetDir = "uploads/";
                        $fileName1 = basename($_FILES["file1"]["name"]);
                        $fileName2 = basename($_FILES["file2"]["name"]);
                        $targetFilePath = $targetDir . $fileName1;
                        $targetFilePath2 = $targetDir . $fileName2;
                        $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION);

                        if (isset($_POST["submit"]) && !empty($_FILES["file1"]["name"]) && !empty($_FILES["file2"]["name"])) {
                            // Allow certain file formats
                            $allowTypes = array('jpg', 'png', 'jpeg', 'gif', 'pdf');
                            if (in_array($fileType, $allowTypes)) {
                                // Upload file to server
                                if (move_uploaded_file($_FILES["file1"]["tmp_name"], $targetFilePath) && move_uploaded_file($_FILES["file2"]["tmp_name"], $targetFilePath2)) {
                                }
                            }
                        }

                        //End of Image works		

                        $result = "INSERT INTO product (name, category_id, price, memory, display, camera, sensor, battery, OS, description, network, pic1, pic2)
                                                VALUES('$name', '$category', '$price', '$memory', '$display', '$camera', '$sensor', '$battery', '$os', '$description', '$network', '$fileName1', '$fileName2')";
                        if (mysqli_query($con, $result)) {


                            echo "<script type=\"text/javascript\">
                            alert(\"Thanks your property sales application has been successfully logged. Our admin will call you for verification and inspection.\");
                            window.location = \"uploadProduct.php\"
                        </script>";
                        } else {
                            echo  "<script type=\"text/javascript\">
                            alert(\"Error executing query.\");
                            window.location = \"uploadProduct.php\"
                        </script>" . mysqli_error($con);
                        }
                    }
                    ?>

                    <div class="form-me">
                        <label for=""><strong>Name of phone</strong></label>
                        <input type="text" name="name" placeholder="Iphone 12 pro max" required class="form-control">
                    </div>
                    <br>
                    <div class="form-me">
                        <label for=""><strong>Price</strong></label>
                        <input type="number" name="price" placeholder="200000" required class="form-control">
                    </div>
                    <br>
                    <div class="form-me">
                        <label for=""><strong>Select category of the phone</strong></label>
                        <select name="category" class="form-control" style="width: 100%;">
                            <option value="">---------</option>
                            <option value="Iphone">Iphone</option>
                            <option value="Samsung">Samsung</option>
                            <option value="Tecno">Tecno</option>
                            <option value="Infinix">Infinix</option>
                            <option value="Itel">Itel</option>
                        </select>
                    </div>
                    <br>
                    <div class="form-me">
                        <label for=""><strong>Memory</strong></label>
                        <input type="text" name="memory" placeholder="2 gb ram, 12 gb" required class="form-control">
                    </div>
                    <br>
                    <div class="form-me">
                        <label for=""><strong>Display</strong></label>
                        <input type="text" name="display" placeholder="16-6 inch" required class="form-control">
                    </div>
                    <br>
                    <div class="form-me">
                        <label for=""><strong>Camera</strong></label>
                        <input type="text" name="camera" placeholder="front 12 " required class="form-control">
                    </div>
                    <br>
                    <div class="form-me">
                        <label for=""><strong>Battery</strong></label>
                        <input type="text" name="battery" placeholder="200mA" required class="form-control">
                    </div>
                    <br>
                    <div class="form-me">
                        <label for=""><strong>Oprating System</strong></label>
                        <input type="text" name="os" placeholder="Android 10 Operating Syatem" required class="form-control">
                    </div>
                    <br>
                    <div class="form-me">
                        <label for=""><strong>Sensor</strong></label>
                        <input type="text" name="sensor" placeholder="Bluetooth, finger print, Face recorg." required class="form-control">
                    </div>
                    <br>
                    <div class="form-me">
                        <label for=""><strong>Network</strong></label>
                        <input type="text" name="network" placeholder="5G" required class="form-control">
                    </div>
                    <br>

                    <div class="form-me">
                        <textarea class="form-control" name="description" placeholder="Give description of this phone" required></textarea>
                    </div>
                    <br>

                    <div class="form-me">
                        <label for=""><strong>Upload 1st Photo of the phone</strong></label>
                        <input type="file" name="file1" placeholder="2 gb ram" required class="form-control">
                    </div>
                    <br>

                    <div class="form-me">
                        <label for=""><strong>Upload 2nd Photo of the phone</strong></label>
                        <input type="file" name="file2" placeholder="2 gb ram" required class="form-control">
                    </div>
                    <br>

            </div>
            <div class="button-group-area mt-40">

                <div class="footer_widget">
                    <button type="submit" name="submit" class="btn btn-design">Upload phone</button>
                </div><br><br>

            </div>
            </form>
        </div>
    </div>
    </div>




    <?php //include'front_properties.php'
    ?>


    <!-- footer start -->
    <?php include 'footer.php' ?>
    <!--/ footer end  -->

    <!-- link that opens popup -->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://static.codepen.io/assets/common/stopExecutionOnTimeout-de7e2ef6bfefd24b79a3f68b414b87b8db5b08439cac3f1012092b2290c719cd.js"></script>

    <script src=" https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"> </script>
    <!-- JS here -->
    <script src="js/vendor/modernizr-3.5.0.min.js"></script>
    <!-- <script src="js/vendor/jquery-1.12.4.min.js"></script> -->
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
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
    <!-- <script src="js/gijgo.min.js"></script> -->
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