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

        <section class="section_all" id="about">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section_title_all text-center">
                            <p class="section_subtitle mx-auto text-muted">
                            <?php
                            $editRow = mysqli_fetch_row($aboutus_fetch);
                            echo $editRow[1];
                            ?>
                            </p>
                            <div class="">
                                <i class=""></i>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                        <div class="col-lg-6"> </div> 
                        <div class="col-lg-6 mt-3"> 
                                <h3 class="text-center">About Us</h3> 
                        </div>   
                    </div>
                <div class="row vertical_content_manage">
                    <div class="col-lg-6">
                        <div class="about_header_main mt-3">
                            <!-- <div class="about_icon_box">
                            <p class="text_custom font-weight-bold">Lorem Ipsum is simply dummy text</p>
                        </div> -->
                            <!-- <h4 class="about_heading text-capitalize font-weight-bold mt-4">Lorem Ipsum is simply dummy text of the printing industry.</h4> -->
                            <?php
                            echo $editRow[2];
                            ?>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="img_about mt-5">
                            <img src="images/half-logo.png" alt="" class="img-fluid mx-auto d-block">
                        </div>
                    </div>
                </div>

                <h4 class="mb-5 mt-3 center">Our Commitment</h4>
                <div class="row mt-3">
                    <div class="col-lg-3">
                        <div class="about_content_box_all mt-3">
                            <div class="about_detail text-center">
                                <div class="about_icon">
                                    <i class="fas fa-thumbs-up"></i>
                                </div>
                                <h5 class="text-dark text-capitalize mt-3 font-weight-bold">Guide With Expertise</h5>
                                <p class="edu_desc mt-3 mb-0 text-muted">We work with customers and vendors in a consultative/advisory and collaborative way. </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3">
                        <div class="about_content_box_all mt-3">
                            <div class="about_detail text-center">
                                <div class="about_icon">
                                    <i class="fab fa-angellist"></i>
                                </div>
                                <h5 class="text-dark text-capitalize mt-3 font-weight-bold">Keep Promises</h5>
                                <p class="edu_desc mb-0 mt-3 text-muted">We are vigilant and focused on doing what we say and, where possible, exceed customer expectations. </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3">
                        <div class="about_content_box_all mt-3">
                            <div class="about_detail text-center">
                                <div class="about_icon">
                                    <i class="fas fa-paper-plane"></i>
                                </div>
                                <h5 class="text-dark text-capitalize mt-3 font-weight-bold">Cultivate Progress </h5>
                                <p class="edu_desc mb-0 mt-3 text-muted">We help customers evolve their vendor risk management maturity at the right pace. </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="about_content_box_all mt-3">
                            <div class="about_detail text-center">
                                <div class="about_icon">
                                    <i class="fas fa-clock"></i>
                                </div>
                                <h5 class="text-dark text-capitalize mt-3 font-weight-bold">Constantly Evolve & Mature</h5>
                                <p class="edu_desc mt-3 mb-0 text-muted">We continuously improve what we do, and increase the value we bring to our customers. </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mt-3 center">
                    <div class="col-lg-3">
                        <div class="about_content_box_all mt-3">
                            <div class="about_detail text-center">
                                <div class="about_icon">
                                    <i class="fas fa-handshake"></i>
                                </div>
                                <h5 class="text-dark text-capitalize mt-3 font-weight-bold">Remain Dedicated Pre & Post Engagements</h5>
                                <p class="edu_desc mb-0 mt-3 text-muted">We’re very passionate about our clients. When they win, we in. </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3">
                        <div class="about_content_box_all mt-3">
                            <div class="about_detail text-center">
                                <div class="about_icon">
                                    <i class="fas fa-phone"></i>
                                </div>
                                <h5 class="text-dark text-capitalize mt-3 font-weight-bold">Help Customer Achieve Desired Outcomes</h5>
                                <p class="edu_desc mb-0 mt-3 text-muted">We help businesses prioritize their efforts in a practical manner that’s impactful </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3">
                        <div class="about_content_box_all mt-3">
                            <div class="about_detail text-center">
                                <div class="about_icon">
                                    <i class="fas fa-unlink"></i>
                                </div>
                                <h5 class="text-dark text-capitalize mt-3 font-weight-bold">Remain Connected</h5>
                                <p class="edu_desc mb-0 mt-3 text-muted">Our client relationships matter. We invest in our client relationship with a shared risk/shared reward model. We do the right thing to build trust. </p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>

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