<?php
// session_start();
// include_once("admin/class/adminback.php");
// $obj = new adminback();
// $newdata= $obj->productBYcate();

// $cataDatasnew = array();
// while ($data = mysqli_fetch_assoc($newdata)) {
//     $cataDatasnew[] = $data;


// }



$five_catagory_result = $obj->display_five_catagory();

$five_catagories = array();

while ($cata = mysqli_fetch_assoc($five_catagory_result)) {
    $five_catagories[] = $cata;
}
$array_collum = array_column($five_catagories, "ctg_name");

$eight_pdt_form_ctg_one = $obj->display_five_products(1);
// print_r($five_catagory_result);       
$eight_pdt_form_ctg_two = $obj->display_five_products(2);
$eight_pdt_form_ctg_three = $obj->display_five_products(3);

$eight_pdt_form_ctg_four = $obj->display_five_products(4);
$eight_pdt_form_ctg_five = $obj->display_five_products(5);


// print_r($array_collum);

?>
<?php
include_once("admin/class/adminback.php");
$obj = new adminback();

$cata_info = $obj->p_display_catagory();
$cataDatas = array();
while ($data = mysqli_fetch_assoc($cata_info)) {
    $cataDatas[] = $data;
}

if (isset($_GET['status'])) {
    $cataId = $_GET['id'];
    if ($_GET['status'] == 'catView') {
        $pdt_info = $obj->display_product_byCata($cataId);

        $pdt_datas = array();
        while ($pdt_ftecth = mysqli_fetch_assoc($pdt_info)) {
            $pdt_datas[] = $pdt_ftecth;
        }

    }
}

if (isset($_GET['status'])) {
    $cataId = $_GET['id'];
    if ($_GET['status'] == 'catView') {
        $ctg_info = $obj->ctg_by_id($cataId);



    }
}



?>
<div class="div">
<?php
foreach ($cataDatasnew as $pro_data) {
    print_r($pro_data['pdt_name']);
}
?>
</div>

<!--============= about us ============-->


<!--========= card section start ==========-->


