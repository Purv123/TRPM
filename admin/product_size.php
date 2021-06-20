<?php require '../db.php';
?>
<?php require 'commonFunction.php'; ?>
<?php
$img2 = "./assets/img/";
if (isset($_POST['submit'])) {
    // $product_count = $connection->query("SELECT cat_id from product where cat_id = '$catid' ");
    // $rowcount = mysqli_num_rows($product_count) + 1;
    // $counter = 0;
    // print_r(mysqli_fetch_all($product_count)[0][0]);
    $sizename = $_POST['size_name'];
    mysqli_query($connection, "INSERT INTO  product_size(size_name) VALUES ('$sizename')");
    header('location: product_size.php');
    $product_size_fetch = $connection->query("SELECT * from product_size");
} else if (isset($_GET['delete'])) {
    $size_id = $_REQUEST['delete'];
    $delprod = $connection->query("DELETE FROM product_size WHERE size_id='$size_id'");
    header('location: product_size.php');
    mysqli_free_result($product_size_fetch);
    $product_size_fetch = $connection->query("SELECT * from product_size"); 
} else {
    mysqli_free_result($product_size_fetch);
    $product_size_fetch = $connection->query("SELECT * from product_size");
}


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
                                <strong style="text-transform: uppercase;font-weight: bold;">Size</strong>
                                <!-- panel title -->
                            </span>
                            <!-- /right options -->

                        </div>

                        <!-- panel content -->
                        <!-- <div class="panel-body">
                        </div> -->
                        <!-- /panel content -->
                    </div>
                    <!-- /PANEL -->




                    <p>Please add your product size details here.</p>
                    <!--===================================================-->
                    <!--End page content-->


                    <div id="panel-1" class="panel panel-default">
                        <div class="panel-heading">
                            <div id="page-title">

                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">ADD PRODUCT SIZE</button>
                                <div class="modal fade" id="myModal" role="dialog">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h6 class="modal-title">ADD PRODUCT SIZE</h6>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                            </div>
                                            <div class="modal-body">
                                                <form action="" enctype="multipart/form-data" method="POST">
                                                    <label for="inputEmail4">Size Name</label>
                                                    <input type="text" class="form-control" name="size_name" placeholder="name">

                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-danger btn-secondary" data-dismiss="modal">CLOSE</button>
                                                <input type="submit" name="submit" value="ADD" class="btn btn-primary">
                                            </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>

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
                                            <th>Size_id</th>
                                            <th>Name</th>
                                        </tr>';

                                while ($row = mysqli_fetch_array($product_size_fetch)) {
                                    echo '<tr>
                                            <td><a href="product_size_edit.php?edit=' . $row['size_id'] . '">EDIT
                                            </a>
                                            </td>
                                            <td><a href="product_size.php?delete=' . $row['size_id'] . '">DELETE
                                            </a></td>
                                            <td>' . $row["size_id"] . '</td>
                                            <td>' . $row["size_name"] . '</td>
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