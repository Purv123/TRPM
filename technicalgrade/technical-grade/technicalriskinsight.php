<?php 
require_once '../../db.php';
$aboutus_fetch = $connection->query("SELECT * from technicalriskinsight");
$usecases_fetch = $connection->query("SELECT * from usecases");
?>

<!doctype html>
<html lang="en-US">

<!-- Mirrored from blackkite.com/technical-grade/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 04 Oct 2021 16:26:44 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
<link rel="stylesheet" type="text/css" href="../../css/fontello/css/fontello.css" />
    <link rel="stylesheet" type="text/css" href="../../css/prettyPhoto.css" />
    <link rel="stylesheet" type="text/css" href="../../css/responsiveslides.css" />
    <link rel="stylesheet" type="text/css" href="../../css/responsive.css" />
    <link rel="stylesheet" type="text/css" href="../../css/navbar.css" />
    <link rel="stylesheet" type="text/css" href="../../css/liststyle.css" />
    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/"
        crossorigin="anonymous">

<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
	new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
	j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
	'../../www.googletagmanager.com/gtm5445.html?id='+i+dl;f.parentNode.insertBefore(j,f);
	})(window,document,'script','dataLayer','GTM-N6NBH3K');</script>


<script>
    window._6si = window._6si || [];
    window._6si.push(['enableEventTracking', true]);
    window._6si.push(['setToken', 'ab3b0576827c4d7ba61d2774ffe286f7']);
    window._6si.push(['setEndpoint', 'b.6sc.co']);
    (function() {
      var gd = document.createElement('script');
      gd.type = 'text/javascript';
      gd.async = true;
      gd.src = '../../j.6sc.co/6si.min.js';
      var s = document.getElementsByTagName('script')[0];
      s.parentNode.insertBefore(gd, s);
    })();
  </script>


<link rel='dns-prefetch' href='http://js.hs-scripts.com/' />
<link rel='dns-prefetch' href='http://use.typekit.net/' />
<link rel='dns-prefetch' href='http://s.w.org/' />
<script>
			window._wpemojiSettings = {"baseUrl":"https:\/\/s.w.org\/images\/core\/emoji\/13.1.0\/72x72\/","ext":".png","svgUrl":"https:\/\/s.w.org\/images\/core\/emoji\/13.1.0\/svg\/","svgExt":".svg","source":{"concatemoji":"https:\/\/blackkite.com\/wp-includes\/js\/wp-emoji-release.min.js?ver=939d36a414faeadd9158f325c34ef9a9"}};
			!function(e,a,t){var n,r,o,i=a.createElement("canvas"),p=i.getContext&&i.getContext("2d");function s(e,t){var a=String.fromCharCode;p.clearRect(0,0,i.width,i.height),p.fillText(a.apply(this,e),0,0);e=i.toDataURL();return p.clearRect(0,0,i.width,i.height),p.fillText(a.apply(this,t),0,0),e===i.toDataURL()}function c(e){var t=a.createElement("script");t.src=e,t.defer=t.type="text/javascript",a.getElementsByTagName("head")[0].appendChild(t)}for(o=Array("flag","emoji"),t.supports={everything:!0,everythingExceptFlag:!0},r=0;r<o.length;r++)t.supports[o[r]]=function(e){if(!p||!p.fillText)return!1;switch(p.textBaseline="top",p.font="600 32px Arial",e){case"flag":return s([127987,65039,8205,9895,65039],[127987,65039,8203,9895,65039])?!1:!s([55356,56826,55356,56819],[55356,56826,8203,55356,56819])&&!s([55356,57332,56128,56423,56128,56418,56128,56421,56128,56430,56128,56423,56128,56447],[55356,57332,8203,56128,56423,8203,56128,56418,8203,56128,56421,8203,56128,56430,8203,56128,56423,8203,56128,56447]);case"emoji":return!s([10084,65039,8205,55357,56613],[10084,65039,8203,55357,56613])}return!1}(o[r]),t.supports.everything=t.supports.everything&&t.supports[o[r]],"flag"!==o[r]&&(t.supports.everythingExceptFlag=t.supports.everythingExceptFlag&&t.supports[o[r]]);t.supports.everythingExceptFlag=t.supports.everythingExceptFlag&&!t.supports.flag,t.DOMReady=!1,t.readyCallback=function(){t.DOMReady=!0},t.supports.everything||(n=function(){t.readyCallback()},a.addEventListener?(a.addEventListener("DOMContentLoaded",n,!1),e.addEventListener("load",n,!1)):(e.attachEvent("onload",n),a.attachEvent("onreadystatechange",function(){"complete"===a.readyState&&t.readyCallback()})),(n=t.source||{}).concatemoji?c(n.concatemoji):n.wpemoji&&n.twemoji&&(c(n.twemoji),c(n.wpemoji)))}(window,document,window._wpemojiSettings);
		</script>
<style>

body{
  margin: 0;
    font-family: -apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol","Noto Color Emoji" !important;
    font-size: 1rem !important;
    font-weight: 400 !important;
    line-height: 1.5 !important;
    color: #212529 !important;
    text-align: left !important;
    background-color: #fff !important;
}


/*-----------------------*/
/**************************** Fonts **************************/

h1 {
  font-size: 90px;
  font-weight: 800;
  text-transform: uppercase;
  margin-top: 0;
  margin-bottom: 45px;
}

h2 {
  font-size: 36px;
  font-weight: 800;
  margin-bottom: 20px;
  margin-top: 0;
}

h3 {
  font-size: 30px;
  font-weight: 800;
  text-transform: uppercase;
  letter-spacing: 6px;
}

h4 {
  font-size: 24px;
  font-weight: 700;
  text-transform: uppercase;
  letter-spacing: 8px;
  margin-top: 0;
}

h4.light {
  font-size: 24px;
  font-weight: 300;
  text-transform: none;
  letter-spacing: 0.5px;
}

h4.light b {
  text-transform: uppercase;
  font-weight: 800;
}

h5 {
  font-size: 18px;
  text-transform: uppercase;
}

h6 {
  font-size: 10px;
  text-transform: uppercase;
  letter-spacing: 4px;
}



/*Navbar*/
#header:before {
  content: '';
  z-index: -1;
  width: 100%;
  height: 65%;
  /* background-color: #eff0ea; */
  display: block;
  position: absolute;
}

body.blog-sidebar #header {
  width: 100%;
  height: 490px;
}

body.blog-sidebar #header:before {
  height: 69%;
}

body.blog-sidebar #header:after {
  height: 31%;
}

.small_scene#header {
  height: 584px;
}

.small_scene#header:before {
  height: 60%;
}

.small_scene#header:after {
  height: 40.5%;
}

#header {
  width: 100%;
  height: 100%;
}

.blog-no-sidebar #header .main {
  width: 1170px;
  margin: auto;
}

.header {
  width: 100%;
  height: 21vh;
  padding-top: 0;
}

.travel .header {
  padding-bottom: 40px;
}

.header ul {
  list-style: none;
  text-align: center;
  margin: 0;
  padding: 0;
}

.header ul li {
  display: inline-block;
  vertical-align: middle;
  font-weight: 800;
  color: #000;
  font-size: 12px;
  width: 100px;
  text-transform: uppercase;
  letter-spacing: 3px;
  margin: 0 50px;
}

.header ul li {
  display: inline-block;
  vertical-align: middle;
  font-weight: 800;
  color: #000;
  font-size: 12px;
  width: 7rem;
  text-transform: uppercase;
  letter-spacing: 3px;
  margin: 0 50px;
}

.header ul li.largeName {
  display: inline-block;
  vertical-align: middle;
  font-weight: 800;
  color: #000;
  font-size: 12px;
  width: 9rem;
  text-transform: uppercase;
  letter-spacing: 2px;
  margin: 0 50px;
}

.travel .header ul li {
  margin: 0 10px;
}

.header ul li a {
  color: #000;
  text-decoration: none;
  -webkit-transition: all linear .2s;
  -moz-transition: all linear .2s;
  -o-transition: all linear .2s;
  transition: all linear .2s;
  -ms-transition: all linear .2s;
}

.header ul li a.active {
  color: #e31e24;
  text-decoration: none;
  -webkit-transition: all linear .2s;
  -moz-transition: all linear .2s;
  -o-transition: all linear .2s;
  transition: all linear .2s;
  -ms-transition: all linear .2s;
}

.header .logo {
  height: 150px;
  width: auto;
}

.header .logo img {
  height: 75px;
  width: auto;
}

.logo h3 {
  margin: 15px 0 0;
  font-size: 1.75rem;
}

.scroll_menu {
  background-color: #eff0ea;
  position: fixed;
  top: 0;
  left: 0;
  z-index: 1000;
  width: 100%;
  height: 90px;
  box-shadow: 0 1px 4px 2px rgba(175, 175, 161, 1);
  display: none;
  -webkit-transform: translateZ(0);
  -o-transform: translateZ(0);
  -ms-transform: translateZ(0);
  -moz-transform: translateZ(0);
  transform: translateZ(0);
}

.scroll_menu.header {
  padding: 5px 0 0;
}

.scroll_menu .logo {
  height: 80px;
}

.scroll_menu .logo img {
  width: 60px;
}

.scroll_menu .logo h3 {
  font-size: 16px;
  margin-top: 5px;
}

.scroll_menu .logo h6 {
  margin-top: 5px;
  font-size: 8px;
  letter-spacing: 2px;
}

#header.small_scene .main {
  padding: 0;
}

#header.small_scene .header {
  padding-bottom: 30px;
}

#header.small_scene .scroll_menu.header {
  padding-bottom: 0px;
}

#header.small_scene #scene_1 {
  height: 135px;
  margin-bottom: 50px;
}

body.blog-sidebar #header.small_scene .header {
  padding-bottom: 145px;
}

body.blog-sidebar #header.small_scene .header.scroll_menu {
  padding-bottom: 0px;
}

.header ul li a:hover, .headline a:hover span, .headline a:hover span.numder::before {
  color: #e31e24;
}

#header{
  overflow: hidden;
}


/*Footer*/
ul {
  margin: 0px;
  padding: 0px;
}

.footer-section {
  background: #4a4a4a;
  -- background-image: url(../images/travel/bg.png);
  position: relative;
}

.footer-cta {
  /*border-bottom: 1px solid #373636;*/
}

.single-cta i {
  color: #e31e24;
  font-size: 30px;
  float: left;
  margin-top: 8px;
}

.cta-text {
  padding-left: 15px;
  display: inline-block;
}

.cta-text h4 {
  color: #fff;
  font-size: 20px;
  font-weight: 600;
  margin-bottom: 2px;
}

.cta-text h6 {
  color: #fff;
  font-size: 1rem;
  font-weight: 600;
  margin-bottom: 2px;
}

.cta-text span {
  color: #757575;
  font-size: 15px;
}

.footer-content {
  position: relative;
  z-index: 2;
}

.footer-pattern img {
  position: absolute;
  top: 0;
  left: 0;
  height: 330px;
  background-size: cover;
  background-position: 100% 100%;
}

.footer-logo {
  margin-bottom: 30px;
  color: white;
}

.footer-logo img {
  height: 100px;
  width: auto;
}

.footer-text p {
  margin-bottom: 14px;
  font-size: 14px;
  color: #7e7e7e;
  line-height: 28px;
}

.footer-social-icon span {
  color: #ffffff;
  display: block;
  font-size: 20px;
  font-weight: 900;
  font-family: 'Poppins', sans-serif;
  margin-bottom: 20px;
}

.footer-social-icon a {
  color: #ffffff;
  font-size: 16px;
  font-weight: 900;
  margin-right: 8px;
  text-decoration: none;
}

.footer-social-icon a:hover {
  color: #e31e24;
  font-size: 16px;
  font-weight: 900;
  margin-right: 8px;
  text-decoration: none;
}

.footer-social-icon i {
  height: auto;
  width: 3rem;
  text-align: center;
  line-height: 2.5rem;
  border-style: solid;
  border-radius: 8px;
}

.facebook-bg {
  background: #3B5998;
}

.twitter-bg {
  background: #55ACEE;
}

.instagram-bg {
  background: #bc2a8d;
}

.linkedin-bg {
  background: #0A66C2;
}

.footer-widget-heading h3 {
  color: #fff;
  font-size: 1rem;
  font-weight: 600;
  margin-bottom: 40px;
  position: relative;
}

.footer-widget-heading h3::before {
  content: "";
  position: absolute;
  left: 0;
  bottom: -15px;
  height: 2px;
  width: 50px;
  background: #e31e24;
}

.footer-social-icon.mb {
  display: none;
}

@media screen and (max-width: 768px) {
  .footer-widget ul li {
    display: inline-block;
    float: left;
    width: 50%;
    margin-bottom: 12px;
  }
  .footer-widget-heading h3 {
    color: #fff;
    font-size: 20px;
    font-weight: 600;
    margin-bottom: 40px;
    position: relative;
    margin-top: 1rem;
  }
  .usefullinks {
    display: none;
  }
  .footer-social-icon.xl {
    display: none;
  }
  .footer-social-icon.mb {
    display: block;
  }
}

.footer-widget ul li {
  display: inline-block;
  float: left;
  width: 33%;
  margin-bottom: 12px;
}

.footer-widget ul li a:hover {
  color: #e31e24;
}

.footer-widget ul li a.active {
  color: #e31e24;
  text-decoration: none;
  -webkit-transition: all linear .2s;
  -moz-transition: all linear .2s;
  -o-transition: all linear .2s;
  transition: all linear .2s;
  -ms-transition: all linear .2s;
}

.footer-widget ul li a {
  color: #878787;
  text-transform: capitalize;
}

.subscribe-form {
  position: relative;
  overflow: hidden;
}

.subscribe-form input {
  width: 100%;
  padding: 14px 28px;
  background: #2E2E2E;
  border: 1px solid #2E2E2E;
  color: #fff;
}

.subscribe-form button {
  position: absolute;
  right: 0;
  background: #e31e24;
  padding: 13px 20px;
  border: 1px solid #e31e24;
  top: 0;
}

.subscribe-form button i {
  color: #fff;
  font-size: 22px;
  transform: rotate(-6deg);
}

.copyright-area {
  background: #202020;
  padding: 0.5rem 0;
  display: flex;
  justify-content: center;
}

.copyright-text p {
  justify-content: center;
  margin: 0;
  font-size: 14px;
  color: #878787;
}

.copyright-text p a {
  color: #ff5e14;
}

.footer-menu li {
  display: inline-block;
  margin-left: 20px;
}

.footer-menu li:hover a {
  color: #ff5e14;
}

