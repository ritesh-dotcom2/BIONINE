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

while ($pdt_ftecth = mysqli_fetch_assoc($pdt_info)) {
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



        <div class="hero-about">
            <div class="hero-section">
                <div class="hero-content">
                    <h1>🍃 Embrace the freshness of natural ingredients.🌸</h1>
                </div>
            </div>
        </div>
    </div>
    <div class="hero-product-mob">
        <div class="hero-product">
            <img src="admin/uploads/banner-mob-2.png" alt="">
        </div>
    </div>
    <section class="about-us container">
        <div class="overflow-hidden space" id="about-sec">
            <div class="container">
                <div class="row align-items-center" style="margin-top: 40px;">
                    <div class="col-xl-6 mb-30 mb-xl-0">
                        <div class="img-box1">
                            <div class="img1"><img src="admin/uploads/07.png" alt="About"></div>
                            <div class="img2"><img src="admin/uploads/08.png" alt="Image"></div>
                            <div class="shape1 movingX"><img src="admin/uploads/about_1_3.png" alt="Image"></div>
                            <div class="year-counter">
                                <p class="year-counter_text">100% <br>Quality Assurance</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="ps-xxl-5 ps-xl-2 ms-xl-1 text-center text-xl-start">
                            <div class="title-area mb-32">
                                <h1 class="sub-title"><b>Welcome to Bionine – Unveil Your Beauty Secrets!</b></h1>
                                <p style="font-size:16px;">🌱 Aloe Vera: Known as the "Plant of Immortality," Aloe Vera
                                    is a skincare hero. Packed with vitamins, minerals, and antioxidants, it soothes,
                                    hydrates, and promotes a youthful glow.<br>🍃 Neem: Nature's purifier, Neem is
                                    celebrated for its antibacterial and antifungal properties. It helps combat acne,
                                    soothes irritated skin, and supports a clear complexion.<br>🌿 Tulsi (Holy Basil):
                                    Revered in Ayurveda, Tulsi is a powerhouse of antioxidants. It detoxifies the skin,
                                    fights inflammation, and imparts a natural radiance.</p>
                                <p style="font-size:16px;">
                                    🍊 Vitamin C: Known for its powerful antioxidant properties, Vitamin C helps combat
                                    free radicals, reduces dark spots, and promotes a more even skin tone. It boosts
                                    collagen production, leaving your skin looking firm, supple, and revitalized.<br>🌿
                                    Citrus Extracts: A blend of natural citrus extracts enhances the brightening
                                    effects, providing a burst of freshness that invigorates your skin.<br>💧 Hydrating
                                    Agents: Formulated to maintain your skin's natural moisture balance, our Vitamin C
                                    Face Wash ensures a thorough cleanse without over-drying.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="about-us__content pb-5 mt-5 mb-5" style="color: black;">
            <div class="mw-930 d-lg-flex align-items-lg-center">
                <div class="content-wrapper text-align col-lg-6 px-lg-4">
                    <h2 class="mb-3">🌿 Luxurious Conditioning, Naturally</h2>
                    <p style="font-size:16px;">Nourish your hair with our exquisite conditioners that are infused with
                        plant-based goodness. Bionine conditioners provide deep hydration, detangling, and a
                        silky-smooth finish. Bid farewell to frizz and welcome a cascade of softness that lasts all day.
                        Revel in the joy of effortlessly manageable and gorgeous hair.</p>
                </div>
                <div class="image-wrapper col-lg-6 mt-5">
                    <img class="h-auto" loading="lazy" src="admin/uploads/17.png" alt="">
                </div>
            </div>
            <div class="mw-930 d-lg-flex align-items-lg-center">
                <div class="image-wrapper col-lg-6 mt-5">
                    <img class="h-auto" loading="lazy" src="admin/uploads/21.png" alt="">
                </div>
                <div class="content-wrapper text-align col-lg-6 px-lg-4">
                    <h2 class="mb-3">🍃 Our Commitment to Sustainability</h2>
                    <p style="font-size:16px;">Bionine is not just about enhancing your beauty; it's about caring for
                        the planet too. Our products are thoughtfully packaged with the environment in mind, using
                        eco-friendly materials. We strive to make a positive impact on both your beauty routine and the
                        world we live in.
                    </p>
                </div>
            </div>
        </div>
    </section>


    <!--========== why choose us? ==========-->

    <div class="container" style="padding-top:59px; padding-bottom:20px;">
        <div class="row" style="background-color:#1db88f;">
            <div class="col-md-12">
                <div class="col-md-6">
                    <div class="img-box ">
                        <img src="admin/uploads/whoa.WEBP" alt="" srcset="">
                    </div>
                </div>
                <div class="col-md-6" style="padding-top:40px; color:white; text-align:justify;">
                    <h2>
                        ✅Choose Bionine – Beauty Rooted in Nature's Wisdom
                    </h2>
                    <p style="font-size:16px;">
                        Discover the fusion of science and nature with Bionine. Elevate your beauty routine with
                        products that celebrate your unique radiance and contribute to a healthier planet. Bionine –
                        where every drop of beauty is an ode to nature.
                    </p>
                    <h2>🌿 Luxurious Conditioning, Naturally</h2>
                    <p style="font-size:16px;">Nourish your hair with our exquisite conditioners that are infused with
                        plant-based goodness. Bionine conditioners provide deep hydration, detangling, and a
                        silky-smooth finish. Bid farewell to frizz and welcome a cascade of softness that lasts all day.
                        Revel in the joy of effortlessly manageable and gorgeous hair.
                    </p>
                    <h2>🍃 Our Commitment to Sustainability</h2>
                    <p style="font-size:16px;">Bionine is not just about enhancing your beauty; it's about caring for
                        the planet too. Our products are thoughtfully packaged with the environment in mind, using
                        eco-friendly materials. We strive to make a positive impact on both your beauty routine and the
                        world we live in.
                    </p>
                    <h2>🛍️ Shop Bionine Today and Unleash Your Natural Beauty!</h2>
                </div>
            </div>
        </div>
    </div>

    <!--========== brand section ==========-->
    <!-- <section class="brand-section my-5">
        <h3 class="abt-head text-center">
            <b>What Our Customer Says?</b>
        </h3>
        <div class="brand-bg-1">
            <div class="container">
                <div class="row pt-4">
                    <div class="owl-carousel owl-theme">
                        <div class="brand-item">
                            <div class="brand_boxed">
                                <a href="#">
                                    <div class="brand-img-box text-center">
                                        <a href="admin/uploads/test1.webp" data-fancybox="gallery"
                                            data-fancybox-next><img src="admin/uploads/test1.png" width="100%" />
                                        </a>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="brand-item">
                            <div class="brand_boxed">
                                <a href="#">
                                    <div class="brand-img-box text-center">
                                        <a href="admin/uploads/test2.webp" data-fancybox="gallery"
                                            data-fancybox-next><img src="admin/uploads/test2.png" width="100%" />
                                        </a>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="brand-item">
                            <div class="brand_boxed">
                                <a href="#">
                                    <div class="brand-img-box text-center">
                                        <a href="admin/uploads/test3.webp" data-fancybox="gallery"
                                            data-fancybox-next><img src="admin/uploads/test3.png" width="100%" />
                                        </a>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="brand-item">
                            <div class="brand_boxed">
                                <a href="#">
                                    <div class="brand-img-box text-center">
                                        <a href="admin/uploads/test4.webp" data-fancybox="gallery"
                                            data-fancybox-next><img src="admin/uploads/test4.png" width="100%" />
                                        </a>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="brand-item">
                            <div class="brand_boxed">
                                <a href="#">
                                    <div class="brand-img-box text-center">
                                        <a href="admin/uploads/test5.webp" data-fancybox="gallery"
                                            data-fancybox-next><img src="admin/uploads/test5.png"
                                                width="100%" />
                                        </a>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="brand-item">
                            <div class="brand_boxed">
                                <a href="#">
                                    <div class="brand-img-box text-center">
                                        <a href="admin/uploads/test6.webp" data-fancybox="gallery"
                                            data-fancybox-next><img src="admin/uploads/test6.png" width="100%" />
                                        </a>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="brand-item">
                            <div class="brand_boxed">
                                <a href="#">
                                    <div class="brand-img-box text-center">
                                        <a href="admin/uploads/test7.webp" data-fancybox="gallery"
                                            data-fancybox-next><img src="admin/uploads/test7.png" width="100%" />
                                        </a>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="brand-item">
                            <div class="brand_boxed">
                                <a href="#">
                                    <div class="brand-img-box text-center">
                                        <a href="admin/uploads/test8.webp" data-fancybox="gallery"
                                            data-fancybox-next><img src="admin/uploads/test8.png" width="100%" />
                                        </a>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="brand-item">
                            <div class="brand_boxed">
                                <a href="#">
                                    <div class="brand-img-box text-center">
                                        <a href="admin/uploads/test9.webp" data-fancybox="gallery"
                                            data-fancybox-next><img src="admin/uploads/test9.png"
                                                width="100%" />
                                        </a>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="brand-item">
                            <div class="brand_boxed">
                                <a href="#">
                                    <div class="brand-img-box text-center">
                                        <a href="admin/uploads/test10.webp" data-fancybox="gallery"
                                            data-fancybox-next><img src="admin/uploads/test10.png" width="100%" />
                                        </a>
                                    </div>
                                </a>
                            </div>
                        </div> 
                        <div class="brand-item">
                            <div class="brand_boxed">
                                <a href="#">
                                    <div class="brand-img-box text-center">
                                        <a href="admin/uploads/test11.webp" data-fancybox="gallery"
                                            data-fancybox-next><img src="admin/uploads/test11.png" width="100%" />
                                        </a>
                                    </div>
                                </a>
                            </div>
                        </div> 
                        <div class="brand-item">
                            <div class="brand_boxed">
                                <a href="#">
                                    <div class="brand-img-box text-center">
                                        <a href="admin/uploads/test12.webp" data-fancybox="gallery"
                                            data-fancybox-next><img src="admin/uploads/test12.png" width="100%" />
                                        </a>
                                    </div>
                                </a>
                            </div>
                        </div> 
                        <div class="brand-item">
                            <div class="brand_boxed">
                                <a href="#">
                                    <div class="brand-img-box text-center">
                                        <a href="admin/uploads/test13.webp" data-fancybox="gallery"
                                            data-fancybox-next><img src="admin/uploads/test13.png" width="100%" />
                                        </a>
                                    </div>
                                </a>
                            </div>
                        </div> 
                        <div class="brand-item">
                            <div class="brand_boxed">
                                <a href="#">
                                    <div class="brand-img-box text-center">
                                        <a href="admin/uploads/test14.webp" data-fancybox="gallery"
                                            data-fancybox-next><img src="admin/uploads/test14.png" width="100%" />
                                        </a>
                                    </div>
                                </a>
                            </div>
                        </div> 
                        <div class="brand-item">
                            <div class="brand_boxed">
                                <a href="#">
                                    <div class="brand-img-box text-center">
                                        <a href="admin/uploads/test15.webp" data-fancybox="gallery"
                                            data-fancybox-next><img src="admin/uploads/test15.png" width="100%" />
                                        </a>
                                    </div>
                                </a>
                            </div>
                        </div> 
                    </div>
                </div>
            </div>
        </div>
    </section> -->


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

<script>
/* Demo purposes only */
$(".hover").mouseleave(
    function() {
        $(this).removeClass("hover");
    }
);
</script>