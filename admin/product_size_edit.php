<?php require '../db.php';
    require 'commonFunction.php';
?>
<?php
if (isset($_POST['submit'])) {
    $size_id = $_REQUEST['edit'];
    // $product_count = $connection->query("SELECT cat_id from product where cat_id = '$catid' ");
    // $rowcount = mysqli_num_rows($product_count) + 1;
    // $counter = 0;
    // print_r(mysqli_fetch_all($product_count)[0][0]);
    // $prodid = $catid . '_P_' . $rowcount;
    $sizename = $_POST['size_name'];
        mysqli_query($connection, "UPDATE product_size
        SET size_name = '$sizename'
        WHERE size_id = $size_id");

    // echo "UPDATE product
    // SET product_name = '$productname', img_path = '$img2'
    // WHERE product_id = $prod_id";
    header('location: product_size.php');
    $product_size_fetch = $connection->query("SELECT * from product_size");
} else if (isset($_GET['edit'])) {
    // echo("EDITt Side");
    $size_id = $_REQUEST['edit'];
    $ediitProd = $connection->query("SELECT * from product_size WHERE size_id=$size_id");
} else {
    $product_size_fetch = $connection->query("SELECT * from product_size");
}


?>
<!DOCTYPE html>
<html lang="en">


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
                    <h1 class="page-header text-overflow">Product Size</h1>
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
                                <strong style="text-transform: uppercase;font-weight: bold;">products size</strong>
                                <!-- panel title -->
                            </span>
                            <!-- /right options -->

                        </div>

                        <!-- panel content -->
                        <div class="panel-body">
                            <div class="modal-body">
                                <form action="" enctype="multipart/form-data" method="POST">
                                    <!-- <input type="text" class="form-control" name="product_id" placeholder="Id"> -->
                                    <?php
                                    $editRow = mysqli_fetch_row($ediitProd);
                                    // print_r($editRow);
                                    echo '
                                    
                                    <label for="inputEmail4">Size Name</label>
                                    <input type="text" class="form-control" name="size_name" placeholder="name" value=" ' . $editRow[1] . '">
                                    <br>
                                    ';
                                    ?>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger btn-secondary" data-dismiss="modal">CLOSE</button>
                                <input type="submit" name="submit" value="UPDATE" class="btn btn-primary">
                            </div>
                        </div>
                        <!-- /panel content -->
                    </div>
                    <!-- /PANEL -->




                    <!--===================================================-->
                    <!--End page content-->



                    <!-- /PANEL -->

                </div>

            </div>
            <?php

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