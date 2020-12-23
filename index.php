<?php
require 'loginsystem/partials/dbconnect.php';

session_start();

        

include "login.php";
include "signup.php";
include "personalSignup/startersignup.php";
include "personalSignup/mediumsignup.php";
include "personalSignup/completesignup.php";





?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- SEO Meta Tags -->
    <meta name="description" content="Create a stylish landing page for your business startup and get leads for the offered services with this HTML landing page template.">
    <meta name="author" content="Inovatik">

    <!-- OG Meta Tags to improve the way the post looks when you share the page on LinkedIn, Facebook, Google+ -->
    <meta property="og:site_name" content="" />
    <!-- website name -->
    <meta property="og:site" content="" />
    <!-- website link -->
    <meta property="og:title" content="" />
    <!-- title shown in the actual shared post -->
    <meta property="og:description" content="" />
    <!-- description shown in the actual shared post -->
    <meta property="og:image" content="" />
    <!-- image link, make sure it's jpg -->
    <meta property="og:url" content="" />
    <!-- where do you want your post to link to -->
    <meta property="og:type" content="article" />

    <!-- Website Title -->
    <title>Ebase</title>

    <!-- Styles -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:400,400i,600,700,700i&amp;subset=latin-ext" rel="stylesheet">
    <link href="css/bootstrap.css" rel="stylesheet">
    
    <link href="css/fontawesome-all.css" rel="stylesheet">
    <link href="css/swiper.css" rel="stylesheet">
    <link href="css/magnific-popup.css" rel="stylesheet">
    <link href="css/styles.css" rel="stylesheet">


</head>

