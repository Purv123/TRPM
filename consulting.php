<?php 
require_once 'db.php';
$aboutus_fetch = $connection->query("SELECT * from consulting");
$usecases_fetch = $connection->query("SELECT * from usecases");
$consulting_logo = $connection->query("SELECT image from consulting_logo");
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <title>TPRM</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <link rel="stylesheet" type="text/css" href="css/fontello/css/fontello.css" />
    <link rel="stylesheet" type="text/css" href="css/prettyPhoto.css" />
    <link rel="stylesheet" type="text/css" href="css/responsiveslides.css" />
    <link rel="stylesheet" type="text/css" href="css/responsive.css" />
    <link rel="stylesheet" type="text/css" href="css/style.css" />
    <link rel="stylesheet" type="text/css" href="css/navbar.css" />
    <link rel="stylesheet" type="text/css" href="css/liststyle.css" />
    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/"
        crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4"
        crossorigin="anonymous"></script>
</head>

<body class="no-blog">
    <div class="body_background"></div>

    <!--/Custom panel -->
    <div class="box">
        <?php include_once 'navbar.php'; ?>

        <div class="container consulting my-5">
            <div class="half-logo text-center">
              <img src="images/half-logo.png" style="width: 15%" />
            </div>
            <p class="h1 text-center mb-3"><span class="text-danger">TPRM Advisory </span> and Consulting</p>
            <?php
                        $editRow = mysqli_fetch_row($aboutus_fetch);
                        echo $editRow[1];
            ?>
            
            <table align="center" border="0" cellpadding="5" cellspacing="1" style="width:100%">
                <tbody>
                <?php
                    $totalLogo = $connection->query("SELECT COUNT(*) FROM consulting_logo");
                    $totalRow = mysqli_fetch_assoc($totalLogo);
                    $totalRow = $totalRow['COUNT(*)'];
                    $totalRow = ceil($totalRow/3);
                    $logoPerRow = 3;
                    $logos = [];
                    while ($x = mysqli_fetch_assoc($consulting_logo)){
                            $logos[] = $x['image'];
                    }
                    $logo_Chunked = array_chunk($logos,3);
                    for($i=0;$i<sizeof($logo_Chunked);$i++){
                            echo"<tr>";
                            for($j=0;$j<=sizeof($logo_Chunked[$i]);$j++){
                            echo'<td style="text-align:center">
                            <div>
                                <img alt="" src="'. $logo_Chunked[$i][$j] .'" style="max-height:100px; max-width: 150px;" />
                            </div>
                            </td>';
                           }
                           echo "</tr>";
                    }
                    
                ?>
                </tbody>
            </table>
 
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