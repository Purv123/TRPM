<?php 
require_once 'db.php';
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
  </head>
  <body class="no-blog">
    <div class="body_background"></div>

    <!--/Custom panel -->
    <div class="box">
      <?php include_once 'navbar.php'; ?>
      <div class="pricetbl" style="overflow-x: auto;">
        <table class="price-table">
            <tbody>
              <tr>
                <td class="price-blank"></td>
                <td colspan="4" class="price-merge">Pricing per Supplier Assessment/Report</td>
                <td class="price-blank">Subscription Pricing</td>
              </tr>
              <tr class="price-table-head">
                <td></td>
                <td class="green-width">
                  Basic
                  <br /><small style="font-size: 12px; font-weight: 400"
                    >Starter plan</small
                  >
                </td>
                <td class="green-width">
                  Normal
                  <br /><small style="font-size: 12px; font-weight: 400"
                    >Limited Solution</small
                  >
                </td>
                <td class="green-width">
                  Advanced
                  <br /><small style="font-size: 12px; font-weight: 400"
                    >Advanced Solution</small
                  >
                </td>
                <td class="green-width">
                  Pro
                  <br /><small style="font-size: 12px; font-weight: 400"
                    >Our complete solution</small
                  >
                </td>
                <td class="green-width">
                    Cap of up to 15 Suppliers/Month
                    <br /><small style="font-size: 12px; font-weight: 400"
                      >120 Supplier/Year</small
                    >
                  </td>
              </tr>
              <tr>
              <?php
              $pricelist_fetch = $connection->query("SELECT col1,col2,col3,col4,col5,col6 from pricelist LIMIT 1,1");
              while ($row = mysqli_fetch_assoc($pricelist_fetch)) {
                foreach ($row as $value) {
                  echo '<td class="price">
                  <br />';
                  echo $value;
                  echo '<br />
                </td>';
                }
              }
              ?>
              </tr>
              <?php
              for($i=2; $i<12; $i++){
                echo '<tr>';
                $pricelist_fetch = $connection->query("SELECT col1,col2,col3,col4,col5,col6 from pricelist LIMIT $i,1");
              while ($row = mysqli_fetch_assoc($pricelist_fetch)) {
                foreach ($row as $value) {
                  echo '<td>';
                  if($value == 'true')
                    echo '<i class="fa fa-check">';
                  else if($value == 'false')
                    echo '<i class="fa fa-times">';
                  else
                    echo $value;
                  echo '</td>';
                }
              }
              echo '</tr>';
              }
              ?>
              <tr>
                <td></td>
                <td class="price">
                  <a href="contact.php">Get started</a>
                </td>
                <td class="price">
                  <a href="contact.php">Get started</a>
                </td>
                <td class="price">
                  <a href="contact.php">Get started</a>
                </td>
                <td class="price">
                    <a href="contact.php">Get started</a>
                  </td>
                  <td class="price">
                    <a href="contact.php">Get started</a>
                  </td>
              </tr>
            </tbody>
          </table>
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
