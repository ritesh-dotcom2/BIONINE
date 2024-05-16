<script src="assets/js/jquery-3.4.1.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/jquery.countdown.min.js"></script>
<script src="assets/js/jquery.nice-select.min.js"></script>
<script src="assets/js/jquery.nicescroll.min.js"></script>
<script src="assets/js/slick.min.js"></script>
<script src="assets/js/biolife.framework.js"></script>
<script src="assets/js/functions.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous">
</script>
<!-- <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script> -->
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
 <!--fancybox  -->
 <script type="module">
    import { Fancybox } from "https://cdn.jsdelivr.net/npm/@fancyapps/ui/dist/fancybox.esm.js";
  </script>
  <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.umd.js"></script>
  <script>
  AOS.init();
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
      integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"
      integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
  $(".owl-carousel").owlCarousel({ 
    loop: true,
    margin: 10,
    nav: true,
    autoplay: true,
    dragEndSpeed: 1,
    autoplayTimeout: 3000,
    responsive: {
        0: {
            items: 1,
        },
        600: {
            items: 3,
        },
        1000: {
            items: 5,
        },
      },
  });
</script>

<script>
  $(function(){
  $('.before-wrapper').on("mousemove", function (e) {
    var offsets = $(this).offset();
    var fullWidth = $(this).width();
    var mouseX = e.pageX - offsets.left;
    if (mouseX < 0) { mouseX = 0; }
    else if (mouseX > fullWidth) { mouseX = fullWidth }
    $(this).parent().find('.comparison-slider').css({ left: mouseX, transition: 'none' });
    $(this).find('.after-wrapper').css({ transform: 'translateX(' + (mouseX) + 'px)', transition: 'none' });
    $(this).find('.after').css({ transform: 'translateX(' + (-1 * mouseX) + 'px)', transition: 'none' });
  });
  $('.section-wrapper').on("mouseleave", function () {
    $(this).parent().find('.comparison-slider').css({
      left: '50%', transition: 'all .3s'
    });
    $(this).find('.after-wrapper').css({
      transform: 'translateX(50%)', transition: 'all .3s'
    });
    $(this).find('.after').css({
      transform: 'translateX(-50%)', transition: 'all .3s'
    });
  });
});
</script>

