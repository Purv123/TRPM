<?php 
require_once 'db.php';
$service_fetch = $connection->query("SELECT * from services where type='ourservices'");
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
            <div class="container mt-5">
                <div class="half-logo text-center">
                  <img src="images/half-logo.png" style="width: 15%" />
                </div>
                <p class="h1 text-center">Our<span class="text-danger"> Services</span></p>
      
                <p class="section_subtitle mx-auto text-muted mt-5">Businesses and regulators expect organizations to assess the security of their third parties, but how can we assess the security of so many and keep the cost under control? Third-party breaches leave an organization powerless, exposed to severe reputation damage and complicated clean-up to get back on track. Third-party relationships are vital to the success of an organization, but are the risk of doing business higher than the value? Establishing a third-party risk management program is essential to help organizations maintain visibility into their vendor ecosystem. </p>

                <p class="section_subtitle mx-auto text-muted">The operational drain to keep up with hundreds to thousands of vendor relationships can be suffocating to an organization’s resources. Vendors must be inventoried, analyzed for risk, have completed security risk assessments, implemented remediation requirements and maintained year after year for upto-date information. And what about when risks change? Organizations need a partner to help plan, develop and manage their third-party risk program successfully.</p>

                <p class="section_subtitle mx-auto text-muted">Let us handle the manual labor of third party risk assessment by collaborating with our experts to reduce the workload and to mature your program while confidently achieving your true desired program outcome. Our talented team can review and validate the security controls of your vendors and as well help track and manage remediation activity with your vendors. Here is a snap shot of our services:</p>
            </div>
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
        <?php include_once 'footer.php'; ?>
    </div>
    <script type="text/javascript">
        const removeShowMore =  () => {
            collapsed = [...document.querySelectorAll(`p[id*='collapseExample']`)]
            collapsed.forEach(collapse => {
                const height = +window.getComputedStyle(collapse).getPropertyValue('height').replace('px','');
                collapse.classList.add('show');
                const newHeight = +window.getComputedStyle(collapse).getPropertyValue('height').replace('px','');
                collapse.classList.remove('show');
                if(newHeight <= height){
                    collapse.nextElementSibling.style.visibility = "hidden";
                }
            });
        }
        removeShowMore();
    </script>
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
    <script type="text/javascript" src="js/services.js"></script>
</body>

</html>