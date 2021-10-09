<?php 
require_once 'db.php';
$aboutus_fetch = $connection->query("SELECT * from pricelistdesc");
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <title>TPRM</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <link rel="stylesheet" type="text/css" href="css/pinwheel/style.css" />
    <link
      rel="stylesheet"
      type="text/css"
      href="css/fontello/css/fontello.css"
    />
    <link rel="stylesheet" type="text/css" href="css/prettyPhoto.css" />
    <link rel="stylesheet" type="text/css" href="css/responsiveslides.css" />
    <link rel="stylesheet" type="text/css" href="css/responsive.css" />
      <!-- Theme Style -->
      <link rel="stylesheet" type="text/css" href="./pricetable/stylesheets/price-table.css" />
      <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />
     <!-- Favicon and touch icons  -->
     <link
     href="icon/apple-touch-icon-48-precomposed.png"
     rel="apple-touch-icon-precomposed"
     sizes="48x48"
   />
   <link
     href="icon/apple-touch-icon-32-precomposed.png"
     rel="apple-touch-icon-precomposed"
   />
    <!-- Bootstrap  -->
    <link rel="stylesheet" type="text/css" href="stylesheets/bootstrap.css" />

    <link rel="stylesheet" type="text/css" href="css/navbar.css" />
    <link rel="stylesheet" type="text/css" href="css/style.css" />
    
    <link
      href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900"
      rel="stylesheet"
      type="text/css"
    />

    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">

  <style type="text/css">
            fieldset {
                padding: 1rem;
  width: 100%;
  border: 1px solid #e31e24;
}
legend {
  width: auto;
  text-align: center;
  font-size: 3rem;
  padding: 1rem;
}
        </style>

  </head>
  <body class="no-blog">
    <div class="body_background"></div>

    <!--/Custom panel -->
    <div class="box">
      <?php include_once 'navbar.php'; ?>
      <div class="container mt-5">
            <div class="half-logo text-center">
              <img src="images/half-logo.png" style="width: 15%" />
            </div>
            <p class="h1 text-center">Pricing</p>
      </div>
      <div class="pricetbl mt-3" style="overflow-x: auto;">
        <table class="price-table">
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
                                  <td> 
                                      <?php 
                                      if($row->$key == 'true')
                                        echo '<i class="fa fa-check" />';
                                      else if($row->$key == 'false')
                                        echo '<i class="fa fa-times" />';
                                      else
                                        echo $row->$key;
                                     ?>
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
          <div class="mt-3">
          <fieldset>
            <?php
                        $editRow = mysqli_fetch_row($aboutus_fetch);
                        echo $editRow[1];
            ?>
            
            </fieldset>
          </div>
      </div>
      <?php include_once 'footer.php'; ?>
    </div>
    <script src="./js/script.js"></script>
    <script src="./js/navbar.js"></script>
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/Chart.min.js"></script>
    <script type="text/javascript" src="js/jquery.flexslider.min.js"></script>
    <script type="text/javascript" src="js/jquery.prettyPhoto.js"></script>
    <script type="text/javascript" src="js/SmoothScroll.js"></script>
    <script type="text/javascript" src="js/responsiveslides.js"></script>
    <script type="text/javascript" src="js/jquery.cookie.js"></script>
    <script type="text/javascript" src="js/_front.js"></script>
  </body>
</html>
