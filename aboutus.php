<?php 
require_once 'db.php';
$aboutus_fetch = $connection->query("SELECT * from aboutus");
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
            <p class="h1 text-center mb-3">About<span class="text-danger"> Us</span></p>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section_title_all text-center">
                            <p class="section_subtitle mx-auto text-muted">
                            <?php
                            $editRow = mysqli_fetch_row($aboutus_fetch);
                            echo $editRow[1];
                            ?>
                            </p>
                            <?php
                            echo $editRow[2];
                            ?>
                        </div>
                    </div>
                </div>


                <div class="row mt-3 justify-content-center">
                <p class="h2 text-center mb-3">Our <span class="text-danger">Commitment</span></p>
                </div>
                <div class="row justify-content-center">

                    <?php
                    $commitment_fetch = $connection->query("SELECT * from commitment");
                    while ($row = mysqli_fetch_array($commitment_fetch)) {
                    echo'<div class="col-lg-3">
                        <div class="about_content_box_all mt-3">
                            <div class="about_detail text-center">
                                <div class="about_icon">
                                    <i class="' . $row[1] . '"></i>
                                </div>
                                <h5 class="text-dark text-capitalize mt-3 font-weight-bold">' . $row[2] . '</h5>
                                <p class="edu_desc mb-0 mt-3 text-muted">' . $row[3] . '</p>
                            </div>
                        </div>
                    </div>';
                    }
                    ?>
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