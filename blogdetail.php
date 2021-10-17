<?php 
require_once 'db.php';
if (isset($_GET['id'])) {
    $id = $_REQUEST['id'];
}
$blog_fetch = $connection->query("SELECT * from blog where id=$id");
$blog_fetch_Row = mysqli_fetch_assoc($blog_fetch);
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
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
</head>

<body class="no-blog">
  <div class="body_background"></div>

  <!--/Custom panel -->
  <div class="box">
    <?php include_once 'navbar.php'; ?>
    <div class="blogpostsection">
      <div class="backbutton">
        <button onclick="window.history.back()">
        <i class="fa fa-backward"></i>  
        Back</button>
      </div>
      <div class="container">
        <div class="blogpost" style="padding-bottom: 0">
          <div class="blogheadingwrapper">
            <div class="blogheading">
              <h1><?php echo $blog_fetch_Row['title']; ?></h1>
            </div>
            <div class="blogdesc" style="padding-bottom: 0">
              <h4><?php echo $blog_fetch_Row['shortdescription']; ?></h4>
            </div>
          </div>
          <hr />
        </div>
        <div class="blogpost article" style="padding-top: 0">
          <div class="blogpostcontent">
            <div class="blogparagraph blogposttext">
              <?php echo $blog_fetch_Row['description']; ?>
            </div>
          </div>
        </div>
      </div>
      <!-- <div class="blogherowrapper relatedblogs">
        <div class="line"></div>
        <div class="relatedarticles">
          <h4>Related articles</h4>
        </div>
        <div class="w-layout-grid bloglist">
          <div id="w-node-f857b1e51700-b395368c" class="bloglistitem">
            <a href="#" class="blogdisplayimage w-inline-block"><img src="images/Group-4512x-min_1.jpg" loading="lazy" sizes="(max-width: 479px) 92vw, (max-width: 767px) 95vw, (max-width: 991px) 92vw, (max-width: 5647px) 68vw, 3840px" srcset="images/Group-4512x-min_1-p-800.jpeg 800w, images/Group-4512x-min_1-p-1080.jpeg 1080w, images/Group-4512x-min_1-p-2000.jpeg 2000w, images/Group-4512x-min_1-p-2600.jpeg 2600w, images/Group-4512x-min_1-p-3200.jpeg 3200w, images/Group-4512x-min_1.jpg 3840w" alt="Bicycle rider with cycle at sunset."></a>
            <div class="displayblogcontent">
              <a href="#" class="displayblogtitle w-inline-block">
                <h2 class="displayblogheading listitem">The 43 best design blogs for inspiration</h2>
              </a>
              <div class="displayblogtext">
                <h4 class="blogitemlisttext">Creative design blogs come in handy while working in the field of graphic design. After all, it’s too easy to loose steam in the midst of cranking out design after design. Fear not!</h4>
                <h4 class="blogauthor">By Test Maniya</h4>
              </div>
              <a href="#" class="blogbutton w-inline-block">
                <h4 class="readmore">Read More</h4><img src="images/ReadMore.svg" loading="lazy" alt="">
              </a>
            </div>
          </div>
          <div class="bloglistitem">
            <a href="#" class="blogdisplayimage w-inline-block"><img src="images/Group-4512x-min_1.jpg" loading="lazy" sizes="(max-width: 479px) 92vw, (max-width: 767px) 95vw, (max-width: 991px) 92vw, (max-width: 5647px) 68vw, 3840px" srcset="images/Group-4512x-min_1-p-800.jpeg 800w, images/Group-4512x-min_1-p-1080.jpeg 1080w, images/Group-4512x-min_1-p-2000.jpeg 2000w, images/Group-4512x-min_1-p-2600.jpeg 2600w, images/Group-4512x-min_1-p-3200.jpeg 3200w, images/Group-4512x-min_1.jpg 3840w" alt="Bicycle rider with cycle at sunset."></a>
            <div class="displayblogcontent">
              <a href="#" class="displayblogtitle w-inline-block">
                <h2 class="displayblogheading listitem">The 43 best design blogs for inspiration</h2>
              </a>
              <div class="displayblogtext">
                <h4 class="blogitemlisttext">Creative design blogs come in handy while working in the field of graphic design. After all, it’s too easy to loose steam in the midst of cranking out design after design. Fear not!</h4>
                <h4 class="blogauthor">By Test Maniya</h4>
              </div>
              <a href="#" class="blogbutton w-inline-block">
                <h4 class="readmore">Read More</h4><img src="images/ReadMore.svg" loading="lazy" alt="">
              </a>
            </div>
          </div>
        </div>
      </div> -->
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