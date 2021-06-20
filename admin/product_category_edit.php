<?php
require '../db.php';
require './commonFunction.php';
?>
<?php
$img2 = "./assets/img/ICONS/";
if (isset($_POST['submit'])) {
    $catname = $_POST['cat_name'];
    $catspec = $_POST['cat_spec'];
    $prodesc = $_POST['product_desc'];
    $filetmp = $_FILES["img1"]["tmp_name"];
    $filename = $_FILES["img1"]["name"];
    $filetype = $_FILES["img1"]["type"];
    $filepath = "../assets/img/ICONS/" . $filename;
    move_uploaded_file($filetmp, $filepath);
    $img2 = $img2 . $filename;
    //$connection->query("INSERT INTO  product_cat(DEFAULT,cat_name,cat_spec,cat_icon_path,product_desc) VALUES ('$catid','$catname','$catspec','$img2','$prodesc')");

    header('location: product_category.php');
}
if (isset($_GET['edit'])) {
    $cat_id = $_GET['edit'];
    $editProd = $connection->query("SELECT * FROM product_cat WHERE cat_id='$cat_id'");
}

$cat_fetch = $connection->query("SELECT * from product_cat");

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
                    <h1 class="page-header text-overflow">Product Category</h1>
                </div>
                <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                <!--End page title-->

                <!--Page content-->
                <!--===================================================-->

                <div id="content" class="dashboard padding-20">
                    <?php
                    $editRow = mysqli_fetch_row($editProd);
                    echo '<form action="" enctype="multipart/form-data" method="POST">
                        <label for="inputEmail4">Category Name</label>
                        <input type="text" class="form-control" name="cat_name" value=" ' . $editRow[1] . '" laceholder="name">
                        <br>
                        <label for="inputEmail4">Category Specification</label>
                        <textarea rows="3" cols="38" name="cat_spec" class="form-control">' . $editRow[2] . '</textarea>
                        <br>
                        <label for="inputEmail4">Product Description</label>
                        <textarea rows="3" cols="38" name="product_desc" class="form-control">' . $editRow[4] . '</textarea>
                        <br>
                        <div class="container">
                            <label for="exampleFormControlFile1">Prescription:</label>
                            <input type="file" name="img1" class="form-control-file" value=' . $editRow[3] . ' id="exampleFormControlFile1">
                            Formats: JPEG, JPG, PNG AND PDF.<br>
                            Size: 2MB per image.<br>
                            Only 1 image is allowed.
                        </div>
                        </br>
                        <div>
                        <img id="blah" style="height:150px; width:200px" src=../' .  $editRow[3] . '></img>
                        </div>
                        </br>
                        <input type="submit" name="submit" value="UPDATE" class="btn btn-primary">

                    </form>';
                    ?>
                    <!-- /PANEL -->
                </div>

            </div>
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

        <!-- SCROLL PAGE BUTTON -->
        <!--===================================================-->
        <button class="scroll-top btn">
            <i class="pci-chevron chevron-up"></i>
        </button>
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