<?php 
require_once '../db.php';
require 'commonFunction.php';
        
        $per_page_record = 4;  // Number of entries to show in a page.   
        // Look for a GET variable page if not found default is 1.        
        if (isset($_GET["page"])) {    
            $page  = $_GET["page"];    
        }    
        else {    
          $page=1;    
        }    
    
        $start_from = ($page-1) * $per_page_record;     
    
        $query = "SELECT * FROM contact LIMIT $start_from, $per_page_record";     
        $rs_result = mysqli_query ($connection, $query);   
?> 
<?php
if (isset($_POST['submit'])) {
    $description = $_POST['description'];
        mysqli_query($connection, "UPDATE contactdescription
        SET description = '$description'
        WHERE id = '1'");
    header('location: contact.php');
    $contactdescription_fetch = $connection->query("SELECT * from contactdescriptions");
}
else{
    $contactdescription_fetch = $connection->query("SELECT * from contactdescription");
}?>
<!DOCTYPE html>
<html lang="en">



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
    <script src="//cdn.ckeditor.com/4.16.1/full/ckeditor.js"></script>
    <!-- <link href="assets/css/demo/jais-demo.css" rel="stylesheet"> -->

    <style>
            table {  
            border-collapse: collapse;  
            }  
            .inline{   
                display: inline-block;   
                float: right;   
                margin: 20px 0px;   
            }   
             
            input, button{   
                height: 34px;   
            }   
      
            .pagination {   
                display: inline-block;   
            }   
            .pagination a {   
                font-weight:bold;   
                font-size:18px;   
                color: black;   
                float: left;   
                padding: 8px 16px;   
                text-decoration: none;   
                border:1px solid black;   
            }   
            .pagination a.active {   
                    background-color: gray;   
            }   
            .pagination a:hover:not(.active) {   
                background-color: lightgray;   
            }   
    </style>   
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
                    <h1 class="page-header text-overflow">Contact Us</h1>
                </div>
                <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                <!--End page title-->

                <!--Page content-->
                <!--===================================================-->
                <div class="panel-body">
                        <form action="" enctype="multipart/form-data" method="POST">
                            <!-- <input type="text" class="form-control" name="product_id" placeholder="Id"> -->
                            <?php
                            $editRow = mysqli_fetch_assoc($contactdescription_fetch);
                            echo '<label for="inputEmail4">Contact us Description</label>
                                            <textarea class="form-control" name="description" required id="editor1">' . $editRow['description'] . '</textarea>
                                            </br>
                            <br>
                            
                            ';
                            ?>
                            <input type="submit" name="submit" value="UPDATE" class="btn btn-primary">
                        </form>
                </div>
                <div id="content" class="dashboard padding-20">
                    <div id="panel-1" class="panel panel-default">
                    <div class="table-responsive">
                    <table class="table table-bordered table-hover">
                      <thead>   
                        <tr>
                          <th>Date</th>     
                          <th>Name</th>   
                          <th>Email</th>   
                          <th>Subject</th>   
                          <th>Message</th>   
                        </tr>   
                      </thead>   
                      <tbody>   
                        <?php     
                        while ($row = mysqli_fetch_array($rs_result)) {
                        ?>     
                        <tr>
                        <td><?php echo $row["date"]; ?></td>     
                        <td><?php echo $row["name"]; ?></td>     
                        <td><?php echo $row["email"]; ?></td>   
                        <td><?php echo $row["subject"]; ?></td>   
                        <td><?php echo $row["message"]; ?></td>                                           
                        </tr>     
                        <?php     
                            };    
                        ?>     
                      </tbody>   
                    </table>
                </div>

                </div>

                <div class="pagination" style="margin-left: 5rem;">    
                  <?php  
                    $query = "SELECT COUNT(*) FROM contact";     
                    $rs_result = mysqli_query($connection, $query);     
                    $row = mysqli_fetch_row($rs_result);     
                    $total_records = $row[0];     
                      
                echo "</br>";     
                    // Number of pages required.   
                    $total_pages = ceil($total_records / $per_page_record);     
                    $pagLink = "";       
                  
                    if($page>=2){   
                        echo "<a href='contact.php?page=".($page-1)."'>  Prev </a>";   
                    }       
                               
                    for ($i=1; $i<=$total_pages; $i++) {   
                      if ($i == $page) {   
                          $pagLink .= "<a class = 'active' href='contact.php?page="  
                                                            .$i."'>".$i." </a>";   
                      }               
                      else  {   
                          $pagLink .= "<a href='contact.php?page=".$i."'>   
                                                            ".$i." </a>";     
                      }   
                    };     
                    echo $pagLink;   
              
                    if($page<$total_pages){   
                        echo "<a href='contact.php?page=".($page+1)."'>  Next </a>";   
                    }   
              
                  ?>    
                </div> 
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

            <p class="pad-lft">&#0169; 2021 Copyright ETPRM</p>



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

</body>

<!-- Mirrored from www.ravijaiswal.com/Jais_admin/index.html by HTTrack Website Copier/3.x [XR&CO'2017], Fri, 04 Aug 2017 15:25:58 GMT -->

</html>