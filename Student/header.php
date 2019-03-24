<?php
session_start();
include "../lib/dao.php";
include "../lib/model.php";

$d = new dao();
$m = new model();
if ($_SESSION["Role"]!="Student" || !isset($_SESSION["email"]))
{

    echo "<meta http-equiv=\"refresh\" content=\"0; url=http://localhost/schoolAdmission/index.php\">";

}
//if (!isset($_SESSION["email"]))
//{
//   echo "<meta http-equiv=\"refresh\" content=\"0; url=http://localhost/paypark/index.php\">";
//}
?>
<!-- === BEGIN HEADER === -->
<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
<head>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no"/>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8"/>


    <!-- Title -->
    <title>Welcome to School Admission</title>
    <!-- Meta -->
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <!-- Favicon -->
    <link href="../assets/img/p_blue.ico" rel="shortcut icon">
    <!-- table css -->



    <!--        <link href="1/sample in bootstrap v2/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
            <link href="1/css/bootstrap-datetimepicker.min.css" rel="stylesheet" media="screen"> -->

    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="../assets/css/bootstrap.css" rel="stylesheet">
    <!-- Template CSS -->
    <link rel="stylesheet" href="../assets/css/animate.css" rel="stylesheet">
    <link rel="stylesheet" href="../assets/css/font-awesome.css" rel="stylesheet">
    <link rel="stylesheet" href="../assets/css/nexus.css" rel="stylesheet">
    <link rel="stylesheet" href="../assets/css/responsive.css" rel="stylesheet">
    <link rel="stylesheet" href="../assets/css/custom.css" rel="stylesheet">
    <!-- Google Fonts-->
    <link href="http://fonts.googleapis.com/css?family=Roboto+Condensed:400,300" rel="stylesheet" type="text/css">







</head>
<body">

<div id="body-bg">
    <!-- Phone/Email -->


    <div id="pre-header" class="background-gray-lighter">
        <div class="container no-padding">
            <div class="row hidden-xs">
                <div class="col-sm-6 padding-vert-5">
                    <strong>Customer Care:</strong>&nbsp;7041791111
                </div>
                <div class="col-sm-6 text-right padding-vert-5">
                    <strong><?php
                        if (session_status() == PHP_SESSION_NONE) {
                            session_start();
                        }
                        if( isset( $_SESSION['email'] ) )
                        {
                            $name = $_SESSION["name"];
                            echo "Welcome &nbsp". $name. " "."";
                            // if(is_null($_SESSION['tcity']))
                            //{
                            //  $city="Anand";
                            //echo $city;
                            //}
//                                echo $_SESSION['tcity'];

                        }

                        ?>
                </div>
            </div>
        </div>
    </div>
    <!-- End Phone/Email -->
    <!-- Header -->
    <div id="header">
        <div class="container">
            <div class="row">
                <!-- Logo -->
                <div class="logo">
                    <a href="index.html" title="">
                        <img src="../assets/img/typo/logo3.png" alt="Logo" />
                    </a>
                </div>
                <!-- End Logo -->
            </div>
        </div>
    </div>
    <!-- End Header -->
    <!-- Top Menu -->
    <div id="hornav" class="bottom-border-shadow">
        <div class="container no-padding border-bottom">
            <div class="row">
                <div class="col-md-8 no-padding">
                    <div class="visible-lg">
                        <ul id="hornavmenu" class="nav navbar-nav">
                            <li>
                                <a href="Index.php" class="fa-home active">Home</a>
                            </li>
                            <li>

                                <a id="applicationHistory" href="ApplicationHistory.php" class="fa-apple" >
                                    Application History
                                </a>
                            </li>
                            <li>

                                <a  href="EditInfo.php?UserId=<?php echo $_SESSION["uid"] ?>" class="fa-apple" >
                                    Edit Profile
                                </a>
                            </li>
                            <li>
                                <a href="../process-log-out.php" class="fa-comment ">Logout</a>
                            </li>

                        </ul>
                    </div>
                </div>
                <div class="col-md-4 no-padding">
                    <ul class="social-icons pull-right">
                        <li class="social-rss">
                            <a href="#" target="_blank" title="RSS"></a>
                        </li>
                        <li class="social-twitter">
                            <a href="#" target="_blank" title="Twitter"></a>
                        </li>
                        <li class="social-facebook">
                            <a href="#" target="_blank" title="Facebook"></a>
                        </li>
                        <li class="social-googleplus">
                            <a href="#" target="_blank" title="Google+"></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End Top Menu -->

    <!-- === END HEADER === -->
</div>


