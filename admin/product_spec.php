<?php require '../db.php';
require 'commonFunction.php';
?>
<?php
if (isset($_GET['delete'])) {
    $productToDelete = $_GET['delete'];
    $cat_id =   $_GET['cat_id'];
    $delprod = $connection->query("DELETE FROM product_spec WHERE id='$productToDelete'");
    header('location: product_spec.php?cat_id=' . $cat_id);
    mysqli_free_result($product_desc_fetch);
    $product_desc_fetch = $connection->query("SELECT * from product_spec WHERE product_id in (SELECT product_id FROM `product` WHERE `cat_id` = $cat_id)");
} else if (isset($_GET['cat_id'])) {
    $cat_id =   $_GET['cat_id'];
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
        <?php
        echo $nav;
        ?>
        <!--===================================================-->
        <!--END NAVBAR-->

        <div class="boxed">

            <!--CONTENT CONTAINER-->
            <!--===================================================-->
            <div id="content-container">

                <!--Page Title-->
                <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                <div id="page-title">
                    <h1 class="page-header text-overflow">Products</h1>
                </div>
                <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                <!--End page title-->

                <!--Page content-->
                <!--===================================================-->

                <!-- <div id="content" class="dashboard padding-20"> -->

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
                <!-- <div id="panel-1" class="panel panel-default">
                        <div class="panel-heading">
                            <span class="title elipsis">
                                <strong style="text-transform: uppercase;font-weight: bold;">product specification</strong> -->
                <!-- panel title -->
                <!-- </span> -->
                <!-- /right options -->

                <!-- </div> -->

                <!-- panel content -->
                <!-- <div class="panel-body">
                            <h4>Here id represent product category.</h4>
                            <h5>PC_1 represents ENGWORKS</h5>
                            <h5>PC_2 represents AGRI PRODUCTS</h5>
                            <h5>PC_3 represents SONALIKA</h5>
                            <h5>PC_4 represents ASHOK</h5>
                        </div> -->
                <!-- /panel content -->
                <!-- </div> -->
                <!-- /PANEL -->




                <!-- <p>Please add your ENGWORKS product specification details here.</p> -->
                <!--===================================================-->
                <!--End page content-->


                <div id="panel-1" class="panel panel-default">
                    <div class="panel-heading">
                        <div id="page-title">
                            <?php
                            echo '<button type="button" class="btn btn-primary"><a style=text-decoration:none href="product_spec_add.php?add=' . $_GET['cat_id'] . '">ADD SPECIFICATION</a></button>';
                            ?>

                            <!--Searchbox-->
                            <br>
                        </div>

                        <!-- /right options -->
                    </div>

                    <!-- panel content -->
                    <div class="panel-body">

                        <div id="flot-sales" class="fullwidth ">

                            <?php
                            echo '<div class="table-responsive">
                               <table class="table table-bordered table-hover">
                                        <tr>    
                                            <th></th>
                                            <th></th>
                                            <th>Id</th>
                                            <th>Product_Name</th>
                                            <th>Size_Name</th>
                                            <th>Image</th>
                                            <th>Chassis</th>
                                            <th>Landing_leg</th>
                                            <th>Axles</th>
                                            <th>King_pin</th>
                                            <th>Suspension</th>
                                            <th>Tyre_wheel_rim</th>
                                            <th>Brakes</th>
                                            <th>Electrical</th>
                                            <th>Surface</th>
                                            <th>Suspension1</th>
                                            <th>Painting</th>
                                            <th>Other_fitments</th>
                                            <th>Added_by</th>
                                            <th>Added_on</th>
                                            <th>Active</th>
                                        </tr>';

                            while ($row = mysqli_fetch_array($product_desc_fetch)) {
                                $productID = $row['product_id'];
                                $sizeID = $row['size_id'];
                                $product_name_fetch = $connection->query("SELECT product_name from product where product_id= '$productID' ");
                                $product_size_fetch = $connection->query("SELECT size_name from product_size where size_id= '$sizeID' ");
                                $productNameRow = mysqli_fetch_row($product_name_fetch);
                                $productSizeRow = mysqli_fetch_row($product_size_fetch);
                                echo '<tr>
                                            <td><a href="product_spec_add.php?edit=' . $row['id'] . '&cat_id=' . $_GET['cat_id'] . '">EDIT</a></td>
                                            <td><a href="product_spec.php?cat_id=' . $_GET['cat_id'] . '&delete=' . $row['id'] . '">DELETE</a></td>
                                            <td>' . $row["id"] . '</td>
                                            <td>' . $productNameRow[0] . '</td>
                                            <td>' . $productSizeRow[0] . '</td>
                                            <td>' . $row["img_path"] . '</td>

                                            <td>' . $row["chassis"] . '</td>
                                            <td>' . $row["landing_leg"] . '</td>
                                            <td>' . $row["axles"] . '</td>
                                            <td>' . $row["king_pin"] . '</td>

                                            <td>' . $row["suspension"] . '</td>
                                            <td>' . $row["tyre_wheel_rim"] . '</td>
                                            <td>' . $row["brakes"] . '</td>
                                            <td>' . $row["electrical"] . '</td>

                                            <td>' . $row["surface"] . '</td>
                                            <td>' . $row["suspension1"] . '</td>
                                            <td>' . $row["painting"] . '</td>
                                            <td>' . $row["other_fitments"] . '</td>

                                            <td>' . $row["added_on"] . '</td>
                                            <td>' . $row["added_by"] . '</td>
                                            <td>' . $row["active"] . '</td>
                                             
                                            </tr>';
                            }
                            echo '</table></div>';
                            ?>

                        </div>

                    </div>
                    <!-- /panel content -->
                </div>
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
        <?php
        echo $sideNav;
        ?>
        <!--===================================================-->
        <!--END MAIN NAVIGATION-->

    </div>
    <!-- FOOTER -->
    <!--===================================================-->
    <!-- <footer id="footer">

           
            <div class="show-fixed pull-right">
                You have <a href="#" class="text-bold text-main"><span class="label label-danger">3</span> pending action.</a>
            </div>


            <p class="pad-lft">&#0169; 2020 Copyright VP Automobile</p>



        </footer> -->
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