<footer class="footer-section bg-black pt-150 rpt-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-6">
                <div class="widget contact-info-widget">
                    <h3 class="widget-title">Get In Touch</h3>
                    <ul>
                        <li>
                            <h5>Address:</h5>
                            <p>2nd Floor , Near Low Price Masters, Tema Comm 1, Tema.</p>
                        </li>
                        <li>
                            <h5>Call Now:</h5>
                            <p><a href="callto:+233556763609">+233 55 676 3609</a></p>
                            <p><a href="callto:+233556778150">+233 55 677 8150</a></p>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-4 col-6">
                <div class="widget menu-widget">
                    <h3 class="widget-title">Our Services</h3>
                    <ul>
                        <li><a href="index.php">Home</a></li>
                        <li><a href="about.php">About</a></li>
                        <li><a href="service-details.php">Services</a></li>
                        <li><a href="contact.html">Contact</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-4 col-6">
                <div class="widget subscribe-widget">
                    <h3 class="widget-title">Subscribe</h3>
                    <form action="#" method="post" name="subscribe-form" class="subscribe-form">
                       <p>Subscribe to our Newsletter to receive latest news and promo information.</p>
                        <div class="form-group">
                            <input type="email" name="email-address" value="" class="form-control" placeholder="Email" required="">
                            <button type="submit" class="subscribe-submit"><i class="fa fa-envelope"></i></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Copyright Area-->
    <div class="copyright-area mt-95 rmt-45">
       <div class="container">
            <div class="copyright-inner align-items-center">
                <div class="copyright-wrap order-2 order-md-1">
                    <p>Copyright © <span>2017</span> | All Rights Reserved.</p>
                    <!-- Scroll Top Button -->
                    <button class="scroll-top scroll-to-target wow fadeInUp" data-wow-duration="2s" data-target="html"><i class="fas fa-angle-double-up"></i></button>
                    <!-- footer menu -->
                </div>

            </div>
        </div>
    </div>
</footer>
<!--====================================================================
                        End Footer Section
=====================================================================-->
</div>
<!--End pagewrapper-->


<!-- jequery plugins -->
<script src="assets/js/jquery-3.5.1.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/slick.min.js"></script>
<script src="assets/js/wow.min.js"></script>
<script src="assets/js/leaflet.min.js"></script>
<script src="assets/js/appear.js"></script>
<!-- Custom script -->
<script src="assets/js/script.js"></script>
<script>
    $(document).ready(function(){
    console.log("hello")
        $(".fancybox").fancybox({
            openEffect: "none",
            closeEffect: "none"
        });

        $(".zoom").hover(function(){

            $(this).addClass('transition');
        }, function(){

            $(this).removeClass('transition');
        });
    });
</script>
</body>
</html>