<!-- <div class="product-tab z-index-20 sm-margin-top-193px xs-margin-top-30px">
    <div class="container">
        <div class="biolife-title-box">
            <span class="subtitle">All you need is</span>
            <h3 class="main-title">Our Products</h3>
        </div>
        <div class="biolife-tab biolife-tab-contain sm-margin-top-34px">
            <div class="tab-head tab-head__icon-top-layout icon-top-layout">
                <ul class="tabs md-margin-bottom-35-im xs-margin-bottom-40-im">
                    <li class="tab-element active">
                        <a href="#tab01_1st" class="tab-link"><span></span></span><?php echo $array_collum['0']; ?></a>
                    </li>
                    <li class="tab-element">
                        <a href="#tab01_2nd" class="tab-link"><span></span></span><?php echo $array_collum['1']; ?></a>
                    </li>
                    <li class="tab-element">
                        <a href="#tab01_3rd" class="tab-link"><span></span></span><?php echo $array_collum['2']; ?></a>
                    </li>
                    <li class="tab-element">
                        <a href="#tab01_4th" class="tab-link"><span></span></span><?php echo $array_collum['3']; ?></a>
                    </li>
                </ul>
            </div>
            <div class="tab-content">
                <div id="tab01_1st" class="tab-contain active">
                    <ul class="products-list biolife-carousel nav-center-02 nav-none-on-mobile eq-height-contain"
                        data-slick='{"rows":1 ,"arrows":true,"dots":false,"infinite":true,"speed":400,"slidesMargin":10,"slidesToShow":4, "responsive":[{"breakpoint":1200, "settings":{ "slidesToShow": 4}},{"breakpoint":992, "settings":{ "slidesToShow": 3, "slidesMargin":20}},{"breakpoint":768, "settings":{ "slidesToShow": 2, "slidesMargin":15}}]}'>

                        <?php
                        while ($eight_pdt_ctg_one = mysqli_fetch_assoc($eight_pdt_form_ctg_one)) {
                            ?>
                        <li class="product-item">
                            <div class="contain-product layout-default">
                                <div class="col-md-3 product-thumb">
                                    <a href="single_product.php?status=singleproduct&&id=<?php echo $eight_pdt_ctg_one['pdt_id'] ?>"class="link-to-product">
                                        <img src="admin/uploads/<?php echo $eight_pdt_ctg_one['pdt_img'] ?>"alt="Vegetables" width="270" height="270" class="product-thumnail">
                                    </a>
                                    
                                </div>
                                <div class="info">
                                    <b class="categories"><?php echo $eight_pdt_ctg_one['ctg_name'] ?><b>
                                    <h4 class="product-title"><a href="single_product.php?status=singleproduct&&id=<?php echo $eight_pdt['pdt_id'] ?>"class="pr-name"><?php echo $eight_pdt_ctg_one['pdt_name'] ?></a><h4>
                                    <div class="price ">
                                        <ins><span class="price-amount"><span class="currencySymbol">Rs.</span><?php echo $eight_pdt_ctg_one['pdt_price'] ?></span></ins>
                                    </div>
                                </div>
                            </div>
                        </li>

                        <?php } ?>

                    </ul>
                </div>
                <div id="tab01_2nd" class="tab-contain ">
                    <ul class="products-list biolife-carousel nav-center-02 nav-none-on-mobile eq-height-contain"
                        data-slick='{"rows":1 ,"arrows":true,"dots":false,"infinite":true,"speed":400,"slidesMargin":10,"slidesToShow":4, "responsive":[{"breakpoint":1200, "settings":{ "slidesToShow": 4}},{"breakpoint":992, "settings":{ "slidesToShow": 3, "slidesMargin":20}},{"breakpoint":768, "settings":{ "slidesToShow": 2, "slidesMargin":15}}]}'>

                        <?php while ($eight_pdt_ctg_two = mysqli_fetch_assoc($eight_pdt_form_ctg_two)) { ?>
                        <li class="product-item">
                            <div class="contain-product layout-default">
                                <div class="product-thumb">
                                    <a href="single_product.php?status=singleproduct&&id=<?php echo $eight_pdt_ctg_two['pdt_id'] ?>"
                                        class="link-to-product">
                                        <img src="admin/uploads/<?php echo $eight_pdt_ctg_two['pdt_img'] ?>"
                                            alt="Vegetables" width="270" height="270" class="product-thumnail">
                                    </a>
                                    
                                </div>
                                <div class="info">
                                    <b class="categories"><?php echo $eight_pdt_ctg_two['ctg_name'] ?></b>
                                    <h4 class="product-title"><a
                                            href="single_product.php?status=singleproduct&&id=<?php echo $eight_pdt_ctg_two['pdt_id'] ?>"
                                            class="pr-name"><?php echo $eight_pdt_ctg_two['pdt_name'] ?></a></h4>
                                    <div class="price ">
                                        <ins><span class="price-amount"><span class="currencySymbol">Rs.
                                                </span><?php echo $eight_pdt_ctg_two['pdt_price'] ?></span></ins>

                                    </div>
                                    
                                </div>
                            </div>
                        </li>
                        <?php } ?>
                    </ul>
                </div>
                <div id="tab01_3rd" class="tab-contain ">
                    <ul class="products-list biolife-carousel nav-center-02 nav-none-on-mobile eq-height-contain"
                        data-slick='{"rows":1 ,"arrows":true,"dots":false,"infinite":true,"speed":400,"slidesMargin":10,"slidesToShow":4, "responsive":[{"breakpoint":1200, "settings":{ "slidesToShow": 4}},{"breakpoint":992, "settings":{ "slidesToShow": 3, "slidesMargin":20}},{"breakpoint":768, "settings":{ "slidesToShow": 2, "slidesMargin":15}}]}'>


                        <?php while ($eight_pdt_ctg_three = mysqli_fetch_assoc($eight_pdt_form_ctg_three)) { ?>
                        <li class="product-item col-lg-3 col-md-3 col-sm-4 col-xs-6">
                            <div class="contain-product layout-default">
                                <div class="product-thumb">
                                    <a href="single_product.php?status=singleproduct&&id=<?php echo $eight_pdt_ctg_three['pdt_id'] ?>"
                                        class="link-to-product">
                                        <img src="admin/uploads/<?php echo $eight_pdt_ctg_three['pdt_img'] ?>"
                                            alt="Vegetables" width="270" height="270" class="product-thumnail">
                                    </a>
                                    
                                </div>
                                <div class="info">
                                    <b class="categories"><?php echo $eight_pdt_ctg_three['ctg_name'] ?></b>
                                    <h4 class="product-title"><a
                                            href="single_product.php?status=singleproduct&&id=<?php echo $eight_pdt_ctg_three['pdt_id'] ?>"
                                            class="pr-name"><?php echo $eight_pdt_ctg_three['pdt_name'] ?></a></h4>
                                    <div class="price ">
                                        <ins><span class="price-amount"><span class="currencySymbol">Rs.
                                                </span><?php echo $eight_pdt_ctg_three['pdt_price'] ?></span></ins>

                                    </div>
                                    
                                </div>
                            </div>
                        </li>

                        <?php } ?>

                    </ul>
                </div>
                <div id="tab01_4th" class="tab-contain ">
                    <ul class="products-list biolife-carousel nav-center-02 nav-none-on-mobile eq-height-contain"
                        data-slick='{"rows":1 ,"arrows":true,"dots":false,"infinite":true,"speed":400,"slidesMargin":10,"slidesToShow":4, "responsive":[{"breakpoint":1200, "settings":{ "slidesToShow": 4}},{"breakpoint":992, "settings":{ "slidesToShow": 3, "slidesMargin":20}},{"breakpoint":768, "settings":{ "slidesToShow": 2, "slidesMargin":15}}]}'>

                        <?php while ($eight_pdt_ctg_four = mysqli_fetch_assoc($eight_pdt_form_ctg_four)) { ?>
                        <li class="product-item">
                            <div class="contain-product layout-default">
                                <div class="product-thumb">
                                    <a href="single_product.php?status=singleproduct&&id=<?php echo $eight_pdt_ctg_four['pdt_id'] ?>"
                                        class="link-to-product">
                                        <img src="admin/uploads/<?php echo $eight_pdt_ctg_four['pdt_img'] ?>"
                                            alt="Vegetables" width="270" height="270" class="product-thumnail">
                                    </a>
                                    
                                </div>
                                <div class="info">
                                    <b class="categories"><?php echo $eight_pdt_ctg_four['ctg_name'] ?></b>
                                    <h4 class="product-title"><a
                                            href="single_product.php?status=singleproduct&&id=<?php echo $eight_pdt_ctg_four['pdt_id'] ?>"
                                            class="pr-name"><?php echo $eight_pdt_ctg_four['pdt_name'] ?></a></h4>
                                    <div class="price ">
                                        <ins><span class="price-amount"><span class="currencySymbol">Rs.
                                                </span><?php echo $eight_pdt_ctg_four['pdt_price'] ?></span></ins>

                                    </div>
                                   
                                </div>
                            </div>
                        </li>

                        <?php } ?>

                    </ul>
                </div>
            </div>
        </div>
    </div>
