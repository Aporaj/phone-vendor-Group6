<style>
    .btn-property {
        font-size: 16px;
        color: #001D38;
        font-weight: 500;
        margin-bottom: 0;
        margin-bottom: 8px;
        margin-left: -10px;
        border: none;
        background-color: transparent;
    }

    .btn-property:hover {
        cursor: pointer;
        color: #FDAE5C;
        -webkit-transition: 0.5s;
        -moz-transition: 0.5s;
        -o-transition: 0.5s;
        transition: 0.5s;
    }
</style>
<div class="popular_property">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="section_title mb-40 text-center">
                    <h3>Latest Phone</h3>
                </div>
            </div>
        </div>
        <div class="row">
            <?php
            include("includes/db.php");
            $Products_id = array();

            if (isset($_POST['category'])) {
                $category_id = $_POST['dataPhone'];
                $FetchProducts = "SELECT * FROM product WHERE category_id = '$category_id' ";
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
                            <img src="admin/uploads/'.$Products_pic.'" alt="">
                        </div>
                        <div class="property_content">
                            <div class="main_pro">
                            <h3><a href="phone_details.php?PD_ID=' . $Products_id . '">' . $Products_name . '</a></h3>
                                <div class="mark_pro">
                                   
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
            // search for anything
            elseif (isset($_POST['search_btn'])) {
                $category_id = $_POST['search'];
                $FetchProducts = "SELECT * FROM product WHERE category_id LIKE '$category_id' or name LIKE '$category_id'";
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
                            <h3><a href="phone_details.php?PD_ID=' . $Products_id . '">' . $Products_name . '</a></h3>
                                <div class="mark_pro">
                                   
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
            } elseif(true) {
                //iphone
                $FetchProducts = "SELECT * FROM product WHERE category_id = 'Iphone' limit 4";
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
                        <h3><a href="phone_details.php?PD_ID=' . $Products_id . '">' . $Products_name . '</a></h3>
                        <div class="mark_pro">
                            
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

                //Samsung
                $FetchProducts = "SELECT * FROM product WHERE category_id = 'Samsung' limit 4";
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
                    <h3><a href="phone_details.php?PD_ID=' . $Products_id . '">' . $Products_name . '</a></h3>
                        <div class="mark_pro">
                            <!-- <i class="fa fa-user"></i>-->
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

                //Tecno
                $FetchProducts = "SELECT * FROM product WHERE category_id = 'Tecno' limit 4";
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
                    <h3><a href="phone_details.php?PD_ID=' . $Products_id . '">' . $Products_name . '</a></h3>
                        <div class="mark_pro">
                            
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
            elseif(false) {
                echo '<h2> NOT AVAILABLE </h2>';
            }

            ?>




        </div>

        <!-- <div class="row">
            <div class="col-xl-12">
                <div class="more_property_btn text-center">
                    <a href="#" class="boxed-btn3-line">More Properties</a>
                </div>
            </div>
        </div> -->
    </div>
</div>
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