.footer-menu li a {
  font-size: 14px;
  color: #878787;
}

.center {
  display: flex;
  justify-content: center;
  align-items: center;
}


 /*---------------------------------*/




img.wp-smiley,
img.emoji {
	display: inline !important;
	border: none !important;
	box-shadow: none !important;
	height: 1em !important;
	width: 1em !important;
	margin: 0 .07em !important;
	vertical-align: -0.1em !important;
	background: none !important;
	padding: 0 !important;
}
</style>
<link rel='stylesheet' id='wp-block-library-css' href='../wp-includes/css/dist/block-library/style.minbbb0.css?ver=939d36a414faeadd9158f325c34ef9a9' media='all' />
<style id='wp-block-library-theme-inline-css'>
#start-resizable-editor-section{display:none}.wp-block-audio figcaption{color:#555;font-size:13px;text-align:center}.is-dark-theme .wp-block-audio figcaption{color:hsla(0,0%,100%,.65)}.wp-block-code{font-family:Menlo,Consolas,monaco,monospace;color:#1e1e1e;padding:.8em 1em;border:1px solid #ddd;border-radius:4px}.wp-block-embed figcaption{color:#555;font-size:13px;text-align:center}.is-dark-theme .wp-block-embed figcaption{color:hsla(0,0%,100%,.65)}.blocks-gallery-caption{color:#555;font-size:13px;text-align:center}.is-dark-theme .blocks-gallery-caption{color:hsla(0,0%,100%,.65)}.wp-block-image figcaption{color:#555;font-size:13px;text-align:center}.is-dark-theme .wp-block-image figcaption{color:hsla(0,0%,100%,.65)}.wp-block-pullquote{border-top:4px solid;border-bottom:4px solid;margin-bottom:1.75em;color:currentColor}.wp-block-pullquote__citation,.wp-block-pullquote cite,.wp-block-pullquote footer{color:currentColor;text-transform:uppercase;font-size:.8125em;font-style:normal}.wp-block-quote{border-left:.25em solid;margin:0 0 1.75em;padding-left:1em}.wp-block-quote cite,.wp-block-quote footer{color:currentColor;font-size:.8125em;position:relative;font-style:normal}.wp-block-quote.has-text-align-right{border-left:none;border-right:.25em solid;padding-left:0;padding-right:1em}.wp-block-quote.has-text-align-center{border:none;padding-left:0}.wp-block-quote.is-large,.wp-block-quote.is-style-large{border:none}.wp-block-search .wp-block-search__label{font-weight:700}.wp-block-group.has-background{padding:1.25em 2.375em;margin-top:0;margin-bottom:0}.wp-block-separator{border:none;border-bottom:2px solid;margin-left:auto;margin-right:auto;opacity:.4}.wp-block-separator:not(.is-style-wide):not(.is-style-dots){width:100px}.wp-block-separator.has-background:not(.is-style-dots){border-bottom:none;height:1px}.wp-block-separator.has-background:not(.is-style-wide):not(.is-style-dots){height:2px}.wp-block-table thead{border-bottom:3px solid}.wp-block-table tfoot{border-top:3px solid}.wp-block-table td,.wp-block-table th{padding:.5em;border:1px solid;word-break:normal}.wp-block-table figcaption{color:#555;font-size:13px;text-align:center}.is-dark-theme .wp-block-table figcaption{color:hsla(0,0%,100%,.65)}.wp-block-video figcaption{color:#555;font-size:13px;text-align:center}.is-dark-theme .wp-block-video figcaption{color:hsla(0,0%,100%,.65)}.wp-block-template-part.has-background{padding:1.25em 2.375em;margin-top:0;margin-bottom:0}#end-resizable-editor-section{display:none}
</style>
<link rel='stylesheet' id='genesis-blocks-style-css-css' href='../wp-content/plugins/genesis-blocks/dist/blocks.style.build0c7f.css?ver=1627658866' media='all' />
<link rel='stylesheet' id='ez-icomoon-css' href='../wp-content/plugins/easy-table-of-contents/vendor/icomoon/style.min01f0.css?ver=2.0.17' media='all' />
<link rel='stylesheet' id='ez-toc-css' href='../wp-content/plugins/easy-table-of-contents/assets/css/screen.min01f0.css?ver=2.0.17' media='all' />
<style id='ez-toc-inline-css'>
div#ez-toc-container p.ez-toc-title {font-size: 100%;}div#ez-toc-container p.ez-toc-title {font-weight: 500;}div#ez-toc-container ul li {font-size: 80%;}div#ez-toc-container {background: #212121;border: 1px solid #0d0d0d;width: 100%;}div#ez-toc-container p.ez-toc-title {color: #ffffff;}div#ez-toc-container ul.ez-toc-list a {color: #dddddd;}div#ez-toc-container ul.ez-toc-list a:hover {color: #eeeeee;}div#ez-toc-container ul.ez-toc-list a:visited {color: #dddddd;}
</style>
<link rel='stylesheet' id='typekit-fonts-css' href='../../use.typekit.net/nsw5wckbbb0.css?ver=939d36a414faeadd9158f325c34ef9a9' media='all' />
<link rel='stylesheet' id='bootstrap-grid-css' href='../wp-content/themes/normshield/css/vendor/bootstrap-grid.min5b31.css?ver=4.3.1' media='all' />
<link rel='stylesheet' id='normshield-style-css' href='../wp-content/themes/normshield/style959c.css?ver=210620-131249' media='all' />
<link rel='stylesheet' id='myStyleSheets-css' href='../wp-content/plugins/wp-latest-posts/css/wplp_frontbbb0.css?ver=939d36a414faeadd9158f325c34ef9a9' media='all' />
<link rel='stylesheet' id='myFonts-css' href='https://fonts.googleapis.com/css?family=Raleway%3A400%2C500%2C600%2C700%2C800%2C900%7CAlegreya%3A400%2C400italic%2C700%2C700italic%2C900%2C900italic%7CVarela+Round&amp;subset=latin%2Clatin-ext&amp;ver=939d36a414faeadd9158f325c34ef9a9' media='all' />
<script src='../wp-includes/js/jquery/jquery.minaf6c.js?ver=3.6.0' id='jquery-core-js'></script>
<script src='../wp-includes/js/jquery/jquery-migrate.mind617.js?ver=3.3.2' id='jquery-migrate-js'></script>


<style>
.promo[data-wait-for] {
  overflow: hidden;
  display: inline-block;
  position: fixed;
  z-index: 100000;
  right: 1rem;
  bottom: 1rem;
  width: 244px;
  border: 2px solid #444;
  border-radius: .5rem;
  box-shadow: 0 0 1rem 0.25rem black;
  transform: translateY(calc(100% + 2rem));
  transition: transform 1s ease;
}

.promo[data-wait-for].visible {
  transform: translateY(0);
}

.promo[data-wait-for] img {
  vertical-align: middle;
}

.promo[data-wait-for] .close {
  position: absolute;
  opacity: .25;
  top: 0;
  right: 0;
  width: 2.5rem;
  height: 2.5rem;
  color: white;
  font-size: 1.5rem;
  font-weight: bold;
  line-height: 2.5rem;
  text-align: center;
  transition: opacity .25s ease;
  cursor: pointer;
}

.promo[data-wait-for] .close:hover {
  opacity: .5;
}

.promo[data-wait-for] .close:after {
  content: "×";
}

@media screen and (max-width: 479px) {
  .promo[data-wait-for] {
    width: calc(100% - 2rem);
  }
}</style>


<style>
/* Stage 1: Compact */
.venn-diagram {
  position: relative;
  width: 17em;
  height: 16em;
  font-size: 32.5px;
}
.venn-diagram > * {
  overflow: visible;
  position: absolute;
  top: 4em;
  left: 3.5em;
  width: 10em;
  height: 10em;
  transition: transform 1.25s ease;
}
.venn-diagram > .symbol {
  z-index: 2;
  fill: #3dcc77;
  transform: scale(0.5);
  transition: fill 1.25s ease, transform 1.25s ease;
}
.venn-diagram > .set {
  transform: none;
}
.venn-diagram > .set > * {
  position: relative;
}
.venn-diagram > .set > text {
  opacity: 0;
  z-index: 2;
  fill: white;
  font-size: .25em;
  transition: opacity 1.25s ease;
}
.venn-diagram > .set > circle {
  z-index: 1;
  stroke: rgba(61, 204, 119, .125);
  stroke-width: 1;
  stroke-dasharray: calc(22 / 7 * 100);
  stroke-dashoffset: 0;
  fill: transparent !important;
  transition: fill 1.25s ease, stroke 1.25s ease;
}
@keyframes circling {
  to {
    stroke-dashoffset: 0;
  }
}
/* Stage 2: Expanded */
.venn-diagram.expanded > .symbol {
  fill: white;
  transform: scale(.15) translate(-.125em, -.625em);
}
.venn-diagram.expanded > .set[data-id="technical"] {
  transform: translate(0, -4em);
}
.venn-diagram.expanded > .set[data-id="financial"] {
  transform: translate(-3.5em, 2em);
}
.venn-diagram.expanded > .set[data-id="compliance"] {
  transform: translate(3.5em, 2em);
}
.venn-diagram.expanded > .set[data-id="technical"] > circle {
  animation-delay: 0;
}
.venn-diagram.expanded > .set[data-id="financial"] > circle {
  animation-delay: 1s;
}
.venn-diagram.expanded > .set[data-id="compliance"] > circle {
  animation-delay: 2s;
}
.venn-diagram.expanded > .set > circle {
  fill: rgba(61, 204, 119, .6) !important;
  stroke: transparent;
}
/* Stage 3: Emphasized */
.venn-diagram.emphasized > .set[data-id="technical"] > text {
  transition-delay: 0;
}
.venn-diagram.emphasized > .set[data-id="financial"] > text {
  transition-delay: 1s;
}
.venn-diagram.emphasized > .set[data-id="compliance"] > text {
  transition-delay: 2s;
}
.venn-diagram.emphasized > .set > circle {
  stroke: rgba(255, 255, 255, .75);
  stroke-dashoffset: calc(22 / 7 * 100);
  transition: fill 1.25s ease;
  animation-iteration-count: 1;
  animation-name: circling;
  animation-duration: 1s;
  animation-timing-function: ease;
}
/* Stage 3: Finalized */
.venn-diagram.finalized > .set > text {
  opacity: 1;
}
/* Responsive */
@media screen and (max-width: 991px) {
  .venn-diagram {
    font-size: 27.5px;
  }
}
@media screen and (max-width: 767px) {
  .venn-diagram {
    font-size: 22.5px;
  }
}
@media screen and (max-width: 479px) {
  .venn-diagram {
    font-size: 17.5px;
  }
}
@media screen and (max-width: 360px) {
  .venn-diagram {
    font-size: 15px;
  }
}</style>


<style>
.risk-grade-circle {
  visibility: hidden;
  position: relative;
  height: 15em;
  width: 15em;
}
.risk-grade-circle text {
  font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen-Sans, Ubuntu, Cantarell, "Helvetica Neue", Helvetica, Arial, sans-serif;
  font-size: .75em;
  font-weight: 400;
}
.risk-grade-circle text[data-grade*="A"] {
  fill: #208541;
}
.risk-grade-circle text[data-grade*="B"] {
  fill: #73ae42;
}
.risk-grade-circle text[data-grade*="C"] {
  fill: #fbb415;
}
.risk-grade-circle text[data-grade*="D"] {
  fill: #d14527;
}
.risk-grade-circle text[data-grade*="F"] {
  fill: #800f15;
}
.risk-grade-circle.visible {
	visibility: visible;
}
.risk-grade-circle.visible circle {
  animation-name: rotate-arc;
  animation-fill-mode: forwards;
  animation-duration: 2s;
  animation-timing-function: ease-in-out;
}
.risk-grade-circle circle {
  fill: transparent;
  stroke-width: 4;
}
.risk-grade-circle circle[data-grade*="A"] {
  stroke: #208541;
}
.risk-grade-circle circle[data-grade*="B"] {
  stroke: #73ae42;
}
.risk-grade-circle circle[data-grade*="C"] {
  stroke: #fbb415;
}
.risk-grade-circle circle[data-grade*="D"] {
  stroke: #d14527;
}
.risk-grade-circle circle[data-grade*="F"] {
  stroke: #800f15;
}
@keyframes rotate-arc {
  0% {
    stroke-dashoffset: 0;
  }
}</style>