</div> -->




<section class="services-section mt-3 px-3">
    <div class="container">
        <div class="row pt-5">
            <div class="col-lg-12">
                <div class="about-heading-1 text-center">
                    <h1 style="font-weight: 600">Our Products</h1>
                </div>
                <div class="owl-carousel owl-theme">
                    <?php
                    foreach ($pdt_datas as $pdt_data) {
                        // print_r ($pdt_data);
                        ?>
                    <div class="brand-img mx-2 my-3">


                        <div class="service-box">
                            <div class="service-img-box">
                                <a href="single_product.php?status=singleproduct&&id=<?php echo $pdt_data['pdt_id'] ?>"
                                    class="link-to-product">
                                    <img src="admin/uploads/<?php echo $pdt_data['pdt_img'] ?>" alt="dd" width="270"
                                        height="270" class="product-thumnail">
                                </a>
                            </div>
                            <div class="service-cont-box text-center py-4 px-3">
                                <!-- <b class="categories">
                                        <?php echo $pdt_data['ctg_name'] ?>
                                    </b> -->
                                <h4 class="product-title"><a
                                        href="single_product.php?status=singleproduct&&id=<?php echo $pdt_data['pdt_id'] ?>"
                                        class="pr-name">
                                        <?php echo $pdt_data['pdt_name'] ?>
                                    </a></h4>
                                <div class="price">
                                    <ins><span class="price-amount"><span class="currencySymbol">Rs. </span>
                                            <?php echo $pdt_data['pdt_price'] ?>
                                        </span></ins>

                                </div>
                                <div class="shipping-info">
                                    <p class="shipping-day">3-Day Shipping</p>
                                    <p class="for-today">Pree Pickup Today</p>
                                </div>
                            </div>
                        </div>

                    </div>
                    <?php } ?>
                </div>
                <div class="row">
                    <div class="col-12 text-center">
                        <div class="wsk-cp-text-1">
                            <a href="all_product.php">
                                <div class="category">
                                    <button class="btn btn-block btn-success">
                                        View All
                                    </button>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>




<!--========== baneer section   -->
<div class="banner-desk mt-3" data-aos="zoom-in" data-aos-duration="1500">
    <img src="admin/uploads/Re.png" alt="">
