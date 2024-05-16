<!-- <?php 
$obj= new adminback();
    $links = $obj->display_links();
?>



<div class="header-top bg-main hidden-xs">
    <div class="container">
        
        <div class="col-md-3" style="padding-top: 15px;">
                <div class="top-bar left" style="display: contents;">
                <ul class="horizontal-menu">
                    <?php 
                        while( $link = mysqli_fetch_assoc($links)){?>

                    <a class="fa fa-envelope" href=""> &nbsp;
                        <?php  echo $link['email'];  ?>
                    </a>
                </ul>
            </div>
        </div>

        <div class="col-md-5" style="padding: 12px;">
            <marquee behavior="" direction=""> <a href="" style="color:white; font-size:13px; font-weight:bold;">Discover The Products According To Your Needs !</a></marquee>
        </div>
        <div class="col-md-44">
            <div class="top-bar right">
                <ul class="social-list">
                    <li><a href="#<?php  echo $link['tweeter'];  ?>"><i class="fa fa-twitter"
                                aria-hidden="true"></i></a></li>
                    <li><a href="#<?php  echo $link['fb_link'];  ?>"><i class="fa fa-facebook"
                                aria-hidden="true"></i></a></li>
                    <li><a href="#<?php  echo $link['pinterest'];  ?>"><i class="fa fa-pinterest"
                                aria-hidden="true"></i></a></li>
                    <?php } ?>

                </ul>
                <ul class="horizontal-menu">
                    <li><a href="user_login.php" class="login-link"><i class="biolife-icon icon-login"></i>
                            <?php 
                        if(isset($_SESSION['username'])){
                            echo $_SESSION['username'];
                        }else{
                            echo "<b>Login</b>";
                        }
                        ?>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div> -->