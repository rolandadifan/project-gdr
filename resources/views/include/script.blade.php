<!-- swiper js -->
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<!-- boostrap js -->
<script
  src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0"
  crossorigin="anonymous"
></script>

<!-- <script src="./assets/scripts/enrollment.js"></script> -->
<script type="module" src="{{ asset('assets/scripts/main.js') }}"></script>
<script src="{{ asset('assets/scripts/course.js') }}"></script>
<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/@splidejs/splide@2.4.21/dist/js/splide.min.js"></script>
<!-- splide grid -->
<script src="https://cdn.jsdelivr.net/npm/@splidejs/splide-extension-grid@0.2.0/dist/js/splide-extension-grid.min.js"></script>
<!-- swiper js -->

<script>
  const swiper = new Swiper('.swiper-container', {
// slidesPerView:3,
// spaceBetween: 30,
// loop: true,
    effect: 'coverflow',
    grabCursor: true,
    centeredSlides: true,
      slidesPerView: 'auto',
      autoplay: {
      delay: 3000,
      disableOnInteraction: false,
      },
      coverflowEffect: {
        rotate: 50,
        stretch: 0,
        depth: 50,
        modifier: 1,
        slideShadows: true,
      },
    pagination: {
        el: '.swiper-pagination',
    },
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
});
</script>
