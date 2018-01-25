<!doctype html>
<html>
<head>
    <title><?php wp_get_document_title();?></title>
    <?php wp_head();?>
    <script src="//load.sumome.com/" data-sumo-site-id="2f309811a331064361641a206c2adf9ba570fb07e9ada39a0d6e8fe206506fc7" async="async"></script>
</head>
<body>

<!-- Top Bar -->
<div class="top-bar tri-white-bottom">
    <div class="container">

        <!-- Pull Left -->
        <span class="numb">Order Now (02) 123-456-7890</span>
        <!-- Social Icons -->
        <div class="social"> <a href="#."><i class="fa fa-facebook"></i></a> <a href="#."><i class="fa fa-twitter"></i></a> <a href="#."><i class="fa fa-instagram"></i></a> </div>
        <span class="time-ta">We Are Open 10:00am - 11:00pm</span>

        <!-- Pull Right -->
        <div class="pull-right">
            <ul class="login-info">
                <li>
                    <select class="selectpicker">
                        <option>EN</option>
                        <option>FR</option>
                        <option>AR</option>
                    </select>
                </li>
                <li> <a href="#.">Login</a> </li>
                <li> <a href="#.">Register</a> </li>
            </ul>
        </div>
    </div>
</div>

<!-- header -->
<header>
    <div class="sticky">
        <div class="container">

            <!-- Logo -->
<!--            <div class="logo"> <a href="index.html"><img class="img-responsive" src="images/logo.png" alt="" ></a> </div>-->
            <div class="logo"> <?php echo the_custom_logo(); ?> </div>
            <!-- Navigation -->
            <nav class="navbar">
                <!-- NAV -->
                <ul class="nav ownmenu">
                    <li class="scroll active"> <a href="#home">Home </a></li>
                    <li class="scroll"> <a href="#about">About Us </a> </li>
                    <li class="scroll"> <a href="#our-menu">Our Menu </a> </li>
                    <li class="scroll"> <a href="#restaurant">Restaurant </a> </li>
                    <li class="scroll"> <a href="#testimonials">Testimonials </a> </li>
                    <li class="scroll"> <a href="#contact">Contact </a> </li>
                    <li> <a href="index.html">Pages </a>
                        <ul class="dropdown right animated-3s fadeIn">
                            <li> <a href="02-Composer-Step1.html">Composer Step 1</a> </li>
                            <li> <a href="03-Composer-Step2.html">Composer Step 2</a> </li>
                            <li> <a href="04-Composer-Step3a.html">Composer Step 3a</a> </li>
                            <li> <a href="05-Composer-Step3b.html">Composer Step 3b</a> </li>
                            <li> <a href="06-Composer-Step3c.html">Composer Step 3c</a> </li>
                            <li> <a href="Composer-SinglePage-MultiPizza.html">Composer Multi Pizza</a> </li>
                            <li> <a href="Composer-SinglePage-SinglePizza.html">Composer Single Pizza</a> </li>
                        </ul>
                    </li>
                </ul>

                <!-- Nav Right -->
                <div class="nav-right"> <a href="02-Composer-Step1.html" class="compose">Compose Pizza <i class="fa fa-check-square-o"></i></a> </div>
            </nav>
        </div>
    </div>
</header>