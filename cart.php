<?php
session_start();
ob_start();

?>
<!doctype html>
<html class="no-js" lang="zxx">

<?php include 'head.php' ?>

<body>
    <!-- header-start -->
    <?php include 'header.php' ?>
    <!-- header-end -->
    <div class="bradcam_area bradcam_bg_1">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="bradcam_text text-center">

                        <h3> Shopping cart</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="card shopping-cart">
            <div class="card-header bg-dark text-light">
                <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                Shipping cart
                <a href="index.php" class="btn btn-outline-info btn-sm pull-right">Continue shopping</a>
                <div class="clearfix"></div>
            </div>
            <div class="card-body">


                <?php
                include("includes/db.php");
                //delete cart
                if (isset($_POST['deleteCart'])) {
                    $idCartDelete = $_POST['DeleteCartId'];
                    $Delete = "DELETE FROM cart WHERE idCart = '$idCartDelete'";
                    if (mysqli_query($con, $Delete)) {
                        header('location: cart.php');
                    }
                }

                //update cart
                if (isset($_POST['updateCart'])) {
                    $idCartDelete = $_POST['updateCartId'];
                    $update_Num = intval($_POST['update_Num']);
                    $Update = "UPDATE cart SET quantity = '$update_Num' WHERE idCart = '$idCartDelete'";
                    if (mysqli_query($con, $Update)) {
                        header('location: cart.php');
                    }
                }

                // user id
                if (!empty($_SESSION['user_id'])) {

                    $user_id = $_SESSION["user_id"];
                } else {
                    $user_id = "";
                }

                // get product id
                $Products_id = array();
                $FetchProducts = "SELECT * FROM cart WHERE user_id = '$user_id'";
                $ProductsRESULT = mysqli_query($con, $FetchProducts);
                while ($rowProduct = mysqli_fetch_array($ProductsRESULT)) {
                    $Products_id[] = $rowProduct['product_id'];
                    $rowProduct['product_id'];
                }
                $NumberOfProduct = sizeof($Products_id);


                $totalPrice = array();
                for ($i = 0; $i < $NumberOfProduct; $i++) {
                    $P_id = $Products_id[$i];
                    $FetchName = "SELECT cart.quantity, cart.idCart, product.* FROM product INNER JOIN cart ON product.id = cart.product_id WHERE product.id = '$P_id'";
                    $NameRESULT = mysqli_query($con, $FetchName);
                    while ($rowName = mysqli_fetch_array($NameRESULT)) {
                        $Pname = $rowName['name'];
                        $Pprice = $rowName['price'];
                        $PDIS = $rowName['memory'];
                        $Ppic = $rowName['pic1'];
                        $quantity = $rowName['quantity'];
                        $idCart = $rowName['idCart'];


                        $price = intval($Pprice) * intval($quantity);
                        $totalPrice[] = $price; 

                        echo '
                            <div class="row">
                            <div class="col-12 col-sm-12 col-md-2 text-center">
                            <img class="img-responsive" src="admin/uploads/' . $Ppic . '" alt="prewiew" width="120" height="110">
                        </div>
                        <div class="col-12 text-sm-center col-sm-12 text-md-left col-md-6">
                            <h4 class="product-name"><strong>' . $Pname . '</strong></h4>
                            <h4>
                                <small>' . $PDIS . '</small>
                            </h4>
                        </div>

                        <div class="col-8 col-sm-8 text-sm-center col-md-4 text-md-right row">
                            <div class="col-3 col-sm-3 col-md-6 text-md-right" style="padding-top: 5px">
                                <h6><strong> <span>₦ </span>' . number_format($price) . ' <span class="text-muted"></span></strong></h6>
                            </div>';
                        echo ' <div class="col-6 col-sm-6 col-md-6 me">
                                <form action="cart.php" method="POST">

                                    <div class="quantity ">
                                        <input type="number" name="update_Num" step="1" max="99" min="1" value="' . $quantity . '" title="Qty" class="qty" >
                                    </div>

                                    <input type="hidden" name="DeleteCartId" value="' . $idCart . '">
                                    <button type="submit" name="deleteCart" class="btn btn-outline-danger btn-xs">
                                        <i class="fa fa-trash" aria-hidden="true"></i>
                                    </button><br><br>
                                    
                                    <input type="hidden" name="updateCartId" value="' . $idCart . '">
                                    <button type="submit" name="updateCart" class="btn btn-outline-success btn-xs">
                                        <i class="fa fa-arrow-up" aria-hidden="true"></i>
                                    </button>
                                </form>
                            </div>
                        </div>
                        </div>
                        <hr>';
                    }
                    
                }
                ?>
                <!-- END PRODUCT -->

                
            </div>
            <div class="card-footer">
                <div class="pull-right" style="margin: 10px">
                    <a href="" class="btn btn-success pull-right">Checkout</a>
                    <div class="pull-right" style="margin: 5px">
                        Total price: <b> <span>₦</span> <?php echo number_format(array_sum($totalPrice)); ?></b>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br><br>
    <br><br>
    <!-- footer start -->
    <?php include 'footer.php' ?>
    <!--/ footer end  -->
    <script type="text/javascript">

    </script>
</body>

</html>