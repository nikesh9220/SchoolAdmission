
<?php
/**
 * Created by PhpStorm.
 * User: Si
 * Date: 2/13/2018
 * Time: 11:18 AM
 */
include "header.php"?>
<!-- === BEGIN CONTENT === -->
<div id="slideshow" class="bottom-border-shadow">
    <div class="container no-padding background-white bottom-border">
        <div class="row">
            <!-- Carousel Slideshow -->
            <div id="carousel-example" class="carousel slide" data-ride="carousel">
                <!-- Carousel Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#carousel-example" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-example" data-slide-to="1"></li>
                    <li data-target="#carousel-example" data-slide-to="2"></li>
                    <li data-target="#carousel-example" data-slide-to="3"></li>
                    <li data-target="#carousel-example" data-slide-to="4"></li>
                </ol>
                <div class="clearfix"></div>
                <!-- End Carousel Indicators -->
                <!-- Carousel Images -->
                <div class="carousel-inner">
                    <div class="item active">
                        <img src="assets/img/slideshow/1.jpeg">
                    </div>
                    <div class="item">
                        <img src="assets/img/slideshow/2.jpeg">
                    </div>
                    <div class="item">
                        <img src="assets/img/slideshow/3.jpg">
                    </div>
                    <div class="item">
                        <img src="assets/img/slideshow/4.jpg">
                    </div>
                    <div class="item">
                        <img src="assets/img/slideshow/5.JPG">
                    </div>
                </div>
                <!-- End Carousel Images -->
                <!-- Carousel Controls -->
                <a class="left carousel-control" href="#carousel-example" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left"></span>
                </a>
                <a class="right carousel-control" href="#carousel-example" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right"></span>
                </a>
                <!-- End Carousel Controls -->
            </div>
            <!-- End Carousel Slideshow -->
            <div id="content" class="bottom-border-shadow">
                <div class="container background-white bottom-border">
                    <div class="row margin-vert-30">
                        <!-- Main Text -->
                        <div class="col-md-6">
                            <h2>Welcome to OES</h2>
                            <p>The Ontario Education Services Corporation (OESC). OESC offers suite of services to many Ontario education partners. We offer unique, relevant, and timely programs and resources. We do so with a focus on the success of every student being nurtured and educated in Ontario's public school system.</p>
                            <p>As you review past and current services, please remember our invitation to offer assistance to your Board or organization. Our track record in customizing learning modules, in matters of business services, governance, and program has been a strength due to our understanding of the needs and experiences in the education sector.</p>
                        </div>
                        <!-- End Main Text -->
                        <div class="col-md-6">
                            <h3 class="padding-vert-10">Key Features</h3>
                            <p>Following Functionality Provided By System.</p>
                            <ul class="tick animate fadeInRight">
                                <li>24*7 Available</li>
                                <li>72 Onterion Schools</li>
                                <li>Qulity Training Program</li>
                                <li>Admission</li>
                                <li>Admin Panel</li>
                                <li>Online Application</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Portfolio -->
            <?php include "footer.php" ?>
