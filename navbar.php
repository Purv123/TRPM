<header id="header" class="travel">
            <nav class="header">
                <ul>
                    <li><a href="aboutus.php" 
                        <?php
                        if(basename($_SERVER['PHP_SELF']) == "aboutus.php")
                            echo "class=active";
                        ?> >About </br> Us</a></li>
                    <li><a href="whyriskkarma.php"
                        <?php
                        if(basename($_SERVER['PHP_SELF']) == "whyriskkarma.php")
                            echo "class=active";
                        ?> >Why </br>risk karma</a></li>
                    <li><a href="tprmasservice.php"
                        <?php
                        if(basename($_SERVER['PHP_SELF']) == "tprmasservice.php")
                            echo "class=active";
                        ?> >(TPRM)-AS-A-SERVICE</a></li>
                    <li class="logo">
                        <a href="index.php">
                            <img src="images/logo.svg" alt="" />
                            <h3>RISK KARMA</h3>
                            <p>THIRD-PARTY RISK MANAGEMENT</p>
                        </a>
                    </li>
                    <li><a href="pricelist.php" 
                        <?php
                        if(basename($_SERVER['PHP_SELF']) == "pricelist.php")
                            echo "class=active";
                        ?> >Our </br> Pricing</a></li>
                    <li><a href="services1.php" 
                        <?php
                        if(basename($_SERVER['PHP_SELF']) == "services1.php")
                            echo "class=active";
                        ?> >Our </br> Services</a></li>
                    <li class="largeName"><a href="services2.php" 
                        <?php
                        if(basename($_SERVER['PHP_SELF']) == "services2.php")
                            echo "class=active";
                        ?> >Key </br>Benefits</a></li>
                </ul>
            </nav>

            <nav class="header md">
                <div class="collapsed" id="navbarToggler">
                    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                        <li><a href="aboutus.php" 
                        <?php
                        if(basename($_SERVER['PHP_SELF']) == "aboutus.php")
                            echo "class=active";
                        ?> >About </br> Us</a></li>
                    <li><a href="whyriskkarma.php"
                        <?php
                        if(basename($_SERVER['PHP_SELF']) == "whyriskkarma.php")
                            echo "class=active";
                        ?> >Why risk karma</a></li>
                    <li><a href="tprmasservice.php"
                        <?php
                        if(basename($_SERVER['PHP_SELF']) == "tprmasservice.php")
                            echo "class=active";
                        ?> >(TPRM)-AS-A-SERVICE</a></li>
                    <li><a href="pricelist.php" 
                        <?php
                        if(basename($_SERVER['PHP_SELF']) == "pricelist.php")
                            echo "class=active";
                        ?> >Our Pricing</a></li>
                    <li><a href="services1.php" 
                        <?php
                        if(basename($_SERVER['PHP_SELF']) == "services1.php")
                            echo "class=active";
                        ?> >Our </br> Services</a></li>
                    <li class="largeName"><a href="services2.php" 
                        <?php
                        if(basename($_SERVER['PHP_SELF']) == "services2.php")
                            echo "class=active";
                        ?> >Key Benefits</a></li>
                    <li><a href="blogindex.php"<?php
                                    if(basename($_SERVER['PHP_SELF']) == "blogindex.php")
                                        echo "class=active";
                                    ?> >Blog</a></li>
                    <li><a href="solutions.php"<?php
                                    if(basename($_SERVER['PHP_SELF']) == "solutions.php")
                                        echo "class=active";
                                    ?> >Solutions Screenshots</a></li>
                    <li><a href="contact.php"<?php
                    if(basename($_SERVER['PHP_SELF']) == "contact.php")
                        echo "class=active";
                    ?> >Contact us</a></li>
                    <li><a href="proofofsolutions.php"<?php
                    if(basename($_SERVER['PHP_SELF']) == "proofofsolutions.php")
                        echo "class=active";
                    ?> >Proof-of-Solution</a></li>
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
                    <li><a href="newofferings.php"<?php
                    if(basename($_SERVER['PHP_SELF']) == "newofferings.php")
                        echo "class=active";
                    ?> >Free Offers</a></li>
                    </ul>
                </div>
                <div class="logo-button-wrapper mb-3">
                    <li class="logo">
                        <a href="index.php">
                            <img src="images/logo.svg" alt="" />
                            <h3>RISK KARMA</h3>
                            <p>THIRD-PARTY RISK MANAGEMENT</p>
                        </a>
                    </li>
                    <button class="navbar-toggler" type="button">
                        <span class="navbar-toggler-icon"><i class="fas fa-bars"></i></span>
                    </button>
                </div>
            </nav>
        </header>