<style>
.gartner-testimonials {
  overflow: visible;
  position: relative;
}
.gartner-testimonials__content {
  position: relative;
  z-index: 2;
}
.gartner-testimonials .bgcolor-container--top:after {
  content: "";
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  height: 200%;
  background-image: linear-gradient(transparent 0%, transparent 20%, rgba(61, 204, 119, .5) 100%);
  transform: translateY(-50%);
}
.gartner-testimonials #gartner-widget-target > div {
  width: 100% !important;
  border: none !important;
  background-color: unset !important;
}
.gartner-testimonials #gartner-widget-target .gartner-pi-link {
  padding: 0 !important;
}
.gartner-testimonials #gartner-widget-target .gartner-pi-link > * {
  display: flex !important;
  flex-direction: column !important;
}
.gartner-testimonials #gartner-widget-target .gartner-pi-card, .gartner-testimonials #gartner-widget-target .gartner-pi-reviews {
  margin-bottom: 2rem;
  text-align: center !important;
}
.gartner-testimonials #gartner-widget-target .gartner-pi-gradient {
  display: none !important;
}
.gartner-testimonials #gartner-widget-target .gartner-pi-card .gartner-pi-logo {
  width: 15rem !important;
  height: 10rem !important;
  margin: 0 auto !important;
  margin-bottom: 2.5rem !important;
  /* background-image: url(/wp-content/themes/normshield/assets/images/GartnerPeerInsightsLogo_ondark.svg) !important; */
  /* background-image: url(/wp-content/themes/normshield/assets/images/Gartner-Peer-Insights-Customers-Choice-badge-White-202104v01.svg) !important; */
  background-position: center !important;
  background-size: contain !important;
}
.gartner-testimonials #gartner-widget-target .gartner-pi-card .gartner-pi-header {
  padding: 1rem;
  border: 1px solid rgba(255, 255, 255, .25);
  border-bottom: none;
  border-top-left-radius: .25rem;
  border-top-right-radius: .25rem;
}
.gartner-testimonials #gartner-widget-target .gartner-pi-card .gartner-pi-header h1 {
  color: #3dcc77 !important;
  font-family: Rift;
  font-size: 1.5rem !important;
  font-weight: bold !important;
}
.gartner-testimonials #gartner-widget-target .gartner-pi-card .gartner-pi-header h2 {
  font-size: .875rem !important;
  font-weight: normal !important;
}
.gartner-testimonials #gartner-widget-target .gartner-pi-card .gartner-pi-stats {
  padding: 1rem;
  border: 1px solid rgba(255, 255, 255, .25);
  border-top: none;
  border-bottom-left-radius: .25rem;
  border-bottom-right-radius: .25rem;
}
.gartner-testimonials #gartner-widget-target .gartner-pi-card .gartner-pi-stats .gartner-pi-overall-rating {
  padding: 0 !important;
  transform: scale(1.25) !important;
  transform-origin: top left !important;
}
.gartner-testimonials #gartner-widget-target .gartner-pi-card .gartner-pi-stats .gartner-pi-star-rating-score {
  background: url(../wp-content/themes/normshield/assets/images/stars.png) repeat-x 0 -16px !important;
  background-size: 20px !important;
  background-position: 0 -20px !important;
}
.gartner-testimonials #gartner-widget-target .gartner-pi-card .gartner-pi-stats .gartner-pi-reviews-link {
  margin-top: 1.5rem !important;
}
.gartner-testimonials #gartner-widget-target .gartner-pi-card .gartner-pi-stats .gartner-pi-reviews-link > *, .gartner-testimonials #gartner-widget-target .gartner-pi-card .gartner-pi-stats .gartner-pi-sourcing-link > * {
  opacity: .5 !important;
  color: white !important;
  font-size: .875rem !important;
  font-weight: normal !important;
  cursor: pointer !important;
  transition: opacity .25s ease,
    		  color .25s ease
    		  !important;
}
.gartner-testimonials #gartner-widget-target .gartner-pi-card .gartner-pi-stats .gartner-pi-reviews-link:hover > *, .gartner-testimonials #gartner-widget-target .gartner-pi-card .gartner-pi-stats .gartner-pi-sourcing-link:hover > * {
  opacity: 1 !important;
  color: #3dcc77 !important;
}
.gartner-testimonials #gartner-widget-target .gartner-pi-card .gartner-pi-stats .gartner-pi-as-of-date {
  opacity: .5 !important;
  margin-top: 1rem !important;
  transform: none !important;
}
.gartner-testimonials #gartner-widget-target .gartner-pi-reviews {
  max-height: 400px !important;
  text-align: left !important;
}
.gartner-testimonials #gartner-widget-target .gartner-pi-reviews ul li {
  border-top: none !important;
  border-bottom: 2px solid rgba(255, 255, 255, .1) !important;
}
.gartner-testimonials #gartner-widget-target .gartner-pi-reviews .gartner-pi-star-rating-score {
  background: url(../wp-content/themes/normshield/assets/images/stars.png) repeat-x 0 0 !important;
  background-size: 14px !important;
  background-position: 0 -14px !important;
}
.gartner-testimonials #gartner-widget-target .gartner-pi-reviews .gartner-pi-quote {
  margin-top: 11px !important;
  font-family: inherit !important;
  font-weight: normal !important;
}
.gartner-testimonials #gartner-widget-target .gartner-pi-reviews .gartner-pi-quote > * {
  opacity: .5 !important;
  font-family: inherit !important;
  font-weight: inherit !important;
}
.gartner-testimonials #gartner-widget-target .gartner-pi-reviews .gartner-pi-datestamp {
  margin-top: 0 !important;
  vertical-align: top !important;
}
@media screen and (max-width: 575px) {
  .gartner-testimonials #gartner-widget-target .gartner-pi-card .gartner-pi-stats .gartner-pi-alignLeft, .gartner-testimonials #gartner-widget-target .gartner-pi-card .gartner-pi-stats .gartner-pi-alignRight {
    width: 100% !important;
    margin-bottom: .5rem !important;
  }
  .gartner-testimonials #gartner-widget-target .gartner-pi-card .gartner-pi-stats .gartner-pi-overall-rating {
    transform-origin: top !important;
  }
}
@media screen and (min-width: 992px) {
  .gartner-testimonials__content > .title {
    text-align: left !important;
    padding-left: 36% !important;
  }
  .gartner-testimonials #gartner-widget-target .gartner-pi-link > * {
    flex-direction: row !important;
  }
  .gartner-testimonials #gartner-widget-target .gartner-pi-card {
  	-ms-flex: 0 0 32% !important;
    flex: 0 0 32% !important;
    max-width: 32% !important;
    /* margin-top: -120px; ### ADD THIS ### */
    margin-right: 4% !important;
    text-align: left !important;
  }
  .gartner-testimonials #gartner-widget-target .gartner-pi-card .gartner-pi-logo {
    width: 20rem !important;
    height: 17.5rem !important;
    margin-left: 0 !important;
    margin-right: 0 !important;
  	margin-top: -7.5rem !important;
  }
  .gartner-testimonials #gartner-widget-target .gartner-pi-reviews {
  	-ms-flex: 0 0 64% !important;
    flex: 0 0 64% !important;
    max-width: 64% !important;
  }
}
@media screen and (min-width: 992px) and (max-width: 1199px) {
  .gartner-testimonials #gartner-widget-target .gartner-pi-card .gartner-pi-stats .gartner-pi-alignLeft, .gartner-testimonials #gartner-widget-target .gartner-pi-card .gartner-pi-stats .gartner-pi-alignRight {
    width: 100% !important;
    margin-bottom: .5rem !important;
  }
  .gartner-testimonials #gartner-widget-target .gartner-pi-card .gartner-pi-logo {
    width: 16rem !important;
    height: 12rem !important;align-content
  }
}
</style>


<style>
#animated-statistics {
  font-family: Rift;
  font-weight: bold;
  text-align: center;
}
#animated-statistics .number:before {
  content: attr(data-prefix);
}
#animated-statistics .number:after {
  content: attr(data-suffix);
}</style>


<style>
#timeline {
  overflow: hidden;
  position: relative;
  width: 100%;
  text-align: center;
  cursor: default;
}
#timeline > ul {
  position: relative;
  margin: 0;
  padding: 0;
}
#timeline > ul:after {
  content: "";
  opacity: .25;
  position: absolute;
  top: 1.5rem;
  left: calc(.5rem - .125rem);
  bottom: 0;
  width: .25rem;
  background-image: linear-gradient(#3dcc77 calc(100% - 5rem), transparent 100%);
}
#timeline > ul > li {
  position: relative;
  margin: 0;
  padding-bottom: 2rem;
  text-align: left;
  list-style-type: none;
}
#timeline > ul > li:after {
  content: "";
  position: absolute;
  z-index: 2;
  top: 1rem;
  left: 0;
  width: 1rem;
  height: 1rem;
  border-radius: 50%;
  background-color: #3dcc77;
  transform: none;
}
#timeline > ul > li > .event {
  opacity: 0;
  display: inline-block;
  position: relative;
  left: 2.5rem;
  bottom: 0;
  width: calc(100% - 3rem);
  padding: 1rem 1.5rem;
  color: white;
  text-align: left;
  border-radius: .5rem;
  background-image: linear-gradient(#454545, #212121);
  box-shadow: inset 0 0 0 .125rem #454545;
  transform: translate3d(10rem, 0, 0);
  transition: all .5s ease;
}
#timeline > ul > li > .event:before {
  content: "";
  position: absolute;
  top: .75rem;
  left: calc(-.75rem + 1px);
  width: 0;
  height: 0;
  border-top: .75rem solid transparent;
  border-bottom: .75rem solid transparent;
  border-right: .75rem solid #454545;
  clear: both;
}
#timeline > ul > li > .event > time {
  display: block;
  margin-bottom: .25rem;
  color: #3dcc77;
  font-family: Rift;
  font-size: 1.25rem;
  font-weight: bold;
}
#timeline > ul > li > .event > p {
  margin-bottom: .25rem;
}
#timeline > ul > li > .event > p > a {
  border-bottom: 1px dotted rgba(255, 255, 255, .25);
}
#timeline > ul > li:nth-of-type(odd) > .event {
}
#timeline > ul > li.visible > .event {
  opacity: 1 !important;
  visibility: visible !important;
  transform: translate3d(.5rem, 0, 0) !important;
}

@media screen and (min-width: 768px) {
  #timeline > ul:after {
    left: calc(50% - .125rem);
  }
  #timeline > ul > li {
    margin: 0 auto;
    padding-bottom: 0;
  }
  #timeline > ul > li:after {
    left: 50%;
    transform: translateX(-50%);
  }
  #timeline > ul > li > .event {
    left: calc(50% + 2.5rem);
    width: unset;
    max-width: calc(50% - 3rem);
  }
  #timeline > ul > li:nth-of-type(even) > .event {
    left: unset;
    right: calc(-50% + 2.5rem);
    text-align: right;
    transform: translate3d(calc(-100% + .5rem - 10rem), 0, 0);
  }
  #timeline > ul > li:nth-of-type(even).visible > .event {
    transform: translate3d(calc(-100% - .5rem), 0, 0) !important;
  }
  #timeline > ul > li:nth-of-type(even) > .event:before {
    left: unset;
    right: calc(-.75rem + 1px);
    border-left: .75rem solid #454545;
    border-right: unset;
  }
}</style>


<style>
.hero--narrow {
  min-height: unset !important;
}
.hero--narrow .hero__title > * {
  margin-bottom: .5rem !important;
  padding-bottom: 0 !important;
  font-size: 3rem !important;
  line-height: 3.5rem !important;
}
.hero--narrow .hero__title > *:after {
  display: none;
}
.hero--narrow .hero__subtitle > * {
  margin-bottom: 1rem !important;
  font-size: 1.5rem !important;
  line-height: 1.75rem !important;
}
.hero--narrow .hero__paragraph > * {
  color: rgba(255, 255, 255, .75);
  font-size: 1rem;
  line-height: 150%;
}
.hero--narrow + * > [class*="__inner"]:not([class*="wp-block-group__inner"]) {
  width: 100% !important;
}
.hero--narrow.pull + * {
  padding-top: 0 !important;
}
@media screen and (min-width: 768px) {
  .hero--narrow.spacing-top {
    padding-top: 60px;
  }
  .hero--narrow.spacing-bottom {
    padding-bottom: 50px;
  }
  .hero--narrow.pull.spacing-bottom {
    padding-bottom: 190px;
  }
  .hero--narrow + * > [class*="__inner"]:not([class*="wp-block-group__inner"]) {
    margin-top: -130px !important;
  }
}
@media screen and (min-width: 992px) {
  .hero--narrow.spacing-top {
    padding-top: 160px;
  }
}
@media screen and (min-width: 1200px) {
  .hero--narrow + * > [class*="__inner"]:not([class*="wp-block-group__inner"]) {
    max-width: 96% !important;
  }
}
@media screen and (min-width: 1440px) {
  .hero--narrow + * > [class*="__inner"]:not([class*="wp-block-group__inner"]) {
    max-width: 1380px !important;
  }
}</style>


<style>
.risk-grade-graph {
  max-width: 600px;
  margin: 0 auto;
  padding-left: 2rem;
}
.risk-grade-graph > .grades {
  padding: .25rem 0;
  border-left: 2px solid white;
}
.risk-grade-graph > .grades > .grade {
  display: block;
  position: relative;
  height: 3rem;
  min-width: 3rem;
  margin: 1rem 0;
  padding: .5rem;
  border-top-right-radius: 1rem;
  border-bottom-right-radius: 1rem;
  transition: width .75s ease;
}
.risk-grade-graph > .grades > .grade:not(.elongated) {
  width: 0 !important;
}
.risk-grade-graph > .grades > .grade.bg-risk-grade-a {
  width: 12.5%;
}
.risk-grade-graph > .grades > .grade.bg-risk-grade-b {
  width: 37.5%;
}
.risk-grade-graph > .grades > .grade.bg-risk-grade-c {
  width: 62.5%;
}
.risk-grade-graph > .grades > .grade.bg-risk-grade-d {
  width: 87.5%;
}
.risk-grade-graph > .grades > .grade.bg-risk-grade-f {
  width: 100%;
}
.risk-grade-graph > .grades > .grade > * {
  display: block;
  font-weight: bold;
}
.risk-grade-graph > .grades > .grade > *:first-child {
  position: absolute;
  top: .5rem;
  left: -2rem;
  width: 2rem;
  height: 2rem;
  padding-right: 1rem;
  line-height: 2rem;
  text-align: right;
  white-space: nowrap;
}
.risk-grade-graph > .grades > .grade > *:last-child {
  position: absolute;
  top: .5rem;
  right: .5rem;
  width: 2rem;
  height: 2rem;
  color: white;
  text-align: center;
  line-height: calc(2rem - 4px);
  border: 2px solid white;
  border-radius: 50%;
}
.risk-grade-graph > .note {
  opacity: 0;
  position: relative;
  padding-top: .25rem;
  padding-right: 1.5rem;
  color: white;
  font-size: 1.125rem;
  text-align: right;
  transition: opacity 1s ease;
}
.risk-grade-graph > .note:after {
  content: "⤸";
  opacity: .375;
  display: inline-block;
  position: absolute;
  top: -.875rem;
  right: 0;
  font-size: 2rem;
  transform: scaleY(-1);
}
.risk-grade-graph > .note.visible {
  opacity: 1;
}</style>


