<?php require '../db.php';
require 'commonFunction.php';
?>
<?php
if (isset($_POST['submit'])) {
    $blog_id = $_REQUEST['edit'];
    $title = trim($_POST['title']);
    $content = trim($_POST['content']);
    $img = trim($_POST['img']);
        // mysqli_query($connection, "UPDATE services
        // SET type = '$type', title = '$title', description = '$description'
        // WHERE id = $service_id");
    // echo "INSERT INTO  solution_screenshots(`title`,`content`,`image`)
    //  VALUES ('$title','$content', '$img')";
    mysqli_query($connection, "INSERT INTO  solution_screenshots(`title`,`content`,`image`)
     VALUES ('$title','$content', '$img')");
    header('location: solutions.php');
    $blog_fetch = $connection->query("SELECT * from solution_screenshots");
}else if (isset($_GET['delete'])) {
    $blog_id = $_REQUEST['delete'];
    $delprod = $connection->query("DELETE FROM solution_screenshots WHERE id='$blog_id'");
    header('location: solutions.php');
    $blog_fetch = $connection->query("SELECT * from solution_screenshots");
}else {
    $blog_fetch = $connection->query("SELECT * from solution_screenshots");
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
                    <h1 class="page-header text-overflow">Solutions Screenshots</h1>
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
                            <div id="page-title">
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">ADD Solution Screenshot</button>
                                <div class="modal fade" id="myModal" role="dialog">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h6 class="modal-title">ADD Solution Screenshot</h6>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                            </div>
                                            <div class="modal-body">
                                               <form action="" enctype="multipart/form-data" method="POST">
                                                <label for="inputEmail4">Solution Screenshot Title</label>
                                                <textarea class="form-control" name="title" required id="editor1"></textarea>
                                                <br />
                                                <label for="inputEmail4">Solution Screenshot Short Description</label>
                                                <textarea class="form-control" name="content" required id="editor2"></textarea>
                                                <br />
                                                <label for="inputEmail4">Solution Screenshot Image Link</label>
                                                <input class="form-control" name="img" required>
                                                <br />
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

                        <div class="panel-body">

                            <div id="flot-sales" class="fullwidth ">

                                <?php
                                echo '<div class="table-responsive">
                               <table class="table table-bordered table-hover">
                                        <tr> 
                                            <th></th>
                                            <th></th>
                                            <th>Title</th>
                                            <th>Content</th>
                                            <th>Img</th>
                                        </tr>';

                                while ($row = mysqli_fetch_array($blog_fetch)) {
                                    echo '<tr>
                                            <td><a href="solutions_edit.php?edit=' . $row['id'] . '">EDIT</a></td>
                                            <td><a href="solutions.php?delete=' . $row['id'] . '">DELETE</a></td>
                                            <td>' . $row["title"] . '</td>
                                            <td>' . $row["content"] . '</td>
                                            <td><img style="width:auto; height:100px" src="' . $row["image"] . '" /></td>
                                            </tr>';
                                }
                                echo '</table></div>';
                                ?>

                            </div>

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