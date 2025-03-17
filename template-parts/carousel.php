<div>
    <div class="main-carousel">
        <div><img src="http://localhost:8080/wp-content/uploads/2025/03/slide3.jpg" alt="Slide 1"></div>
        <div><img src="http://localhost:8080/wp-content/uploads/2025/03/slide2.jpeg" alt="Slide 2"></div>
        <div><img src="http://localhost:8080/wp-content/uploads/2025/03/slide1.jpeg" alt="Slide 3"></div>
    </div>

    <script>
        jQuery(document).ready(function($) {
            $('.main-carousel').slick({
                dots: true,
                infinite: true,
                speed: 900,
                slidesToShow: 1,
                adaptiveHeight: true,
                autoplay: true,
                autoplaySpeed: 3000,
                prevArrow: false,
                nextArrow: false,
            });
        });
    </script>

</div>