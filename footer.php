

<!-- footer, scripts, closing body and html tag -->

  <footer class="footer container d-flex">
    <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Footer") ) : ?>
    </div>
  </footer>

  <?php endif; ?>
  <?php wp_footer(); ?>
</div> <!--end .scroll -->
<script>
  var mySwiper = new Swiper ('.swiper-container', {
    // Optional parameters
    direction: 'horizontal',
    loop: true,
    effect: 'fade',
    preloadImages: true,

    // If we need pagination
    pagination: {
      el: '.swiper-pagination',
    },

    // Navigation arrows
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
  })
  </script>
  </body>
</html>
