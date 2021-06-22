<footer class="footer-section">
            <div class="container">
                <div class="footer-content pt-5">
                    <div class="row">
                        <div class="col-xl-4 col-lg-4 col-md-6 mb-30">
                            <div class="footer-widget">
                                <div class="footer-cta">
                                    <div class="mb-3">
                                        <div class="single-cta">
                                            <i class="fas fa-map-marker-alt"></i>
                                            <div class="cta-text">
                                                <h4>Find us</h4>
                                                <span>California (Headquarters)
                                                    Irvine, CA 92603</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <div class="single-cta">
                                            <i class="fas fa-phone"></i>
                                            <div class="cta-text">
                                                <h4>Call us</h4>
                                                <span>949-421-7294</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <div class="single-cta">
                                            <i class="far fa-envelope-open"></i>
                                            <div class="cta-text">
                                                <h4>Mail us</h4>
                                                <span>support@RiskKarma.com</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-6 mb-30">
                            <div class="footer-widget">
                                <div class="footer-widget-heading">
                                    <h3>Useful Links</h3>
                                </div>
                                <ul>
                                    <li><a href="aboutus.php">About Us</a></li>
                                    <li><a href="whyriskkarma.php">Why Risk Karma</a></li>
                                    <li><a href="tprmasservice.php">(TPRM) as-a-Service</a></li>
                                    <li><a href="services1.html">Our Services</a></li>
                                    <li><a href="pricelist.php">Pricing</a></li>
                                    <li><a href="commonusecases.php">Use Cases</a></li>
                                    <li><a href="blogindex.php">Blog</a></li>
                                    <li><a href="contact.php">Contact us</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-6 mb-50 center mt-3">
                            <div class="footer-widget">
                                <div class="footer-menu">
                                    <div class="footer-social-icon">
                                        <div class="row">
                                        <a href="#"><i class="fab fa-facebook-f facebook-bg mr-3"></i></a>
                                        <a href="#"><i class="fab fa-twitter twitter-bg"></i></a>
                                        </div>
                                        <div class="row mt-5">    
                                        <a href="#"><i class="fab fa-instagram instagram-bg mr-3"></i></a>
                                        <a href="#"><i class="fab fa-linkedin linkedin-bg"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row center">
                        <b class="p-3" style="color: white"><q><?php
                        if(basename($_SERVER['PHP_SELF']) == "index.php")
                            echo 'You need third party risk assessments done… </br> AND all we do is third party risk assessments. (Image that…serendipitous right?!) – Lets Chat About It.';
                        elseif(basename($_SERVER['PHP_SELF']) == "tprmasservice.php")
                            echo'63% of Data Breaches are Linked to a Third Party';
                        elseif(basename($_SERVER['PHP_SELF']) == "services1.php")
                            echo'Let Us Simplify Your Cyber Risk Assessment Process';
                        elseif(basename($_SERVER['PHP_SELF']) == "aboutus.php")
                            echo'Manage third-party cyber risk with speed and certainty';
                        elseif(basename($_SERVER['PHP_SELF']) == "contact.php")
                            echo'Leave your vendor risk assessment to us, so you can focus on what matters';
                        elseif(basename($_SERVER['PHP_SELF']) == "service2.php")
                            echo'Vendor Management is a Grind… but it doesn’t have to be';
                        elseif(basename($_SERVER['PHP_SELF']) == "commonusecases.php")
                            echo'Risk Karma TPRM offering can bring an average 60% reduction in manual work, </br>
                                45% reduction in time to identify and mitigate risk, and 300% increase in team productivity';
                        elseif(basename($_SERVER['PHP_SELF']) == "pricelist.php")
                            echo'It’s no longer a question of if, but when. </br>
                            At some point a vendor failure will impact your company’s ability to deliver. </br>
                            The question is: Does your team have the ability and/or bandwidth to identify and counteract vendor risks before they impact you?';
                        ?>
                        </q></b>
                    </div>
                </div>
            </div>
            <div class="copyright-area">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="text-center">
                            <div class="copyright-text">
                                <p>Copyright @ 2021 Risk Karma LLC, All Rights Reserved | Risk Karma TPRM is a Risk Karma LLC Service Offering</p>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 text-center py-3">
                        </div>
                    </div>
                </div>
            </div>
        </footer>