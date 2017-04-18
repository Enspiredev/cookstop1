<?php

// =============================================================================
// VIEWS/FOOTER/BASE.PHP
// -----------------------------------------------------------------------------
// Includes the wp_footer() hook and closes out the <body> and <html> tags.
// =============================================================================

?>

  <?php do_action( 'x_before_site_end' ); ?>

  </div> <!-- END .x-site -->

  <?php do_action( 'x_after_site_end' ); ?>

<?php wp_footer(); ?>

</body>
</html>