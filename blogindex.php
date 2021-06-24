<?php 
require_once 'db.php';
$blog_fetch = $connection->query("SELECT * from blog ORDER BY id DESC");
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
  <link rel="stylesheet" type="text/css" href="css/blog.css" />
  <link rel="stylesheet" type="text/css" href="css/style.css" />
  <link rel="stylesheet" type="text/css" href="css/navbar.css" />
  <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900" rel="stylesheet" type="text/css" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
</head>

<body class="no-blog">

  <!--/Custom panel -->
  <div class="box">
    <?php include_once 'navbar.php'; ?>

        <div class="container my-5">
            <div class="half-logo text-center">
              <img src="images/half-logo.png" style="width: 15%" />
            </div>
            <section class="timeline">
              <p class="h3 text-center">Blog</span></p>
              <ul>
                <?php
                while ($row = mysqli_fetch_array($blog_fetch)) {
                echo '<li>
                        <div>
                          <a href="blogdetail.php?id=' . $row['id'] . '" class="displayblogtitle w-inline-block">
                            <h6>Blog / ' . $row['date'] . '</h6> <h5>' . $row['title'] . '</h5>
                          </a>
                          <p>' . $row['shortdescription'] . '</p>
                          <a href="blogdetail.php?id=' . $row['id'] . '" class="blogbutton w-inline-block">
                            <p class="readmore">Read More</p><img src="images/ReadMore.svg" loading="lazy" alt="">
                          </a>
                      </div>
                    </li>';
                }
                ?>
              </ul>
            </section>
        </div>

    <?php include_once 'footer.php'; ?>
  </div>
  <script src="./js/script.js"></script>
  <script src="./js/navbar.js"></script>
  <script src="./js/blog.js"></script>
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