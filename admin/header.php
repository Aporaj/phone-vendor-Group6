<header>
    <div class="header-area ">
        <div class="header-top_area d-none d-lg-block">
            <div class="container">
                <div class="row">
                    <div class="col-xl-5 col-md-5 ">
                        <div class="header_left">
                            <p>Welcome to Phone Vendors</p>
                        </div>
                    </div>
                    <div class="col-xl-7 col-md-7">
                        <div class="header_right d-flex">
                            <div class="short_contact_list">
                                <ul>
                                    <li><a href="login.php"> <i class="fa fa-sign-out"></i> Login</a></li>
                                    <li><a href="logout.php"> <i class="fa fa-sign-in"></i> Logout</a></li>
                                </ul>
                            </div>
                            <div class="social_media_links">
                                <ul>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-user-circle" style="font-size: 15px;">

                                            </i>
                                            <span style="margin-left: 10px;">
                                                <?php
                                                include("includes/db.php");
                                                if (!empty($_SESSION['user_id'])) {
                                                    $user_id = $_SESSION["user_id"];
                                                } else {
                                                    $user_id = "";
                                                }
                                                $fname = array();
                                                $FetchName = "SELECT * FROM users WHERE id = '$user_id'";
                                                $NameRESULT = mysqli_query($con, $FetchName);
                                                while ($rowName = mysqli_fetch_array($NameRESULT)) {
                                                    $fname[] = ' ' . $rowName['username'];
                                                }
                                                ?>
                                                <span>
                                                    <?php
                                                    if (empty($fname)) {
                                                        echo '';
                                                    } else {
                                                        echo ' ' . $fname[0];
                                                    }
                                                    ?>
                                                </span>
                                        </a>
                                    </li>
                                </ul>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="sticky-header" class="main-header-area">
            <div class="container">
                <div class="header_bottom_border">
                    <div class="row align-items-center">
                        <div class="col-xl-3 col-lg-2">
                            <div class="logo">
                                <a href="index.php">
                                    <img src="img/logo.jpg" alt="" width="90" height="80">
                                </a>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-7">
                            <div class="main-menu  d-none d-lg-block">
                                <nav>
                                    <ul id="navigation">
                                        <li><a class="active" href="view_property.php">home</a></li>

                                        <li><a href="view_property.php">View Properties</a></li>
                                        <li><a href="uploadProduct.php">Upload phone</a></li>


                                    </ul>
                                </nav>
                            </div>

                        </div>
                        
                        
                        <div class="col-12">
                            <div class="mobile_menu d-block d-lg-none"></div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</header>