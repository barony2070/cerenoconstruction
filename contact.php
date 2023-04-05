<?php
    include 'include/header.php';
?>
        <!--==================================================================== 
            Start Page Banner Section
        =====================================================================-->
        <section class="page-banner overlay">
            <div class="container">
                <div class="banner-inner">
                    <h2 class="wow fadeInUp" data-wow-duration="1.5s">Contact Us.</h2>
                    <nav aria-label="breadcrumb" class="wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="0.3s">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="/">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Contact</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </section>
        <!--==================================================================== 
            End Page Banner Section
        =====================================================================-->


        <!--==================================================================== 
            Start Get In Touch Section
        =====================================================================-->
        <section class="get-in-touch py-150 rpy-100">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="contact-sidebar">

                            <div class="sidebar-widget bg-black text-white">
                                <h3>Location:</h3>
                                <ul>
                                    <li>
                                        <div class="left-icon">
                                            <i class="fas fa-map-marker-alt"></i>
                                        </div>
                                        <div class="right-content">
                                            1432 W I St, Los Banos , Ca 93635
                                        </div>
                                    </li>
                                    <li>
                                        <div class="left-icon">
                                            <i class="fas fa-phone-alt"></i>
                                        </div>
                                        <div class="right-content">
                                            <a href="callto:+14156696951">+1 415 669 6951</a><br>
                                            <a href="callto:+12136325653">+1 213 632 5653</a>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="left-icon">
                                            <i class="fa fa-envelope"></i>
                                        </div>
                                        <div class="right-content">
                                            <a href="mailto:info@domain.com">info@geemacconstruction.com</a><br>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="section-title">
                            <h2>Get In <span>Touch.</span></h2>
                        </div>
                        <form id="call-back-form" class="call-back-form" name="call-back-form" action="#" method="post">
                            <div class="row clearfix">
                                <div class="col-md-6">        
                                    <div class="form-group">
                                        <input type="text" name="full-name" class="form-control" value="" placeholder="Name Here" required="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="email" name="email-address" class="form-control" value="" placeholder="Email Here" required="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" name="phone-number" class="form-control" value="" placeholder="Phone No.">
                                    </div>
                                </div>
                                <div class="col-md-6">        
                                    <div class="form-group">
                                        <input type="text" name="subject" class="form-control" value="" placeholder="Address" required="">
                                    </div>
                                </div>
                                <div class="col-md-12 mb-40">        
                                    <div class="form-group">
                                        <textarea name="form-message" rows="7" class="form-control" placeholder="Text here..."></textarea>
                                    </div>
                                </div>                                              
                            </div>
                            <div class="form-group mb-0 text-center">
                                <button class="theme-btn" type="submit">Submit Now <i class="fas fa-arrow-right"></i></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <!--==================================================================== 
            End Get In Touch Section
        =====================================================================-->

<?php
    include 'include/footer.php';
?>
