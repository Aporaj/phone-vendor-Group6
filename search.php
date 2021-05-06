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
<?php


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
                </div    >
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
?>