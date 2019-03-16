
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
                        <img src="assets/img/slideshow/coding.png">
                    </div>
                    <div class="item">
                        <img src="assets/img/slideshow/p1.jpg">
                    </div>
                    <div class="item">
                        <img src="assets/img/slideshow/slide3.jpg">
                    </div>
                    <div class="item">
                        <img src="assets/img/slideshow/earth.png">
                    </div>
                    <div class="item">
                        <img src="assets/img/slideshow/phone.png">
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
                            <h2>Welcome to Pay & Park</h2>
                            <p>Pay and Park is Next Generation Parking System.That Provide Efficent Way to Manage Parking.</p>
                            <p>This Project Is Made By Final Year Students of G H Patel College of Engineering and Technology.
                                This Project is suitable for smart city planning.</p>
                        </div>
                        <!-- End Main Text -->
                        <div class="col-md-6">
                            <h3 class="padding-vert-10">Key Features</h3>
                            <p>Following Functionality Provided By System.</p>
                            <ul class="tick animate fadeInRight">
                                <li>24*7 Available</li>
                                <li>Smart Mode</li>
                                <li>Normal Mode</li>
                                <li>Booking</li>
                                <li>Admin Panel</li>
                                <li>Cashless Transactions</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div id="portfolio" class="bottom-border-shadow">
                <div class="container bottom-border">
                    <div class="row padding-top-40">
                        <ul class="portfolio-group">
                            <!-- Portfolio Item -->
                            <li class="portfolio-item col-sm-4 col-xs-2 margin-bottom-40">
                                <a href="#">
                                    <figure class="animate fadeInLeft">
                                        <img alt="image1" src="assets/img/frontpage/ARDUINO_UNO_A01.jpg">
                                        <figcaption>
                                            <h3>Arduino Uno</h3>
                                            <span>The Arduino Uno is a microcontroller board based on the ATmega328 (datasheet). </span>
                                        </figcaption>
                                    </figure>
                                </a>
                            </li>
                            <!-- //Portfolio Item// -->
                            <!-- Portfolio Item -->
                            <li class="portfolio-item col-sm-4 col-xs-6 margin-bottom-40">
                                <a href="#">
                                    <figure class="animate fadeIn">
                                        <img alt="image2" src="assets/img/frontpage/ethernet.jpg">
                                        <figcaption>
                                            <h3>Ethernet Shield</h3>
                                            <span>The Arduino Ethernet Shield 2 allows an Arduino Board to connect to the internet.</span>
                                        </figcaption>
                                    </figure>
                                </a>
                            </li>
                            <!-- //Portfolio Item// -->
                            <!-- Portfolio Item -->
                            <li class="portfolio-item col-sm-4 col-xs-6 margin-bottom-40">
                                <a href="#">
                                    <figure class="animate fadeInRight">
                                        <img alt="image3" src="assets/img/frontpage/sensor.jpg">
                                        <figcaption>
                                            <h3>Ultrasonic Sensor</h3>
                                            <span>An Ultrasonic sensor is a device that can measure the distance to an object by using sound waves.</span>
                                        </figcaption>
                                    </figure>
                                </a>
                            </li>
                            <!-- //Portfolio Item// -->
                        </ul>
                    </div>
                </div>
            </div>
            <!-- End Portfolio -->
            <?php include "footer.php" ?>
