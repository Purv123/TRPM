<?php 
require_once '../db.php';
require 'commonFunction.php';
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
                                 <tr>
                                  <!-- <th width='10%' style="text-align: center;">No</th> -->
                                  <th width='80%'colspan="5" style="text-align: center;">Pricing per Supplier Assessment/Report</th>
                                  <th width='20%' style="text-align: center;">Subscription Pricing</th>
                                 </tr>
                                 <?php 
                                 include('db.php');
                                 $count = 1;
                                 $query = $connection->query("SELECT * FROM pricelist");
                                 while ($row = $query ->fetch_object()) {
                                  $id = $row->id;
                                  $col1 = $row->col1;
                                  $col2 = $row->col2;
                                  $col3 = $row->col3;
                                  $col4 = $row->col4;
                                  $col5 = $row->col5;
                                  $col6 = $row->col6;
                                 ?>
                                 <tr>
                                  <!-- <td><?php echo $count; ?></td> -->
                                  <td> 
                                    <div class='edit' > <?php echo $col1; ?></div> 
                                    <input type='text' class='txtedit' value='<?php echo $col1; ?>' id='col1_<?php echo $id; ?>' >
                                  </td>
                                  <td> 
                                   <div class='edit' ><?php echo $col2; ?> </div> 
                                   <input type='text' class='txtedit' value='<?php echo $col2; ?>' id='col2_<?php echo $id; ?>' >
                                  </td>
                                  <td> 
                                   <div class='edit' ><?php echo $col3; ?> </div> 
                                   <input type='text' class='txtedit' value='<?php echo $col3; ?>' id='col3_<?php echo $id; ?>' >
                                  </td>
                                  <td> 
                                   <div class='edit' ><?php echo $col4; ?> </div> 
                                   <input type='text' class='txtedit' value='<?php echo $col4; ?>' id='col4_<?php echo $id; ?>' >
                                  </td>
                                  <td> 
                                   <div class='edit' ><?php echo $col5; ?> </div> 
                                   <input type='text' class='txtedit' value='<?php echo $col5; ?>' id='col5_<?php echo $id; ?>' >
                                  </td>
                                  <td> 
                                   <div class='edit' ><?php echo $col6; ?> </div> 
                                   <input type='text' class='txtedit' value='<?php echo $col6; ?>' id='col6_<?php echo $id; ?>' >
                                  </td>
                                 </tr>
                                 <?php
                                 $count ++;
                                 }
                                 ?> 
                                </table>
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