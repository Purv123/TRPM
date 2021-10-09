<?php 
require_once '../db.php';
require 'commonFunction.php';

if (isset($_POST['addcolumnsubmit'])) {
    $cat = $_POST['cat'];
    $addafter = $_POST['addafter'];
    $nametodisplay = $_POST['colname'];
     $last_col = $connection->query("SELECT colname from pricelistcolumns_mapping ORDER BY colname DESC LIMIT 1");
    $x = mysqli_fetch_assoc($last_col);
    $lastColumnNumber = substr($x['colname'], -1);
    $lastColumnNumber = (int)$lastColumnNumber+1;
    $colname = 'col' . $lastColumnNumber;
    mysqli_query($connection, "INSERT INTO  pricelistcolumns_mapping(colname,nametodisplay,cat) VALUES ('$colname','$nametodisplay','$cat')");

    $columntoaddafter = $connection->query("SELECT colname from pricelistcolumns_mapping where nametodisplay='$addafter'");
    $x = mysqli_fetch_assoc($columntoaddafter);
    $columntoaddafter = $x['colname'];
    mysqli_query($connection, "ALTER TABLE pricelist ADD $colname VARCHAR(255) NOT NULL DEFAULT('-') AFTER $columntoaddafter");
    header('location: pricelist.php');
}else if (isset(($_POST['addrowsubmit']))) {
    $sequence = $_POST['sequence'];
    mysqli_query($connection, "INSERT INTO  pricelist(sequence) VALUES ('$sequence')");
    header('location: pricelist.php');
}else if (isset($_POST['submit'])) {
    $description = $_POST['description'];
        mysqli_query($connection, "UPDATE pricelistdesc
        SET description = '$description'
        WHERE id = '1'");
    header('location: pricelist.php');
}
?>
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

<script type='text/javascript'>
  $(document).ready(function(){
    
   // Show Input element
   $('.edit').click(function(){
    $('.txtedit').hide();
    $(this).next('.txtedit').show().focus();
    $(this).hide();
   });
   
   // Save data
   $(".txtedit").focusout(function(){
     
    // Get edit id, field name and value
    var id = this.id;
    var split_id = id.split("_");
    var field_name = split_id[0];
    var edit_id = split_id[1];
    var value = $(this).val();
     
    // Hide Input element
    $(this).hide();
   
    // Hide and Change Text of the container with input elmeent
    $(this).prev('.edit').show();
    $(this).prev('.edit').text(value);
   
    $.ajax({
     url: 'update.php',
     type: 'post',
     data: { field:field_name, value:value, id:edit_id },
     success:function(response){
        if(response == 1){ 
           console.log('Save successfully'); 
        }else{ 
           console.log("Not saved.");  
        }
     }
    });
    
   });
   
  });
  </script>
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
                    <h1 class="page-header text-overflow">Pricelist</h1>
                </div>
                <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                <!--End page title-->

                <!--Page content-->
                <!--===================================================-->

                <div id="content" class="dashboard padding-20">

                    <!--===================================================-->
                    <!--End page content-->


                    <div id="panel-1" class="panel panel-default">
                        
                        <!-- panel content -->
                        <div class="panel-body">
                            <div class="row" style="padding:50px;">
                                <table width='100%' border='1' style="text-align: center;">
                                 
                                 <?php 
                                 include('db.php');
                                 $totalCol_Query = $connection->query("SELECT COUNT(*) FROM pricelistcolumns_mapping");
                                 $totalCol = mysqli_fetch_assoc($totalCol_Query);
                                 $totalCol = $totalCol['COUNT(*)'];
                                 $widthperCol = 80/$totalCol;

                                 $totalcat1_Query = $connection->query("SELECT COUNT(*) FROM pricelistcolumns_mapping where cat='Point-in-Time Snapshot Assessment (Duration: 60-days)'");
                                 $totalcat1Col = mysqli_fetch_assoc($totalcat1_Query);
                                 $totalcat1Col = $totalcat1Col['COUNT(*)'];
                                 $widthCat1Col = $totalcat1Col * $widthperCol . '%';
                                 


                                 $totalcat2_Query = $connection->query("SELECT COUNT(*) FROM pricelistcolumns_mapping where cat='Point-in-Time Snapshot Assessment (Duration: 60-days)'");
                                 $totalcat2Col = mysqli_fetch_assoc($totalcat2_Query);
                                 $totalcat2Col = $totalcat2Col['COUNT(*)'];
                                 $widthCat2Col = $totalcat2Col * $widthperCol . '%';
                                 

                                 $fields = array();
                                 $query = $connection->query("SHOW COLUMNS FROM pricelist");
                                 while ($x = mysqli_fetch_assoc($query)){
                                    $fields[] = $x['Field'];
                                  }
                                 $fields = array_diff($fields, array("id","sequence","datemodified"));
                                 $count = 1;
                                 $query = $connection->query("SELECT * FROM `pricelist` ORDER BY sequence ASC , datemodified DESC");
                                 ?>
                                 <tr>
                                  <th width='20%' style="text-align: center;"></th>
                                  <th width="<?php echo $widthCat1Col; ?>" colspan="<?php echo $totalcat2Col; ?>" style="text-align: center;">Point-in-Time Snapshot Assessment (Duration: 60-days)</th>
                                  <th width="<?php echo $widthCat2Col; ?>" colspan="<?php echo $totalcat2Col; ?>" style="text-align: center;">Continuous Assessment & Monitoring (Duration: Annual)</th>
                                 </tr>
                                 <?php
                                 while ($row = $query ->fetch_object()) {
                                  $id = $row->id;
                                 ?>
                                 <tr>
                                  <?php
                                    foreach ($fields as $key) {
                                  ?>
                                  <!-- <td><?php echo $count; ?></td> -->
                                  <td> 
                                    <div class='edit' > <?php echo $row->$key; ?></div> 
                                    <input type='text' class='txtedit' value='<?php echo $row->$key; ?>' id='<?php echo $key.'_'.$id; ?>' >
                                  </td>
                                   <?php
                                    }
                                   ?>
                                 </tr>
                                 <?php
                                 $count ++;
                                 }
                                 ?> 
                                </table>

                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal" style="margin-top: 3rem;">ADD COLUMN</button>
                                <div class="modal fade" id="myModal" role="dialog">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h6 class="modal-title">ADD COLUMN</h6>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                            </div>
                                            <div class="modal-body">
                                                <form action="" enctype="multipart/form-data" method="POST">
                                                    <label for="inputEmail4">Catagory</label>
                                                    <select class="form-control" name="cat" onchange='load_new_content()' id="select">
                                                        <option value="Point-in-Time Snapshot Assessment (Duration: 60-days)">Point-in-Time Snapshot Assessment (Duration: 60-days)</option>
                                                        <option value="Continuous Assessment & Monitoring (Duration: Annual)">Continuous Assessment & Monitoring (Duration: Annual)</option>
                                                    </select>
                                                    <label for="inputEmail4">Add After</label>
                                                    <select class="form-control" name="addafter">
                                                        <?php 
                                                         $s="select nametodisplay from pricelistcolumns_mapping";
                                                         $q = $connection->query($s);
                                                        while($rw=mysqli_fetch_array($q))
                                                        { ?>
                                                        <option value="<?php echo $rw['nametodisplay']; ?>"><?php echo $rw['nametodisplay']; ?>
                                                        </option>
                                                        <?php } ?>
                                                    </select>
                                                    <br>
                                                    <label for="inputEmail4">Column Name</label>
                                                    <input type="text" class="form-control" name="colname" placeholder="Service Title">
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-danger btn-secondary" data-dismiss="modal">CLOSE</button>
                                                <input type="submit" name="addcolumnsubmit" value="ADD" class="btn btn-primary">
                                            </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>

                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal1" style="margin-top: 3rem;">ADD ROW</button>
                                <div class="modal fade" id="myModal1" role="dialog">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h6 class="modal-title">ADD ROW</h6>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                            </div>
                                            <div class="modal-body">
                                                <form action="" enctype="multipart/form-data" method="POST">
                                                    <label for="inputEmail4">Sequence</label>
                                                    <input type="text" class="form-control" name="sequence" placeholder="Sequence">
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-danger btn-secondary" data-dismiss="modal">CLOSE</button>
                                                <input type="submit" name="addrowsubmit" value="ADD" class="btn btn-primary">
                                            </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                              </br>
                              </br>
                                <form action="" enctype="multipart/form-data" class="mt-2" method="POST">
                                    <!-- <input type="text" class="form-control" name="product_id" placeholder="Id"> -->
                                    <?php
                                    $fetch_data = $connection->query("SELECT * from pricelistdesc");
                                    $editRow = mysqli_fetch_assoc($fetch_data);
                                    echo '<label for="inputEmail4">Price List Description</label>
                                                    <textarea class="form-control" name="description" required id="editor1">' . $editRow['description'] . '</textarea>
                                                    </br>
                                    <br>
                                    
                                    ';
                                    ?>
                                    <input type="submit" name="submit" value="UPDATE" class="btn btn-primary">
                                </form>
                            </div>
                        </div>
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
    </script>>

</body>
<style>
.edit{
 width: 100%;
 height: 100%;
}
.editMode{
 border: 1px solid black;
}
table {
 border:3px solid lavender;
 border-radius:3px;
}
table tr:nth-child(1){
 background-color:gray;
}
table tr:nth-child(1) th{
 color:white;
 padding:10px 0px;
 letter-spacing: 1px;
}
table td{
 padding:10px;
}
table tr:nth-child(even){
 /*background-color:lavender;*/
 color:black;
}
.txtedit{
 display: none;
 width: 99%;
 height: 30px;
}
</style>
<!-- Mirrored from www.ravijaiswal.com/Jais_admin/index.html by HTTrack Website Copier/3.x [XR&CO'2017], Fri, 04 Aug 2017 15:25:58 GMT -->

</html>