<?php include("navbar.php") ?>
            
            
            <!-- Page Header Start -->
            <div class="page-header" style="background-color:whitesmoke;">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <h2>Contact Us</h2>
                        </div>
                        <div class="col-12">
                            <a href="">Home</a>
                            <a href="">Contact Us</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Page Header End -->


            <!-- Contact Start -->
            <div class="contact">
                <div class="container">
                    <div class="section-header">
                        <h2>Contact Us</h2>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="contact-info">
                                <div class="contact-item">
                                    <i class="fa fa-map-marker-alt"></i>
                                    <div class="contact-text">
                                        <h2>Location</h2>
                                        <p>Belhe, Maharashtra, India</p>
                                    </div>
                                </div>
                                <div class="contact-item">
                                    <i class="fa fa-phone-alt"></i>
                                    <div class="contact-text">
                                        <h2>Phone</h2>
                                        <p>8552945385</p>
                                    </div>
                                </div>
                                <div class="contact-item">
                                    <i class="fa fa-envelope"></i>
                                    <div class="contact-text">
                                        <h2>Email</h2>
                                        <p>dikshakulkarni88@gmail.com</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="contact-form">
                                <form action="save1.php" method="post">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Your Name" required="required" id="sname" name="sname"/>
                                    </div>
                                    <div class="form-group">
                                        <input type="email" class="form-control" placeholder="Your Email" required="required" id="semail" name="semail"/>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Subject" required="required" id="ssubject" name="ssubject"/>
                                    </div>
                                    <div class="form-group">
                                        <textarea class="form-control" placeholder="Message" required="required" id="smessage" name="smessage" ></textarea>
                                    </div>
                                    <div>
                                        <button class="submit" type="submit" name="save" style="background-color:white; border:2px solid skyblue; padding:10px;">Send Message</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Contact End -->


            

            
            
            <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
        </div>

        <!-- JavaScript Libraries -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
        <script src="lib/easing/easing.min.js"></script>
        <script src="lib/owlcarousel/owl.carousel.min.js"></script>
        <script src="lib/isotope/isotope.pkgd.min.js"></script>

        <!-- Template Javascript -->
        <script src="js/main.js"></script>
        <?php include("footer.php") ?>