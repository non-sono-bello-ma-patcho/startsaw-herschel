<?php
    session_start();
    if(isset($_SESSION['id']))
        header("Location: private.php");
?>

<html lang="en" xmlns:size="http://www.w3.org/1999/xhtml">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="phibonachos and PageFaultHandler">

    <title>Herschel | Space's your playground</title>

    <!-- Font -->
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template -->

</head>

<body id="page-top">

<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
    <div class="container">
        <a class="navbar-brand js-scroll-trigger a-logo" href="#page-top"></a>
        <h1 class="mx-auto my-0 text-uppercase gradient-title">Herschel</h1>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            Menu
            <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="#about">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="#projects">Planets</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="#signup">Sign Up</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="" data-toggle="modal" data-target="#loginModal">Log In</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- Log In Modal-->
<%=require('../components/login_modal_component.html')%>


<!-- small search form -->
<div id="small_form_wrapper" class="d-none d-xl-block">
    <div class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item" id="form-item">
                <div class="fixed-form">
                    <div class="search-form-wrapper bg-white">
                        <%=require('../components/small_search_form_component.html')%>
                    </div>
                </div>
            </div>
            <div class="carousel-item active">

            </div>
        </div>
    </div>
</div>

<!-- Header -->
<header class="masthead">
    <div class="container d-flex h-100 align-items-center">
        <div class="d-block w-100">
            <div class="mx-auto text-center d-block">
                <h1 class="mx-auto my-0 text-uppercase">Herschel</h1>
            </div>
            <div class="w-100 bg-white mb-0 py-0 search-form-wrapper" id="big_form_wrapper">
                <%=require('../components/search_form_component.html')%>
            </div>
        </div>
    </div>
</header>

<!-- About Section -->
<section id="about" class="about-section text-center d-none d-md-block">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <h2 class="text-white mb-4">Everyone on board!</h2>
                <p class="text-white-50">

                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras accumsan nec sem et maximus. Donec convallis efficitur pharetra. Nullam iaculis, magna nec aliquet consectetur, eros risus pretium nisi, vitae ultricies quam orci et erat. Vivamus varius diam non ligula rutrum, a maximus lorem convallis. Maecenas faucibus lectus diam, vel porta quam bibendum ac. Sed vulputate sem sapien, id pretium turpis accumsan sit amet. Ut suscipit quis turpis a volutpat. Phasellus pulvinar nunc non placerat molestie. In neque leo, fringilla sit amet nisl blandit, pretium tempus ante. Phasellus quis nisi mauris. Vivamus commodo iaculis posuere. Aliquam bibendum orci nulla, dictum tincidunt erat scelerisque ornare. Nulla ullamcorper lacus vitae orci posuere lobortis. Sed pharetra nunc ut tristique posuere.

                    Nullam a justo cursus, luctus sem at, lobortis ex. Nullam vitae est id odio finibus viverra. Nam leo dolor, aliquam congue augue sed, pulvinar tristique lectus. Cras et imperdiet elit. Pellentesque tristique mi sem. Vivamus pretium, est vitae luctus euismod, ipsum quam dapibus lacus, eu tincidunt arcu metus ut justo. Maecenas pellentesque, eros sagittis volutpat auctor, est elit consequat diam, non molestie ex ante sit amet sem. Vestibulum consequat sem eros. Nunc sit amet lectus at quam pharetra suscipit in a eros. Vivamus at consectetur risus. Nam lorem dolor, luctus sed elit sit amet, condimentum sodales ipsum. </p>
            </div>
        </div>

    </div>
</section>

