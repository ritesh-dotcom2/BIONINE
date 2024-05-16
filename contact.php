<?php

session_start();
include_once("admin/class/adminback.php");
$obj = new adminback();

$cata_info = $obj->p_display_catagory();
$cataDatas = array();
while ($data = mysqli_fetch_assoc($cata_info)) {
    $cataDatas[] = $data;
}




$pdt_info = $obj->view_all_product();

$pdt_datas = array();
        
while($pdt_ftecth = mysqli_fetch_assoc($pdt_info)){
            $pdt_datas[] = $pdt_ftecth;
}

?>


<?php
include_once("includes/head.php");
?>

<body class="biolife-body">
    <!-- Preloader -->

    <?php
    include_once("includes/preloader.php");
    ?>

    <!-- HEADER -->
    <header id="header" class="header-area style-01 layout-03">

        <?php
        include_once("includes/header_top.php");
        ?>

        <?php
        include_once("includes/header_middle.php");
        ?>

        <?php
        include_once("includes/header_bottom.php");
        ?>

    </header>
    <div class="hero-product-desk">
        <div class="hero-contact">
            <div class="hero-section">
                <div class="hero-content">
                    <h1>📍 Reach out to Bionine - Your Natural Beauty Journey Starts with a Connection.</h1>
                </div>
            </div>
        </div>
    </div>

    <div class="hero-product-mob">
        <div class="hero-product">
            <img src="admin/uploads/banner-mob-3.png" alt="">
        </div>
    </div>

    <div class="space mt-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6 col-md-7">
                    <div class="title-area text-center">
                        <!-- <h2 class="sec-title">Contact Information</h2> -->
                        <p class="sec-text">We are committed to deliver products that not only enhance your natural
                            beauty but also prioritize your skin's health.</p>
                    </div>
                </div>
            </div>
            <div class="row gy-4 justify-content-center mt-5">
                <div class="col-xl-3 col-lg-4 col-md-6">
                    <div class="contact-feature">
                        <div class="box-icon"><i class="fa fa-map-marker"></i></div>
                        <div class="media-body">
                            <h3 class="box-title">Our Address</h3>
                            <p class="box-text">48, Jesal Soc,Vadodara.Gujarat</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6">
                    <div class="contact-feature">
                        <div class="box-icon bg-theme2"><i class="fa fa-address-book"></i></div>
                        <div class="media-body">
                            <h3 class="box-title">Phone Number</h3>
                            <p class="box-text"><a href="tel:8511106460">8511106460</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6">
                    <div class="contact-feature">
                        <div class="box-icon bg-title"><i class="fa fa-envelope"></i></div>
                        <div class="media-body">
                            <h3 class="box-title">Email Address</h3>
                            <p class="box-text"><a href="mailto:bionineindia@gmail.com">bionineindia@gmail.com</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6">
                    <div class="contact-feature">
                        <div class="media-body">
                            <h3 class="box-title">Follow Social Media</h3>
                            <div class="th-social" style="font-size: 26px;">
                                <!-- <a target="_blank" href="https://facebook.com/"><i class="fa fa-facebook"></i></a> 
                                <a target="_blank" href="https://twitter.com/"><i class="fa fa-twitter"></i></a> 
                                <a target="_blank" href="https://instagram.com/"><i class="fa fa-instagram"></i></a>  -->
                                <!-- <a target="_blank" href="https://linkedin.com/"><i class="fab fa-linkedin-in"></i></a> -->
                                <!-- <a target="_blank" href="https://pinterest.com/"><i class="fab fa-pinterest-p"></i></a> -->
                                <a target="_blank" href="https://facebook.com/"> <img src="admin/uploads/fb.gif" alt=""
                                        style="width:40px"></a>
                                <a target="_blank" href="https://instagram.com/"> <img src="admin/uploads/insta.gif"
                                        alt="" style="width:70px"></a>
                                <a target="_blank" href="https://twitter.com/"> <img src="admin/uploads/twitter.gif"
                                        alt="" style="width:40px"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="space-bottom mt-5">
        <div class="container">
            <form action="" method="POST" class="contact-form input-smoke ajax-contact">
                <h2 class="sec-title">Get In Touch</h2>
                <div class="row">
                    <div class="form-group col-md-6">
                        <!-- <label for="name">Your Name</label> -->
                        <input type="text" class="form-control" name="name" id="name" placeholder="Your Name">
                        <i class="fa fa-user"></i>
                    </div>
                    <div class="form-group col-md-6">
                        <!-- <label for="email">Email Address</label> -->
                        <input type="email" class="form-control" name="email" id="email" placeholder="Email Address">
                        <i class="fa fa-envelope"></i>
                    </div>
                    <div class="form-group col-md-6">
                        <!-- <label for="number">Phone Number</label> -->
                        <input type="tel" class="form-control" name="number" id="number" placeholder="Phone Number"
                            pattern="\d{10}" title="Please enter a 10-digit phone number" required>
                        <i class="fa fa-phone"></i>
                    </div>
                    <div class="form-group col-md-6">
                        <!-- <label for="subject">Select Subject</label> -->
                        <select name="subject" id="subject" class="form-select">
                            <option value="" disabled="disabled" selected="selected" hidden>Select Subject</option>
                            <option value="Hair Care">Hair Care</option>
                            <option value="Face Care">Face Care</option>
                        </select>
                        <i class="fa fa-chevron-down"></i>
                    </div>
                    <div class="form-group col-12">
                        <!-- <label for="message">Your Message</label> -->
                        <textarea name="message" id="message" cols="30" rows="3" class="form-control"
                            placeholder="Your Message"></textarea>
                        <i class="fa fa-pencil"></i>
                    </div>
                    <div class="form-btn col-12">
                        <button class="th-btn btn-fw">Send Message<i class="fas fa-chevrons-right ms-2"></i></button>
                    </div>
                </div>
                <p class="form-messages mb-0 mt-3"></p>
            </form>
        </div>
    </div>

    <div class="space-bottom mt-5 mb-5">
        <div class="contact-map">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d29527.734057435027!2d73.1241248108848!3d22.317096949138453!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395fc8e2e0fb2f97%3A0x105bac23d46fcce9!2sJesal%20Society!5e0!3m2!1sen!2sin!4v1704688356512!5m2!1sen!2sin"
                allowfullscreen="" loading="lazy"></iframe>
        </div>

    </div>

    <!-- FOOTER -->

    <?php
    include_once("includes/footer.php");
    ?>

    <!--Footer For Mobile-->
    <?php
    include_once("includes/mobile_footer.php");
    ?>

    <?php
    include_once("includes/mobile_global.php")
    ?>


    <!-- Scroll Top Button -->
    <a class="btn-scroll-top"><i class="biolife-icon icon-left-arrow"></i></a>

    <?php
    include_once("includes/script.php")
    ?>
</body>

</html>