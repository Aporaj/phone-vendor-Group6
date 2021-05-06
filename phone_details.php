<!doctype html>
<html class="no-js" lang="zxx">

<?php include 'head.php' ?>

<body>

    <!-- header-start -->
    <?php include 'header.php' ?>
    <!-- header-end -->
    <!-- slider_area_start -->
    <div class="bradcam_area bradcam_bg_1">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="bradcam_text text-center">
                        <h3>Product Detail </h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br><br><br>
    <!-- slider_area_end -->
    <!--Section: Block Content-->

    <?php
    include("includes/db.php");
    $id = $_GET['PD_ID'];
    $seletQuery = "SELECT * FROM product WHERE id = '$id'";
    $result = mysqli_query($con, $seletQuery);
    while ($row = mysqli_fetch_array($result)) {
        $propertyName = $row['name'];
        $propertyPrice = $row['price'];
        $memory = $row['memory'];
        $image1 = $row['pic1'];
        $os = $row['os'];
        $image2 = $row['pic2'];
        $Products_id = $row['id'];
        $display = $row['display'];
        $camera = $row['camera'];
        $sensor = $row['sensor'];
        $battery = $row['battery'];
        $battery = $row['battery'];
        $network = $row['network'];
        $propertyDiscription = $row['description'];
    } ?>
    <section class="mb-5 container">

        <div class="row">
            <div class="col-md-6 mb-4 mb-md-0">
                <div class="mdb-lightbox">
                    <div class="row product-gallery mx-1">
                        <div class="col-12 mb-0">
                            <figure class="view overlay rounded z-depth-1 main-img">
                                <a href="admin/uploads/<?php echo $image1 ?>" data-size="710x823">
                                    <img src="admin/uploads/<?php echo $image1 ?>" class="img-fluid z-depth-1">
                                </a>
                            </figure>
                        </div>
                        <div class="col-12">
                            <div class="row">
                                <div class="col-3">
                                    <div class="view overlay rounded z-depth-1 gallery-item">
                                        <img src="admin/uploads/<?php echo $image1 ?>" class="img-fluid">
                                        <div class="mask rgba-white-slight"></div>
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="view overlay rounded z-depth-1 gallery-item">
                                        <img src="admin/uploads/<?php echo $image2 ?>" class="img-fluid">
                                        <div class="mask rgba-white-slight"></div>
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="view overlay rounded z-depth-1 gallery-item">
                                        <img src="admin/uploads/<?php echo $image1 ?>" class="img-fluid">
                                        <div class="mask rgba-white-slight"></div>
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="view overlay rounded z-depth-1 gallery-item">
                                        <img src="admin/uploads/<?php echo $image2 ?>" class="img-fluid">
                                        <div class="mask rgba-white-slight"></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>

            </div>
            <div class="col-md-6">

                <h2><?php echo $propertyName ?></h2>
                <br><br><br>

                <div class="table-responsive">
                    <table class="table table-sm table-borderless mb-0">
                        <tbody>
                            <tr>
                                <th class="pl-0 w-25" scope="row"><strong>Price</strong></th>
                                <td><span>₦ </span><?php echo number_format($propertyPrice) ?></td>
                            </tr>

                            <tr>
                                <th class="pl-0 w-25" scope="row"><strong>Memory</strong></th>
                                <td><?php echo $memory ?></td>
                            </tr>
                            <tr>
                                <th class="pl-0 w-25" scope="row"><strong>Operating System</strong></th>
                                <td><?php echo $os ?></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <hr>

                <button type="button" class="btn btn-primary btn-md mr-1 mb-2">Buy now</button>
                <form action="includes/add_to_cart.php" method="POST">
                    
                    <!-- <button type="submit" class="amount"> add to cart</button> -->
                    <button type="submit" class="btn btn-light btn-md mr-1 mb-2"><i class="fa fa-shopping-cart pr-2"></i>Add to cart</button>
                    <input type="hidden" name="cart" value="<?php echo $Products_id;?>">
                </form>
            </div>
        </div><br><br>

        <div class="classic-tabs border rounded px-4 pt-1">

            <ul class="nav tabs-primary nav-justified" id="advancedTab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active show" id="description-tab" data-toggle="tab" href="#description" role="tab" aria-controls="description" aria-selected="true">Description</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="info-tab" data-toggle="tab" href="#info" role="tab" aria-controls="info" aria-selected="false">Information</a>
                </li>

            </ul>
            <div class="tab-content" id="advancedTabContent">
                <div class="tab-pane fade show active" id="description" role="tabpanel" aria-labelledby="description-tab">
                    <h5>Product Description</h5>

                    <h6> <span>₦ </span><?php echo number_format($propertyPrice) ?></h6>
                    <p class="pt-1"><?php echo $propertyDiscription ?></p>
                </div>
                <div class="tab-pane fade" id="info" role="tabpanel" aria-labelledby="info-tab">
                    <h5>Additional Information</h5>
                    <table class="table table-striped table-bordered mt-3">
                        <thead>
                            <tr>
                                <th scope="row" class="w-150 dark-grey-text h6">Camera</th>
                                <td><em><?php echo $camera?></em></td>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row" class="w-150 dark-grey-text h6">Display</th>
                                <td><em><?php echo $display?></em></td>
                            </tr>
                        </tbody>
                        <tbody>
                            <tr>
                                <th scope="row" class="w-150 dark-grey-text h6">Sensor</th>
                                <td><em><?php echo $sensor?></em></td>
                            </tr>
                        </tbody>
                        <tbody>
                            <tr>
                                <th scope="row" class="w-150 dark-grey-text h6">Battery</th>
                                <td><em><?php echo $battery?></em></td>
                            </tr>
                        </tbody>
                        <tbody>
                            <tr>
                                <th scope="row" class="w-150 dark-grey-text h6">Network</th>
                                <td><em><?php echo $network?></em></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

    </section>
    <!--Section: Block Content-->
    <!-- Classic tabs -->

    <!-- Classic tabs -->


    <!-- footer start -->
    <?php include 'footer.php'; ?>
    <!--/ footer end  -->

    <!-- link that opens popup -->
    <!-- JS here -->
    <script src="js/vendor/modernizr-3.5.0.min.js"></script>
    <script src="js/vendor/jquery-1.12.4.min.js"></script>
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
        $(document).ready(function() {
            // MDB Lightbox Init
            $(function() {
                $("#mdb-lightbox-ui").load("mdb-addons/mdb-lightbox-ui.html");
            });
        });
    </script>
</body>

</html>