<!-- Projects Section -->
<section id="projects" class="projects-section bg-light d-none d-md-block">
    <div class="container">

        <!-- Featured Project Row -->
        <div class="row align-items-center no-gutters mb-4 mb-lg-5">
            <div class="col-xl-8 col-lg-7">
                <img class="img-fluid mb-3 mb-lg-0" src="<%=require('../..//img/project2_ext.jpg')%>" alt="">
            </div>
            <div class="col-xl-4 col-lg-5">
                <div class="featured-text text-center text-lg-left">
                    <h4>Explore</h4>
                    <p class="text-black-50 mb-0">

                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam quis sapien ante. Aenean nec odio leo. Morbi at ultricies erat. Vivamus at dolor lacus. Curabitur accumsan porta nisi, id convallis nisi malesuada non. Curabitur posuere non velit in accumsan. Integer quis molestie lectus, eu tristique sem.

                        Maecenas condimentum egestas porta. Mauris et tellus diam. Curabitur et urna finibus, malesuada dolor non, scelerisque neque. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Morbi aliquam libero eros, quis convallis urna dapibus id. Maecenas nec ipsum neque. Etiam sit amet est quam. Sed vulputate sed quam ac laoreet. Nunc elementum nunc vitae volutpat tincidunt. Etiam vulputate turpis eu ornare blandit. Maecenas viverra, est quis fringilla scelerisque, quam libero faucibus tellus, a porttitor eros diam sit amet nisi. Nullam tempor tortor ornare, faucibus tellus a, aliquam nibh. Sed placerat ex tincidunt, pulvinar ipsum nec, hendrerit mi. Nulla rhoncus est vel maximus placerat. Fusce eget iaculis est.

                        Interdum et malesuada fames ac ante ipsum primis in faucibus. Mauris ac dui sem. Quisque sagittis maximus nisl, elementum dapibus massa feugiat dignissim. Donec condimentum ut ex a pellentesque. Phasellus pulvinar a enim eget commodo. Nulla facilisis nisl vitae sem lacinia, nec rhoncus sem dapibus. Fusce luctus molestie ex id consectetur. Aenean vestibulum augue sed sagittis pretium. Cras vel tempor nunc. Sed et cursus nunc. Suspendisse vehicula risus vitae urna suscipit elementum.</p>
                </div>
            </div>
        </div>

        <!-- Project One Row -->
        <div class="row justify-content-center no-gutters mb-5 mb-lg-0">
            <div class="col-lg-6">
                <img class="img-fluid" src="<%=require('../../img/project1_ext.jpg')%>" alt="">
            </div>
            <div class="col-lg-6">
                <div class="bg-black text-center h-100 project">
                    <div class="d-flex h-100">
                        <div class="project-text w-100 my-auto text-center text-lg-left">
                            <h4 class="text-white">Lorem</h4>
                            <p class="mb-0 text-white-50">

                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras accumsan nec sem et maximus. Donec convallis efficitur pharetra. Nullam iaculis, magna nec aliquet consectetur, eros risus pretium nisi, vitae ultricies quam orci et erat. Vivamus varius diam non ligula rutrum, a maximus lorem convallis. Maecenas faucibus lectus diam, vel porta quam bibendum ac. Sed vulputate sem sapien, id pretium turpis accumsan sit amet. Ut suscipit quis turpis a volutpat. Phasellus pulvinar nunc non placerat molestie. In neque leo, fringilla sit amet nisl blandit, pretium tempus ante. Phasellus quis nisi mauris. Vivamus commodo iaculis posuere. Aliquam bibendum orci nulla, dictum tincidunt erat scelerisque ornare. Nulla ullamcorper lacus vitae orci posuere lobortis. Sed pharetra nunc ut tristique posuere.

                                Nullam a justo cursus, luctus sem at, lobortis ex. Nullam vitae est id odio finibus viverra. Nam leo dolor, aliquam congue augue sed, pulvinar tristique lectus. Cras et imperdiet elit. Pellentesque tristique mi sem. </p>
                            <hr class="d-none d-lg-block mb-0 ml-0">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Project Two Row -->
        <div class="row justify-content-center no-gutters">
            <div class="col-lg-6">
                <img class="img-fluid custom-img" src="<%=require('../../img/project4_ext.jpg')%>" alt="">
            </div>
            <div class="col-lg-6 order-lg-first">
                <div class="bg-black text-center h-100 project">
                    <div class="d-flex h-100">
                        <div class="project-text w-100 my-auto text-center text-lg-right">
                            <h4 class="text-white">Ipsum</h4>
                            <p class="mb-0 text-white-50">

                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras accumsan nec sem et maximus. Donec convallis efficitur pharetra. Nullam iaculis, magna nec aliquet consectetur, eros risus pretium nisi, vitae ultricies quam orci et erat. Vivamus varius diam non ligula rutrum, a maximus lorem convallis. Maecenas faucibus lectus diam, vel porta quam bibendum ac. Sed vulputate sem sapien, id pretium turpis accumsan sit amet. Ut suscipit quis turpis a volutpat. Phasellus pulvinar nunc non placerat molestie. In neque leo, fringilla sit amet nisl blandit, pretium tempus ante. Phasellus quis nisi mauris. Vivamus commodo iaculis posuere. Aliquam bibendum orci nulla, dictum tincidunt erat scelerisque ornare. Nulla ullamcorper lacus vitae orci posuere lobortis. Sed pharetra nunc ut tristique posuere.

                                Nullam a justo cursus, luctus sem at, lobortis ex. Nullam vitae est id odio finibus viverra. Nam leo dolor, aliquam congue augue sed, pulvinar tristique lectus. Cras et imperdiet elit. Pellentesque tristique mi sem. </p>
                            <hr class="d-none d-lg-block mb-0 mr-0">
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>

<!-- Signup Section -->
<section id="signup" class="signup-section">
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-lg-8 mx-auto text-center">
                <h2 class="text-white mb-5">Sign up to Herschel and start to explore!</h2>
                <%=require('../components/signup_form_component.html')%>
            </div>
        </div>
    </div>
</section>

<!-- Contact Section -->
<section class="contact-section bg-black">
    <div class="container">
        <div class="row">

            <div class="col-md-4 mb-3 mb-md-0">
                <div class="card py-4 h-100">
                    <div class="card-body text-center">
                        <i class="fas fa-map-marked-alt text-primary mb-2"></i>
                        <h4 class="text-uppercase m-0">Address</h4>
                        <hr class="my-4">
                        <div class="small text-black-50">Fakestreet 123</div>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-3 mb-md-0">
                <div class="card py-4 h-100">
                    <div class="card-body text-center">
                        <i class="fas fa-envelope text-primary mb-2"></i>
                        <h4 class="text-uppercase m-0">Email</h4>
                        <hr class="my-4">
                        <div class="small text-black-50">
                            <a href="#">hello@yourdomain.com</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-3 mb-md-0">
                <div class="card py-4 h-100">
                    <div class="card-body text-center">
                        <i class="fas fa-mobile-alt text-primary mb-2"></i>
                        <h4 class="text-uppercase m-0">Phone</h4>
                        <hr class="my-4">
                        <div class="small text-black-50">Orso Balù</div>
                    </div>
                </div>
            </div>
        </div>

        <div class="social d-flex justify-content-center">
            <a href="https://www.instagram.com/nonsonobellomapatcho/?hl=it" class="mx-2">
                <i class="fab fa-instagram my-3"></i>
            </a>
            <a href="https://github.com/non-sono-bello-ma-patcho" class="mx-2">
                <i class="fab fa-github my-3"></i>
            </a>
        </div>

    </div>
</section>

<!-- Footer -->
<footer class="bg-black small text-center text-white-50">
    <div class="container">
        Copyright &copy; Herschel 2018
    </div>
</footer>
</body>

</html>