<body data-spy="scroll" data-target=".fixed-top">

    <!-- Preloader -->
    <div class="spinner-wrapper">
        <div class="spinner">
            <div class="bounce1"></div>
            <div class="bounce2"></div>
            <div class="bounce3"></div>
        </div>
    </div>
    <!-- end of preloader -->


    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark navbar-custom fixed-top">
        <!-- Text Logo - Use this if you don't have a graphic logo -->
        <!-- <a class="navbar-brand logo-text page-scroll" href="index.html">Evolo</a> -->



        <!-- Mobile Menu Toggle Button -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-awesome fas fa-bars"></span>
            <span class="navbar-toggler-awesome fas fa-times"></span>
        </button>
        <!-- end of mobile menu toggle button -->

        <div class="collapse navbar-collapse" id="navbarsExampleDefault">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link page-scroll" href="#header">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link page-scroll" href="#services">Services</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link page-scroll" href="#pricing">Pricing</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link page-scroll" href="#request">Request</a>
                </li>

                <!-- Dropdown Menu -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle page-scroll" href="#about" id="navbarDropdown" role="button" aria-haspopup="true" aria-expanded="false">About</a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="terms-conditions.html"><span class="item-text">Terms Conditions</span></a>
                        <div class="dropdown-items-divide-hr"></div>
                        <a class="dropdown-item" href="privacy-policy.html"><span class="item-text">Privacy Policy</span></a>
                    </div>
                </li>
                <!-- end of dropdown menu -->

                <li class="nav-item">
                    <a class="nav-link page-scroll" href="#contact">Contact</a>
                </li>
            </ul>
            <div class="d-grid gap-2 d-md-block">
                <button class="btn btn-warning" type="button" data-bs-toggle="modal" data-bs-target="#loginmodal">Login</button>
                <button class="btn btn-warning" type="button" data-bs-toggle="modal" data-bs-target="#signupmodal">Signup</button>
            </div>
            

            <span class="nav-item social-icons">
                <span class="fa-stack">
                    <a href="https://www.facebook.com/">
                        <i class="fas fa-circle fa-stack-2x facebook"></i>
                        <i class="fab fa-facebook-f fa-stack-1x"></i>
                    </a>
                </span>
            <span class="fa-stack">
                    <a href="https://www.twitter.com/">
                        <i class="fas fa-circle fa-stack-2x twitter"></i>
                        <i class="fab fa-twitter fa-stack-1x"></i>
                    </a>
                </span>
            </span>
        </div>
    </nav>
    <!-- end of navbar -->
    <!-- end of navigation -->


    <!-- Header -->
    <header id="header" class="header">
        <div class="header-content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="text-container">
                            <h1><span class="turquoise">The Ebase</span> The Best Data Provider India</h1>
                            <p class="p-large">The Ebase is a serverless database service.Focussed on helping software engineers build cloud-agnostic software platforms.</p>
                            <p class="p-large">The database is firewood of Marketing; the right database is at the head of better marketing activity. It saves the time of hunting targeted or prospective audience. We lend data monetization, easy acquisition, and data secure
                                and accessible to all. You can get the required source based on your targeted audience and location.</p>
                            <a class="btn-solid-lg page-scroll" href="#services">DISCOVER</a>
                        </div>
                        <!-- end of text-container -->
                    </div>
                    <!-- end of col -->
                    <div class="col-lg-6">
                        <div class="image-container">
                            <img class="img-fluid" src="images/header-teamwork.svg" alt="alternative">
                        </div>
                        <!-- end of image-container -->
                    </div>
                    <!-- end of col -->
                </div>
                <!-- end of row -->
            </div>
            <!-- end of container -->
        </div>
        <!-- end of header-content -->
    </header>
    <!-- end of header -->
    <!-- end of header -->

   
    <div class="container text-center">
        <h3>About Us</h3>
        <p>Our database provider solution is high quality for many business and telemarketing activities. Not all database providing companies are transparent about their bulk database to generate excellent sales lead. Truecaller verified mobile number database
            provider shall help you to achieve the right target audience for your services and products in India.</p>
        <p>The Ebase Database Service makes it easy to set up, operate, and scale a relational database in the cloud. It provides cost-efficient and resizable capacity while automating time-consuming administration tasks such as hardware provisioning, database
            setup, patching and backups. It frees you to focus on your applications so you can give them the fast performance, high availability, security and compatibility they need. Ebase is available on several database instance types - optimized for
            memory, performance or I/O - and provides you with six familiar database engines to choose from, including Amazon Aurora, PostgreSQL, MySQL, MariaDB, Oracle Database, and SQL Server. You can use the AWS Database Migration Service to easily
            migrate or replicate your existing databases to Amazon RDS.</p>
    </div>


    <!-- Services -->
    <div id="services" class="cards-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">


                    <pre>            </pre>

                    <pre>            </pre>

                    <h2>Business Growth Services</h2>
                    <p class="p-heading p-large">We serve small and medium sized companies in all tech related industries with high quality growth services which are presented below</p>
                </div>
                <!-- end of col -->
            </div>
            <!-- end of row -->
            <div class="row">
                <div class="col-lg-12">

                    <!-- Card -->
                    <div class="card">
                        <img class="card-image" src="images/services-icon-1.svg" alt="alternative">
                        <div class="card-body">
                            <h4 class="card-title">Indian Corporate Database</h4>
                            <p>Get data on master details of every company registered with Registrar of Companies (RoC). We have almost 4 lac plus business experts data and B2B Databases which can help more</p>
                        </div>
                    </div>
                    <!-- end of card -->

                    <!-- Card -->
                    <div class="card">
                        <img class="card-image" src="images/services-icon-2.svg" alt="alternative">
                        <div class="card-body">
                            <h4 class="card-title">Manufacturing Database</h4>
                            <p>Indian manufacturers, from PAN India, envelopment all types of industries – It could be small, Medium, Private Limited companies, Limited companies, corporate houses and many more</p>
                        </div>
                    </div>
                    <!-- end of card -->

                    <!-- Card -->
                    <div class="card">
                        <img class="card-image" src="images/services-icon-3.svg" alt="alternative">
                        <div class="card-body">
                            <h4 class="card-title">Working Professional Database</h4>
                            <p>Professionals like advocates, lawyers, chartered accountants (CA’s), company secretaries and doctors. The Chartered Accountants, Doctors, Surgeons , Dentists, Engineers, Architects, Designer , chemists,etc.</p>
                        </div>
                    </div>
                    <!-- end of card -->
                    <!-- Card -->
                    <div class="card">
                        <img class="card-image" src="images/services-icon-2.svg" alt="alternative">
                        <div class="card-body">
                            <h4 class="card-title">MSME / Local Directories / SME Data Providers</h4>
                            <p>The data refers to a break-up of working enterprises and employment in Micro, Small and Medium Enterprises (MSMEs) for all sectors (in percentage terms).</p>
                        </div>
                    </div>
                    <div class="card">
                        <img class="card-image" src="images/services-icon-1.svg" alt="alternative">
                        <div class="card-body">
                            <h4 class="card-title">Mobile User Database</h4>
                            <p>The mobile number database, very useful in the promotion or marketing of the products and are offered by the database providers.</p>
                        </div>
                    </div>
                    <div class="card">
                        <img class="card-image" src="images/services-icon-3.svg" alt="alternative">
                        <div class="card-body">
                            <h4 class="card-title">Digital Wallet Database</h4>
                            <p>The Digital movement in India is in complete flow and it’s making our lives better and easier. Digital Wallets are helping us in our inquisition to become a cashless economy system</p>
                        </div>
                    </div>
                </div>
                <!-- end of col -->
            </div>
            <!-- end of row -->
        </div>
        <!-- end of container -->
    </div>
    <!-- end of cards-1 -->
    <!-- end of services -->


    <!-- Details 1 -->
    <div class="basic-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="text-container">
                        <h2>How our database is Unique?</h2>
                        <p> Access to millions of database based on income, geographical location, category, sector, etc…</p>
                        <p> We do have Contact info like Legal Business Name, Top Decision Makers Name, Designation, Email ID's, Mobile numbers and Landlines, etc…</p>
                        <p> Social Media links which help you to direct the companies Social Profile.</p>
                        <p> We do offer RPC (Right Party Contact) which can help you to reach your prospects quickly.</p>
                        <p> Leveraging latest marketing tactics backed by a precise database</p>
                        <a class="btn-solid-reg popup-with-move-anim" href="#details-lightbox-1">Know More</a>
                    </div>
                    <!-- end of text-container -->
                </div>
                <!-- end of col -->
                <div class="col-lg-6">
                    <div class="image-container">
                        <img class="img-fluid" src="images/details-1-office-worker.svg" alt="alternative">
                    </div>
                    <!-- end of image-container -->
                </div>
                <!-- end of col -->
            </div>
            <!-- end of row -->
        </div>
        <!-- end of container -->
    </div>
    <!-- end of basic-1 -->
    <!-- end of details 1 -->


    <!-- Details 2 -->
    <div class="basic-2">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="image-container">
                        <img class="img-fluid" src="images/details-2-office-team-work.svg" alt="alternative">
                    </div>
                    <!-- end of image-container -->
                </div>
                <!-- end of col -->
                <div class="col-lg-6">
                    <div class="text-container">
                        <h2>Our Features</h2>
                        <ul class="list-unstyled li-space-lg">
                            <li class="media">
                                <i class="fas fa-check"></i>
                                <div class="media-body">High-quality Marketing leads and Databases of Indian Business</div>
                            </li>
                            <li class="media">
                                <i class="fas fa-check"></i>
                                <div class="media-body">Get Sales Professionals contact information before you make a phone call.</div>
                            </li>
                            <li class="media">
                                <i class="fas fa-check"></i>
                                <div class="media-body">Access Professionals Database for Businesss</div>
                            </li>
                        </ul>
                        <a class="btn-solid-reg popup-with-move-anim" href="#details-lightbox-2">Know More</a>
                    </div>
                    <!-- end of text-container -->
                </div>
                <!-- end of col -->
            </div>
            <!-- end of row -->
        </div>
        <!-- end of container -->
    </div>
    <!-- end of basic-2 -->
    <!-- end of details 2 -->

    <!-- Details Lightboxes -->
    <!-- Details Lightbox 1 -->
    <div id="details-lightbox-1" class="lightbox-basic zoom-anim-dialog mfp-hide">
        <div class="container">
            <div class="row">
                <button title="Close (Esc)" type="button" class="mfp-close x-button">×</button>
                <div class="col-lg-8">
                    <div class="image-container">
                        <img class="img-fluid" src="images/details-lightbox-1.svg" alt="alternative">
                    </div>
                    <!-- end of image-container -->
                </div>
                <!-- end of col -->
                <div class="col-lg-4">
                    <h3>Know More</h3>
                    <hr>
                    <h5>Core feature</h5>
                    <p>Ebase is a managed relational database service that provides you six familiar database engines to choose from, including Amazon Aurora, MySQL, MariaDB, Oracle, Microsoft SQL Server, and PostgreSQL. This means that the code, applications,
                        and tools you already use today with your existing databases can be used with Amazon RDS. Amazon RDS handles routine database tasks such as provisioning, patching, backup, recovery, failure detection, and repair. Ebase RDS makes
                        it easy to use replication to enhance availability and reliability for production workloads. Using the Multi-AZ deployment option, you can run mission-critical workloads with high availability and built-in automated fail-over from
                        your primary database to a synchronously replicated secondary database. Using Read Replicas, you can scale out beyond the capacity of a single database deployment for read-heavy database workloads.</p>
                    <ul class="list-unstyled li-space-lg">
                        <li class="media">
                            <i class="fas fa-check"></i>
                            <div class="media-body">All Indian database</div>
                        </li>
                        <li class="media">
                            <i class="fas fa-check"></i>
                            <div class="media-body">Easy database browsing</div>
                        </li>
                        <li class="media">
                            <i class="fas fa-check"></i>
                            <div class="media-body">Different facilities</div>
                        </li>
                        <li class="media">
                            <i class="fas fa-check"></i>
                            <div class="media-body">Automate user signup</div>
                        </li>
                        <li class="media">
                            <i class="fas fa-check"></i>
                            <div class="media-body">Quick formatting tools</div>
                        </li>
                        <li class="media">
                            <i class="fas fa-check"></i>
                            <div class="media-body">Fast email checking</div>
                        </li>
                    </ul>
                    <a class="btn-solid-reg mfp-close page-scroll" href="#request">REQUEST</a> <a class="btn-outline-reg mfp-close as-button" href="#screenshots">BACK</a>
                </div>
                <!-- end of col -->
            </div>
            <!-- end of row -->
        </div>
        <!-- end of container -->
    </div>
    <!-- end of lightbox-basic -->
    <!-- end of details lightbox 1 -->

    <!-- Details Lightbox 2 -->
    <div id="details-lightbox-2" class="lightbox-basic zoom-anim-dialog mfp-hide">
        <div class="container">
            <div class="row">
                <button title="Close (Esc)" type="button" class="mfp-close x-button">×</button>
                <div class="col-lg-8">
                    <div class="image-container">
                        <img class="img-fluid" src="images/details-lightbox-2.svg" alt="alternative">
                    </div>
                    <!-- end of image-container -->
                </div>
                <!-- end of col -->
                <div class="col-lg-4">
                    <h3>Know More</h3>
                    <hr>
                    <h5>Core feature</h5>
                    <p>Ebase is a managed relational database service that provides you six familiar database engines to choose from, including Amazon Aurora, MySQL, MariaDB, Oracle, Microsoft SQL Server, and PostgreSQL. This means that the code, applications,
                        and tools you already use today with your existing databases can be used with Amazon RDS. Amazon RDS handles routine database tasks such as provisioning, patching, backup, recovery, failure detection, and repair. Ebase RDS makes
                        it easy to use replication to enhance availability and reliability for production workloads. Using the Multi-AZ deployment option, you can run mission-critical workloads with high availability and built-in automated fail-over from
                        your primary database to a synchronously replicated secondary database. Using Read Replicas, you can scale out beyond the capacity of a single database deployment for read-heavy database workloads.</p>
                    <ul class="list-unstyled li-space-lg">
                        <li class="media">
                            <i class="fas fa-check"></i>
                            <div class="media-body">List building framework</div>
                        </li>
                        <li class="media">
                            <i class="fas fa-check"></i>
                            <div class="media-body">Easy database browsing</div>
                        </li>
                        <li class="media">
                            <i class="fas fa-check"></i>
                            <div class="media-body">User administration</div>
                        </li>
                        <li class="media">
                            <i class="fas fa-check"></i>
                            <div class="media-body">Automate user signup</div>
                        </li>
                        <li class="media">
                            <i class="fas fa-check"></i>
                            <div class="media-body">Quick formatting tools</div>
                        </li>
                        <li class="media">
                            <i class="fas fa-check"></i>
                            <div class="media-body">Fast email checking</div>
                        </li>
                    </ul>
                    <a class="btn-solid-reg mfp-close page-scroll" href="#request">REQUEST</a> <a class="btn-outline-reg mfp-close as-button" href="#screenshots">BACK</a>
                </div>
                <!-- end of col -->
            </div>
            <!-- end of row -->
        </div>
        <!-- end of container -->
    </div>
    <!-- end of lightbox-basic -->
    <!-- end of details lightbox 2 -->
    <!-- end of details lightboxes -->


    <!-- Pricing -->
    <div id="pricing" class="cards-2">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Multiple Pricing Options</h2>
                    <p class="p-heading p-large">We've prepared pricing plans for all budgets so you can get started right away. They're great for small companies and large organizations</p>
                </div>
                <!-- end of col -->
            </div>
            <!-- end of row -->
            <div class="row">
                <div class="col-lg-12">

                    <!-- Card-->
                    <div class="card">
                        <div class="card-body">
                            <div class="card-title">STARTER</div>
                            <div class="card-subtitle">Just to see what can be achieved</div>
                            <hr class="cell-divide-hr">
                            <div class="price">
                                <span class="currency">Rs</span><span class="value">199</span>
                                <div class="frequency">monthly</div>
                            </div>
                            <hr class="cell-divide-hr">
                            <ul class="list-unstyled li-space-lg">
                                <li class="media">
                                    <i class="fas fa-check"></i>
                                    <div class="media-body">Improve Your Email Marketing</div>
                                </li>
                                <li class="media">
                                    <i class="fas fa-check"></i>
                                    <div class="media-body">User And Admin Rights Control</div>
                                </li>
                                <li class="media">
                                    <i class="fas fa-times"></i>
                                    <div class="media-body">List Building And Cleaning</div>
                                </li>
                                <li class="media">
                                    <i class="fas fa-times"></i>
                                    <div class="media-body">Collected Data Management</div>
                                </li>
                                <li class="media">
                                    <i class="fas fa-times"></i>
                                    <div class="media-body">More Planning And Evaluation</div>
                                </li>
                            </ul>
                            <div class="button-wrapper">
                                <a class="btn-solid-reg page-scroll" data-bs-toggle="modal" data-bs-target="#startersignupmodal" style="color:black;">REQUEST</a>
                            </div>
                        </div>
                    </div>
                    <!-- end of card -->
                    <!-- end of card -->

                    <!-- Card-->
                    <div class="card">
                        <div class="card-body">
                            <div class="card-title">MEDIUM</div>
                            <div class="card-subtitle">Very appropriate for the short term</div>
                            <hr class="cell-divide-hr">
                            <div class="price">
                                <span class="currency">Rs</span><span class="value">299</span>
                                <div class="frequency">monthly</div>
                            </div>
                            <hr class="cell-divide-hr">
                            <ul class="list-unstyled li-space-lg">
                                <li class="media">
                                    <i class="fas fa-check"></i>
                                    <div class="media-body">Improve Your Email Marketing</div>
                                </li>
                                <li class="media">
                                    <i class="fas fa-check"></i>
                                    <div class="media-body">User And Admin Rights Control</div>
                                </li>
                                <li class="media">
                                    <i class="fas fa-check"></i>
                                    <div class="media-body">List Building And Cleaning</div>
                                </li>
                                <li class="media">
                                    <i class="fas fa-check"></i>
                                    <div class="media-body">Collected Data Management</div>
                                </li>
                                <li class="media">
                                    <i class="fas fa-times"></i>
                                    <div class="media-body">More Planning And Evaluation</div>
                                </li>
                            </ul>
                            <div class="button-wrapper">
                                <a class="btn-solid-reg page-scroll" data-bs-toggle="modal" data-bs-target="#mediumsignupmodal" style="color:black;" >REQUEST</a>
                            </div>
                        </div>
                    </div>
                    <!-- end of card -->
                    <!-- end of card -->

                    <!-- Card-->
                    <div class="card">
                        <div class="label">
                            <p class="best-value">Best Value</p>
                        </div>
                        <div class="card-body">
                            <div class="card-title">COMPLETE</div>
                            <div class="card-subtitle">Must have for large companies</div>
                            <hr class="cell-divide-hr">
                            <div class="price">
                                <span class="currency">Rs</span><span class="value">399</span>
                                <div class="frequency">monthly</div>
                            </div>
                            <hr class="cell-divide-hr">
                            <ul class="list-unstyled li-space-lg">
                                <li class="media">
                                    <i class="fas fa-check"></i>
                                    <div class="media-body">Improve Your Email Marketing</div>
                                </li>
                                <li class="media">
                                    <i class="fas fa-check"></i>
                                    <div class="media-body">User And Admin Rights Control</div>
                                </li>
                                <li class="media">
                                    <i class="fas fa-check"></i>
                                    <div class="media-body">List Building And Cleaning</div>
                                </li>
                                <li class="media">
                                    <i class="fas fa-check"></i>
                                    <div class="media-body">Collected Data Management</div>
                                </li>
                                <li class="media">
                                    <i class="fas fa-check"></i>
                                    <div class="media-body">More Planning And Evaluation</div>
                                </li>
                            </ul>
                            <div class="button-wrapper">
                                <a class="btn-solid-reg page-scroll" data-bs-toggle="modal" data-bs-target="#completesignupmodal" style="color:black;">REQUEST</a>
                            </div>
                        </div>
                    </div>
                    <!-- end of card -->
                    <!-- end of card -->

                </div>
                <!-- end of col -->
            </div>
            <!-- end of row -->
        </div>
        <!-- end of container -->
    </div>
    <!-- end of cards-2 -->
    <!-- end of pricing -->


    <!-- Request -->
    <div id="request" class="form-1 center">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="text-container">
                        <h2>Fill The Following Form To Request A Meeting</h2>
                        <p>The Ebase is one of the easiest and feature database providing company in the market. Discover what it can do for your business organization right away.</p>
                        <ul class="list-unstyled li-space-lg">
                            <li class="media">
                                <i class="fas fa-check"></i>
                                <div class="media-body"><strong class="blue">Automate your Ebase acc</strong> activities and get results today</div>
                            </li>
                            <li class="media">
                                <i class="fas fa-check"></i>
                                <div class="media-body"><strong class="blue">Interact with all your</strong> targeted customers at a personal level</div>
                            </li>
                            <li class="media">
                                <i class="fas fa-check"></i>
                                <div class="media-body"><strong class="blue">Convince them to buy</strong> your company's awesome products</div>
                            </li>
                            <li class="media">
                                <i class="fas fa-check"></i>
                                <div class="media-body"><strong class="blue">Save precious time</strong> and invest it where you need it the most</div>
                            </li>
                        </ul>
                    </div>
                    <div class="form-group my-5">
                                <button type="submit" class="form-control-submit-button" data-bs-toggle="modal" data-bs-target="#signupmodal">REQUEST</button>
                            </div>
                    <!-- end of text-container -->
                </div>
                <!-- end of col -->
                <!-- <div class="col-lg-6 mb-5"> -->

                    <!-- Request Form -->
                    <!-- <div class="form-container">
                        <form id="requestForm" data-toggle="validator" data-focus="false">
                            <div class="form-group">
                                <input type="text" class="form-control-input" id="rname" name="rname" required>
                                <label class="label-control" for="rname">Full name</label>
                                <div class="help-block with-errors"></div>
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control-input" id="remail" name="remail" required>
                                <label class="label-control" for="remail">Email</label>
                                <div class="help-block with-errors"></div>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control-input" id="rphone" name="rphone" required>
                                <label class="label-control" for="rphone">Phone</label>
                                <div class="help-block with-errors"></div>
                            </div>
                            <div class="form-group">
                                <select class="form-control-select" id="rselect" required>
                                    <option class="select-option" value="" disabled selected>Interested in...</option>
                                    <option class="select-option" value="Personal Loan">Starter</option>
                                    <option class="select-option" value="Car Loan">Medium</option>
                                    <option class="select-option" value="House Loan">Complete</option>
                                </select>
                                <div class="help-block with-errors"></div>
                            </div>
                            <div class="form-group checkbox">
                                <input type="checkbox" id="rterms" value="Agreed-to-Terms" name="rterms" required>I agree with EBase's stated <a href="privacy-policy.html">Privacy Policy</a> and <a href="terms-conditions.html">Terms & Conditions</a>
                                <div class="help-block with-errors"></div>
                            </div> -->
                            

                        <!-- </form>
                    </div> -->
                    <!-- end of form-container -->
                    <!-- end of request form -->
                    <div class="col-lg-6">
                    <div class="image-container">
                        <img class="img-fluid" src="images/details-2-office-team-work.svg" alt="alternative">
                    </div>
                    <!-- end of image-container -->
                </div>
                </div>
                <!-- end of col -->
            </div>
            <!-- end of row -->
        </div>
        <!-- end of container -->
    </div>
    <!-- end of form-1 -->
    <!-- end of request -->



    <!-- Testimonials -->
    <div class="slider-2">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="image-container">
                        <img class="img-fluid" src="images/testimonials-2-men-talking.svg" alt="alternative">
                    </div>
                    <!-- end of image-container -->
                </div>
                <!-- end of col -->
                <div class="col-lg-6">
                    <h2>Testimonials</h2>

                    <!-- Card Slider -->
                    <div class="slider-container">
                        <div class="swiper-container card-slider">
                            <div class="swiper-wrapper">

                                <!-- Slide -->
                                <div class="swiper-slide">
                                    <div class="card">
                                        <img class="card-image" src="images/testimonial-3.svg" alt="alternative">
                                        <div class="card-body">
                                            <p class="testimonial-text">I am Really satisfied with your database ass you provided me very acurate details, keep it up.</p>
                                            <p class="testimonial-author">nikhil Marathe - Designer</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- end of swiper-slide -->
                                <!-- end of slide -->

                                <!-- Slide -->
                                <div class="swiper-slide">
                                    <div class="card">
                                        <img class="card-image" src="images/testimonial-2.svg" alt="alternative">
                                        <div class="card-body">
                                            <p class="testimonial-text">Other Companies are not providing the data like your, as you are providing the filtered data that is why I tested it, will buy again , thank you....</p>
                                            <p class="testimonial-author">Emma - Developer</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- end of swiper-slide -->
                                <!-- end of slide -->

                                <!-- Slide -->
                                <div class="swiper-slide">
                                    <div class="card">
                                        <img class="card-image" src="images/testimonial-3.svg" alt="alternative">
                                        <div class="card-body">
                                            <p class="testimonial-text">Love their services and was so amazed with the support and results that I purchased Evolo for two years in a row. They are awesome.</p>
                                            <p class="testimonial-author">Roy Smith - Marketer</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- end of swiper-slide -->
                                <!-- end of slide -->
                                <div class="swiper-slide">
                                    <div class="card">
                                        <img class="card-image" src="images/testimonial-3.svg" alt="alternative">
                                        <div class="card-body">
                                            <p class="testimonial-text">Filtered database was the important requirement by me and you had provided it, other companies denied it...</p>
                                            <p class="testimonial-author">Jolly- Marketer</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- end of swiper-slide -->
                                <!-- end of slide -->

                            </div>
                            <!-- end of swiper-wrapper -->

                            <!-- Add Arrows -->
                            <div class="swiper-button-next"></div>
                            <div class="swiper-button-prev"></div>
                            <!-- end of add arrows -->

                        </div>
                        <!-- end of swiper-container -->
                    </div>
                    <!-- end of slider-container -->
                    <!-- end of card slider -->

                </div>
                <!-- end of col -->
            </div>
            <!-- end of row -->
        </div>
        <!-- end of container -->
    </div>
    <!-- end of slider-2 -->
    <!-- end of testimonials -->


    <!-- About -->
    <div id="about" class="basic-4">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>About The Team</h2>
                    <p class="p-heading p-large">Meat our team of specialized marketers and business developers which will help you research new products and launch them in new emerging markets using Database</p>
                </div>
                <!-- end of col -->
            </div>
            <!-- end of row -->
            <div class="row">
                <div class="col-lg-12">

                    <!-- Team Member -->
                    <div class="team-member">
                        <div class="image-wrapper">
                            <img class="img-fluid" src="images/men1.webp" alt="alternative">
                        </div>
                        <!-- end of image-wrapper -->
                        <p class="p-large"><strong>Lacy Whitelong</strong></p>
                        <p class="job-title">Business Developer</p>
                        <span class="social-icons">
                            <span class="fa-stack">
                                <a href="#your-link">
                                    <i class="fas fa-circle fa-stack-2x facebook"></i>
                                    <i class="fab fa-facebook-f fa-stack-1x"></i>
                                </a>
                            </span>
                        <span class="fa-stack">
                                <a href="#your-link">
                                    <i class="fas fa-circle fa-stack-2x twitter"></i>
                                    <i class="fab fa-twitter fa-stack-1x"></i>
                                </a>
                            </span>
                        </span>
                        <!-- end of social-icons -->
                    </div>
                    <!-- end of team-member -->
                    <!-- end of team member -->

                    <!-- Team Member -->
                    <div class="team-member">
                        <div class="image-wrapper">
                            <img class="img-fluid" src="images/team-member-2.svg" alt="alternative">
                        </div>
                        <!-- end of image wrapper -->
                        <p class="p-large"><strong>Chris Brown</strong></p>
                        <p class="job-title">Online Marketer</p>
                        <span class="social-icons">
                            <span class="fa-stack">
                                <a href="#your-link">
                                    <i class="fas fa-circle fa-stack-2x facebook"></i>
                                    <i class="fab fa-facebook-f fa-stack-1x"></i>
                                </a>
                            </span>
                        <span class="fa-stack">
                                <a href="#your-link">
                                    <i class="fas fa-circle fa-stack-2x twitter"></i>
                                    <i class="fab fa-twitter fa-stack-1x"></i>
                                </a>
                            </span>
                        </span>
                        <!-- end of social-icons -->
                    </div>
                    <!-- end of team-member -->
                    <!-- end of team member -->

                    <!-- Team Member -->
                    <div class="team-member">
                        <div class="image-wrapper">
                            <img class="img-fluid" src="images/team-member-3.svg" alt="alternative">
                        </div>
                        <!-- end of image wrapper -->
                        <p class="p-large"><strong>Sheila Zimerman</strong></p>
                        <p class="job-title">Software Engineer</p>
                        <span class="social-icons">
                            <span class="fa-stack">
                                <a href="#your-link">
                                    <i class="fas fa-circle fa-stack-2x facebook"></i>
                                    <i class="fab fa-facebook-f fa-stack-1x"></i>
                                </a>
                            </span>
                        <span class="fa-stack">
                                <a href="#your-link">
                                    <i class="fas fa-circle fa-stack-2x twitter"></i>
                                    <i class="fab fa-twitter fa-stack-1x"></i>
                                </a>
                            </span>
                        </span>
                        <!-- end of social-icons -->
                    </div>
                    <!-- end of team-member -->
                    <!-- end of team member -->

                    <!-- Team Member -->
                    <div class="team-member">
                        <div class="image-wrapper">
                            <img class="img-fluid" src="images/team-member-4.svg" alt="alternative">
                        </div>
                        <!-- end of image wrapper -->
                        <p class="p-large"><strong>Mary Villalonga</strong></p>
                        <p class="job-title">Product Manager</p>
                        <span class="social-icons">
                            <span class="fa-stack">
                                <a href="#your-link">
                                    <i class="fas fa-circle fa-stack-2x facebook"></i>
                                    <i class="fab fa-facebook-f fa-stack-1x"></i>
                                </a>
                            </span>
                        <span class="fa-stack">
                                <a href="#your-link">
                                    <i class="fas fa-circle fa-stack-2x twitter"></i>
                                    <i class="fab fa-twitter fa-stack-1x"></i>
                                </a>
                            </span>
                        </span>
                        <!-- end of social-icons -->
                    </div>
                    <!-- end of team-member -->
                    <!-- end of team member -->

                </div>
                <!-- end of col -->
            </div>
            <!-- end of row -->
        </div>
        <!-- end of container -->
    </div>
    <!-- end of basic-4 -->
    <!-- end of about -->


    <!-- Contact -->
    <div id="contact" class="form-2">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Contact Information</h2>
                    <ul class="list-unstyled li-space-lg">
                        <li class="address">Don't hesitate to give us a call or send us a contact form message</li>
                        <li><i class="fas fa-map-marker-alt"></i>The Ebase Dehu Phata, Alandi(D), Pune</li>
                        <li><i class="fas fa-phone"></i><a class="turquoise" href="tel:003024630820">+91987654321</a></li>
                        <li><i class="fas fa-envelope"></i><a class="turquoise" href="mailto:office@evolo.com">0fficeTheEbase@gmail.com</a></li>
                    </ul>
                </div>
                <!-- end of col -->
            </div>
            <!-- end of row -->
            <div class="row">
                <div class="col-lg-6">
                    <div class="map-responsive">
                        <iframe src="images/pune.png" allowfullscreen></iframe>
                    </div>
                </div>
                <!-- end of col -->
                <div class="col-lg-6">

                    <!-- Contact Form -->
                    <?php

                        require "contact.php";

                        ?>
                    
                    <!-- end of contact form -->

                </div>
                <!-- end of col -->
            </div>
            <!-- end of row -->
        </div>
        <!-- end of container -->
    </div>
    <!-- end of form-2 -->
    <!-- end of contact -->


    <!-- Footer -->
    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="footer-col">
                        <h4>About The EBase</h4>
                        <p>Our database provider solution is high quality for many business and telemarketing activities.</p>
                    </div>
                </div>
                <!-- end of col -->
                <div class="col-md-4">
                    <div class="footer-col middle">
                        <h4>Important Links</h4>
                        <ul class="list-unstyled li-space-lg">
                            <li class="media">
                                <i class="fas fa-square"></i>
                                <div class="media-body">Our business partners <a class="turquoise" href="#your-link">nikhil@gmail.com</a></div>
                            </li>
                            <li class="media">
                                <i class="fas fa-square"></i>
                                <div class="media-body">Read our <a class="turquoise" href="terms-conditions.html">Terms & Conditions</a>, <a class="turquoise" href="privacy-policy.html">Privacy Policy</a></div>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- end of col -->
                <div class="col-md-4">
                    <div class="footer-col last">
                        <h4>Social Media</h4>
                        <span class="fa-stack">
                            <a href="https://www.facebook.com/">
                                <i class="fas fa-circle fa-stack-2x"></i>
                                <i class="fab fa-facebook-f fa-stack-1x"></i>
                            </a>
                        </span>
                        <span class="fa-stack">
                            <a href="https://www.twitter.com/">
                                <i class="fas fa-circle fa-stack-2x"></i>
                                <i class="fab fa-twitter fa-stack-1x"></i>
                            </a>
                        </span>
                        <span class="fa-stack">
                            <a href="https://www.google.com/">
                                <i class="fas fa-circle fa-stack-2x"></i>
                                <i class="fab fa-google-plus-g fa-stack-1x"></i>
                            </a>
                        </span>
                        <span class="fa-stack">
                            <a href="https://www.instagram.com/accounts/login/">
                                <i class="fas fa-circle fa-stack-2x"></i>
                                <i class="fab fa-instagram fa-stack-1x"></i>
                            </a>
                        </span>
                        <span class="fa-stack">
                            <a href="https://www.linkedin.com/">
                                <i class="fas fa-circle fa-stack-2x"></i>
                                <i class="fab fa-linkedin-in fa-stack-1x"></i>
                            </a>
                        </span>
                    </div>
                </div>
                <!-- end of col -->
            </div>
            <!-- end of row -->
        </div>
        <!-- end of container -->
    </div>
    <!-- end of footer -->
    <!-- end of footer -->


    <!-- Copyright -->
    <div class="copyright">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <p class="p-small">Copyright © 2020 The Ebase - All rights reserved</p>
                </div>
                <!-- end of col -->
            </div>
            <!-- enf of row -->
        </div>
        <!-- end of container -->
    </div>
    <!-- end of copyright -->
    <!-- end of copyright -->

 <!-- Scripts -->
 <script src="js/jquery.min.js"></script>
    <!-- jQuery for Bootstrap's JavaScript plugins -->
    <script src="js/popper.min.js"></script>
    <!-- Popper tooltip library for Bootstrap -->
    <script src="js/bootstrap.min.js"></script>
    <!-- Bootstrap framework -->
    <script src="js/jquery.easing.min.js"></script>
    <!-- jQuery Easing for smooth scrolling between anchors -->
    <script src="js/swiper.min.js"></script>
    <!-- Swiper for image and text sliders -->
    <script src="js/jquery.magnific-popup.js"></script>
    <!-- Magnific Popup for lightboxes -->
    <script src="js/validator.min.js"></script>
    <!-- Validator.js - Bootstrap plugin that validates forms -->
    <script src="js/scripts.js"></script>

    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
    <!-- Custom scripts -->
     <!-- Option 1: Bootstrap Bundle with Popper -->
     <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>


<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script> -->

</body>

</html>