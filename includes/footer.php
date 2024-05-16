<?php 
$obj= new adminback();
    $links = $obj->display_links();
    $link = mysqli_fetch_assoc($links);
   

?>
<!-- <footer id="footer" class="footer layout-03">
    <div class="footer-content background-footer-03">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-9">
                    <section class="footer-item">
                        <div class="footer-phone-info ">
                            <img src="admin/uploads/logo1.png" alt="biolife logo" width="120" height="80">
                            <p class="r-info"> We're a small venture of homemade Skincare products. We have a wide variety of products to choose from natural soaps, face and body washes, serums, lip care, moisturisers, hair care.                               
                            </p>
                        </div>
                    </section>
                </div> -->
                <!-- <div class="col-lg-4 col-md-4 col-sm-6 md-margin-top-5px sm-margin-top-50px xs-margin-top-40px">
                    <section class="footer-item">
                        <h3 class="section-title">Useful Links</h3>
                        <div class="row">
                            <div class="col-lg-6 col-sm-6 col-xs-6">
                                <div class="wrap-custom-menu vertical-menu-2">
                                    <ul class="menu">
                                        <li><a href="#">About Us</a></li>
                                        <li><a href="#">About Our Shop</a></li>
                                        <li><a href="#">Secure Shopping</a></li>
                                        <li><a href="#">Delivery infomation</a></li>
                                        <li><a href="#">Privacy Policy</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>  -->
                <!-- <div class="col-lg-4 col-md-4 col-sm-6 md-margin-top-5px sm-margin-top-50px xs-margin-top-40px">
                    <section class="footer-item">
                        <h3 class="section-title">Office Address:</h3>
                        <div class="contact-info-block footer-layout xs-padding-top-10px">
                            <ul class="contact-lines">
                                <li>
                                    <p class="info-item">
                                        <i class="biolife-icon icon-location"></i>
                                        <b class="desc">2A, T.N. Shed Hobokon Road

                                            Kolkata-700088 </b>
                                    </p>
                                </li>
                                <li>
                                    <p class="info-item">
                                        <i class="biolife-icon icon-phone"></i>
                                        <b class="desc">Phone: <?php echo $link['phone'] ?></b>
                                    </p>
                                </li>
                                <li>
                                    <p class="info-item">
                                        <i class="biolife-icon icon-letter"></i>
                                        <b class="desc">Email: <?php echo $link['email'] ?></b>
                                    </p>
                                </li>
                                <li>
                                    <p class="info-item">
                                        <i class="biolife-icon icon-clock"></i>
                                        <b class="desc">Hours: 7 Days a week from 10:00 am</b>
                                    </p>
                                </li>
                            </ul>
                        </div>
                    </section>
                </div> -->
                <!-- <div class="col-lg-4 col-md-4 col-sm-9">
                    <section class="footer-item">
                        <div class="footer-phone-info ">
                            <img src="admin/uploads/productttt.jpg" alt="biolife logo" width="300" height="300">
                        </div>
                    </section>
                </div> -->
            <!-- </div>
        </div>
    </div>
    <div class="footer-end text-center" style="background-color:#606060;color:white; padding: 10px 0px; font-size:14px">
            <p>Copyright © Designed by <a href="https://viatradeinfotech.com/">Viatrade Infotech</a></p>
        </div>
</footer> -->

<footer id="footer" class="footer mt-4">
    <div class="footer-content">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-3">
                <img src="admin/uploads/bioninee.png" alt="biolife logo" width="150" height="120">
                    <p class="footer-para">Elevate your skincare and haircare routine with Bionine's natural products. Embrace the beauty that nature has to offer, and let your radiance shine through. Bionine – because your beauty deserves the best, naturally.</p>
                </div>
                <div class="col-lg-3 col-md-3">
                    <h3 class="section-title">Quick Links</h3>
                    <div class="wrap-custom-menu" style="font-size: 15px; font-weight: 600;">
                        <ul class="menu">
                            <li><a href="index.php">Home</a></li>
                            <li><a href="about-us.php">About Us</a></li>
                            <li><a href="all_product.php">Products</a></li>
                            <li><a href="contact.php">Contact Us</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3">
                    <h3 class="section-title">Useful Links</h3>
                    <div class="wrap-custom-menu" style="font-size: 15px; font-weight: 600;">
                        <ul class="menu">
                            <li><a href="user_login.php">Login</a></li>
                            <li><a href="addtocart.php">My Cart</a></li>
                            <li><a href="user_register.php">Register</a></li>
                            <!-- <li><a href="privacy.php">Privacy Policy</a></li> -->
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3806.7907025861296!2d78.33622067492013!3d17.42182910181251!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bcb93f427ca4f85%3A0xdb3a8338ba1b7e4e!2sKNaturals!5e0!3m2!1sen!2sin!4v1702358364729!5m2!1sen!2sin" allowfullscreen="" loading="lazy" ></iframe>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-end text-center" style="background-color:#a1a1a1;color:black; padding: 10px 0px; font-size:14px">
            <p>Copyright © Designed by <a href="https://viatradeinfotech.com/">Viatrade Infotech</a></p>
        </div>
</footer>