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
    // $prodid = $catid . '_P_' . $rowcount;
    $catid = $_POST['cat_id'];
    $filetmp = $_FILES["img1"]["tmp_name"];
    $filename = $_FILES["img1"]["name"];
    $filetype = $_FILES["img1"]["type"];
    $filepath = "../assets/img/" . $filename;
    move_uploaded_file($filetmp, $filepath);
    $img2 = $img2 . $filename;
    mysqli_query($connection, "INSERT INTO  slider_images(cat_id,img_path) VALUES ('$catid','$img2')");
    header('location: image_slider.php');
    $image_fetch = $connection->query("SELECT * from slider_images");
    $product_cat_fetch = $connection->query("SELECT * from product_cat");
} else if (isset($_GET['delete'])) {
    $img_id = $_REQUEST['delete'];
    $delimg = $connection->query("DELETE FROM slider_images WHERE id='$img_id'");
    $image_fetch = $connection->query("SELECT * from home_slider");
    $product_cat_fetch = $connection->query("SELECT * from product_cat");
    header('location: image_slider.php');
} else {
    $image_fetch = $connection->query("SELECT * from slider_images");
    $product_cat_fetch = $connection->query("SELECT * from product_cat");
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
                    <h1 class="page-header text-overflow">Image Slider</h1>
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
                                <strong style="text-transform: uppercase;font-weight: bold;">image slider</strong>
                                <!-- panel title -->
                            </span>
                            <!-- /right options -->

                        </div>

                        <!-- panel content -->
                        <div class="panel-body">
                        </div>
                        <!-- /panel content -->
                    </div>
                    <!-- /PANEL -->




                    <p>Please add image for your slider here.</p>
                    <!--===================================================-->
                    <!--End page content-->


                    <div id="panel-1" class="panel panel-default">
                        <div class="panel-heading">
                            <div id="page-title">

                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">ADD IMAGE</button>
                                <div class="modal fade" id="myModal" role="dialog">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h6 class="modal-title">ADD IMAGE</h6>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                            </div>
                                            <div class="modal-body">
                                                <form action="" enctype="multipart/form-data" method="POST">
                                                    <label for="inputEmail4">Catagory</label>
                                                    <!-- <input type="text" class="form-control" name="product_id" placeholder="Id"> -->
                                                    <?php
                                                    echo '<select class="form-control" name="cat_id">';
                                                    while ($row = mysqli_fetch_array($product_cat_fetch)) {
                                                        echo '
                                                        <option value=' . $row["cat_id"] . '>' . $row["cat_name"] . ' </option>';
                                                    }
                                                    echo '</select>';
                                                    ?>
                                                    <br>
                                                    <div class="container">
                                                        <label for="exampleFormControlFile1">Slider Image:</label>
                                                        <input type="file" name="img1" class="form-control-file" id="exampleFormControlFile1">
                                                        Size: 2MB per image.<br>
                                                        Only 1 image is allowed.
                                                    </div>

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
                                            <th>Id</th>
                                            <th>Cat_id</th>
                                            <th>Image</th>
                                        </tr>';

                                while ($row = mysqli_fetch_array($image_fetch)) {
                                    echo '<tr>
                                            <td><a href="image_slider.php?delete=' . $row['id'] . '">DELETE</a></td>
                                            <td>' . $row["id"] . '</td>
                                            <td>' . $row["cat_id"] . '</td>
                                            <td><img src="../' . $row["img_path"] . '" style="height: 50px; width: 100px;" /></td>
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