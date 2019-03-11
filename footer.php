  <!-- footer, scripts, closing body and html tag -->

  <footer class="footer container d-flex">
    <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Footer") ) : ?>
    </div>
  </footer>

  <?php endif; ?>
  <?php wp_footer(); ?>
</div> <!--end .scroll -->

  </body>
</html>