<style>
#risk-categories {
  position: relative;
  text-align: center;
}
#risk-categories > * {
  max-width: 800px;
}
#risk-categories > .note {
  display: none;
  margin-bottom: 1.5rem;
  padding: .5rem 1.5rem;
  text-align: center;
  color: white;
  border: 2px solid #3dcc77;
  border-radius: .5rem;
  background-color: #212121;
  box-shadow: 0 0.5rem 0.375rem 0 rgba(0, 0, 0, .375);
  background-image: linear-gradient(rgba(61, 204, 119, .25), transparent);
}
#risk-categories > .categories {
  display: flex;
  flex-wrap: wrap;
  position: relative;
  margin: 0 auto;
}
#risk-categories > .categories > .brand {
  position: absolute;
  top: 90%;
  left: 50%;
  width: 10%;
  transform: translate(-50%, -50%);
}
#risk-categories > .categories > .category {
  opacity: 0;
  display: inline-block;
  position: relative;
  z-index: 1;
  width: 20%;
  padding: .5rem;
  transform: translateY(100%);
  transition: opacity .75s ease,
    		  transform .75s ease;
}
#risk-categories > .categories > .category:hover {
  z-index: 2;
}
#risk-categories > .categories > .category.risen {
  opacity: 1;
  transform: translateY(0);
}
#risk-categories > .categories > .category:nth-of-type(1) {
  margin-left: 20%;
}
#risk-categories > .categories > .category:nth-of-type(3) {
  margin-right: 20%;
}
#risk-categories > .categories > .category:nth-of-type(19) {
  margin-left: 20%;
}
#risk-categories > .categories > .category:nth-of-type(20) {
  margin-left: 20%;
}
#risk-categories > .categories > .category > button {
  position: relative;
  width: 100%;
  padding: 0 !important;
  padding-bottom: 100% !important;
  color: white;
  vertical-align: top;
  outline: none;
  border: none;
  background-color: transparent;
  background-size: cover;
  background-image: url("https://blackkite.com/wp-content/themes/normshield/assets/images/risk-categories/tiles/dark.svg");
  box-shadow: none;
}
#risk-categories > .categories > .category > button.outstanding {
  background-color: : url("https://blackkite.com/wp-content/themes/normshield/assets/images/risk-categories/tiles/brand.svg");
}
#risk-categories > .categories > .category > button.outstanding > .content > img {
  filter: brightness(1000%);
}
#risk-categories > .categories > .category > button > * {
  position: absolute;
  pointer-events: none;
}
#risk-categories > .categories > .category > button > .explanation {
  opacity: 0;
  position: absolute;
  z-index: 999;
  bottom: 100%;
  left: 50%;
  width: 16rem;
  height: 0;
  padding-bottom: .75rem;
  color: #212121;
  font-size: .875rem;
  line-height: 125%;
  transform: translateX(-50%);
  transition: none;
}
#risk-categories > .categories > .category > button > .explanation.visible {
  opacity: 1;
  bottom: 80%;
  height: auto;
  transition: opacity .25s ease,
    bottom .25s ease,
    height .25s ease;
}
#risk-categories > .categories > .category > button > .explanation.visible > p {
  box-shadow: 0 .375rem .5rem rgba(0, 0, 0, .25);
}
#risk-categories > .categories > .category > button > .explanation > p {
  margin: 0;
  padding: 1rem;
  border: 1px solid rgba(0, 0, 0, .125);
  border-radius: 1rem;
  background-color: white;
  box-shadow: 0 0 0 transparent;
}
#risk-categories > .categories > .category > button > .explanation > p:after {
  content: "";
  position: absolute;
  top: calc(100% - .75rem - 1px);
  left: calc(50% - .75rem);
  width: 0;
  height: 0;
  border-left: .75rem solid transparent;
  border-right: .75rem solid transparent;
  border-top: .75rem solid white;
  clear: both;
}
#risk-categories > .categories > .category > button > .explanation > p > span {
  display: none;
  font-family: Rift;
  font-weight: bold;
}
#risk-categories > .categories > .category > button > .content {
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  font-family: Rift;
  font-weight: 900;
  text-align: center;
}
#risk-categories > .categories > .category > button > .content > img {
  width: 25%;
  margin-bottom: .5rem;
}
#risk-categories > .categories > .category > button > .content > span {
  margin-bottom: 0;
  font-family: Rift;
  font-size: 1.25rem;
  font-weight: bold;
}
@media (max-width: 768px) {
  #risk-categories > .note {
    display: inline-block;
  }
  #risk-categories > .categories > .category[data-column="1"] > button > .explanation {
    transform: translateX(-15%);
  }
  #risk-categories > .categories > .category[data-column="1"] > button > .explanation > p:after {
    left: calc(15% - .75rem);
  }
  #risk-categories > .categories > .category[data-column="2"] > button > .explanation {
    transform: translateX(-40%);
  }
  #risk-categories > .categories > .category[data-column="2"] > button > .explanation > p:after {
    left: calc(40% - .75rem);
  }
  #risk-categories > .categories > .category[data-column="3"] > button > .explanation {
    transform: translateX(-50%);
  }
  #risk-categories > .categories > .category[data-column="3"] > button > .explanation > p:after {
    left: calc(50% - .75rem);
  }
  #risk-categories > .categories > .category[data-column="4"] > button > .explanation {
    transform: translateX(-60%);
  }
  #risk-categories > .categories > .category[data-column="4"] > button > .explanation > p:after {
    left: calc(60% - .75rem);
  }
  #risk-categories > .categories > .category[data-column="5"] > button > .explanation {
    transform: translateX(-85%);
  }
  #risk-categories > .categories > .category[data-column="5"] > button > .explanation > p:after {
    left: calc(85% - .75rem);
  }
  #risk-categories > .categories > .category > button > .explanation > p > span {
    display: block;
  }
  #risk-categories > .categories > .category > button > .content > img {
    width: 60%;
    margin: 0;
  }
  #risk-categories > .categories > .category > button > .content > span {
    display: none;
  }
}</style>