<!-- === BEGIN CONTENT === -->
<div id="content">
    <div class="container background-white">
        <div class="row margin-vert-40">
            <!-- Begin Sidebar Menu -->
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-12">
                        <div class="carousel slide testimonials" id="testimonials1">
                            <!-- Portfolio Item -->
                            <!-- Filter Buttons -->
                            <?php /*



                <div class="col-md-12 portfolio-group no-padding">
                <!-- Portfolio Item -->
                <div class="col-md-4 portfolio-item margin-bottom-40 video">
                    <div>
                        <a href="#">
                            <figure>
                                <img src="assets/img/portfolio/image1.jpg" alt="image1">
                                <figcaption>
                                    <h3 class="margin-top-20">Velit esse molestie</h3>
                                    <span>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</span>
                                </figcaption>
                            </figure>
                        </a>
                    </div>
                </div>
                <!-- End Portfolio Item -->

                <!-- Portfolio Item -->

                <div class="col-md-4 portfolio-item margin-bottom-40 design">
                    <div>
                        <a href="#">
                            <figure>
                                <img src="assets/img/portfolio/image2.jpg" alt="image2">
                                <figcaption>
                                    <h3 class="margin-top-20">Quam nunc putamus</h3>
                                    <span>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</span>
                                </figcaption>
                            </figure>
                        </a>
                    </div>
                </div>
                <!-- End Portfolio Item -->
                <!-- Portfolio Item -->
                <div class="col-md-4 portfolio-item margin-bottom-40 audio">
                    <div>
                        <a href="#">
                            <figure>
                                <img src="assets/img/portfolio/image3.jpg" alt="image3">
                                <figcaption>
                                    <h3 class="margin-top-20">Placerat facer possim</h3>
                                    <span>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</span>
                                </figcaption>
                            </figure>
                        </a>
                    </div>
                </div>
                <!-- End Portfolio Item -->
                <div class="col-md-9">
                    <div class="row">
                    <!-- Portfolio Item -->
              //  <div class="col-md-5 portfolio-item margin-bottom-40 design">
                    <div>
                        <a href="#">
                            <figure>
                                <img src="assets/img/portfolio/image4.jpg" alt="image4">
                                <figcaption>
                                    <h3 class="margin-top-20">Nam liber tempor</h3>
                                    <span>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</span>
                                </figcaption>
                            </figure>
                        </a>
                    </div>
                </div>
                <!-- End Portfolio Item -->
                <!-- Portfolio Item -->
                <div class="col-md-5 portfolio-item margin-bottom-40 design">
                    <div>
                        <a href="#">
                            <figure>
                                <img src="assets/img/portfolio/image5.jpg" alt="image5">
                                <figcaption>
                                    <h3 class="margin-top-20">Donec non urna</h3>
                                    <span>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</span>
                                </figcaption>
                            </figure>
                        </a>
                    </div>
                </div>
                <!-- End Portfolio Item -->
                <!-- Portfolio Item -->
                <div class="col-md-5 portfolio-item margin-bottom-40 code">
                    <div>
                        <a href="#">
                            <figure>
                                <img src="assets/img/portfolio/image6.jpg" alt="image6">
                                <figcaption>
                                    <h3 class="margin-top-20">Nullam consectetur</h3>
                                    <span>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</span>
                                </figcaption>
                            </figure>
                        </a>
                    </div>
                </div>
                <!-- End Portfolio Item -->
                <!-- Portfolio Item -->
                <div class="col-md-5 portfolio-item margin-bottom-40 design">
                    <div>
                        <a href="#">
                            <figure>
                                <img src="assets/img/portfolio/image7.jpg" alt="image7">
                                <figcaption>
                                    <h3 class="margin-top-20">Velit esse molestie</h3>
                                    <span>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</span>
                                </figcaption>
                            </figure>
                        </a>
                    </div>
                </div>
                <!-- End Portfolio Item -->
                <!-- Portfolio Item -->
                <div class="col-md-5 portfolio-item margin-bottom-40 code">
                    <div>
                        <a href="#">
                            <figure>
                                <img src="assets/img/portfolio/image8.jpg" alt="image8">
                                <figcaption>
                                    <h3 class="margin-top-20">Quam nunc putamus</h3>
                                    <span>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</span>
                                </figcaption>
                            </figure>
                        </a>
                    </div>
                </div>
                <!-- End Portfolio Item -->
                <!-- Portfolio Item -->
                <div class="col-md-5 portfolio-item margin-bottom-40 video">
                    <div>
                        <a href="#">
                            <figure>
                                <img src="assets/img/portfolio/image9.jpg" alt="image9">
                                <figcaption>
                                    <h3 class="margin-top-20">Placerat facer possim</h3>
                                    <span>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</span>
                                </figcaption>
                            </figure>
                        </a>
                    </div>
                </div>
                <!-- End Portfolio Item -->
            </div>
        </div>
    </div>
    </div>


*/ ?>
