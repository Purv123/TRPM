<?php 
require_once 'db.php';
$newofferings_fetch = $connection->query("SELECT description from newofferings");
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
</head>

<body class="no-blog">
    <div class="body_background"></div>

    <!--/Custom panel -->
    <div class="box">
        <?php include_once 'navbar.php'; ?>

            <div class="container my-5">
                <div class="half-logo text-center">
              <img src="images/half-logo.png" style="width: 15%" />
            </div>
            <p class="h1 text-center mb-3">Free<span class="text-danger"> Offers</span></p>
                <div class="container whyriskkarma row">
                    <div class="col-lg-12">
                        <div class="section_title_all">
                            <p class="section_subtitle mx-auto text-muted">
                            <?php
                            $editRow = mysqli_fetch_row($newofferings_fetch);
                            echo $editRow[0];
                            ?>
                        </div>
                    </div>
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