<style>
.hero--screenshot {
  min-height: unset !important;
}
.hero--screenshot .screenshot-container {
  padding: calc(100% / 30);
  background-image: url('../wp-content/themes/normshield/assets/images/screenshot-container-bg.png');
  background-repeat: no-repeat;
  background-size: cover;
  filter: drop-shadow(0 0 .125rem rgba(0, 0, 0, .5));
}
.hero--screenshot .screenshot-clipper {
  overflow: hidden;
  position: relative;
  width: 100%;
  padding-top: calc(100% / 14 * 9);
}
.hero--screenshot .screenshot-clipper img {
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  width: 100%;
  height: auto;
  min-height: 100%;
  vertical-align: top;
}
.hero--screenshot .hero__title > * {
  margin-bottom: .5rem !important;
  padding-bottom: 0 !important;
  font-size: 3rem !important;
  line-height: 3.5rem !important;
}
.hero--screenshot .hero__title > *:after {
  display: none;
}
.hero--screenshot .hero__subtitle > * {
  margin-bottom: 1rem !important;
  font-size: 1.5rem !important;
  line-height: 1.75rem !important;
}
.hero--screenshot .hero__paragraph > * {
  color: rgba(255, 255, 255, .75);
  font-size: 1rem;
  line-height: 150%;
}
.hero--screenshot + * > [class*="__inner"]:not([class*="wp-block-group__inner"]) {
  width: 100% !important;
}
.hero--screenshot.pull + * {
  padding-top: 0 !important;
}
@media screen and (min-width: 768px) {
  .hero--screenshot.spacing-top {
    padding-top: 60px;
  }
  .hero--screenshot.spacing-bottom {
    padding-bottom: 50px;
  }
  .hero--screenshot.pull.spacing-bottom {
    padding-bottom: 190px;
  }
  .hero--screenshot + * > [class*="__inner"] {
    margin-top: -130px !important;
  }
}
@media screen and (min-width: 992px) {
  .hero--screenshot.spacing-top {
    padding-top: 160px;
  }
}
@media screen and (min-width: 1200px) {
  .hero--screenshot + * > [class*="__inner"]:not([class*="wp-block-group__inner"] {
    max-width: 96% !important;
  }
}
@media screen and (min-width: 1440px) {
  .hero--screenshot + * > [class*="__inner"]:not([class*="wp-block-group__inner"] {
    max-width: 1380px !important;
  }
}</style>


<style>
/* Body */
/* Notification bar */
.notification-bar {
  position: relative;
  z-index: 100;
}
.notification-v2 .note, .notification-v2 a {
  font-size: 13px !important;
}
.notification-v2 .note {
  color: rgba(255, 255, 255, .75);
}
.notification-v2 a {
  color: #3dcc77;
  font-family: 'Rift';
  text-transform: uppercase;
  transition: color .25s ease;
}
.notification-v2 a:hover {
  color: #3dcc77 !important;
}
/* Navigation */
.navigation-v2 {
  background-color: transparent !important;
  background-image: linear-gradient(rgba(0, 0, 0, .75), rgba(18, 18, 18, .5));
}
.navigation-v2:after {
  content: "";
  position: absolute;
  bottom: 1px;
  width: 100%;
  height: 1px;
  background-color: rgba(255, 255, 255, .04);
}
.navigation-v2 .header-top {
  position: relative;
}
.navigation-v2 .header-top:after {
  content: "";
  position: absolute;
  bottom: 1px;
  width: 100%;
  height: 1px;
  background-color: rgba(255, 255, 255, .07);
}
.navigation-v2 .header-bottom {
  padding: 10px 0 !important;
}
.navigation-v2 .header-bottom .row > *:first-child {
  z-index: 2;
}
.navigation-v2 .header-bottom .row > *:last-child {
  z-index: 1;
}
.navigation-v2 .header-bottom .site-branding img {
  width: auto;
  vertical-align: middle;
}
.navigation-v2 .header-bottom .main-navigation {
  display: flex;
}
.navigation-v2 .header-bottom .btn {
  color: white !important;
}
.navigation-v2 .header-bottom .overlay {
  display: none;
  z-index: -1;
}
.navigation-v2 .header-bottom .toggled .overlay {
  content: "";
  display: block;
  position: fixed;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: rgba(0, 0, 0, .9);
  width: 100vw;
  height: 100vh;
}
/* Navigation bar */
.navigation-v2 .main-navigation .search-container {
  display: flex;
  position: relative;
  z-index: 2;
}
.navigation-v2 .main-navigation .search-container > *,
.navigation-v2 .main-navigation .search-container > * > *,
.navigation-v2 .main-navigation .search-container > * > * > *,
.navigation-v2 .main-navigation .search-container > * > * > * > * {
  height: 100%;
}
.navigation-v2 .main-navigation .search-container:not(.active) .search-bar {
  display: none;
}
.navigation-v2 .main-navigation .search-container.active .search-toggle {
  background-color: #212121;
}
.navigation-v2 .main-navigation .search-container .search-toggle {
  display: inline-block;
  margin-right: 2rem;
  padding: 10px 0;
  cursor: pointer;
}
.navigation-v2 .main-navigation .search-container .search-toggle:hover > svg > path,
.navigation-v2 .main-navigation .search-container.active .search-toggle > svg > path {
  fill: #3dcc77 !important;
}
.navigation-v2 .main-navigation .search-container .search-toggle {
  display: inline-block;
  padding: 10px 20px;
  cursor: pointer;
}
.navigation-v2 .main-navigation .search-container .search-toggle > svg {
  position: relative;
  top: .125rem;
  width: 1rem;
  height: .875rem;
  max-width: unset;
  fill: white;
}
.navigation-v2 .main-navigation .search-container .search-toggle > svg > path {
  fill: white;
}
.navigation-v2 .main-navigation .search-container .search-bar {
  position: absolute;
  z-index: 2;
  top: 0;
  left: 50px;
  background-color: #212121;
}
.navigation-v2 .main-navigation .search-container .search-bar label {
  display: none;
}
.navigation-v2 .main-navigation .search-container .search-bar form input[type="search"] {
  display: inline-block;
  width: 410px;
  padding: 0;
  color: white;
  outline: none;
  border: none;
  background-color: transparent;
}
.navigation-v2 .main-navigation .search-container .search-bar form input[type="search"]::-webkit-search-cancel-button {
  display: none;
}
.navigation-v2 .main-navigation .search-container .search-bar form button[type="submit"] {
  display: inline-block;
  height: calc(100% - 1rem);
  margin: .5rem;
  color: #212121;
  font-family: Rift;
  font-size: 1rem;
  line-height: 125%;
  outline: none;
  border: none;
  background-color: white;
  transition: color .25s ease;
  cursor: pointer;
}
.navigation-v2 .main-navigation .search-container .search-bar form button[type="submit"]:hover {
  color: #3dcc77 !important;
}
.navigation-v2 .main-navigation .menu-toggle {
  height: 24px;
  vertical-align: bottom;
}
.navigation-v2 .main-navigation > .main-navigation__in > .main-navigation__in-wrapper .menu > .menu-item-has-children > a:after {
  content: "";
  width: 0;
  height: 0;
  margin-top: .375rem;
  margin-left: .375rem;
  vertical-align: middle;
  border-left: .25rem solid transparent;
  border-right: .25rem solid transparent;
  border-top: .25rem solid currentColor;
}
.navigation-v2 .main-navigation > .main-navigation__in > .main-navigation__in-wrapper .menu > .menu-item > a > i {
  display: none !important;
}
.main-navigation .menu-item-has-children .sub-menu li + li {
  margin-top: unset;
}
.navigation-v2 .main-navigation .menu > .menu-item > .sub-menu.columns > li {
  margin-bottom: 1rem;
}
.navigation-v2 .main-navigation .menu > .menu-item > .sub-menu.columns > li:last-of-type {
  margin-bottom: 0;
}
.navigation-v2 .main-navigation .menu > .menu-item > .sub-menu.columns > li > a {
  display: block;
  margin-bottom: 5px;
  color: rgba(255, 255, 255, .375);
  font-family: Rift;
  font-size: 1.125rem;
  letter-spacing: .1em;
  pointer-events: none;
}
.navigation-v2 .main-navigation .menu > .menu-item > .sub-menu.columns > li > .sub-menu {
  margin-top: 0;
}
.navigation-v2 .main-navigation .menu .sub-menu.tree {
  margin-top: unset !important;
}
.navigation-v2 .main-navigation .menu .sub-menu.selective > li > a[href="#"], .navigation-v2 .main-navigation .menu .sub-menu.selective > li > a[href=""] {
  opacity: .6;
}
/* Patch */
.main-navigation .menu-item-has-children:hover .sub-menu .sub-menu {
  display: block !important;
  position: relative !important;
}
/* Responsive */
@media screen and (max-width: 991px) {
  .navigation-v2 .header-bottom .site-branding img {
  	height: 40px;
  }
  /* Navigation bar */
  .navigation-v2 .main-navigation {
    align-items: center;
  }
  .navigation-v2 .main-navigation.toggled .menu-toggle {
	position: relative !important;
    z-index: 1;
    top: -3px !important;
    right: unset !important;
  }
  .navigation-v2 .main-navigation > .main-navigation__in {
    padding-top: 100px;
  }
  .navigation-v2 .main-navigation > .main-navigation__in > .main-navigation__in-wrapper .menu > .menu-item > a {
    font-size: 20px;
  }
  .navigation-v2 .main-navigation .search-container .search-toggle > svg {
    top: .25rem;
    width: 1.5rem;
    height: 1.5rem;
  }
  .navigation-v2 .main-navigation .search-container .search-toggle > svg > path {
    fill: #3dcc77 !important;
  }
  .navigation-v2 .main-navigation .search-container .search-toggle {
    margin-right: 1.25rem;
    padding: 0;
    background-color: transparent !important;
  }
  .navigation-v2 .main-navigation .search-container .search-bar {
    position: fixed;
    top: 5.875rem;
    left: 0;
    right: 0;
    height: 3rem;
    background-color: rgba(0, 0, 0, .25);
  }
  .navigation-v2 .main-navigation .search-container .search-bar form input[type="search"] {
    padding-left: 1.25rem;
  }
}
@media screen and (min-width: 992px) {
  /* Notification bar */
  .notification-v2 {
    overflow: hidden;
    position: absolute;
    z-index: 3;
    left: calc(50vw - 480px);
    width: unset;
    max-width: calc(960px / 2);
    background-color: transparent !important;
  }
  .notification-v2, .notification-v2 * {
    line-height: 20px !important;
  }
  .notification-v2 .note, .notification-v2 a {
    font-size: 14px !important;
  }
  /* Navigation */
  .navigation-v2 .header-top * {
    line-height: 20px !important;
  }
  .navigation-v2 .header-top .menu > li + li {
    margin-left: 2rem;
  }
  .navigation-v2 .header-top .menu > li > a {
    color: rgba(255, 255, 255, .5) !important;
    font-family: 'Roboto' !important;
    font-size: 14px !important;
    font-weight: 400 !important;
    letter-spacing: unset;
    text-transform: unset;
    vertical-align: top;
    transition: color .25s ease;
  }
  .navigation-v2 .header-top .menu > li > a:hover {
    color: white !important;
  }
  .navigation-v2 .header-top .btn {
  	padding: 1px 10px;
    font-size: 14px;
    border-width: 1px;
  }
  .navigation-v2 .header-bottom .site-branding img {
    height: 40px;
  }
  .navigation-v2 .header-bottom .overlay {
    display: none !important;
  }
  /* Navigation bar */
  .navigation-v2 .main-navigation .informative:after {
    content: "i";
    display: inline-block;
    position: relative;
    top: -.25em;
    margin-left: 1em;
    width: 1.5em;
    height: 1.5em;
    padding: .375em 0;
    color: black;
    font-family: sans-serif;
    font-size: .5em;
    font-weight: bold;
    line-height: 1em;
    text-align: center;
    vertical-align: middle;
    border-radius: 50%;
    background-color: white;
  }
  .navigation-v2 .main-navigation .menu-item-has-children .sub-menu a[href="#"] {
	pointer-events: none;
  }
  .navigation-v2 .main-navigation .menu-item-has-children .sub-menu {
    position: relative;
    top: unset;
    left: unset;
    right: unset;
    width: auto;
    min-width: -webkit-max-content;
    min-width: -moz-max-content;
    min-width: max-content;
    padding: unset;
  }
  .navigation-v2 .main-navigation .menu > .menu-item-has-children > .sub-menu {
    position: absolute;
    top: 100%;
    left: -30px;
    right: 0;
    width: auto;
    padding: 20px 30px 25px;
    background-color: #000;
  }
  .navigation-v2 .main-navigation .menu > .menu-item:hover > .sub-menu.columns {
    display: flex;
  }
  .navigation-v2 .main-navigation .menu > .menu-item > .sub-menu.columns > li {
    margin-top: 0;
    margin-right: 50px;
  }
  .navigation-v2 .main-navigation .menu > .menu-item > .sub-menu.columns > li:last-of-type {
    margin-right: 0;
  }
  .navigation-v2 .main-navigation > .main-navigation__in > .main-navigation__in-wrapper {
    width: auto !important;
    padding: 0 !important;
  }
  .navigation-v2 .main-navigation .menu .sub-menu.tree {
  	left: 0;
    padding: 0 25px;
  }
  .navigation-v2 .main-navigation .menu .sub-menu.tree > li {
    position: relative;
  }
  .navigation-v2 .main-navigation .menu .sub-menu.tree > li:before {
    content: "";
    display: inline-block;
    position: absolute;
    top: -18px;
    left: -23px;
    width: 15px;
    height: 34px;
    border: 2px solid #3dcc77;
    border-right: none;
    border-top: none;
  }
  .navigation-v2 .main-navigation .menu .sub-menu.tree > li:first-of-type:before {
  	top: 1px;
    height: 15px;
  }
}
@media screen and (min-width: 1200px) {
  /* Notification bar */
  .notification-v2 {
    left: calc(50vw - 585px);
    max-width: calc(1170px / 2);
  }
  /* Navigation */
  .navigation-v2 .header-bottom .site-branding img {
    height: 50px;
  }
}</style>


<style>
.interactive-triangle .ns-platform__icon.active {
  border-radius: 50%;
  animation-name: ripple;
  animation-duration: 2s;
  animation-timing-function: linear;
  animation-iteration-count: infinite;
}
@keyframes ripple {
  0% { box-shadow: 0 0 0 0 rgba(61, 204, 119, .5); }
  50% { box-shadow: 0 0 0 3em transparent; }
  50.001% { box-shadow: 0 0 0 0 transparent; }
  100% { box-shadow: 0 0 0 0 rgba(61, 204, 119, .5); }
}
/* Patch */
.interactive-triangle .ns-platform__icons .ns-platform__icon-item:nth-child(2) .ns-platform__icon > div {
  transform: scale(1.25);
}
.interactive-triangle .ns-platform__icons .ns-platform__icon-item:nth-child(2) .ns-platform__icon + div {
  transform: translateY(1.25rem);
}
.interactive-triangle .ns-platform__item-ss img {
  width: auto;
  max-height: 10rem;
  margin: 2rem auto;
}
.interactive-triangle .ns-platform__item-logo img {
  width: auto;
  max-height: 2rem;
  margin: 0 auto;
}</style>


<style>
.sliding-logos .container {
  overflow: hidden;
  position: relative;
  padding-bottom: 6rem;
}
.sliding-logos .row {
  display: block;
  position: relative;
  width: max-content;
  height: 4rem;
  margin: 0 !important;
  margin-bottom: 2rem;
  font-size: 0;
  white-space: nowrap;
}
.sliding-logos .row.sliding {
  animation: logo-slide 12s linear infinite;
  -webkit-animation: logo-slide 12s linear infinite;
}
.sliding-logos .row > [class*="col-"] {
  flex: unset;
  display: inline-block;
  width: auto;
  max-width: 14rem;
  max-height: 4rem;
  padding: 2rem !important;
}
.sliding-logos .row > [class*="col-"] a {
  max-height: inherit;
  padding: 0 !important;
}
.sliding-logos .row > [class*="col-"] img {
  width: auto;
  max-height: inherit;
  vertical-align: middle;
}
@keyframes logo-slide {
  0% {
    transform: translate(0, 0);
    -webkit-transform: translate(0, 0);
  }
  100% {
    transform: translate(-50%, 0);
    -webkit-transform: translate(-50%, 0);
  }
}
@-webkit-keyframes logo-slide {
  0% {
    transform: translate(0, 0);
    -webkit-transform: translate(0, 0);
  }
  100% {
    transform: translate(-50%, 0);
    -webkit-transform: translate(-50%, 0);
  }
}
@media screen and (min-width: 992px) {
  .sliding-logos .row.sliding {
    animation: logo-slide 24s linear infinite;
    -webkit-animation: logo-slide 24s linear infinite;
  }
}</style>


<script>
function handlePromo (target) {
  const { waitFor } = target.dataset
  if (waitFor) {
    let remainingSeconds = Number(waitFor)
    setTimeout(() => {
      target.classList.add('visible')
    }, remainingSeconds * 1000)
    function closePromo () {
      target.parentNode.removeChild(target)
    }
    target.querySelectorAll('a').forEach(link => link.addEventListener('click', closePromo))
  }
}

jQuery(document).ready(function () {
  // Selector
  const selector = '.promo[data-wait-for]'
  // Execution
  document.querySelectorAll(selector).forEach(item => handlePromo(item))
})</script>


<script>
function handleVennDiagramAnimation (vennDiagram) {
  setTimeout(() => {
    vennDiagram.classList.add('expanded')
  }, 500)
  setTimeout(() => {
    vennDiagram.classList.add('emphasized')
  }, 2000)
  setTimeout(() => {
    vennDiagram.classList.add('finalized')
  }, 2500)
}
jQuery(document).ready(function () {
  // Selector
  const selector = '.venn-diagram'
  // Animation
  const animation = handleVennDiagramAnimation
  // Execution
  document.querySelectorAll(selector).forEach(item => {
    function handleCompleteEntrance () {
      const symbol = item.querySelector('.symbol')
      if (symbol.getBoundingClientRect().top < window.innerHeight - symbol.getBoundingClientRect().height) {
        animation(item)
        window.removeEventListener('scroll', handleCompleteEntrance)
      }
    }
    window.addEventListener('scroll', handleCompleteEntrance)
    handleCompleteEntrance()
  })
})</script>


<script>
function handleProgressCircleAnimation (progressCircle) {
  const progress = progressCircle.querySelector('.progress')
  const diameter = 36
  const stroke = 3
  const radius = (diameter / 2) - (stroke / 2)
  const percentage = parseInt(progress.dataset.percent)
  const perimeter = Math.PI * radius * 2
  const length = perimeter * percentage / 100
  const text = document.createTextNode(`${Math.ceil(percentage)}%`)
  progressCircle.querySelectorAll('circle').forEach(circle => {
    circle.setAttribute('cx', diameter / 2)
    circle.setAttribute('cy', diameter / 2)
    circle.setAttribute('r', radius)
    circle.setAttribute('stroke-width', stroke)
  })
  progressCircle.querySelector('.percentage').appendChild(text)
  progress.setAttribute('stroke-dasharray', `${length} ${perimeter - length}`)
}

jQuery(document).ready(function () {
  // Selector
  const selector = '.progress-circle'
  // Animation
  const animation = handleProgressCircleAnimation
  // Execution
  document.querySelectorAll(selector).forEach(item => {
    function handleEntrance () {
      if (item.getBoundingClientRect().top < window.scrollY + window.innerHeight) {
        animation(item)
        window.removeEventListener('scroll', handleEntrance)
      }
    }
    window.addEventListener('scroll', handleEntrance)
    handleEntrance()
  })
})</script>


<script>
function handleRiskGradeCircleAnimation (riskGradeCircle) {
  const arcs = riskGradeCircle.querySelectorAll('circle')
  const initialOffset = 25
  let initialPercent = parseInt(arcs[0].dataset.percent)
  arcs.forEach((arc, index) => {
    const percent = parseInt(arc.dataset.percent)
    arc.setAttribute('stroke-dasharray', `${percent} ${100 - percent}`)
    arc.setAttribute('cx', 18)
    arc.setAttribute('cy', 18)
    arc.setAttribute('r', 16)
    if (index === 0) arc.setAttribute('stroke-dashoffset', initialOffset)
    else {
      arc.setAttribute('stroke-dashoffset', `${100 - initialPercent + initialOffset}`)
      initialPercent += percent
    }
  })
  riskGradeCircle.classList.add('visible')
}

jQuery(document).ready(function () {
  // Selector
  const selector = '.risk-grade-circle'
  // Animation
  const animation = handleRiskGradeCircleAnimation
  // Execution
  document.querySelectorAll(selector).forEach(item => {
    function handleEntrance () {
      if (item.getBoundingClientRect().top < window.innerHeight) {
        animation(item)
        window.removeEventListener('scroll', handleEntrance)
      }
    }
    window.addEventListener('scroll', handleEntrance)
    handleEntrance()
  })
})</script>


<script>
const customLinks = [
  { id: 20173, submenuType: 'columns' }, // Solutions
  { id: 20176, submenuType: 'tree' }, // Solutions > Platform > Platform Overview
  { id: 20175, submenuType: 'selective' }, // Solutions > Industries
  { id: 20189, tooltip: 'Black Kite’s Cyber Ratings help healthcare organizations gain insight into their cybersecurity supply chains to ensure the safety and security of patient health information, and comply with relevant regulations.' }, // Solutions > Industries > Healthcare
  { id: 20191, tooltip: 'Black Kite helps technology companies assess, monitor, and remediate risk across their business ecosystem.' }, // Solutions > Industries > Technology
  { id: 20192, tooltip: 'Black Kite prioritizes continuously monitoring the security posture of third parties with access to sensitive customer and shopper data.' }, // Solutions > Industries > Retail
  { id: 20190, tooltip: 'Black Kite Cyber Ratings helps strengthen vendor risk management programs for utility organizations across the globe.' }, // Solutions > Industries > Utilities
  { id: 20193, tooltip: 'Black Kite helps insurance organizations assess, monitor, and remediate risk across their business ecosystem.' }, // Solutions > Industries > Insurance
  { id: 20194, tooltip: 'Black Kite Cyber Ratings helps strengthen vendor risk management programs for business services across the globe.' }, // Solutions > Industries > Business Services
  { id: 20195, tooltip: 'Black Kite helps the education sector overcome challenges with simple, scalable solutions for managing security risks, monitoring third-party relationships, and improving communication about cybersecurity.' }, // Solutions > Industries > Education
  { id: 20196, tooltip: 'Black Kite Cyber Ratings help telecom companies improve security performance and mitigate third-party risk at scale.' } // Solutions > Industries > Telecom
]

function handleNavigation () {
  // Check navigation
  const siteNavigation = document.getElementById('site-navigation-x')
  if (!siteNavigation ) return
  // Check toggle button
  const menuToggleLink = siteNavigation.querySelector('.menu-toggle')
  if (!menuToggleLink) return
  // Check menu
  const menu = siteNavigation.getElementsByTagName('ul')[0]
  if (!menu) {
    menuToggleLink.style.display = 'none'
    return
  }
  // Handle menu toggling
  function toggleMenu () {
    siteNavigation.classList.toggle('toggled')
    if (menuToggleLink.getAttribute('aria-expanded') === 'true' ) menuToggleLink.setAttribute('aria-expanded', 'false')
    else menuToggleLink.setAttribute('aria-expanded', 'true')
  }
  menuToggleLink.addEventListener('click', toggleMenu)
  // Handle submenu toggling on mobile
  function toggleSubmenu (event, submenuToggleLinks) {
    if (window.innerWidth < 992) {
      event.stopPropagation()
  	  event.preventDefault()
      const currentSubmenuToggleLink = event.target
      const isToggled = currentSubmenuToggleLink.parentNode.classList.contains('focus')
      submenuToggleLinks.forEach(submenuToggleLink => submenuToggleLink.parentNode.classList.remove('focus'))
      if (!isToggled) currentSubmenuToggleLink.parentNode.classList.add('focus')
    }
  }
  const submenuToggleLinks = siteNavigation.querySelectorAll('.menu > .menu-item-has-children > a')
  submenuToggleLinks.forEach(submenuToggleLink => submenuToggleLink.addEventListener('click', event => toggleSubmenu(event, submenuToggleLinks)))
  // Handle outside click
  const overlay = siteNavigation.querySelector('.overlay')
  overlay.addEventListener('click', handleOutsideClick)
  function handleOutsideClick () {
    siteNavigation.classList.remove('toggled')
  	menuToggleLink.setAttribute('aria-expanded', 'false')
    submenuToggleLinks.forEach(submenuToggleLink => submenuToggleLink.parentNode.classList.remove('focus'))
  }
  // Handle search
  const searchContainer = siteNavigation.querySelector('.search-container')
  if (searchContainer) {
    const searchToggle = searchContainer.querySelector('.search-toggle')
    const searchBar = searchContainer.querySelector('.search-bar')
    const searchInput = searchContainer.querySelector('input[type="search"]')
    if (searchToggle && searchBar && searchInput) {
      searchInput.placeholder = 'Type to start searching...'
      searchToggle.addEventListener('click', () => {
        if (!searchContainer.classList.contains('active')) {
          searchContainer.classList.add('active')
          searchInput.focus()
          window.addEventListener('click', handleSearchContainerOutsideClick)
        }
      })
      function handleSearchContainerOutsideClick (event) {
        if (event.pointerType && !searchContainer.contains(event.target)) {
          searchContainer.classList.remove('active')
          searchInput.blur()
          window.removeEventListener('click', handleSearchContainerOutsideClick)
        }
      }
    }
  }
}
jQuery(document).ready(function($) {
  if (document.querySelector('#masthead.navigation-v2')) {
    handleNavigation()
 	customLinks.forEach(customLink => {
      if (customLink.tooltip) {
        const linkContainer = document.getElementById(`menu-item-${customLink.id}`)
        if (linkContainer) {
          linkContainer.setAttribute('title', customLink.tooltip)
          const link = document.querySelector(`#menu-item-${customLink.id} > a`)
          link.classList.add('informative')
        }
      }
      if (customLink.submenuType) {
        const submenu = document.querySelector(`#menu-item-${customLink.id} > .sub-menu`)
        if (submenu) submenu.classList.add(customLink.submenuType)
      }
    })
  }
})</script>


<script>
jQuery(document).ready(function( $ ){
  if (document.querySelector('.gartner-testimonials')) {
    const timer = setInterval(triggerReorder, 1000)
    function triggerReorder () {
      const list = document.querySelector('.gartner-pi-reviews ul')
      if (list) {
      	clearInterval(timer)
      	const fiveStarItems = document.querySelectorAll('.gartner-pi-reviews ul li .gartner-pi-star-rating-score[style="width:100%"]')
        fiveStarItems.forEach(fiveStarItem => {
          const itemToMove = fiveStarItem.closest('li')
          list.prepend(itemToMove)
        })
      }
    }
  }
})</script>


<script>
function handleAnimatedStatisticsEntrance () {
  const { top } = document.getElementById('animated-statistics').getBoundingClientRect()
  const height = window.innerHeight || document.documentElement.clientHeight
  if ((window.scrollY + height) > top) {
    window.removeEventListener('scroll', handleAnimatedStatisticsEntrance)
    document.querySelectorAll('#animated-statistics .number').forEach(number => incrementNumber(number, number.dataset, true))
  } else window.addEventListener('scroll', handleAnimatedStatisticsEntrance)
}

function incrementNumber (target, { count = 0, total, increment }, isInitializing) {
  if (isInitializing) {
    count = parseInt(count)
    total = parseInt(total)
    increment = parseInt(increment)
  }
  target.innerHTML = Number(count).toLocaleString()
  if (count < total) {
    const addition = Math.ceil(Math.random() * increment)
    count = Math.min(count + addition, total)
    setTimeout(() => incrementNumber(target, { count, total, increment }), 50)
  }
}
jQuery(document).ready(function () {
  if (document.getElementById('animated-statistics')) {
    handleAnimatedStatisticsEntrance()
  }
})</script>


<script>
function checkIfElementIsInView (timelineItem) {
  const { top, left, bottom, right } = timelineItem.getBoundingClientRect()
  const width = window.innerWidth || document.documentElement.clientWidth
  const height = window.innerHeight || document.documentElement.clientHeight
  return top > 0 && left > 0 && bottom < height && right < width
}
function handleTimelineItems () {
  const timelineItems = document.querySelectorAll('#timeline li')
  let shouldAnimationEnd = true
  timelineItems.forEach(timelineItem => {
    if (!timelineItem.classList.contains('visible')) {
      shouldAnimationEnd = false
      if (checkIfElementIsInView(timelineItem)) timelineItem.classList.add('visible')
    }
  })
  if (shouldAnimationEnd) window.removeEventListener('scroll', handleTimelineItems)
}
jQuery(document).ready(function() {
  if (document.getElementById('timeline')) {
    handleTimelineItems()
    window.addEventListener('scroll', handleTimelineItems)
  }
})</script>


<script>
function handleRiskGradeGraphAnimation (riskGradeGraph) {
  const grades = riskGradeGraph.querySelectorAll('.grades .grade')
  grades.forEach((grade, index) => {
    setTimeout(() => {
      grade.classList.add('elongated')
      if (index === grades.length - 1) {
        const note = riskGradeGraph.querySelector('.note')
        if (note) setTimeout(() => note.classList.add('visible'), 1000)
      }
    }, index * 500)
  })
}

jQuery(document).ready(function () {
  // Selector
  const selector = '.risk-grade-graph'
  // Animation
  const animation = handleRiskGradeGraphAnimation
  // Execution
  document.querySelectorAll(selector).forEach(item => {
    function handleEntrance () {
      if (item.getBoundingClientRect().top < window.innerHeight) {
        animation(item)
        window.removeEventListener('scroll', handleEntrance)
      }
    }
    window.addEventListener('scroll', handleEntrance)
    handleEntrance()
  })
})</script>


<script>
function handleRiskCategoriesEntrance () {
  if (document.getElementById('risk-categories').offsetTop < window.scrollY + window.innerHeight) {
    handleRiskCategoriesAnimation()
    window.removeEventListener('scroll', handleRiskCategoriesEntrance)
  }
}
function handleRiskCategoriesAnimation () {
  document.querySelectorAll('#risk-categories .category').forEach((category, index) => {
    setTimeout(() => category.classList.add('risen'), index * 100)
  })
}
function hideAllExplanations () {
  document.querySelectorAll('#risk-categories .explanation').forEach(explanation => hideElement(explanation))
}
function hideElement (element) {
  element.classList.remove('visible')
}
function showElement (element) {
  element.classList.add('visible')
}
function handleButtonInteraction ({ target }) {
  const explanation = target.querySelector('.explanation')
  const isExplanationVisible = explanation.classList.contains('visible')
  hideAllExplanations()
  if (!isExplanationVisible) showElement(explanation)
}
function handleOutsideInteraction ({ target }) {
  const container = document.querySelector('#risk-categories')
  if (!container.contains(target)) target.querySelectorAll('.explanation').forEach(explanation => hideElement(explanation))
}
jQuery(document).ready(function () {
  if (document.getElementById('risk-categories')) {
    document.querySelectorAll('#risk-categories button').forEach(button => button.addEventListener('mouseover', handleButtonInteraction))
    document.addEventListener('mouseover', handleOutsideInteraction)
    window.addEventListener('scroll', handleRiskCategoriesEntrance)
  }
})</script>


<script>
jQuery(document).ready(function( $ ){
  const interactiveTriangle = document.querySelector('.interactive-triangle')
  if (interactiveTriangle) {
    let timer
    function stopInterval (event) {
      clearInterval(timer)
    }
    const icons = interactiveTriangle.querySelectorAll('.ns-platform__icon')
    icons.forEach(icon => icon.firstElementChild.addEventListener('click', stopInterval))
    let index = 0
    icons[index].classList.add('ripple')
    timer = setInterval(() => {
      icons[index].classList.remove('ripple')
      index = (index + 1) % icons.length
      icons[index].classList.add('ripple')
      icons[index].click()
    }, 4000)
  }
})</script>


<script>
function startSliding (target) {
  const width = target.offsetWidth
  target.setAttribute('width', `${width}px`)
  // target.style.width = `${width}px`;
  console.log(`-${Math.floor(width / 2)}px`)
  target.animate([
    { left: '0px' },
    { left: `-${Math.floor(width / 2)}px` }
  ], {
    duration: 24000,
    iterations: Infinity
  })
}

jQuery(document).ready(function( $ ){
  const slidingLogoWrappers = document.querySelectorAll('.sliding-logos')
  if (slidingLogoWrappers.length > 0) {
    Array.from(slidingLogoWrappers).forEach(slidingLogoWrapper => {
      const logoContainer = slidingLogoWrapper.querySelector('.container')
      const movingBody = slidingLogoWrapper.querySelector('.row')
      if (logoContainer && movingBody) {
        const logos = movingBody.childNodes
        if (logos.length > 0) {
          logos.forEach(logo => {
            const clonedLogo = logo.cloneNode(true)
            if (clonedLogo) logo.parentNode.appendChild(clonedLogo)
          })
          startSliding(movingBody)
          // movingBody.classList.add('sliding')
          // setTimeout(() => {
          // movingBody.setAttribute('width', movingBody.offsetWidth + 'px')
          // movingBody.classList.add('sliding')
          // }, 2000)
        }
      }
    })
  }
})</script>

<script src='../wp-content/uploads/custom-css-js/2022581a1.js?v=1697'></script>
<link rel='stylesheet' id='20226-css' href='../wp-content/uploads/custom-css-js/20226275a.css?v=1448' media='all' />
<link rel='stylesheet' id='19538-css' href='../wp-content/uploads/custom-css-js/19538161f.css?v=7973' media='all' />

<script type="text/javascript">
				var _hsq = _hsq || [];
				_hsq.push(["setContentType", "standard-page"]);
			</script>

<script>
				(function() {
					var hbspt = window.hbspt = window.hbspt || {};
					hbspt.forms = hbspt.forms || {};
					hbspt._wpFormsQueue = [];
					hbspt.enqueueForm = function(formDef) {
						if (hbspt.forms && hbspt.forms.create) {
							hbspt.forms.create(formDef);
						} else {
							hbspt._wpFormsQueue.push(formDef);
						}
					}
					if (!window.hbspt.forms.create) {
						Object.defineProperty(window.hbspt.forms, 'create', {
							configurable: true,
							get: function() {
								return hbspt._wpCreateForm;
							},
							set: function(value) {
								hbspt._wpCreateForm = value;
								while (hbspt._wpFormsQueue.length) {
									var formDef = hbspt._wpFormsQueue.shift();
									if (!document.currentScript) {
										var formScriptId = 'leadin-forms-v2-js';
										hubspot.utils.currentScript = document.getElementById(formScriptId);
									}
									hbspt._wpCreateForm.call(hbspt.forms, formDef);
								}
							},
						});
					}
				})();
			</script>
<script>
			document.documentElement.className = document.documentElement.className.replace( 'no-js', 'js' );
		</script>
<style>
			.no-js img.lazyload { display: none; }
			figure.wp-block-image img.lazyloading { min-width: 150px; }
							.lazyload, .lazyloading { opacity: 0; }
				.lazyloaded {
					opacity: 1;
					transition: opacity 100ms;
					transition-delay: 0ms;
				}
					</style>
<style id="wp-custom-css">
			* {
	text-rendering: optimizeLegibility;
	-webkit-font-smoothing: antialiased;
	-webkit-text-size-adjust: 100%;
}

/* Patch */
#masthead {
  z-index: 2;
}
.hidden-top-content .ns-platform__top-content {
	visibility: hidden;
}
.page-id-17971 .notification-bar.notification-v2 {
  display: none !important;
}
[id^="logo-partners"] .categories {
	display: none;
}

/* Knack */
.kn-content .kn-table {
	color: white !important;
}
.kn-content h2, .kn-content a {
	color: #3dcc77 !important;
}
.kn-content .kn-select {
	display: inline-block !important;
	margin-right: .5rem !important;
}
.kn-content .kn-records-nav {
	display: flex !important;
	flex-wrap: wrap !important;
  justify-content: space-between !important;
	margin-bottom: 2rem !important;
}
.kn-content .kn-records-nav > *:empty {
	display: none !important;
}
.kn-content .kn-records-nav input, .kn-records-nav select {
	padding: .25rem .5rem !important;
	padding-right: 2rem !important;
	color: white !important;
	line-height: 125% !important;
	outline: none  !important;
	border-color: rgba(255, 255, 255, .125) !important;
	background-color: rgba(255, 255, 255, .125) !important;
}
.kn-content .kn-button {
	border: none !important;
	color: white !important;
	font-family: Rift !important;
	font-weight: 700 !important;
	background-color: #3dcc77 !important;
}
.kn-content .kn-list-item-container {
  margin-bottom: 1rem !important;
}

/* Hero */
@media screen and (min-width: 768px) {
	.hero--simple .hero__title h1 {
		font-size: 3.25rem;
	}
	.hero--simple .hero__subtitle p {
		font-size: 1.25rem;
	}
}
@media screen and (min-width: 992px) {
	.hero--simple .hero__title h1 {
		font-size: 3.5rem;
	}
	.hero--simple .hero__subtitle p {
		font-size: 1.25rem;
	}
}

/* Paddings */
.py-5-percent {
	padding-top: 5% !important;
	padding-bottom: 5% !important;
}
.pt-5-percent {
	padding-top: 5% !important;
}
.pb-5-percent {
	padding-bottom: 5% !important;
}
.py-3-percent {
	padding-top: 3% !important;
	padding-bottom: 3% !important;
}
.pt-3-percent {
	padding-top: 3% !important;
}
.pb-3-percent {
	padding-bottom: 3% !important;
}
@media screen and (max-width: 575px) {
	.py-5-percent {
		padding-top: 10% !important;
		padding-bottom: 10% !important;
	}
	.pt-5-percent {
		padding-top: 10% !important;
	}
	.pb-5-percent {
		padding-bottom: 10% !important;
	}
	.py-3-percent {
		padding-top: 6% !important;
		padding-bottom: 6% !important;
	}
	.pt-3-percent {
		padding-top: 6% !important;
	}
	.pb-3-percent {
		padding-bottom: 6% !important;
	}
}

/* Colors */
.bg-transparent {
	background-color: transparent;
}
.bg-transparent-must {
	background-color: transparent !important;
}
.bg-gray {
	background-color: #212121;
}
.bg-gray-must {
	background-color: #212121 !important;
}
.bg-gray-darker-2 {
	background-color: #121212;
}
.bg-risk-grade-a {
  background-color: #208541
}
.bg-risk-grade-b {
  background-color: #73AE42
}
.bg-risk-grade-c {
  background-color: #FBB415
}
.bg-risk-grade-d {
  background-color: #D14527
}
.bg-risk-grade-f {
	background-color: #800f15;
}
.bg-tone-maximum {
  background-color: rgba(255, 255, 255, .25) !important;
}
.bg-tone-more {
  background-color: rgba(255, 255, 255, .2) !important;
}
.bg-tone-medium {
  background-color: rgba(255, 255, 255, .15) !important;
}
.bg-tone-less {
  background-color: rgba(255, 255, 255, .1) !important;
}
.bg-tone-minimum {
  background-color: rgba(255, 255, 255, .05) !important;
}
.bg-tone-brand-maximum {
  background-color: rgba(61, 204, 119, 1) !important;
}
.bg-tone-brand-more {
  background-color: rgba(61, 204, 119, .8) !important;
}
.bg-tone-brand-medium {
  background-color: rgba(61, 204, 119, .6) !important;
}
.bg-tone-brand-less {
  background-color: rgba(61, 204, 119, .4) !important;
}
.bg-tone-brand-minimum {
  background-color: rgba(61, 204, 119, .2) !important;
}

/* Background Position */
.bg-position-bottom {
	background-position: bottom;
}

/* Position */
.position-relative {
	position: relative !important;
}

/* Rounded Corners */
.rounded {
	border-radius: .5rem;
}

/* Text Wrapping */
.text-wrapping-disabled {
	white-space: nowrap;
}
@media screen and (min-width: 768px) {
	.text-wrapping-md-disabled {
		white-space: nowrap;
	}
}

/* Search Results */
.search-results .site-search .page-title {
	font-family: inherit;
	font-size: 1.125rem;
	font-weight: normal;
	text-transform: initial;
	margin-bottom: 3rem;
}
.search-results .site-search .page-title > * {
	display: block;
	margin-top: .125em;
	font-family: Rift;
	font-size: 2em;
}
.search-results .site-search .entry-title {
	margin-bottom: 0;
	font-size: 1.5rem;}
</style>
</head>
<body>
<div class="box">
  <?php include_once 'navbar.php';
  ?>
  <div class="half-logo text-center mt-5">
    <img src="../../images/half-logo.png" style="width: 15%" />
    <p class="text-center mb-3" style="font-size: 2.5rem; font-weight: 500;
    line-height: 1.2;"><span class="text-danger">Technical Risk </span>Insight</p>
  </div>
</div>
<div class="wp-block-columns are-vertically-aligned-center mb-0 py-5-percent c-white">
<div class="wp-block-column is-vertically-aligned-center container" style="flex-basis:100%">
<h3 class="has-text-align-center h3 mb-0 pb-2 c-black">Powerful Performance behind 20 Categories</h3>
<p class="has-text-align-center mb-5 c-black"><span class="d-inline d-lg-block">The total score is a weighted average of 20 category components,</span> <span class="d-inline d-lg-block">providing unmatched breadth and insight into detected vulnerabilities.</span></p>
<div class="container">
<div id="risk-categories">
<p class="note">Tap on items to learn more.</p>
<div class="categories">
<div class="category" data-column="2">
<button>
<div class="explanation">
<p><span class="h5">Patch Management</span>Keep software on computers and network devices up to date and capable of resisting low-level cyber attacks. Criminal hackers can take advantage of known vulnerabilities in operating systems and third-party applications if they are not properly patched or updated.</p>
</div>
<div class="content">
<img data-src="https://tprmtest.000webhostapp.com/images/logo.svg" class="icon lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img class="icon" src="https://tprmtest.000webhostapp.com/images/logo.svg"></noscript>
<span class="h5">Patch<br>Management</span>
</div>
</button>
</div>
<div class="category" data-column="3">
<button>
<div class="explanation">
<p><span class="h5">Application Security</span>Security measures at the application level aim to prevent data or code within the app from being stolen or hijacked. Application security may include hardware, software, and procedures that identify or minimize security vulnerabilities.</p>
</div>
<div class="content">
<img data-src="https://tprmtest.000webhostapp.com/images/logo.svg" class="icon lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img class="icon" src="https://tprmtest.000webhostapp.com/images/logo.svg"></noscript>
<span class="h5">Application<br>Security</span>
</div>
</button>
</div>
<div class="category" data-column="4">
<button>
<div class="explanation">
<p><span class="h5">CDN Security</span>Companies use content delivery networks (CDNs) — large distributed systems of servers deployed in multiple data centers across the Internet — for online libraries like JQuery. Detect vulnerabilities in services like edge caching, SSL offloading and edge routing.</p>
</div>
<div class="content">
<img data-src="https://tprmtest.000webhostapp.com/images/logo.svg" class="icon lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img class="icon" src="https://tprmtest.000webhostapp.com/images/logo.svg"></noscript>
<span class="h5">CDN<br>Security</span>
</div>
</button>
</div>
<div class="category" data-column="1">
<button>
<div class="explanation">
<p><span class="h5">Website Security</span>The main website of an organization is one of the most important assets. Detecting any code or server level vulnerabilities is crucial for a company&#8217;s reputation.</p>
</div>
<div class="content">
<img data-src="https://tprmtest.000webhostapp.com/images/logo.svg" class="icon lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img class="icon" src="https://tprmtest.000webhostapp.com/images/logo.svg"></noscript>
<span class="h5">Website<br>Security</span>
</div>
</button>
</div>
<div class="category" data-column="2">
<button>
<div class="explanation">
<p><span class="h5">SSL/TLS Strength</span>The SSL/TLS protocol encrypts internet traffic of all types, making secure internet communication (and therefore internet commerce) possible.</p>
</div>
<div class="content">
<img data-src="https://tprmtest.000webhostapp.com/images/logo.svg" class="icon lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img class="icon" src="https://tprmtest.000webhostapp.com/images/logo.svg"></noscript><span class="h5">SSL/TLS<br>Strength</span>
</div>
</button>
</div>
<div class="category" data-column="3">
<button>
<div class="explanation">
<p><span class="h5">Credential Management</span>When a website unintentionally reveals sensitive information to its users. Depending on the context, websites may leak all kinds of information to a potential attacker, such as usernames or financial information.</p>
</div>
<div class="content">
<img data-src="https://tprmtest.000webhostapp.com/images/logo.svg" class="icon lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img class="icon" src="https://tprmtest.000webhostapp.com/images/logo.svg"></noscript>
<span class="h5">Credential<br>Management</span>
</div>
</button>
</div>
<div class="category" data-column="4">
<button>
<div class="explanation">
<p><span class="h5">Hacktivist Shares</span>Hacktivism is the act of misusing a computer system or network for a socially or politically motivated reason. An example of hacktivism is denial of service attacks (DoS) which shut down a system to prevent customer access.</p>
</div>
<div class="content">
<img data-src="https://tprmtest.000webhostapp.com/images/logo.svg" class="icon lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img class="icon" src="https://tprmtest.000webhostapp.com/images/logo.svg"></noscript>
<span class="h5">Hacktivist<br>Shares</span>
</div>
</button>
</div>
<div class="category" data-column="5">
<button>
<div class="explanation">
<p><span class="h5">Social Network</span>Social media is part of a larger ecosystem of publicly available platforms that make up a new attack surface for threat actors to leverage.</p>
</div>
<div class="content">
<img data-src="https://tprmtest.000webhostapp.com/images/logo.svg" class="icon lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img class="icon" src="https://tprmtest.000webhostapp.com/images/logo.svg"></noscript>
<span class="h5">Social<br>Network</span>
</div>
</button>
</div>
<div class="category" data-column="1">
<button>
<div class="explanation">
<p><span class="h5">Information Disclosure</span>When a website unintentionally reveals sensitive information to its users. Depending on the context, websites may leak all kinds of information to a potential attacker, such as usernames or financial information.</p>
</div>
<div class="content">
<img data-src="https://tprmtest.000webhostapp.com/images/logo.svg" class="icon lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img class="icon" src="https://tprmtest.000webhostapp.com/images/logo.svg"></noscript>
<span class="h5">Information<br>Disclosure</span>
</div>
</button>
</div>
<div class="category" data-column="2">
<button>
<div class="explanation">
<p><span class="h5">Attack Summary</span>The set of points on the boundary of a system, a system element, or an environment where an attacker can try to enter or extract data.</p>
</div>
<div class="content">
<img data-src="https://tprmtest.000webhostapp.com/images/logo.svg" class="icon lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img class="icon" src="https://tprmtest.000webhostapp.com/images/logo.svg"></noscript>
<span class="h5">Attack<br>Surface</span>
</div>
</button>
</div>
<div class="category" data-column="3">
<button >
<div class="explanation">
<p><span class="h5">Digital Footprint</span>Your digital footprint refers to a digital collection of data that can be traced back to you. This includes IPs, domains, subdomains, email addresses and server fingerprints.</p>
</div>
<div class="content">
<img data-src="https://tprmtest.000webhostapp.com/images/logo.svg" class="icon lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img class="icon" src="https://tprmtest.000webhostapp.com/images/logo.svg"></noscript>
<span class="h5">Digital<br>Footprint</span>
</div>
</button>
</div>
<div class="category" data-column="4">
<button>
<div class="explanation">
<p><span class="h5">DNS Health</span>A DNS attack is an exploit in which an attacker takes advantage of vulnerabilities in the domain name system (DNS).</p>
</div>
<div class="content">
<img data-src="https://tprmtest.000webhostapp.com/images/logo.svg" class="icon lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img class="icon" src="https://tprmtest.000webhostapp.com/images/logo.svg"></noscript>
<span class="h5">DNS<br>Health</span>
</div>
</button>
</div>
<div class="category" data-column="5">
<button>
<div class="explanation">
<p><span class="h5">Email Security</span>Open-sourced techniques for protecting email accounts, content, and communication against unauthorized access, loss or compromise.</p>
</div>
<div class="content">
<img data-src="https://tprmtest.000webhostapp.com/images/logo.svg" class="icon lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img class="icon" src="https://tprmtest.000webhostapp.com/images/logo.svg"></noscript>
<span class="h5">Email<br>Security</span>
</div>
</button>
</div>
<div class="category" data-column="1">
<button>
<div class="explanation">
<p><span class="h5">DDoS Resiliency</span>Detect malicious cyber-attacks that hackers or cybercriminals employ in order to make an online service, network resource or host machine unavailable to its intended users on the Internet.</p>
</div>
<div class="content">
<img data-src="https://tprmtest.000webhostapp.com/images/logo.svg" class="icon lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img class="icon" src="https://tprmtest.000webhostapp.com/images/logo.svg"></noscript>
<span class="h5">DDoS<br>Resiliency</span>
</div>
</button>
</div>
<div class="category" data-column="2">
<button>
<div class="explanation">
<p><span class="h5">Network Security</span>Analyze network-level problems and detect any critical ports, unprotected network devices, misconfigured firewalls, and service endpoints.</p>
</div>
<div class="content">
<img data-src="https://tprmtest.000webhostapp.com/images/logo.svg" class="icon lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img class="icon" src="https://tprmtest.000webhostapp.com/images/logo.svg"></noscript>
<span class="h5">Network<br>Security</span>
</div>
</button>
</div>
<div class="category" data-column="3">
<button>
<div class="explanation">
<p><span class="h5">Brand Monitoring</span>A business analytics process that monitors various channels on the web or media to gain insight about the company, brand, and anything explicitly connected to cyberspace.</p>
</div>
<div class="content">
<img data-src="https://tprmtest.000webhostapp.com/images/logo.svg" class="icon lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img class="icon" src="https://tprmtest.000webhostapp.com/images/logo.svg"></noscript>
<span class="h5">Brand<br>Monitoring</span>
</div>
</button>
</div>
<div class="category" data-column="4">
<button>
<div class="explanation">
<p><span class="h5">IP/Domain Reputation</span>Identify IP addresses that send unwanted requests. Using the IP reputation list you can identify if an IP address has a bad reputation or member of a botnet.</p>
</div>
<div class="content">
<img data-src="https://tprmtest.000webhostapp.com/images/logo.svg" class="icon lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img class="icon" src="https://tprmtest.000webhostapp.com/images/logo.svg"></noscript>
<span class="h5">IP/Domain<br>Reputation</span>
</div>
</button>
</div>
<div class="category" data-column="5">
<button>
<div class="explanation">
<p><span class="h5">Fraudulent Applications</span>Fraudulent applications are used to hack/phish employee or customer data. This category identifies possible fraudulent or pirate mobile/desktop apps on Google Play, App Store, and pirate app stores.</p>
</div>
<div class="content">
<img data-src="https://tprmtest.000webhostapp.com/images/logo.svg" class="icon lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img class="icon" src="https://tprmtest.000webhostapp.com/images/logo.svg"></noscript>

<span class="h5">Fraudulent<br>Applications</span>
</div>
</button>
</div>
<div class="category" data-column="2">
<button>
<div class="explanation">
<p><span class="h5">Fraudulent Domains</span>Domains registered by fraudsters plan to launch phishing attacks, sell knock-off goods on spoofed sites, or use &#8220;typo-squatting&#8221; domains to make money off unintentional traffic for other sites.</p>
</div>
<div class="content">
<img data-src="https://tprmtest.000webhostapp.com/images/logo.svg" class="icon lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img class="icon" src="https://tprmtest.000webhostapp.com/images/logo.svg"></noscript>
<span class="h5">Fraudulent<br>Domains</span>
</div>
</button>
</div>
<div class="category" data-column="4">
<button>
<div class="explanation">
<p><span class="h5">Web Ranking</span>Cisco, Alexa and Majestic track web sites and rank them according to popularity, backlinks, and references. This subcategory shows trends, page speed test results, and Web Content Accessibility Guidelines (WCAG) 2.0 parsing compliance findings.</p>
</div>
<div class="content">
<img data-src="https://tprmtest.000webhostapp.com/images/logo.svg" class="icon lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img class="icon" src="https://tprmtest.000webhostapp.com/images/logo.svg"></noscript>
<span class="h5">Web<br>Ranking</span>
</div>
</button>
</div>
<img class="brand" src="https://tprmtest.000webhostapp.com/images/logo.svg">
</div>
</div>
</div>
</div>
</div>

        <div class="container solutions my-5">
            <?php
                        $editRow = mysqli_fetch_row($aboutus_fetch);
                        echo $editRow[1];
            ?>
                
        </div>

<?php include_once 'footer.php'; ?>
<script data-cfasync="false" src="../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script type="text/javascript">
		function genesisBlocksShare( url, title, w, h ){
			var left = ( window.innerWidth / 2 )-( w / 2 );
			var top  = ( window.innerHeight / 2 )-( h / 2 );
			return window.open(url, title, 'toolbar=no, location=no, directories=no, status=no, menubar=no, scrollbars=no, resizable=no, copyhistory=no, width=600, height=600, top='+top+', left='+left);
		}
	</script>
<script type="text/javascript">
            let cust_login = document.getElementById("loginform");
            if(cust_login !== null) {
                var recaptcha_script = document.createElement('script');
                recaptcha_script.setAttribute('src','../../www.google.com/recaptcha/api.js');
                document.head.appendChild(recaptcha_script);                
            }
        </script>
<link rel='stylesheet' id='slick-css-css' href='../wp-content/themes/normshield/css/vendor/slickbbb0.css?ver=939d36a414faeadd9158f325c34ef9a9' media='all' />
<script id='leadin-script-loader-js-js-extra'>
var leadin_wordpress = {"userRole":"visitor","pageType":"page","leadinPluginVersion":"8.4.5"};
</script>
<script defer src='../../js.hs-scripts.com/5234018a466.js?integration=WordPress' async defer id='hs-script-loader'></script>
<script defer src='../wp-content/plugins/genesis-blocks/dist/assets/js/dismiss0c7f.js?ver=1627658866' id='genesis-blocks-dismiss-js-js'></script>
<script defer src='../wp-content/themes/normshield/js/vendors/intersection-observer.minbbb0.js?ver=939d36a414faeadd9158f325c34ef9a9' id='intersection-observer-js'></script>
<script defer src='../wp-content/themes/normshield/js/vendors/yall.minbbb0.js?ver=939d36a414faeadd9158f325c34ef9a9' id='yall-js'></script>
<script id='normshield-script-js-extra'>
var normshieldIcons = {"caret-down":{"width":8,"height":7,"svg":"<svg viewBox=\"0 0 8 7\" fill=\"none\" xmlns=\"http:\/\/www.w3.org\/2000\/svg\"><path d=\"M3.906 6.804L7.776 0H0L3.906 6.804Z\" fill=\"CurrentColor\"\/><\/svg>"},"hamburger":{"width":30,"height":27,"svg":"<svg viewBox=\"0 0 30 27\" fill=\"none\" xmlns=\"http:\/\/www.w3.org\/2000\/svg\"><rect width=\"30\" height=\"3\" rx=\"1.5\" fill=\"CurrentColor\"\/><rect y=\"12\" width=\"30\" height=\"3\" rx=\"1.5\" fill=\"CurrentColor\"\/><rect y=\"24\" width=\"30\" height=\"3\" rx=\"1.5\" fill=\"CurrentColor\"\/><\/svg>"},"twitter":{"width":18,"height":15,"svg":"<svg viewBox=\"0 0 18 15\" fill=\"none\" xmlns=\"http:\/\/www.w3.org\/2000\/svg\"><path fill-rule=\"evenodd\" clip-rule=\"evenodd\" d=\"M5.66086 15C12.4536 15 16.1682 9.22962 16.1682 4.226C16.1682 4.06203 16.165 3.8988 16.1577 3.73645C16.8787 3.20202 17.5055 2.53514 18 1.77583C17.3382 2.07719 16.6262 2.28036 15.8792 2.37191C16.6416 1.90326 17.227 1.16144 17.5031 0.277294C16.7894 0.711027 15.9993 1.02649 15.1582 1.19636C14.4843 0.460384 13.5246 0 12.4626 0C10.4229 0 8.76902 1.69588 8.76902 3.78643C8.76902 4.08366 8.8015 4.37255 8.86478 4.64984C5.79564 4.49163 3.07404 2.98475 1.2528 0.69353C0.935352 1.25299 0.752688 1.90326 0.752688 2.59671C0.752688 3.91054 1.40465 5.07028 2.39602 5.74875C1.79035 5.72963 1.22119 5.55894 0.723456 5.27501C0.722592 5.2908 0.722592 5.30668 0.722592 5.32329C0.722592 7.15744 1.99577 8.68847 3.68539 9.03567C3.37529 9.1222 3.04884 9.16886 2.71188 9.16886C2.47399 9.16886 2.24258 9.14472 2.01766 9.10057C2.48782 10.605 3.85106 11.6998 5.46761 11.7306C4.20343 12.7463 2.61122 13.3515 0.880992 13.3515C0.582984 13.3515 0.28908 13.3341 0 13.2991C1.63447 14.3731 3.57502 15 5.66086 15Z\" fill=\"currentColor\"\/><\/svg>"},"facebook":{"width":9,"height":17,"svg":"<svg viewBox=\"0 0 9 17\" fill=\"none\" xmlns=\"http:\/\/www.w3.org\/2000\/svg\"><path fill-rule=\"evenodd\" clip-rule=\"evenodd\" d=\"M5.84172 17V9.24555H8.49527L8.89254 6.22344H5.84172V4.29397C5.84172 3.419 6.08939 2.82268 7.36855 2.82268L9 2.822V0.119068C8.71776 0.082305 7.74937 0 6.62273 0C4.27062 0 2.66027 1.40834 2.66027 3.99476V6.22344H0V9.24555H2.66027V17H5.84172Z\" fill=\"currentColor\"\/><\/svg>"},"linkedin":{"width":15,"height":15,"svg":"<svg viewBox=\"0 0 15 15\" fill=\"none\" xmlns=\"http:\/\/www.w3.org\/2000\/svg\"><path fill-rule=\"evenodd\" clip-rule=\"evenodd\" d=\"M0 1.99952C0 0.896229 0.895009 0 2.00081 0C3.1037 0 4 0.896229 4 1.99952C4 3.10377 3.1037 4 2.00081 4C0.895009 4 0 3.10377 0 1.99952ZM0 15H3V5H0V15ZM11.7953 15H15V9.11282C15 6.22311 14.4005 4 11.1531 4C9.59296 4 8.54689 4.88962 8.11882 5.73348H8.07588V4.26676H5V15H8.20411V9.69039C8.20411 8.29052 8.46026 6.93469 10.129 6.93469C11.7734 6.93469 11.7953 8.53572 11.7953 9.78035V15Z\" fill=\"currentColor\"\/><\/svg>"},"close":{"width":16,"height":17,"svg":"<svg width=\"16\" height=\"17\" viewBox=\"0 0 16 17\" fill=\"none\" xmlns=\"http:\/\/www.w3.org\/2000\/svg\"><path d=\"M14.5879 1.41666L1.41142 15.5833\" stroke=\"currentColor\" stroke-linecap=\"square\"\/><path d=\"M1.41176 1.41667L14.5882 15.5833\" stroke=\"currentColor\" stroke-linecap=\"square\"\/><\/svg>"},"arrow-right":{"width":16,"height":16,"svg":"<svg viewBox=\"0 0 16 16\" fill=\"none\" xmlns=\"http:\/\/www.w3.org\/2000\/svg\"><path d=\"M8.64384 14.9352L15.0661 8.51293C15.2172 8.3996 15.2927 8.21071 15.2927 8.02182C15.2927 7.87071 15.2172 7.68182 15.0661 7.56849L8.64384 1.10849C8.37939 0.844045 7.96383 0.844045 7.69939 1.10849C7.43495 1.41071 7.43495 1.82627 7.69939 2.09071L12.9505 7.34182L1.27717 7.34182C0.89939 7.34182 0.597168 7.64405 0.597168 8.02182C0.597168 8.3996 0.89939 8.70182 1.27717 8.70182L12.9505 8.70182L7.69939 13.9907C7.43495 14.2552 7.43495 14.6707 7.69939 14.9352C7.96383 15.1996 8.37939 15.1996 8.64384 14.9352Z\" fill=\"currentColor\"\/><\/svg>"},"arrow-left":{"width":16,"height":16,"svg":"<svg viewBox=\"0 0 16 16\" fill=\"none\" xmlns=\"http:\/\/www.w3.org\/2000\/svg\"><path d=\"M7.35616 14.9352L0.933943 8.51293C0.782832 8.3996 0.707276 8.21071 0.707276 8.02182C0.707276 7.87071 0.782832 7.68182 0.933943 7.56849L7.35616 1.10849C7.62061 0.844045 8.03617 0.844045 8.30061 1.10849C8.56505 1.41071 8.56505 1.82627 8.30061 2.09071L3.0495 7.34182L14.7228 7.34182C15.1006 7.34182 15.4028 7.64405 15.4028 8.02182C15.4028 8.3996 15.1006 8.70182 14.7228 8.70182L3.0495 8.70182L8.30061 13.9907C8.56505 14.2552 8.56505 14.6707 8.30061 14.9352C8.03617 15.1996 7.62061 15.1996 7.35616 14.9352Z\" fill=\"currentColor\"\/><\/svg>"},"star":{"width":22,"height":20,"svg":"<svg viewBox=\"0 0 22 20\" fill=\"none\" xmlns=\"http:\/\/www.w3.org\/2000\/svg\"><path fill-rule=\"evenodd\" clip-rule=\"evenodd\" d=\"M11.2874 0.586502L13.4813 6.66373L20.1958 7.06007C21.1265 7.12613 21.326 7.98487 20.6612 8.44726L15.5422 12.4767L17.2707 18.8842C17.5366 19.809 16.7388 20.2714 16.074 19.809L10.6891 16.1759L5.03826 19.809C4.2405 20.3375 3.57569 19.6769 3.84161 18.9503L5.63659 12.741L0.384629 8.51332C-0.346656 7.91881 0.0522271 7.12613 0.849993 7.06007L7.36508 6.8619L9.75837 0.652559C10.0908 -0.272237 11.0215 -0.140124 11.2874 0.586502Z\" fill=\"currentColor\"\/><\/svg>"},"star-stroke":{"width":22,"height":20,"svg":"<svg viewBox=\"0 0 23 22\" fill=\"none\" xmlns=\"http:\/\/www.w3.org\/2000\/svg\"><path fill-rule=\"evenodd\" clip-rule=\"evenodd\" d=\"M12.2874 1.5865L14.4813 7.66373L21.1958 8.06007C22.1265 8.12613 22.326 8.98487 21.6612 9.44726L16.5422 13.4767L18.2707 19.8842C18.5366 20.809 17.7388 21.2714 17.074 20.809L11.6891 17.1759L6.03826 20.809C5.2405 21.3375 4.57569 20.6769 4.84161 19.9503L6.63659 13.741L1.38463 9.51332C0.653344 8.91881 1.05223 8.12613 1.84999 8.06007L8.36508 7.8619L10.7584 1.65256C11.0908 0.727763 12.0215 0.859876 12.2874 1.5865Z\" stroke=\"currentColor\"\/><\/svg>"},"play":{"width":25,"height":29,"svg":"<svg viewBox=\"0 0 25 29\" fill=\"none\" xmlns=\"http:\/\/www.w3.org\/2000\/svg\"><path fill-rule=\"evenodd\" clip-rule=\"evenodd\" d=\"M25 14.5L0 29L0 0L25 14.5Z\" fill=\"currentColor\"\/><\/svg>"},"youtube":{"width":17,"height":12,"svg":"<svg viewBox=\"0 0 17 12\" fill=\"none\" xmlns=\"http:\/\/www.w3.org\/2000\/svg\"><path fill-rule=\"evenodd\" clip-rule=\"evenodd\" d=\"M8.22200377,0.00320601915 L8.73336636,0.00299762576 C9.77098724,0.00802770739 13.989448,0.0482213503 15.1533022,0.369394852 C15.881489,0.567073113 16.4556363,1.14598802 16.6516866,1.88022156 C16.9777404,3.08146472 17.0006327,5.44903667 17.0018571,5.93064095 L16.9997497,6.26734117 C16.9902962,6.98028406 16.938248,9.04259744 16.6516866,10.1403489 C16.4556363,10.8745824 15.881489,11.4534973 15.1533022,11.6511756 C14.0662733,11.9396113 10.3145934,11.9923647 8.97863,12.002013 L8.18547812,12.0029976 C7.02338732,11.9961997 2.99612011,11.9500711 1.84988921,11.6370557 C1.12170239,11.4393775 0.547555093,10.8604625 0.351504797,10.126229 C0.0392556958,8.94242325 0.00550513102,6.5904432 0.00185708008,6.09582936 L0.00236299765,5.85253554 C0.00821646463,5.25578192 0.0502118046,3.03464207 0.351504797,1.88022156 C0.547555093,1.14598802 1.13570598,0.552953237 1.84988921,0.355274976 C2.99662784,0.050995782 7.10879237,0.0090016944 8.22200377,0.00320601915 L8.22200377,0.00320601915 Z M6.80716099,3.43340789 L6.80716099,8.57304267 L11.2322962,6.00322528 L6.80716099,3.43340789 Z\" fill=\"currentColor\"\/><\/svg>"}};
</script>
<script defer src='../wp-content/themes/normshield/js/scripts8a54.js?ver=1.0.0' id='normshield-script-js'></script>
<script defer src='../wp-content/plugins/wp-smushit/app/assets/js/smush-lazy-load.minab17.js?ver=3.8.8' id='smush-lazy-load-js'></script>
<script defer src='../wp-includes/js/wp-embed.minbbb0.js?ver=939d36a414faeadd9158f325c34ef9a9' id='wp-embed-js'></script>
<script defer src='../wp-content/themes/normshield/js/blocks/partner-logosbbb0.js?ver=939d36a414faeadd9158f325c34ef9a9' id='logo-partners-js-js'></script>
<script defer src='../wp-content/themes/normshield/js/vendors/slick.minbbb0.js?ver=939d36a414faeadd9158f325c34ef9a9' id='slick-script-js'></script>
<script defer src='../wp-content/themes/normshield/js/vendors/equalheightbbb0.js?ver=939d36a414faeadd9158f325c34ef9a9' id='equalheight-script-js'></script>
<script defer src='../wp-content/themes/normshield/js/blocks/posts-sliderbbb0.js?ver=939d36a414faeadd9158f325c34ef9a9' id='posts-slider-js-js'></script>

<script>
_linkedin_partner_id = "3188233"; window._linkedin_data_partner_ids = window._linkedin_data_partner_ids || []; window._linkedin_data_partner_ids.push(_linkedin_partner_id);
(function(){var s = document.getElementsByTagName("script")[0]; var b = document.createElement("script"); b.type = "text/javascript";b.async = true; b.src = "../../snap.licdn.com/li.lms-analytics/insight.min.js"; s.parentNode.insertBefore(b, s);})();</script>

</body>

<!-- Mirrored from blackkite.com/technical-grade/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 04 Oct 2021 16:27:12 GMT -->
</html>
