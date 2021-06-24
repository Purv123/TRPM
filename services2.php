<?php 
require_once 'db.php';
$service_fetch = $connection->query("SELECT * from services where type='forenterprise'");
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <title>TPRM</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <link rel="stylesheet" type="text/css" href="css/services.css" />
    <link rel="stylesheet" type="text/css" href="css/fontello/css/fontello.css" />
    <link rel="stylesheet" type="text/css" href="css/prettyPhoto.css" />
    <link rel="stylesheet" type="text/css" href="css/responsiveslides.css" />
    <link rel="stylesheet" type="text/css" href="css/responsive.css" />
    <link rel="stylesheet" type="text/css" href="css/style.css" />
    <link rel="stylesheet" type="text/css" href="css/navbar.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link rel="stylesheet" type="text/css" href="stylesheets/bootstrap.css" />
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
        <section class="services-section mt-5">
            <div class="bg_pinwheel"></div>
            <div class="container section_title_all text-center" style="margin-top: 2.3rem">
                <h3 class="font-weight-bold">For Enterprises</h3>
                <!-- <p class="section_subtitle mx-auto text-muted">Risk Karma is Third Party Risk Management Company. <br/>Risk Karma’s (TPRM) as-a-Service is an advisory and consulting service offering.</p> -->
            </div>
            <div class="services">
                <div class="services row mt-5">
                <?php
                while ($row = mysqli_fetch_array($service_fetch)) {
                    echo '
                    <div class="service-item centerService" id="module">
                    <h5>' . $row["title"] . '</h5>
                    <p class="collapse" id="collapseExample' . $row['id'] . '" aria-expanded="false">' . $row["description"] . '</p> <a role="button" class="collapsed" data-toggle="collapse" href="#collapseExample' . $row['id'] . '" aria-expand="false" aria-controls="collapseExample"> </a>
                    </div>
                    ';
                }
                ?>
                </div>
            </div>
        </section>
        <?php include_once 'footer.php'; ?>
            </div>
    <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
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
    <script type="text/javascript" src="services.js"></script>
</body>

</html>