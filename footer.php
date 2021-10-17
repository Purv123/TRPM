<footer class="footer-section">
            <div class="container footerContainer">
                <div class="footer-content pt-3">
                    <div class="row">
                        <div class="col-xl-3 col-lg-3 col-md-6 mb-30">
                            <div class="footer-widget">
                                <div class="footer-cta mt-3">
                                    <div class="mb-3">
                                        <div class="single-cta">
                                            <i class="fas fa-map-marker-alt"></i>
                                            <div class="cta-text">
                                                <h6>Find us</h6>
                                                <span>California (Headquarters)</br>
                                                    Irvine, CA 92603</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <div class="single-cta">
                                            <i class="fas fa-phone"></i>
                                            <div class="cta-text">
                                                <h6>Call us</h6>
                                                <span>949-421-7294</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="">
                                        <div class="single-cta">
                                            <i class="far fa-envelope-open"></i>
                                            <div class="cta-text">
                                                <h6>Mail us</h6>
                                                <span>support@RiskKarma.com</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-7 col-lg-7 col-md-6 usefullinks">
                            <div class="footer-widget">
                                    <div class="footer-widget-heading">
                                        <h3>Useful Links</h3>
                                    </div>
                                <ul>
                                    <li><a href="aboutus.php" 
                                    <?php
                                    if(basename($_SERVER['PHP_SELF']) == "aboutus.php")
                                        echo "class=active";
                                    ?> >About Us</a></li>
                                    <li><a href="whyriskkarma.php"<?php
                                    if(basename($_SERVER['PHP_SELF']) == "whyriskkarma.php")
                                        echo "class=active";
                                    ?> >Why Risk Karma</a></li>
                                    <li><a href="pricelist.php"<?php
                                    if(basename($_SERVER['PHP_SELF']) == "pricelist.php")
                                        echo "class=active";
                                    ?> >Pricing</a></li>
                                    <li><a href="blogindex.php"<?php
                                    if(basename($_SERVER['PHP_SELF']) == "blogindex.php")
                                        echo "class=active";
                                    ?> >Blog</a></li>
                                    <li><a href="services1.php"<?php
                                    if(basename($_SERVER['PHP_SELF']) == "services1.php")
                                        echo "class=active";
                                    ?> >Our Services</a></li>
                                    <li><a href="solutions.php"<?php
                                    if(basename($_SERVER['PHP_SELF']) == "solutions.php")
                                        echo "class=active";
                                    ?> >solutions</a></li>
                                    <li><a href="contact.php"<?php
                                    if(basename($_SERVER['PHP_SELF']) == "contact.php")
                                        echo "class=active";
                                    ?> >Contact us</a></li>
                                    <li><a href="proofofsolutions.php"<?php
                                    if(basename($_SERVER['PHP_SELF']) == "proofofsolutions.php")
                                        echo "class=active";
                                    ?> >Proof-of-Solution</a></li>
                                    <li><a href="tprmasservice.php"<?php
                                    if(basename($_SERVER['PHP_SELF']) == "tprmasservice.php")
                                        echo "class=active";
                                    ?> >(TPRM)-as-a-Service</a></li>
                                    <li><a href="privacy_policy.php"<?php
                                    if(basename($_SERVER['PHP_SELF']) == "privacy_policy.php")
                                        echo "class=active";
                                    ?> >Privacy & Policy</a></li>
                                    <li><a href="termsofuse.php"<?php
                                    if(basename($_SERVER['PHP_SELF']) == "termsofuse.php")
                                        echo "class=active";
                                    ?> >Terms Of Use</a></li>
                                    <li><a href="./technicalgrade/technical-grade/technicalriskinsight.php">Technical Risk Insights</a></li>
                                    <li><a href="consulting.php"<?php
                                    if(basename($_SERVER['PHP_SELF']) == "consulting.php")
                                        echo "class=active";
                                    ?> >Advisory/Consulting Services</a></li>
                                    <li><a href="services2.php"<?php
                                    if(basename($_SERVER['PHP_SELF']) == "services2.php")
                                        echo "class=active";
                                    ?> >For (Enterprises/Third Parties)</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-2 col-md-6 mb-50 center mt-3">
                            <div class="footer-widget">
                                <div class="footer-menu">
                                    <div class="footer-social-icon xl">
                                        <div class="row center">
                                        <a href="https://www.linkedin.com/company/risk-karma-llc/" target="_blank" class="mb-3"><i class="fab fa-linkedin"></i></a>
                                        <a href="https://www.linkedin.com/company/risk-karma-llc/" target="_blank">Follow us on LinkedIn</i></a>
                                        </div>
                                    </div>
                                    <div class="footer-social-icon mb">
                                        <div class="row center">
                                        <a href="https://www.linkedin.com/company/risk-karma-llc/" target="_blank" class="mb-3"><i class="fab fa-linkedin"></i></a>
                                        <a href="https://www.linkedin.com/company/risk-karma-llc/" target="_blank">Follow us on LinkedIn</i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row center">
                        <b class="p-3" style="color: white; font-size: 1rem;"><?php
                        if(basename($_SERVER['PHP_SELF']) == "index.php")
                            echo '<span style="color: #e31e24; font-weight:900; font-size:1.5rem;">[ </span> <q>  A firms level of cybersecurity is only as good as the cybersecurity of its vendors. - Risk Karma </q> <span style="color: #e31e24; font-weight:900; font-size:1.5rem;">] </span>';
                        elseif(basename($_SERVER['PHP_SELF']) == "tprmasservice.php")
                            echo'<span style="color: #e31e24; font-weight:900; font-size:1.5rem;">[</span><q>63% of Data Breaches are Linked to a Third Party </q><span style="color: #e31e24; font-weight:900; font-size:1.5rem;">]</span>';
                        elseif(basename($_SERVER['PHP_SELF']) == "services1.php")
                            echo'<span style="color: #e31e24; font-weight:900; font-size:1.5rem;">[</span><q>Let Us Simplify Your Cyber Risk Assessment Process</q><span style="color: #e31e24; font-weight:900; font-size:1.5rem;">]</span>';
                        elseif(basename($_SERVER['PHP_SELF']) == "aboutus.php")
                            echo'<span style="color: #e31e24; font-weight:900; font-size:1.5rem;">[</span><q>Manage third-party cyber risk with speed and certainty</q><span style="color: #e31e24; font-weight:900; font-size:1.5rem;">]</span>';
                        elseif(basename($_SERVER['PHP_SELF']) == "contact.php")
                            echo'<span style="color: #e31e24; font-weight:900; font-size:1.5rem;">[</span><q>Leave your vendor risk assessment to us, so you can focus on what matters</q><span style="color: #e31e24; font-weight:900; font-size:1.5rem;">]</span>';
                        elseif(basename($_SERVER['PHP_SELF']) == "services2.php")
                            echo'<span style="color: #e31e24; font-weight:900; font-size:1.5rem;">[</span><q>Vendor Management is a Grind… but it doesn’t have to be</q><span style="color: #e31e24; font-weight:900; font-size:1.5rem;">]</span>';
                        elseif(basename($_SERVER['PHP_SELF']) == "commonusecases.php")
                            echo'<span style="color: #e31e24; font-weight:900; font-size:1.5rem;">[</span><q>Risk Karma TPRM offering can bring an average 60% reduction in manual work, </br>
                                45% reduction in time to identify and mitigate risk, and 300% increase in team productivity</q><span style="color: #e31e24; font-weight:900; font-size:1.5rem;">]</span>';
                        elseif(basename($_SERVER['PHP_SELF']) == "pricelist.php")
                            echo'<span style="color: #e31e24; font-weight:900; font-size:1.5rem;">[</span><q>It’s no longer a question of if, but when. </br>
                            At some point a vendor failure will impact your company’s ability to deliver. </br>
                            The question is: Does your team have the ability and/or bandwidth to identify and counteract vendor risks before they impact you?</q><span style="color: #e31e24; font-weight:900; font-size:1.5rem;">]</span>';
                        elseif(basename($_SERVER['PHP_SELF']) == "whyriskkarma.php")
                            echo'<span style="color: #e31e24; font-weight:900; font-size:1.5rem;">[</span><q>Third-party risk management done right - either as your outsourced partner or as a cost-effective staff augmentation answer</q><span style="color: #e31e24; font-weight:900; font-size:1.5rem;">]</span>';
                        elseif(basename($_SERVER['PHP_SELF']) == "solutions.php")
                            echo'<span style="color: #e31e24; font-weight:900; font-size:1.5rem;">[</span><q>60% of companies do not monitor the security practices of their 3rd party vendors.</q><span style="color: #e31e24; font-weight:900; font-size:1.5rem;">]</span>';
                        elseif(basename($_SERVER['PHP_SELF']) == "consulting.php")
                            echo'<span style="color: #e31e24; font-weight:900; font-size:1.5rem;">[</span><q>63% of data breaches are caused by security vulnerabilities introduced by a third party.</q><span style="color: #e31e24; font-weight:900; font-size:1.5rem;">]</span>';
                        elseif(basename($_SERVER['PHP_SELF']) == "proofofsolutions.php")
                            echo'<span style="color: #e31e24; font-weight:900; font-size:1.5rem;">[</span><q> 80% of companies never saw the ransomware attacks coming from their 3rd Party vendors.</q><span style="color: #e31e24; font-weight:900; font-size:1.5rem;">]</span>';
                        elseif(basename($_SERVER['PHP_SELF']) == "partnerservices.php")
                            echo'<span style="color: #e31e24; font-weight:900; font-size:1.5rem;">[</span><q> 66% do not have internal resources to verify their third party vendors security..</q><span style="color: #e31e24; font-weight:900; font-size:1.5rem;">]</span>';
                        ?>
                        </b>
                    </div>
                </div>
            </div>
            <div class="copyright-area">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="text-center">
                            <div class="copyright-text">
                                <p> Copyright @ 2021 Risk Karma LLC, All Rights Reserved</p>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 text-center">
                        </div>
                    </div>
                </div>
            </div>
        </footer>