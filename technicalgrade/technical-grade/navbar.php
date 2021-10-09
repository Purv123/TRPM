<header id="header" class="travel">
            <nav class="header">
                <ul>
                    <li><a href="../../aboutus.php" 
                        <?php
                        if(basename($_SERVER['PHP_SELF']) == "aboutus.php")
                            echo "class=active";
                        ?> >About </br> Us</a></li>
                    <li><a href="../../whyriskkarma.php"
                        <?php
                        if(basename($_SERVER['PHP_SELF']) == "whyriskkarma.php")
                            echo "class=active";
                        ?> >Why risk karma</a></li>
                    <li><a href="../../tprmasservice.php"
                        <?php
                        if(basename($_SERVER['PHP_SELF']) == "tprmasservice.php")
                            echo "class=active";
                        ?> >(TPRM)-AS-A-SERVICE</a></li>
                    <li class="logo">
                        <a href="../../index.php">
                            <img src="images/logo.svg" alt="" />
                            <h3>RISK KARMA</h3>
                            <p>ENTERPRISE & THIRD-PARTY RISK MANAGEMENT</p>
                        </a>
                    </li>
                    <li><a href="../../pricelist.php" 
                        <?php
                        if(basename($_SERVER['PHP_SELF']) == "pricelist.php")
                            echo "class=active";
                        ?> >Pricing</a></li>
                    <li><a href="../../services1.php" 
                        <?php
                        if(basename($_SERVER['PHP_SELF']) == "services1.php")
                            echo "class=active";
                        ?> >Our </br> Services</a></li>
                    <li class="largeName"><a href="../../services2.php" 
                        <?php
                        if(basename($_SERVER['PHP_SELF']) == "services2.php")
                            echo "class=active";
                        ?> >Benefits For</br>(Enterprises/Third Parties)</a></li>
                </ul>
            </nav>

            <nav class="header md">
                <div class="collapsed" id="navbarToggler">
                    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                        <li><a href="../../aboutus.php" 
                        <?php
                        if(basename($_SERVER['PHP_SELF']) == "aboutus.php")
                            echo "class=active";
                        ?> >About Us</a></li>
                    <li><a href="../../whyriskkarma.php"
                        <?php
                        if(basename($_SERVER['PHP_SELF']) == "whyriskkarma.php")
                            echo "class=active";
                        ?> >Why risk karma</a></li>
                    <li><a href="../../tprmasservice.php"
                        <?php
                        if(basename($_SERVER['PHP_SELF']) == "tprmasservice.php")
                            echo "class=active";
                        ?> >(TPRM)-AS-A-SERVICE</a></li>
                    <li><a href="../../pricelist.php" 
                        <?php
                        if(basename($_SERVER['PHP_SELF']) == "pricelist.php")
                            echo "class=active";
                        ?> >Pricing</a></li>
                    <li><a href="../../services1.php" 
                        <?php
                        if(basename($_SERVER['PHP_SELF']) == "services1.php")
                            echo "class=active";
                        ?> >Our </br> Services</a></li>
                    <li class="largeName"><a href="../../services2.php" 
                        <?php
                        if(basename($_SERVER['PHP_SELF']) == "services2.php")
                            echo "class=active";
                        ?> >Benefits For</br>(Enterprises/Third Parties)</a></li>
                    <li><a href="../../blogindex.php" <?php
                        if(basename($_SERVER['PHP_SELF']) == "blogindex.php")
                            echo "class=active";
                        ?>>Blog</a></li>
                    <li><a href="../../contact.php" <?php
                        if(basename($_SERVER['PHP_SELF']) == "contact.php")
                            echo "class=active";
                        ?>>Contact Us</a></li>
                    </ul>
                </div>
                <div class="logo-button-wrapper">
                    <li class="logo">
                        <a href="../../index.php">
                            <img src="images/logo.svg" alt="" />
                            <h3>RISK KARMA</h3>
                            <h6>THIRD-PARTY RISK MANAGEMENT</h6>
                        </a>
                    </li>
                    <button class="navbar-toggler" type="button">
                        <span class="navbar-toggler-icon"><i class="fas fa-bars"></i></span>
                    </button>
                </div>
            </nav>
        </header>
