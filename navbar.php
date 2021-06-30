<header id="header" class="travel">
            <nav class="header">
                <ul>
                    <li><a href="aboutus.php" 
                        <?php
                        if(basename($_SERVER['PHP_SELF']) == "aboutus.php")
                            echo "class=active";
                        ?> >About Us</a></li>
                    <li><a href="whyriskkarma.php"
                        <?php
                        if(basename($_SERVER['PHP_SELF']) == "whyriskkarma.php")
                            echo "class=active";
                        ?> >Why risk karma</a></li>
                    <li><a href="tprmasservice.php"
                        <?php
                        if(basename($_SERVER['PHP_SELF']) == "tprmasservice.php")
                            echo "class=active";
                        ?> >(TPRM) as service</a></li>
                    <li class="nav-item dropdown position-relative">
                        <a class="nav-link dropdown-toggle" href="#" 
                        <?php
                        if(basename($_SERVER['PHP_SELF']) == "service1.php" || basename($_SERVER['PHP_SELF']) == "service2.php" || basename($_SERVER['PHP_SELF']) == "service3.php")
                            echo "class=active";
                        ?> >What we offer</a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="services1.php">Our Services</a>
                            <a class="dropdown-item" href="services2.php">For Enterprise</a>
                            <a class="dropdown-item" href="services3.php">For Third Party</a>
                        </div>
                    </li>
                    <li class="logo">
                        <a href="index.php">
                            <img src="images/logo.svg" alt="" />
                            <h3>RISK KARMA</h3>
                            <h6>TPRM as-a-Service</h6>
                        </a>
                    </li>
                    <li><a href="pricelist.php" 
                        <?php
                        if(basename($_SERVER['PHP_SELF']) == "pricelist.php")
                            echo "class=active";
                        ?> >Pricing</a></li>
                    <li><a href="commonusecases.php" 
                        <?php
                        if(basename($_SERVER['PHP_SELF']) == "commonusecases.php")
                            echo "class=active";
                        ?> >Use cases</a></li>
                    <li><a href="blogindex.php" <?php
                        if(basename($_SERVER['PHP_SELF']) == "blogindex.php")
                            echo "class=active";
                        ?>>Blog</a></li>
                    <li><a href="contact.php" <?php
                        if(basename($_SERVER['PHP_SELF']) == "contact.php")
                            echo "class=active";
                        ?>>Contact Us</a></li>
                </ul>
            </nav>

            <nav class="header md">
                <div class="collapsed" id="navbarToggler">
                    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                        <li><a href="aboutus.php" 
                        <?php
                        if(basename($_SERVER['PHP_SELF']) == "aboutus.php")
                            echo "class=active";
                        ?> >About Us</a></li>
                    <li><a href="whyriskkarma.php"
                        <?php
                        if(basename($_SERVER['PHP_SELF']) == "whyriskkarma.php")
                            echo "class=active";
                        ?> >Why risk karma</a></li>
                    <li><a href="tprmasservice.php"
                        <?php
                        if(basename($_SERVER['PHP_SELF']) == "tprmasservice.php")
                            echo "class=active";
                        ?> >(TPRM) as service</a></li>
                    <li class="nav-item dropdown position-relative">
                        <a class="nav-link dropdown-toggle" href="#" 
                        <?php
                        if(basename($_SERVER['PHP_SELF']) == "service1.php" || basename($_SERVER['PHP_SELF']) == "service2.php" || basename($_SERVER['PHP_SELF']) == "service3.php")
                            echo "class=active";
                        ?> >What we offer</a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="services1.php">Our Services</a>
                            <a class="dropdown-item" href="services2.php">For Enterprise</a>
                            <a class="dropdown-item" href="services3.php">For Third Party</a>
                        </div>
                    </li>
                    <li><a href="pricelist.php" 
                        <?php
                        if(basename($_SERVER['PHP_SELF']) == "pricelist.php")
                            echo "class=active";
                        ?> >Pricing</a></li>
                    <li><a href="commonusecases.php" 
                        <?php
                        if(basename($_SERVER['PHP_SELF']) == "commonusecases.php")
                            echo "class=active";
                        ?> >Use cases</a></li>
                    <li><a href="blogindex.php" <?php
                        if(basename($_SERVER['PHP_SELF']) == "blogindex.php")
                            echo "class=active";
                        ?>>Blog</a></li>
                    <li><a href="contact.php" <?php
                        if(basename($_SERVER['PHP_SELF']) == "contact.php")
                            echo "class=active";
                        ?>>Contact Us</a></li>
                    </ul>
                </div>
                <div class="logo-button-wrapper">
                    <li class="logo">
                        <a href="index.php">
                            <img src="images/logo.svg" alt="" />
                            <h3>RISK KARMA</h3>
                            <h6>TPRM as-a-Service</h6>
                        </a>
                    </li>
                    <button class="navbar-toggler" type="button">
                        <span class="navbar-toggler-icon"><i class="fas fa-bars"></i></span>
                    </button>
                </div>
            </nav>
        </header>