</div>
<!--========== baneer section   -->
<div class="banner-mob mt-3" data-aos="zoom-in" data-aos-duration="1500">
    <img src="admin/uploads/banner-bottom.png" alt="">
</div>





<section class="recipe-section-three">
    <div class="auto-container">
        <div class="row clearfix">
            <!-- Column -->
            <div class="column col-lg-6 col-md-12 col-sm-12">
                <!-- Sec Title Two -->
                <div class="sec-title-two ">
                    <h2>All post</h2>
                    <h3>Featured Product</h3>
                    <div class="separator"></div>
                </div>

                <!-- Recipe Block Three -->
                <div class="recipe-block-three">
                    <div class="inner-box">
                        <div class="image">
                            <img src="admin/uploads/temp1.png" alt="" />
                            <!-- Overlay Box -->
                            <div class="overlay-box">
                                <div class="overlay-inner">
                                    <div class="content">
                                        <a href="admin/uploads/temp1.png" data-fancybox="news" data-caption=""
                                            class="icon flaticon-gallery"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="lower-content">
                            <div class="category">Rose Face Toner</div>
                            <div class="post-info">
                                <p style="font-size:14px;"> 🌹Indulge in the luxurious essence of Bionine's Rose Infusion Face Toner. Crafted with the delicate touch of rose petals, this toner is designed to balance, hydrate, and revitalize your skin, leaving you with a petal-soft complexion.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Column -->
            <div class="column col-lg-6 col-md-12 col-sm-12">
                <!-- Sec Title Two -->
                <div class="sec-title-two">
                    <h2>All post</h2>
                    <h3>Recent Products</h3>
                    <div class="separator"></div>
                </div>

                <!-- Recipe Block Four -->
                <div class="recipe-block-four">
                    <div class="inner-box">
                        <div class="image">
                            <img src="admin/uploads/13.png" alt="" />
                            <!-- Overlay Box -->
                            <div class="overlay-box">
                                <div class="overlay-inner">
                                    <div class="content">
                                        <a href="admin/uploads/13.png" data-fancybox="news" data-caption=""
                                            class="icon flaticon-gallery"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="content">
                            <div class="category">Vitamin C</div>
                            <div class="post-info">
                                <p style="font-size:16px;">🍊 <b>Vitamin C:</b> Known for its powerful antioxidant
                                    properties,
                                    Vitamin C helps combat free radicals, reduces dark spots, and promotes a more even
                                    skin tone. It boosts collagen production, leaving your skin looking firm, supple,
                                    and revitalized.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Recipe Block Four -->
                <div class="recipe-block-four">
                    <div class="inner-box">
                        <div class="image">
                            <img src="admin/uploads/14.png" alt="" />
                            <!-- Overlay Box -->
                            <div class="overlay-box">
                                <div class="overlay-inner">
                                    <div class="content">
                                        <a href="admin/uploads/14.png" data-fancybox="news" data-caption=""
                                            class="icon flaticon-gallery"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="content">
                            <div class="category">Aloe Vera Neem Tulsi</div>
                            <div class="post-info">
                                <p style="font-size:16px;"> <b>Aloe Vera Neem Tulsi:</b> Indulge in the power of nature
                                    with Bionine's Aloe-Vera Neem
                                    Tulsi Blend – a synergistic fusion of three potent botanicals renowned for their
                                    holistic skincare benefits. </p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Recipe Block Four -->
                <div class="recipe-block-four">
                    <div class="inner-box">
                        <div class="image">
                            <img src="admin/uploads/15.png" alt="" />
                            <!-- Overlay Box -->
                            <div class="overlay-box">
                                <div class="overlay-inner">
                                    <div class="content">
                                        <a href="admin/uploads/15.png" data-fancybox="news" data-caption=""
                                            class="icon flaticon-gallery"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="content">
                            <div class="category">Charcoal Face Wash</div>
                            <div class="post-info">
                                <p style="font-size:16px;">🖤 <b>Activated Charcoal:</b> A natural detoxifier, activated
                                    charcoal binds to and draws out impurities, toxins, and excess oils from your skin.
                                    It provides a deep cleanse, leaving your skin feeling refreshed and purified.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



