<?php
session_start();
include_once("admin/class/adminback.php");
$obj = new adminback();

$cata_info = $obj->p_display_catagory();
$cataDatas = array();
while ($data = mysqli_fetch_assoc($cata_info)) {
    $cataDatas[] = $data;
}

if (isset($_GET['status'])) {
    $pdtId = $_GET['id'];
    if ($_GET['status'] == 'singleproduct') {
        $pdt_info = $obj->display_product_byId($pdtId);
        $pdt_fetch = mysqli_fetch_assoc($pdt_info);
        $pro_datas = array();
        $pro_datas[] = $pdt_fetch;
    }
}
$ctg_id = $pdt_fetch['ctg_id'];
 
$rel_pro = $obj->related_product($pdtId);


if(isset($_POST['post_comment'])){
    $cmt_msg = $obj->post_comment($_POST);
}


$cmt_fetch = $obj->view_comment_id($_GET['id']);
if(isset($cmt_fetch)){
    $cmt_row = mysqli_num_rows($cmt_fetch);
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

    <!-- Page Contain -->
    <div class="page-contain">

        <!-- Main content -->
        <div id="main-content" class="main-content">

            <!--Hero Section-->
            <div class="hero-section hero-background">
                <h1 class="page-title" style="color:black;">
                    <?php
                    foreach ($pro_datas as $pro_data) {
                        echo $pro_data['pdt_name'];
                    }
                    ?>
                </h1>
            </div>




            <!--Navigation section-->
            <div class="container">
                <nav class="biolife-nav">
                    <ul>
                        <li class="nav-item"><a href="index.php" class="permal-link">Home</a></li>

                        <li class="nav-item"><span class="current-page">

                                <?php
                                foreach ($pro_datas as $pro_data) {
                                    echo $pro_data['ctg_name'];
                                }
                                ?>
                            </span></li>

                        <li class="nav-item"><span class="current-page">

                                <?php
                                foreach ($pro_datas as $pro_data) {
                                    echo $pro_data['pdt_name'];
                                }
                                ?>
                            </span></li>
                    </ul>
                </nav>


            </div>

            <div class="container">
                <div class="page-contain single-product pb-5">
                    <div class="container">

                        <!-- Main content -->
                        <div id="main-content" class="main-content">

                            <?php
                            foreach ($pro_datas as $pro_data) {


                            ?>



                                <div>
                                    <!-- summary info -->
                                    <form action="addtocart.php" method="POST">

                                        <div class="sumary-product single-layout">
                                            <div class="media">
                                                <ul class="biolife-carousel slider-for" data-slick='{"arrows":false,"dots":false,"slidesMargin":30,"slidesToShow":1,"slidesToScroll":1,"fade":true,"asNavFor":".slider-nav"}'>
                                                    <li><img src="admin/uploads/<?php echo $pro_data['pdt_img'] ?>" alt="" width="500" height="500"></li>

                                                </ul>

                                            </div>
                                            <div class="product-attribute">
                                                <h3 class="title"><?php echo $pro_data['pdt_name'] ?></h3>
                                                <div class="rating">
                                                    <p class="star-rating"><span class="width-80percent"></span></p>
                                                    <span class="review-count">(04 Reviews)</span>
                                                    <span class="qa-text">Q&A</span>
                                                    <b class="category">By: <?php echo $pro_data['ctg_name'] ?></b>
                                                </div>
                                                <!-- <span class="sku">Sku: <?php echo $pro_data['pdt_id'] ?></span> -->
                                                <!-- <span class="stock" style="margin-left: 200px;">Stock: <?php echo $pro_data['product_stock'] ?> </span> -->


                                                <div class="price">
                                                    <ins><span class="price-amount"><span class="currencySymbol">Rs. </span><?php echo $pro_data['pdt_price'] ?></span></ins>

                                                </div>

                                                
                                                <p class="excerpt">
                                                    <?php echo $pro_data['pdt_des'] ?>
                                                </p>

                                                <!-- <div class="shipping-info">
                                                    <p class="shipping-day">3-Day Shipping</p>
                                                    <p class="for-today">Pree Pickup Today</p>
                                                </div> -->
                                            </div>
                                            <div class="action-form">

                                                <div class="total-price-contain">
                                                    <span class="title">Total Price:</span>
                                                    <p class="price">Rs.
                                                        <?php

                                                        echo $pro_data['pdt_price'];

                                                        ?>


                                                    </p>
                                                </div>
                                                <div class="buttons">
                                                    <input type="hidden" name="pdt_name" value="<?php echo $pro_data['pdt_name'] ?>">

                                                    <input type="hidden" name="pdt_price" value="<?php echo $pro_data['pdt_price'] ?>">

                                                    <input type="hidden" name="pdt_img" value="<?php echo $pro_data['pdt_img'] ?>">
                                                    <input type="hidden" name="pdt_id" value="<?php echo $pro_data['pdt_id'] ?>">

                                                    <input type="submit" value="Add To Cart" class="btn btn-block btn-success" name="addtocart">

                                                </div>

                                    </form>

                                    <div class="social-media">
                                        <ul class="social-list">
                                            <li><a href="#" class="social-link"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                            <li><a href="www.facebook.com" class="social-link"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                            <li><a href="#" class="social-link"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
                                            <li><a href="#" class="social-link"><i class="fa fa-share-alt" aria-hidden="true"></i></a></li>
                                            <li><a href="#" class="social-link"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="acepted-payment-methods">
                                        <ul class="payment-methods">
                                            <li><img src="assets/images/card1.jpg" alt="" width="51" height="36"></li>
                                            <li><img src="assets/images/card2.jpg" alt="" width="51" height="36"></li>
                                            <li><img src="assets/images/card3.jpg" alt="" width="51" height="36"></li>
                                            <li><img src="assets/images/card4.jpg" alt="" width="51" height="36"></li>
                                        </ul>
                                    </div>
                                </div>
                        </div>
                        </form>

                        
                    </div>




                <?php } ?>
                </div>
            </div>
        </div>

    </div>



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