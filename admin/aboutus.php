<?php require '../db.php';
require 'commonFunction.php';

?>
<?php
if (isset($_POST['submit'])) {
    $tagline = $_POST['tagline'];
    $description = $_POST['description'];
        mysqli_query($connection, "UPDATE aboutus
        SET description = '$description', tagline = '$tagline'
        WHERE id = '1'");
    header('location: aboutus.php');
    $aboutus_fetch = $connection->query("SELECT * from aboutus");
}else if (isset($_POST['submitCommitment'])) {
    $icon = $_POST['icon'];
    $title = $_POST['title'];
    $description = $_POST['description'];
        mysqli_query($connection, "INSERT INTO  commitment(icon,title,description) VALUES ('$icon','$title','$description')");
    header('location: aboutus.php');
}else if (isset($_GET['delete'])) {
    $commitment_id = $_REQUEST['delete'];
    $delcom = $connection->query("DELETE FROM commitment WHERE id='$commitment_id'");
    header('location: aboutus.php');
}
else{
    $aboutus_fetch = $connection->query("SELECT * from aboutus");
    $commitment_fetch = $connection->query("SELECT * from commitment");
}


?>
<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard | TPRM</title>
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
                    <h1 class="page-header text-overflow">About Us</h1>
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
                        <div class="panel-body">
                                <form action="" enctype="multipart/form-data" method="POST">
                                    <!-- <input type="text" class="form-control" name="product_id" placeholder="Id"> -->
                                    <?php
                                    $editRow = mysqli_fetch_row($aboutus_fetch);
                                    echo '
                                    <label for="inputEmail4">About Us Tag Line</label>
                                                    <textarea class="form-control" name="tagline" required id="editor1">' . $editRow[1] . '</textarea>
                                                    </br>
                                                    <label for="inputEmail4">About Us Description</label>
                                                    <textarea class="form-control" name="description" required id="editor2">' . $editRow[2] . '</textarea>
                                                    </br>
                                    <br>
                                    
                                    ';
                                    ?>
                                    <input type="submit" name="submit" value="UPDATE" class="btn btn-primary">
                                </form>
                        </div>
                    </div>

                    <p>Please add your commitment details here.</p>
                    <!--===================================================-->
                    <!--End page content-->


                    <div id="panel-1" class="panel panel-default">
                        <div class="panel-heading">
                            <div id="page-title">

                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">ADD Commitment</button>
                                <div class="modal fade" id="myModal" role="dialog">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h6 class="modal-title">ADD Commitment</h6>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                            </div>
                                            <div class="modal-body">
                                                <form action="" enctype="multipart/form-data" method="POST">
                                                    <label for="inputEmail4">Icon</label>
                                                    <input type="text" class="form-control" name="icon" placeholder="Icon" value=" ' . $editRow[1] . '">
                                                    <label for="inputEmail4">Commitment Title</label>
                                                    <input type="text" class="form-control" name="title" placeholder="Commitment Title">
                                                    <br>
                                                    <label for="inputEmail4">Commitment Description</label>
                                                    <input type="text" class="form-control" name="description" placeholder="Commitment Description">
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-danger btn-secondary" data-dismiss="modal">CLOSE</button>
                                                <input type="submit" name="submitCommitment" value="ADD" class="btn btn-primary">
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
                                            <th>Icon</th>
                                            <th>Commitment Title</th>
                                            <th>Commitment Description</th>
                                        </tr>';

                                while ($row = mysqli_fetch_array($commitment_fetch)) {
                                    echo '<tr>
                                            <td><a href="commitment_edit.php?edit=' . $row['id'] . '">EDIT</a></td>
                                            <td><a href="aboutus.php?delete=' . $row['id'] . '">DELETE</a></td>
                                            <td>' . $row["icon"] . '</td>
                                            <td>' . $row["title"] . '</td>
                                            <td>' . $row["description"] . '</td>
                                            </tr>';
                                }
                                echo '</table></div>';
                                ?>

                            </div>

                        </div>
                        <!-- /panel content -->
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