<section class="recipe-section  ">
    <!-- <div class="section-text">yummy</div> -->
    <!-- <div class="icon-layer-one" style="background-image: url(images/icons/icon-1.png)"></div>
    <div class="icon-layer-two" style="background-image: url(images/icons/icon-2.png)"></div>
    <div class="icon-layer-three" style="background-image: url(images/icons/icon-3.png)"></div> -->
    <div class="auto-container">
        <div class="sec-title centered">
            <div class="title">Best for You</div>
            <p class="sec-text">skincare routines</p>
            <div class="separate"></div>
        </div>
        <div class="inner-container">
            <div class="circle-layer" style="background-image: url(admin/uploads/circles.png)"></div>
            <div class="row clearfix">
                <div class="left-column col-lg-5 col-md-6 col-sm-12">
                    <div class="inner-column">
                        <div class="recipe-block">
                            <div class="inner-box">
                                <div class="icon">
                                    <img src="admin/uploads/face.png" alt="" />
                                </div>
                                <h2>
                                    Reduction of Fine Lines and Wrinkles
                                </h2>
                                <p style="font-size:14px;">
                                    The antioxidant properties of vitamin C can help combat oxidative stress, which is a
                                    contributing factor to the formation of fine lines and wrinkles. Using a vitamin C
                                    face wash may contribute to smoother skin texture.
                                </p>
                            </div>
                        </div>

                        <div class="recipe-block">
                            <div class="inner-box">
                                <div class="icon">
                                    <img src="admin/uploads/facee.png" alt="" />
                                </div>
                                <h2>Brightening Effect</h2>
                                <p style="font-size:14px;">
                                    Our Vitamin C is known for its ability to brighten the skin and promote a more even
                                    skin tone. It can help reduce the appearance of dark spots, hyper pigmentation, and
                                    discoloration.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="image-column col-lg-2 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <div class="image">
                            <img src="admin/uploads/imgg.png" alt="" />
                        </div>
                    </div>
                </div>

                <div class="right-column col-lg-5 col-md-6 col-sm-12">
                    <div class="inner-column">
                        <div class="recipe-block style-two">
                            <div class="inner-box">
                                <div class="icon">
                                    <img src="admin/uploads/wash-face.png" alt="" />
                                </div>
                                <h2>Sun Damage Repair</h2>
                                <p style="font-size:14px;">
                                    Our Vitamin C has been shown to help repair sun-damaged skin. While it's not a
                                    substitute for sunscreen, incorporating vitamin C into your skincare routine can
                                    provide an additional layer of protection and support skin repair.
                                </p>
                            </div>
                        </div>

                        <div class="recipe-block style-two">
                            <div class="inner-box">
                                <div class="icon">
                                    <img src="admin/uploads/wash-facee.png" alt="" />
                                </div>
                                <h2>Antioxidant Protection</h2>
                                <p style="font-size:14px;">
                                    Vitamin C is a potent antioxidant that helps protect the skin from damage caused by
                                    free radicals.Free radicals are unstable molecules generated by factors like UV
                                    radiation and pollution,and they can contribute to premature aging.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="skin__advice--section section--padding">
    <div class="container">
        <div class="skin__advice--content text-center">
            <h2><b>Truly love the skin you're in</b></h2>
            <h4>Our vision is to give melanin rich skin the attention it deserves.<br> We don't want to just nurture
                your skin—we want you to discover the beauty that lies within.</h4>
            <h3>Everyone needs a Iil' Care – baby!</h3>
        </div>
    </div>
</section>

<!-- Start banner section -->
<section class="banner__section section--padding pt-3 pb-4">
    <div class="container">
        <div class="row mb--n30">
            <div class="col-lg-6 col-md-6 mb-30">
                <div class="choose-product-card border-radius-5 position-relative">
                    <a class="display-block" href="all_product.php"><img class="banner__box--thumbnail border-radius-5"
                            src="admin/uploads/06.png" alt="banner-img">
                        <div class="banner__box--content">
                            <h2 class="banner__box--content__title" Style="color:white">BIONINE</h2>
                            <p class="banner__box--content__desc" Style="color:white">Charcoal Face Wash <br>
                                &nbsp;&nbsp;&nbsp; & <br>Aloe-vera Gel</p>
                            <button class="btn btn-block btn-success">EXPLORE </button>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 mb-30">
                <div class="choose-product-card border-radius-5 position-relative">
                    <a class="display-block" href="all_product.php"><img class="banner__box--thumbnail border-radius-5"
                            src="admin/uploads/banner8.webp" alt="banner-img">
                        <div class="banner__box--content">
                            <h2 class="banner__box--content__title" Style="color:#0a58ca">BIONINE</h2>
                            <p class="banner__box--content__desc" Style="color:#0a58ca">Try Bionine <br>
                                &nbsp;&nbsp;Vitamin C <br>Face Wash Today</p>
                            <button class="btn btn-block btn-success">EXPLORE </button>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End banner section -->