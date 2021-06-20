<?php require '../db.php';
?>
<?php
$img2 = "./assets/img/";

if (isset($_POST['submit'])) {
    $id = $_POST['id'];
    $prodid = $_POST['product_id'];
    $sizeid = $_POST['size_id'];
    $trailer_weight = $_POST['trailer_weight'];
    $chassis = $_POST['chassis'];
    $landing_leg = $_POST['landing_leg'];
    $axles = $_POST['axles'];
    $king_pin = $_POST['king_pin'];
    $suspension = $_POST['suspension'];
    $brakes = $_POST['brakes'];
    $painting = $_POST['painting'];
    $other_fitments = $_POST['other_fitments'];
    $paca = $_POST['payload_capacity'];
    $uwot = $_POST['unleaden_weight_of_trailer'];
    $glwot = $_POST['gross_leaden_weight_of_trailer'];
    $vol = $_POST['volume'];
    $olot = $_POST['overall_length_of_trailer'];
    $owot = $_POST['overall_width_of_trailer'];
    $ohotar = $_POST['overall_height_of_trailer_at_rear'];
    $aot = $_POST['angle_of_tip'];
    $filetmp = $_FILES["img1"]["tmp_name"];
    $filename = $_FILES["img1"]["name"];
    $filetype = $_FILES["img1"]["type"];
    $filepath = "../assets/img/" . $filename;
    move_uploaded_file($filetmp, $filepath);
    $img2 = $img2 . $filename;
    mysqli_query($connection, "INSERT INTO  product_spec VALUES (DEFAULT,'$prodid','$sizeid','$img2','$trailer_weight','$chassis','$landing_leg','$axles','$king_pin','$suspension','','$brakes','','','','$painting','$other_fitments','$paca','$uwot','$glwot','$vol','$olot','$owot','$ohotar','$aot','','','')");

    // header('location: engworks.php');
}
if (isset($_GET['add'])) {
    $cat_id =   $_GET['add'];
    $product_desc_fetch = $connection->query("SELECT * from product_spec WHERE product_id in (SELECT product_id FROM `product` WHERE `cat_id` = $cat_id)");
}
// $product_desc_fetch = $connection->query("SELECT * from product_spec");
?>
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from www.ravijaiswal.com/Jais_admin/index.html by HTTrack Website Copier/3.x [XR&CO'2017], Fri, 04 Aug 2017 15:24:40 GMT -->

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard | VP Automobiles</title>
    <link href=".././assets/img/favicon.png" rel="icon">


    <!--STYLESHEET-->
    <!--=================================================-->

    <link href="assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/essentials.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/layout.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/jais.css" rel="stylesheet">
    <link href="assets/css/demo/jais-demo-icons.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <link href="https://code.jquery.com/ui/1.10.4/themes/ui-lightness/jquery-ui.css" rel="stylesheet">
    <!-- <link href="assets/css/demo/jais-demo.css" rel="stylesheet"> -->

</head>

<!--TIPS-->
<!--You may remove all ID or Class names which contain "demo-", they are only used for demonstration. -->

<body>
    <div id="container" class="effect aside-float aside-bright mainnav-lg">

        <!--NAVBAR-->
        <!--===================================================-->
        <header id="navbar">
            <div id="navbar-container" class="boxed">

                <!--Brand logo & name-->
                <!--================================-->
                <div class="navbar-header">
                    <a href="index.html" class="navbar-brand">
                        <div class="brand-title">
                            <span class="brand-text">Dashboard</span>
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
        </header>
        <!--===================================================-->
        <!--END NAVBAR-->

        <div class="boxed">

            <!--CONTENT CONTAINER-->
            <!--===================================================-->
            <div id="content-container">

                <!--Page Title-->
                <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                <div id="page-title">
                    <h1 class="page-header text-overflow">Product</h1>
                </div>
                <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                <!--End page title-->

                <!--Page content-->
                <!--===================================================-->

                <div id="content" class="dashboard padding-20">

                    <!-- 
                        PANEL CLASSES:
                            panel-default
                            panel-danger
                            panel-warning
                            panel-info
                            panel-success

                        INFO:   panel collapse - stored on user localStorage (handled by app.js _panels() function).
                                All pannels should have an unique ID or the panel collapse status will not be stored!
                    -->
                    <div id="panel-1" class="panel panel-default">
                        <div class="panel-heading">
                            <span class="title elipsis">
                                <strong style="text-transform: uppercase;font-weight: bold;">product specification</strong>
                                <!-- panel title -->
                            </span>
                            <!-- /right options -->

                        </div>

                        <!-- panel content -->
                        <div class="panel-body">
                            <form action="" enctype="multipart/form-data" method="POST">
                                <label for="inputEmail4">ID</label>
                                <input type="text" class="form-control" name="id" placeholder="Id">
                                <label for="inputEmail4">Product ID</label>
                                <input type="text" class="form-control" name="product_id" placeholder="Id">
                                <label for="inputEmail4">Size ID</label>
                                <input type="text" class="form-control" name="size_id" placeholder="Id">
                                <label for="inputEmail4">Trailer weight</label>
                                <textarea rows="2" cols="38" name="trailer_weight" class="form-control"></textarea>
                                <label for="inputEmail4">Chassis</label>
                                <textarea rows="2" cols="38" name="chassis" class="form-control"></textarea>
                                <label for="inputEmail4">Landing Leg</label>
                                <textarea rows="2" cols="38" name="landing_leg" class="form-control"></textarea>
                                <label for="inputEmail4">Axles</label>
                                <textarea rows="2" cols="38" name="axles" class="form-control"></textarea>
                                <label for="inputEmail4">King pin </label>
                                <textarea rows="2" cols="38" name="king_pin" class="form-control"></textarea>
                                <label for="inputEmail4">Suspension</label>
                                <textarea rows="2" cols="38" name="suspension" class="form-control"></textarea>
                                <label for="inputEmail4">Brakes</label>
                                <textarea rows="2" cols="38" name="brakes" class="form-control"></textarea>
                                <label for="inputEmail4">Electrical</label>
                                <textarea rows="2" cols="38" name="electrical" class="form-control"></textarea>
                                <label for="inputEmail4">Painting</label>
                                <textarea rows="2" cols="38" name="painting" class="form-control"></textarea>
                                <label for="inputEmail4">Other Fitments</label>
                                <textarea rows="2" cols="38" name="other_fitments" class="form-control"></textarea>
                                <label for="inputEmail4">Payload Capacity</label>
                                <textarea rows="2" cols="38" name="payload_capacity" class="form-control"></textarea>
                                <label for="inputEmail4">Unleaden Weight of Trailer </label>
                                <textarea rows="2" cols="38" name="unleaden_weight_of_trailer" class="form-control"></textarea>
                                <label for="inputEmail4">Gross Leaden Weight of Trailer</label>
                                <textarea rows="2" cols="38" name="gross_leaden_weight_of_trailer" class="form-control"></textarea>
                                <label for="inputEmail4">Volume</label>
                                <textarea rows="2" cols="38" name="volume" class="form-control"></textarea>
                                <label for="inputEmail4">Overall Length of Trailer</label>
                                <textarea rows="2" cols="38" name="overall_length_of_trailer" class="form-control"></textarea>
                                <label for="inputEmail4">Overall Width of Trailer</label>
                                <textarea rows="2" cols="38" name="overall_width_of_trailer" class="form-control"></textarea>
                                <label for="inputEmail4">Overall Height of Trailer At Rear</label>
                                <textarea rows="2" cols="38" name="overall_height_of_trailer_at_rear" class="form-control"></textarea>
                                <label for="inputEmail4">Angle of Tip</label>
                                <textarea rows="2" cols="38" name="angle_of_tip" class="form-control"></textarea>
                                <div class="container">
                                    <label for="exampleFormControlFile1">Image</label>
                                    <input type="file" name="img1" class="form-control-file" id="exampleFormControlFile1">
                                    Formats: JPEG, JPG, PNG AND PDF.<br>
                                    Size: 2MB per image.<br>
                                    Only 1 image is allowed.
                                </div>
                                <button type="button" class="btn btn-danger btn-secondary" data-dismiss="modal">CLOSE</button>
                                <input type="submit" data-toggle="modal" data-target="#myModal2" name="submit" value="ADD" data-dismiss="modal" class="btn btn-primary">

                        </div>
                        <!-- /panel content -->
                    </div>
                    <!-- /PANEL -->




                    <p>Please add your ENGWORKS product specification details here.</p>
                    <!--===================================================-->
                    <!--End page content-->


                    <!-- /PANEL -->

                </div>

            </div>
            <?php
            /*if(isset($_REQUEST['product_id']))
                        {
                            $prod_id=$_REQUEST['product_id'];
                            $delprod=$mysqli->query("DELETE FROM product WHERE product_id='$prod_id'");
                        } */
            ?>
            <!--===================================================-->
            <!--END CONTENT CONTAINER-->





            <!--MAIN NAVIGATION-->
            <!--===================================================-->
            <nav id="mainnav-container">
                <div id="mainnav">

                    <!--Menu-->
                    <!--================================-->
                    <div id="mainnav-menu-wrap">
                        <div class="nano">
                            <div class="nano-content">

                                <!--Profile Widget-->
                                <!--================================-->
                                <div id="mainnav-profile" class="mainnav-profile">
                                    <div class="profile-wrap">
                                        <div class="pad-btm">
                                            <img class="img-circle img-sm img-border" src="assets/images/2.png" alt="Profile Picture">
                                        </div>
                                    </div>
                                </div>



                                <ul id="mainnav-menu" class="list-group">

                                    <!--Category name-->
                                    <li class="list-header">Navigation</li>

                                    <!--Menu list item-->
                                    <li>
                                        <a href="index.php">
                                            <i class="fa fa-tachometer"></i>
                                            <span class="menu-title">
                                                <strong>Timeline</strong>
                                            </span>
                                        </a>
                                    </li>

                                    <li>
                                        <a href="product_category.php">
                                            <i class="fa fa-pencil-square-o"></i>
                                            <span class="menu-title">Product Category</span>
                                        </a>
                                    </li>


                                    <!--Menu list item-->
                                    <li class="active-link">
                                        <a href="#">
                                            <i class="fa fa-heart"></i>
                                            <span class="menu-title">Product Specification</span>
                                            <i class="arrow"></i>
                                        </a>

                                        <!--Submenu-->
                                        <?php
                                        echo '<ul class="collapse">
                                        <li><a href="product_spec.php?cat_id=' . '1' . '">ENGWORKS</a>
                                        </li> 
                                        <li><a href="product_spec.php?cat_id=' . '2' . '">AGRI PRODUCTS</a>
                                        </li> 
                                        <li><a href="sonalika.php">SONALIKA</a>
                                        </li> 
                                        <li><a href="ashok.php">ASHOK</a>
                                        </li>                                     
                                        </ul>';
                                        ?>
                                    </li>

                                    <!--Menu list item-->
                                    <li>
                                        <a href="product.php">
                                            <i class="fa fa-plus-square"></i>
                                            <span class="menu-title">Products</span>
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
            <!--END MAIN NAVIGATION-->

        </div>
        <!-- FOOTER -->
        <!--===================================================-->
        <footer id="footer">

            <!-- Visible when footer positions are fixed -->
            <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
            <div class="show-fixed pull-right">
                You have <a href="#" class="text-bold text-main"><span class="label label-danger">3</span> pending action.</a>
            </div>




            <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
            <!-- Remove the class "show-fixed" and "hide-fixed" to make the content always appears. -->
            <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->

            <p class="pad-lft">&#0169; 2020 Copyright VP Automobile</p>



        </footer>
        <!--===================================================-->
        <!-- END FOOTER -->


        <!-- SCROLL PAGE BUTTON -->
        <!--===================================================-->
        <button class="scroll-top btn">
            <i class="pci-chevron chevron-up"></i>
        </button>
        <!--===================================================-->




        <!--===================================================-->
        <!-- END OF CONTAINER -->



    </div>
    <!--JAVASCRIPT-->
    <!--=================================================-->
    <script src="assets/plugins/jquery/jquery-2.1.4.min.js"></script>
    <script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript">
        var plugin_path = 'assets/plugins/index.html';
    </script>
    <script src="assets/js/app.js"></script>
    <script src="assets/js/jais.js"></script>
    <script src="assets/js/demo/jais-demo.min.js"></script>
    <script src="https://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>

</body>

<!-- Mirrored from www.ravijaiswal.com/Jais_admin/index.html by HTTrack Website Copier/3.x [XR&CO'2017], Fri, 04 Aug 2017 15:25:58 GMT -->

</html>