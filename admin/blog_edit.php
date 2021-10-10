<?php require '../db.php';
require 'commonFunction.php';
?>
<?php
if (isset($_POST['submit'])) {
    $blog_id = $_REQUEST['edit'];
    $date = $_POST['date'];
    $title = trim($_POST['title']);
    $shortdescription = trim($_POST['shortdescription']);
    $description = trim($_POST['description']);
        // mysqli_query($connection, "UPDATE services
        // SET type = '$type', title = '$title', description = '$description'
        // WHERE id = $service_id");
    mysqli_query($connection, "UPDATE blog SET `date` = '$date', title = '$title', shortdescription = '$shortdescription' , description = '$description'
        WHERE id = $blog_id");
    header('location: blog.php');
} else if (isset($_GET['edit'])){
    $blog_id = $_REQUEST['edit'];
    $editBlog = $connection->query("SELECT * from blog WHERE id=$blog_id");
}


?>
<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard | ETPRM</title>
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
    <script src="//cdn.ckeditor.com/4.16.1/standard/ckeditor.js"></script>
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
                    <h1 class="page-header text-overflow">Blog</h1>
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
                        
                        <!-- panel content -->
                        <?php
                            $editRow = mysqli_fetch_assoc($editBlog);
                        ?>
                        <div class="panel-body">
                                <form action="" enctype="multipart/form-data" method="POST">
                                    <label for="inputEmail4">Date</label>
                                    <input type="text" class="form-control" name="date" placeholder="Date" value=<?php echo $editRow['date'] ;?>>
                                    <label for="inputEmail4">Blog Title</label>
                                    <textarea class="form-control" name="title" required id="editor1"><?php echo $editRow['title'] ;?></textarea>
                                    <br />
                                    <label for="inputEmail4">Blog Short Description</label>
                                    <textarea class="form-control" name="shortdescription" required id="editor2"><?php echo $editRow['shortdescription'] ;?></textarea>
                                    <br />
                                    <label for="inputEmail4">Blog Description</label>
                                    <textarea class="form-control" name="description" required id="editor3"><?php echo $editRow['description'] ;?></textarea>
                                    <br />
                                    <input type="submit" name="submit" value="UPDATE" class="btn btn-primary">
                                </form>
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
    <script>
  CKEDITOR.replace( 'editor1' );
  CKEDITOR.replace( 'editor2' );
  CKEDITOR.replace( 'editor3' );
</script>
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