<?php require '../db.php';
require './commonFunction.php';
?>
<?php
if (isset($_POST['addSubmit']) || isset($_POST['updateSubmit'])) {
    $spec_id =   $_GET['edit'];
    $prodid = $_POST['product_id'];
    $sizeid = $_POST['size_id'];
    $trailer_weight = $_POST['trailer_weight'];
    $chassis = $_POST['chassis'];
    $landing_leg = $_POST['landing_leg'];
    $axles = $_POST['axles'];
    $king_pin = $_POST['king_pin'];
    $suspension = $_POST['suspension'];
    $tyre_wheel_rim = $_POST['tyre_wheel_rim'];
    $brakes = $_POST['brakes'];
    $electrical = $_POST['electrical'];
    $surface = $_POST['surface'];
    $suspension1 = $_POST['suspension1'];
    $painting = $_POST['painting'];
    $other_fitments = $_POST['other_fitments'];
    if ($_FILES["img1"]["name"] != "") {
        $img2 = "./assets/img/";
        $filetmp = $_FILES["img1"]["tmp_name"];
        $filename = $_FILES["img1"]["name"];
        $filetype = $_FILES["img1"]["type"];
        $filepath = "../assets/img/" . $filename;
        move_uploaded_file($filetmp, $filepath);
        $img2 = $img2 . $filename;
    }
    if (isset($_POST['updateSubmit'])) {
        if ($_FILES["img1"]["name"] != "") {
            mysqli_query($connection, "UPDATE product_spec
            SET product_id = '$prodid', size_id= '$sizeid', img_path = '$img2', trailer_weight='$trailer_weight', chassis='$chassis', landing_leg='$landing_leg', axles='$axles', king_pin='$king_pin', suspension='$suspension', tyre_wheel_rim='$tyre_wheel_rim', brakes = '$brakes', electrical='$electrical', surface='$surface', suspension1='$suspension1', painting='$painting',  other_fitments='$other_fitments'   
            WHERE id = $spec_id");
        } else {
            mysqli_query($connection, "UPDATE product_spec
            SET product_id = '$prodid', size_id= $sizeid, trailer_weight='$trailer_weight', chassis='$chassis', landing_leg='$landing_leg', axles='$axles', king_pin='$king_pin', suspension='$suspension', tyre_wheel_rim='$tyre_wheel_rim', brakes = '$brakes', electrical='$electrical', surface='$surface', suspension1='$suspension1', painting='$painting',  other_fitments='$other_fitments'   
            WHERE id = $spec_id");
            header('location: product_spec.php?cat_id=' . $_GET['edit']);
        }
    } else {
        mysqli_query($connection, "INSERT INTO  product_spec VALUES (DEFAULT,'$prodid','$sizeid','$img2','$trailer_weight','$chassis','$landing_leg','$axles','$king_pin','$suspension','$tyre_wheel_rim','$brakes','$electrical','$surface','$suspension1','$painting','$other_fitments','','','','','','','','','','','')");
    }
    // echo "UPDATE product_spec
    // SET product_id = '$prodid', size_id= $sizeid, trailer_weight='$trailer_weight', chassis='$chassis', landing_leg='$landing_leg', axles='$axles', king_pin='$king_pin', suspension='$suspension', tyre_wheel_rim='$tyre_wheel_rim', brakes = '$brakes', electrical='$electrical', surface='$surface', suspension1='$suspension1', painting='$painting',  other_fitments='$other_fitments'   
    // WHERE id = $spec_id";

    if (isset($_GET['add'])) {
        header('location: product_spec.php?cat_id=' . $_GET['add']);
    } else if (isset($_GET['edit'])) {
        header('location: product_spec.php?cat_id=' . $_GET['cat_id']);
    }
}
if (isset($_GET['add'])) {
    $cat_id =   $_GET['add'];
    $product_desc_fetch = $connection->query("SELECT * FROM `product` WHERE `cat_id` = $cat_id");
    $size_desc_fetch = $connection->query("SELECT * FROM `product_size`");
}
if (isset($_GET['edit'])) {
    $spec_id =   $_GET['edit'];
    $cat_id =   $_GET['cat_id'];
    $product_desc_fetch = $connection->query("SELECT * FROM `product` WHERE `cat_id` = $cat_id");
    $size_desc_fetch = $connection->query("SELECT * FROM `product_size`");
    $product_desc_all = $connection->query("SELECT * FROM `product_spec` WHERE `id` = $spec_id");
    // echo "SELECT * FROM `product_desc` WHERE `id` = $spec_id";
    // print_r($product_desc_all);
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
                            <?php
                            if (isset($_GET['add'])) {
                                echo '<form action="" enctype="multipart/form-data" method="POST">
                                <label for="inputEmail4">Product</label>
                                
                                <select class="form-control" name="product_id">';
                                while ($row = mysqli_fetch_array($product_desc_fetch)) {
                                    echo '
                                                        <option value=' . $row["product_id"] . '>' . $row["product_name"] . ' </option>';
                                }
                                echo '</select>
                                <label for="inputEmail4">Size ID</label>
                                <select class="form-control" name="size_id">';
                                while ($row = mysqli_fetch_array($size_desc_fetch)) {
                                    echo '
                                                        <option value=' . $row["size_id"] . '>' . $row["size_name"] . ' </option>';
                                }
                                echo '</select>
                            <label for="inputEmail4">Trailer weight</label>
                            <textarea rows="2" cols="38" name="trailer_weight" class="form-control">
                                                 </textarea>
                            <label for="inputEmail4">Chassis</label>
                            <textarea rows="2" cols="38" name="chassis" class="form-control">
                                                 </textarea>
                            <label for="inputEmail4">Landing Leg</label>
                            <textarea rows="2" cols="38" name="landing_leg" class="form-control">
                                                 </textarea>
                            <label for="inputEmail4">Axles</label>
                            <textarea rows="2" cols="38" name="axles" class="form-control">
                                                 </textarea>
                            <label for="inputEmail4">King pin </label>
                            <textarea rows="2" cols="38" name="king_pin" class="form-control">
                                                 </textarea>
                            <label for="inputEmail4">Suspension</label>
                            <textarea rows="2" cols="38" name="suspension" class="form-control">
                                                 </textarea>
                            <label for="inputEmail4">Tyre Wheel Rim</label>
                            <textarea rows="2" cols="38" name="tyre_wheel_rim" class="form-control">
                                                 </textarea>
                            <label for="inputEmail4">Brakes</label>
                            <textarea rows="2" cols="38" name="brakes" class="form-control">
                                                 </textarea>
                            <label for="inputEmail4">Electrical</label>
                            <textarea rows="2" cols="38" name="electrical" class="form-control">
                                                 </textarea>
                            <label for="inputEmail4">Surface</label>
                            <textarea rows="2" cols="38" name="surface" class="form-control">
                                                 </textarea>
                            <label for="inputEmail4">Suspension</label>
                            <textarea rows="2" cols="38" name="suspension1" class="form-control">
                                                 </textarea>
                            <label for="inputEmail4">Painting</label>
                            <textarea rows="2" cols="38" name="painting" class="form-control">
                                                 </textarea>
                            <label for="inputEmail4">Other Fitments</label>
                            <textarea rows="2" cols="38" name="other_fitments" class="form-control">
                                                 </textarea>
                            <div class="container">
                                <label for="exampleFormControlFile1">Image</label>
                                <input type="file" name="img1" class="form-control-file" id="exampleFormControlFile1">
                                Formats: JPEG, JPG, PNG AND PDF.<br>
                                Size: 2MB per image.<br>
                                Only 1 image is allowed.
                            </div>
                            <button type="button" class="btn btn-danger btn-secondary" data-dismiss="modal">CLOSE</button>
                            <input type="submit"  name="addSubmit" value="ADD" class="btn btn-primary">
                            </form>';
                            } else {
                                $editRow = mysqli_fetch_row($product_desc_all);
                                // print_r($editRow);
                                echo '<form action="" enctype="multipart/form-data" method="POST">
                                <label for="inputEmail4">Product</label>
                                
                                <select class="form-control" name="product_id">';
                                while ($row = mysqli_fetch_array($product_desc_fetch)) {
                                    if ($row['product_id'] == $editRow[1]) {
                                        echo '
                                                        <option selected value=' . $row["product_id"] . '>' . $row["product_name"] . ' </option>';
                                    } else {
                                        echo '
                                                        <option value=' . $row["product_id"] . '>' . $row["product_name"] . ' </option>';
                                    }
                                }
                                echo '</select>
                                <label for="inputEmail4">Size ID</label>
                                <select class="form-control" name="size_id">';
                                while ($row = mysqli_fetch_array($size_desc_fetch)) {
                                    if ($row['size_id'] == $editRow[2]) {
                                        echo '
                                        <option selected value=' . $row["size_id"] . '>' . $row["size_name"] . ' </option>';
                                    } else {
                                        echo '
                                                        <option value=' . $row["size_id"] . '>' . $row["size_name"] . ' </option>';
                                    }
                                }
                                echo '</select>
                            <label for="inputEmail4">Trailer weight</label>
                            <textarea rows="2" cols="38" name="trailer_weight" class="form-control">' . $editRow[4] . '</textarea>
                            <label for="inputEmail4">Chassis</label>
                            <textarea rows="2" cols="38" name="chassis" class="form-control">' . $editRow[5] . '</textarea>
                            <label for="inputEmail4">Landing Leg</label>
                            <textarea rows="2" cols="38" name="landing_leg" class="form-control">' . $editRow[6] . ' </textarea>
                            <label for="inputEmail4">Axles</label>
                            <textarea rows="2" cols="38" name="axles" class="form-control">' . $editRow[7] . '</textarea>
                            <label for="inputEmail4">King pin </label>
                            <textarea rows="2" cols="38" name="king_pin" class="form-control">' . $editRow[8] . ' </textarea>
                            <label for="inputEmail4">Suspension</label>
                            <textarea rows="2" cols="38" name="suspension" class="form-control">' . $editRow[9] . ' </textarea>
                            <label for="inputEmail4">Tyre Wheel Rim</label>
                            <textarea rows="2" cols="38" name="tyre_wheel_rim" class="form-control">' . $editRow[10] . '</textarea>
                            <label for="inputEmail4">Brakes</label>
                            <textarea rows="2" cols="38" name="brakes" class="form-control">' . $editRow[11] . '</textarea>
                            <label for="inputEmail4">Electrical</label>
                            <textarea rows="2" cols="38" name="electrical" class="form-control">' . $editRow[12] . '</textarea>
                            <label for="inputEmail4">Surface</label>
                            <textarea rows="2" cols="38" name="surface" class="form-control">' . $editRow[13] . '</textarea>
                            <label for="inputEmail4">Suspension</label>
                            <textarea rows="2" cols="38" name="suspension1" class="form-control">' . $editRow[14] . '</textarea>
                            <label for="inputEmail4">Painting</label>
                            <textarea rows="2" cols="38" name="painting" class="form-control">' . $editRow[15] . '</textarea>
                            <label for="inputEmail4">Other Fitments</label>
                            <textarea rows="2" cols="38" name="other_fitments" class="form-control">' . $editRow[16] . '</textarea>
                            <div class="container">
                            <div>
                                <label for="exampleFormControlFile1">Image</label>
                                <input type="file" name="img1" class="form-control-file" id="exampleFormControlFile1" onchange="readURL(this);">
                                Formats: JPEG, JPG, PNG AND PDF.<br>
                                Size: 2MB per image.<br>
                                Only 1 image is allowed.
                                </div>
                                <div>
                                <img id="blah" src=../' .  $editRow[3] . '></img>
                                </div>
                            </div><br>
                            <input type="submit" name="updateSubmit" value="Update" class="btn btn-primary">
                            </form>';
                            }
                            ?>
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
        <footer id="footer">

            <!-- Visible when footer positions are fixed -->
            <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
            <div class="show-fixed pull-right">
                You have <a href="#" class="text-bold text-main"><span class="label label-danger">3</span> pending action.</a>
            </div>




            <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
            <!-- Remove the class "show-fixed" and "hide-fixed" to make the content always appears. -->
            <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->



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
    <script>
        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function(e) {
                    $('#blah')
                        .attr('src', e.target.result)
                        .width(150)
                        .height(200);
                };

                reader.readAsDataURL(input.files[0]);
            }
        }
    </script>

</body>

<!-- Mirrored from www.ravijaiswal.com/Jais_admin/index.html by HTTrack Website Copier/3.x [XR&CO'2017], Fri, 04 Aug 2017 15:25:58 GMT -->

</html>