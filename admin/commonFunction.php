<?php

// Initialize the session
session_start();

// Check if the user is logged in, if not then redirect him to login page
if (!isset($_SESSION["name"])) {
    header("Location:login.php");
    // exit;
}

// echo $_SESSION["name"];

$nav = '        <header id="navbar">
<div id="navbar-container" class="boxed">

    <!--Brand logo & name-->
    <!--================================-->
    <div class="navbar-header">
        <a href="index.php" class="navbar-brand">
            <div class="brand-title">
                <img class="brand-icon" src="../images/pinwheel.svg"> </img>
                <span class="brand-text" >TPRM</span>
            </div>
        </a>
    </div>
    <!--================================-->
    <!--End brand logo & name-->


    <!--Navbar Dropdown-->
    <!--================================-->
    <div class="navbar-content clearfix">
        <ul class="nav navbar-top-links pull-left">

            <!--Navigation toogle button-->
            <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
            <li class="tgl-menu-btn">
                <a class="mainnav-toggle" href="#">
                    <i class="demo-pli-view-list"></i>
                </a>
            </li>
            <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
            <!--End Navigation toogle button-->



            
        </ul>
    </div>
    <!--================================-->
    <!--End Navbar Dropdown-->

</div>
</header>';

$sideNav = '<!--MAIN NAVIGATION-->
<!--===================================================-->
<nav id="mainnav-container">
    <div id="mainnav">

        <!--Menu-->
        <!--================================-->
        <div id="mainnav-menu-wrap">
            <div class="nano">
                <div class="nano-content">




                    <ul id="mainnav-menu" class="list-group">

                        <!--Menu list item-->
                        <li>
                            <a href="services.php">
                                <i class="fa fa-server"></i>
                                <span class="menu-title">Services</span>
                                <i class="arrow"></i>
                            </a>
                            <!--Submenu-->
                            <ul class="collapse">
                            <li><a href="services.php?service_type=ourservices">Our Services</a>
                            </li> 
                            <li><a href="product_spec.php?cat_id=forthirdparty">For Third Party</a>
                            </li> 
                            <li><a href="product_spec.php?cat_id=forenterprise">For Enterprise</a>
                            </li> 
                            </ul>
                        </li>

                        <!--Menu list item-->
                        <li>
                            <a href="aboutus.php">
                                <i class="fa fa-info"></i>
                                <span class="menu-title">About us</span>
                                <i class="arrow"></i>
                            </a>
                        </li>

                        <li>
                            <a href="blog.php">
                                <i class="fa fa-newspaper-o"></i>
                                <span class="menu-title">Blog</span>
                                <i class="arrow"></i>
                            </a>
                        </li>
                        
                        <li>
                        <a href="contactus.php">
                            <i class="fa fa-phone"></i>
                            <span class="menu-title">Contact Us</span>
                            <i class="arrow"></i>
                        </a>
                    </li>

                    <li>
                        <a href="logout.php">
                            <i class="fa fa-sign-out"></i>
                            <span class="menu-title">Logout</span>
                        </a>
                    </li>


                    </ul>
                </div>
            </div>
            <!--================================-->
            <!--End widget-->


        </div>
        <!--================================-->
        <!--End menu-->

    </div>
</nav>
<!--===================================================-->
<!--END MAIN NAVIGATION-->';
