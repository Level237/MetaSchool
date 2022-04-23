@extends('layouts.app')

@section('title',__('Metaschool'))

@section('content')

    <!-- banner section -->
    <section id="home" class="w3l-banner py-5">
        <div class="banner-content">
            <div class="container py-4">
                <div class="row align-items-center pt-sm-5 pt-4">
                    <div class="col-md-6">
                        <h3 class="mb-lg-4 mb-3">Your Kids Deserve The<span class="d-block">Best Education</span>
                        </h3>
                        <p class="banner-sub">Active Learning, Expert Teachers & Safe Environment</p>
                        <div class="d-flex align-items-center buttons-banner">
                            <a href="contact.html" class="btn btn-style mt-lg-5 mt-4">Admission Now</a>
                        </div>
                    </div>
                    <div class="col-md-6 right-banner-2 text-end position-relative mt-md-0 mt-5">
                        <div class="sub-banner-image mx-auto">
                            <img src="assets/images/banner.png" class="img-fluid position-relative" alt=" ">
                        </div>
                        <div class="banner-style-1 position-absolute">
                            <div class="banner-style-2 position-relative">
                                <h4>Back to School</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- //banner section -->

    <!-- home 4grids block -->
    <section class="services-w3l-block py-5" id="features">
        <div class="container py-md-5 py-4">
            <div class="title-main text-center mx-auto mb-md-5 mb-4" style="max-width:500px;">
                <p class="text-uppercase">Best Features</p>
                <h3 class="title-style">Achieve Your Goals With Edu School</h3>
            </div>
            <div class="row">
                <div class="col-md-6 col-lg-3 d-flex align-items-stretch">
                    <div class="icon-box icon-box-clr-1">
                        <div class="icon"><i class="fas fa-user-friends"></i></div>
                        <h4 class="title"><a href="#about">Expert Teachers</a></h4>
                        <p>Ras effic itur metusga via suscipit consect eturerse adi unde omnis.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 d-flex align-items-stretch mt-md-0 mt-4">
                    <div class="icon-box icon-box-clr-2">
                        <div class="icon"><i class="fas fa-book-reader"></i></div>
                        <h4 class="title"><a href="#about">Quality Education</a></h4>
                        <p>Ras effic itur metusga via suscipit consect eturerse adi unde omnis.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 d-flex align-items-stretch mt-lg-0 mt-4">
                    <div class="icon-box icon-box-clr-3">
                        <div class="icon"><i class="fas fa-user-graduate"></i></div>
                        <h4 class="title"><a href="#about">Life Time Support</a></h4>
                        <p>Ras effic itur metusga via suscipit consect eturerse adi unde omnis.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 d-flex align-items-stretch mt-lg-0 mt-4">
                    <div class="icon-box icon-box-clr-4">
                        <div class="icon"><i class="fas fa-university"></i></div>
                        <h4 class="title"><a href="#about">Best Scholarships</a></h4>
                        <p>Ras effic itur metusga via suscipit consect eturerse adi unde omnis.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- home 4grids block -->

    <!-- home image with content block -->
    <section class="w3l-servicesblock pt-lg-5 pt-4 pb-5 mb-lg-5" id="about">
        <div class="container pb-md-5 pb-4">
            <div class="row pb-xl-5 align-items-center">
                <div class="col-lg-6 position-relative home-block-3-left pb-lg-0 pb-5">
                    <div class="position-relative">
                        <img src="assets/images/img1.jpg" alt="" class="img-fluid radius-image">
                    </div>
                    <div class="imginfo__box">
                        <h6 class="imginfo__title">Get a Appointment Today!</h6>
                        <p>Nemo enim ipsam oluptatem quia oluptas<br> sit aspernatur aut odit aut fugit. </p>
                        <a href="tel:http://1(800)7654321"><i class="fas fa-phone-alt"></i> 1-800-654-3210</a>
                    </div>
                </div>
                <div class="col-xl-5 col-lg-6 offset-xl-1 mt-lg-0 mt-5 pt-lg-0 pt-5">
                    <h3 class="title-style">We Are The Best Choice For Your Child</h3>
                    <p class="mt-4">Lorem ipsum viverra feugiat. Pellen tesque libero ut justo,
                        ultrices in ligula. Semper at tempufddfel. Lorem ipsum dolor sit amet consectetur adipisicing
                        elit.</p>
                    <ul class="mt-4 list-style-lis pt-lg-1">
                        <li><i class="fas fa-check-circle"></i>Special Education</li>
                        <li><i class="fas fa-check-circle"></i>Access more then 100K online courses</li>
                        <li><i class="fas fa-check-circle"></i>Traditional Academies</li>
                    </ul>
                    <a href="contact.html" class="btn btn-style mt-5">Apply Now</a>
                </div>
            </div>
        </div>
    </section>
    <!-- //home image with content block -->

    <!-- courses section -->
    <div class="w3l-grids-block-5 home-course-bg py-5" id="courses">
        <div class="container py-md-5 py-4">
            <div class="title-main text-center mx-auto mb-md-5 mb-4" style="max-width:500px;">
                <p class="text-uppercase">Best Courses</p>
                <h3 class="title-style">Find The Right Course For You</h3>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-6">
                    <div class="coursecard-single">
                        <div class="grids5-info position-relative">
                            <img src="assets/images/c1.jpg" alt="" class="img-fluid" />
                            <div class="meta-list">
                                <a href="courses.html">Art & Design</a>
                            </div>
                        </div>
                        <div class="content-main-top">
                            <div class="content-top mb-4 mt-3">
                                <ul class="list-unstyled d-flex align-items-center justify-content-between">
                                    <li> <i class="fas fa-book-open"></i> 43 Lesson</li>
                                    <li> <i class="fas fa-star"></i> 4.5</li>
                                </ul>
                            </div>
                            <h4><a href="courses.html">Educational Programs</a></h4>
                            <p>Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                            <div class="top-content-border d-flex align-items-center justify-content-between mt-4 pt-4">
                                <h6>$42.00</h6>
                                <a class="btn btn-style-primary" href="courses.html">Know Details<i
                                        class="fas fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mt-md-0 mt-4">
                    <div class="coursecard-single">
                        <div class="grids5-info position-relative">
                            <img src="assets/images/c2.jpg" alt="" class="img-fluid" />
                            <div class="meta-list">
                                <a href="courses.html" class="sec-2">Meditation</a>
                            </div>
                        </div>
                        <div class="content-main-top">
                            <div class="content-top mb-4 mt-3">
                                <ul class="list-unstyled d-flex align-items-center justify-content-between">
                                    <li> <i class="fas fa-book-open"></i> 72 Lesson</li>
                                    <li> <i class="fas fa-star"></i> 4.3</li>
                                </ul>
                            </div>
                            <h4><a href="courses.html">Best Meditation Classes</a></h4>
                            <p>Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                            <div class="top-content-border d-flex align-items-center justify-content-between mt-4 pt-4">
                                <h6>$36.00</h6>
                                <a class="btn btn-style-primary" href="courses.html">Know Details<i
                                        class="fas fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mt-lg-0 mt-4">
                    <div class="coursecard-single">
                        <div class="grids5-info position-relative">
                            <img src="assets/images/c3.jpg" alt="" class="img-fluid" />
                            <div class="meta-list">
                                <a href="courses.html" class="sec-3">Games</a>
                            </div>
                        </div>
                        <div class="content-main-top">
                            <div class="content-top mb-4 mt-3">
                                <ul class="list-unstyled d-flex align-items-center justify-content-between">
                                    <li> <i class="fas fa-book-open"></i> 14 Lesson</li>
                                    <li> <i class="fas fa-star"></i> 4.2</li>
                                </ul>
                            </div>
                            <h4><a href="courses.html">Games Program in a Week</a></h4>
                            <p>Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                            <div class="top-content-border d-flex align-items-center justify-content-between mt-4 pt-4">
                                <h6>$30.00</h6>
                                <a class="btn btn-style-primary" href="courses.html">Know Details<i
                                        class="fas fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-center mt-sm-5 mt-4 pt-sm-0 pt-1">
                <a class="btn btn-style btn-style-secondary mt-sm-3" href="courses.html">
                    Browse more courses</a>
            </div>
        </div>
    </div>
    <!-- //courses section -->

    <!-- why choose block -->
    <section class="w3l-service-1 py-5">
        <div class="container py-md-5 py-4">
            <div class="title-main text-center mx-auto mb-md-5 mb-4" style="max-width:500px;">
                <p class="text-uppercase">Why Choose Us</p>
                <h3 class="title-style">Tools For Teachers And Learners</h3>
            </div>
            <div class="row content23-col-2 text-center">
                <div class="col-md-6">
                    <div class="content23-grid content23-grid1">
                        <h4><a href="about.html">Expert Teachers</a></h4>
                    </div>
                </div>
                <div class="col-md-6 mt-md-0 mt-4">
                    <div class="content23-grid content23-grid2">
                        <h4><a href="about.html">Safe Environment</a></h4>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- //why choose block -->

    <!-- stats block -->
    <section class="w3-stats pt-4 pb-5" id="stats">
        <div class="container pb-md-5 pb-4">
            <div class="title-main text-center mx-auto mb-md-5 mb-4" style="max-width:500px;">
                <p class="text-uppercase">Our Statistics</p>
                <h3 class="title-style">We are Proud to Share with You</h3>
            </div>
            <div class="row text-center pt-4">
                <div class="col-md-3 col-6">
                    <div class="counter">
                        <img src="assets/images/icon-1.png" alt="" class="img-fluid">
                        <div class="timer count-title count-number mt-sm-1" data-to="36076" data-speed="1500"></div>
                        <p class="count-text">Students Enrolled</p>
                    </div>
                </div>
                <div class="col-md-3 col-6">
                    <div class="counter">
                        <img src="assets/images/icon-2.png" alt="" class="img-fluid">
                        <div class="timer count-title count-number mt-3" data-to="786" data-speed="1500"></div>
                        <p class="count-text">Our Branches</p>
                    </div>
                </div>
                <div class="col-md-3 col-6 mt-md-0 mt-5">
                    <div class="counter">
                        <img src="assets/images/icon-3.png" alt="" class="img-fluid">
                        <div class="timer count-title count-number mt-3" data-to="3630" data-speed="1500"></div>
                        <p class="count-text">Total Courses</p>
                    </div>
                </div>
                <div class="col-md-3 col-6 mt-md-0 mt-5">
                    <div class="counter">
                        <img src="assets/images/icon-4.png" alt="" class="img-fluid">
                        <div class="timer count-title count-number mt-3" data-to="6300" data-speed="1500"></div>
                        <p class="count-text">Awards Won</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- //stats block -->

    <!-- testimonials block -->
    <section class="w3l-index4 py-5" id="testimonials">
        <div class="container py-md-5 py-4">
            <div class="content-slider text-center">
                <div class="clients-slider">
                    <div class="mask">
                        <ul>
                            <li class="anim1">
                                <img src="assets/images/testi1.jpg" class="img-fluid rounded-circle"
                                    alt="client image" />
                                <blockquote class="quote"><q>Duis aute irure dolor in reprehenderit in voluptate
                                        velit esse
                                        cillum dolore eu. Excepteur sint occaecat cupidatat
                                        non proident, sunt in culpa qui officia deserunt mollit anim id est
                                        laborum.
                                    </q> </blockquote>
                                <div class="source">- Mario Spe</div>
                            </li>

                            <li class="anim2">
                                <img src="assets/images/testi2.jpg" class="img-fluid rounded-circle"
                                    alt="client image" />
                                <blockquote class="quote"><q>Sed ut perspiciatis unde omnis iste natus error sit
                                        voluptatem
                                        accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab
                                        illo
                                        inventore.
                                    </q> </blockquote>
                                <div class="source">- Petey Cru</div>
                            </li>
                            <li class="anim3">
                                <img src="assets/images/testi3.jpg" class="img-fluid rounded-circle "
                                    alt="client image" />
                                <blockquote class="quote"><q>Lorem ipsum dolor sit amet, consectetur adipiscing
                                        elit, sed do
                                        eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                                        veniam,
                                        quis nostrud exercitation.
                                    </q> </blockquote>
                                <div class="source">- Anna Sth</div>
                            </li>
                            <li class="anim4">
                                <img src="assets/images/testi1.jpg" class="img-fluid rounded-circle"
                                    alt="client image" />
                                <blockquote class="quote"><q>Duis aute irure dolor in reprehenderit in voluptate
                                        velit esse
                                        cillum dolore eu. Excepteur sint occaecat cupidatat
                                        non proident, sunt in culpa qui officia deserunt mollit anim id est
                                        laborum.
                                    </q> </blockquote>
                                <div class="source">- Gail For</div>
                            </li>
                            <li class="anim5">
                                <img src="assets/images/testi2.jpg" class="img-fluid rounded-circle"
                                    alt="client image" />
                                <blockquote class="quote"><q>Lorem ipsum dolor sit amet, consectetur adipiscing
                                        elit, sed do
                                        eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                                        veniam,
                                        quis nostrud exercitation.
                                    </q> </blockquote>
                                <div class="source">- Boye Fra</div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- //testimonials block -->

    <!-- blog block -->
    <div class="w3l-blog-block-5 py-5" id="blog">
        <div class="container py-md-5 py-4">
            <div class="title-main text-center mx-auto mb-md-5 mb-4" style="max-width:500px;">
                <p class="text-uppercase">Our News</p>
                <h3 class="title-style">Latest <span>Blog</span> Posts</h3>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-6">
                    <div class="blog-card-single">
                        <div class="grids5-info">
                            <a href="#blog"><img src="assets/images/blog2.jpg" alt="" /></a>
                            <div class="blog-info">
                                <h4><a href="#blog">Education Programs...</a></h4>
                                <p>Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua, sunt inc
                                    officia deserunt.</p>
                                <div class="d-flex align-items-center justify-content-between mt-4">
                                    <a class="d-flex align-items-center" href="#blog" title="23k followers">
                                        <img class="img-fluid" src="assets/images/testi2.jpg" alt="admin"
                                            style="max-width:40px"> <span class="small ms-2">Eetey Cruis</span>
                                    </a>
                                    <p class="date-text"><i class="far fa-calendar-alt me-1"></i>Oct 06, 2021</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mt-md-0 mt-4">
                    <div class="blog-card-single">
                        <div class="grids5-info">
                            <a href="#blog"><img src="assets/images/blog1.jpg" alt="" /></a>
                            <div class="blog-info">
                                <h4><a href="#blog">Games Programs...</a></h4>
                                <p>Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua, sunt inc
                                    officia deserunt.</p>
                                <div class="d-flex align-items-center justify-content-between mt-4">
                                    <a class="d-flex align-items-center" href="#blog" title="23k followers">
                                        <img class="img-fluid" src="assets/images/testi1.jpg" alt="admin"
                                            style="max-width:40px"> <span class="small ms-2">Molive Joe</span>
                                    </a>
                                    <p class="date-text"><i class="far fa-calendar-alt me-1"></i>Oct 10, 2021</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mt-lg-0 mt-4">
                    <div class="blog-card-single">
                        <div class="grids5-info">
                            <a href="#blog"><img src="assets/images/blog3.jpg" alt="" /></a>
                            <div class="blog-info">
                                <h4><a href="#blog">Articles Programs...</a></h4>
                                <p>Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua, sunt inc
                                    officia deserunt.</p>
                                <div class="d-flex align-items-center justify-content-between mt-4">
                                    <a class="d-flex align-items-center" href="#blog" title="23k followers">
                                        <img class="img-fluid" src="assets/images/testi3.jpg" alt="admin"
                                            style="max-width:40px"> <span class="small ms-2">Turne Leo
                                        </span>
                                    </a>
                                    <p class="date-text"><i class="far fa-calendar-alt me-1"></i>Oct 12, 2021</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- //blog block -->

    <!-- call block -->
    <section class="w3l-call-to-action-6">
        <div class="container py-md-5 py-sm-4 py-5">
            <div class="d-lg-flex align-items-center justify-content-between">
                <div class="left-content-call">
                    <h3 class="title-big">Call To Enroll Your Child</h3>
                    <p class="text-white mt-1">Begin the change today!</p>
                </div>
                <div class="right-content-call mt-lg-0 mt-4">
                    <ul class="buttons">
                        <li class="phone-sec me-lg-4"><i class="fas fa-phone-volume"></i>
                            <a class="call-style-w3" href="tel:+1(23) 456 789 0000">+1(23) 456 789 0000</a>
                        </li>
                        <li><a href="contact.html" class="btn btn-style btn-style-2 mt-lg-0 mt-3">Join for free</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- //call block -->

    <!-- footer block -->
    <footer class="w3l-footer-29-main">
        <div class="footer-29 pt-5 pb-4">
            <div class="container pt-md-4">
                <div class="row footer-top-29">
                    <div class="col-lg-4 col-md-6 footer-list-29">
                        <h6 class="footer-title-29">Contact Info </h6>
                        <p class="mb-2 pe-xl-5">Address : Edu School, 10001, 5th Avenue, #06 lane street, NY - 62617.
                        </p>
                        <p class="mb-2">Phone Number : <a href="tel:+1(21) 234 4567">+1(21) 234 4567</a></p>
                        <p class="mb-2">Email : <a href="mailto:info@example.com">info@example.com</a></p>
                    </div>
                    <div class="col-lg-2 col-md-3 col-6 footer-list-29 mt-md-0 mt-4">
                        <ul>
                            <h6 class="footer-title-29">Quick Links</h6>
                            <li><a href="about.html">About Us</a></li>
                            <li><a href="courses.html">Courses</a></li>
                            <li><a href="#become-teacher">Become a Teacher</a></li>
                            <li><a href="contact.html">Contact Us</a></li>
                            <li><a href="#career">Career</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-2 col-md-3 col-6 ps-lg-5 ps-lg-4 footer-list-29 mt-md-0 mt-4">
                        <ul>
                            <h6 class="footer-title-29">Explore</h6>
                            <li><a href="#blog">Blog Posts</a></li>
                            <li><a href="#privacy">Privacy policy</a></li>
                            <li><a href="contact.html">Contact Us</a></li>
                            <li><a href="#license">License & uses</a></li>
                            <li><a href="#tutorials">Tutorials</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-8 footer-list-29 mt-lg-0 mt-4 ps-lg-5">
                        <h6 class="footer-title-29">Subscribe</h6>
                        <form action="#" class="subscribe d-flex" method="post">
                            <input type="email" name="email" placeholder="Email Address" required="">
                            <button class="button-style"><span class="fa fa-paper-plane"
                                    aria-hidden="true"></span></button>
                        </form>
                        <p class="mt-3">Subscribe to our mailing list and get updates to your email inbox.</p>
                    </div>
                </div>
                <!-- copyright -->
                <p class="copy-footer-29 text-center pt-lg-2 mt-5 pb-2">© 2021 Edu School. All rights reserved. Design
                    by <a href="https://w3layouts.com/" target="_blank">W3Layouts</a></p>
                <!-- //copyright -->
            </div>
        </div>
@endsection
