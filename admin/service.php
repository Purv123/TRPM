<?php 
require_once '../db.php';
require 'commonFunction.php';

if (isset($_POST['submit'])) {
    $type = $_POST['type'];
    $title = $_POST['title'];
    $description = $_POST['description'];
    mysqli_query($connection, "INSERT INTO  services(type,title,description) VALUES ('$type','$title','$description')");
    header('location: services.php');
    $service_fetch = $connection->query("SELECT * from services");
} else if (isset($_GET['delete'])) {
    $service_id = $_REQUEST['delete'];
    $delprod = $connection->query("DELETE FROM services WHERE id='$service_id'");
    $service_fetch = $connection->query("SELECT * from services");
    header('location: services.php');
} else {
    $service_fetch = $connection->query("SELECT * from services");
}


?>
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from www.ravijaiswal.com/Jais_admin/index.html by HTTrack Website Copier/3.x [XR&CO'2017], Fri, 04 Aug 2017 15:24:40 GMT -->

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard | TPPM</title>
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
                    <h1 class="page-header text-overflow">Services</h1>
                </div>
                <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                <!--End page title-->

                <!--Page content-->
                <!--===================================================-->

                <div id="content" class="dashboard padding-20">


                    <p>Please add your service details here.</p>
                    <!--===================================================-->
                    <!--End page content-->


                    <div id="panel-1" class="panel panel-default">
                        <div class="panel-heading">
                            <div id="page-title">

                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">ADD SERVICE</button>
                                <div class="modal fade" id="myModal" role="dialog">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h6 class="modal-title">ADD service</h6>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                            </div>
                                            <div class="modal-body">
                                                <form action="" enctype="multipart/form-data" method="POST">
                                                    <label for="inputEmail4">Catagory</label>
                                                    <select class="form-control" name="type">
                                                        <option value="ourservices">Our Services</option>
                                                        <option value="forthirdparty">For Third Party</option>
                                                        <option value="forenterprise">For Enterprise</option>
                                                    </select>
                                                    <br>
                                                    <label for="inputEmail4">Title</label>
                                                    <input type="text" class="form-control" name="title" placeholder="Service Title">
                                                    <br>
                                                    <label for="inputEmail4">Description</label>
                                                    <input type="text" class="form-control" name="description" placeholder="Service Description">
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
                                            <th>service_id</th>
                                            <th>Catagory</th>
                                            <th>Title</th>
                                            <th>Description</th>
                                        </tr>';

                                while ($row = mysqli_fetch_array($service_fetch)) {
                                    echo '<tr>
                                            <td><a href="service_edit.php?edit=' . $row['id'] . '">EDIT</a></td>
                                            <td><a href="service.php?delete=' . $row['id'] . '">DELETE</a></td>
                                            <td>' . $row["id"] . '</td>
                                            <td>' . $row["type"] . '</td>
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
        <!-- FOOTER -->
        <!--===================================================-->
        <footer id="footer">

            


            <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
            <!-- Remove the class "show-fixed" and "hide-fixed" to make the content always appears. -->
            <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->

            <p class="pad-lft">&#0169; 2021 Copyright TPRM</p>



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