<?php
/**
 * @package WordPress
 * @subpackage Eclectic
 */
?>


	<footer class="">
    <ul class="main-cont">
      <li><?php the_field('copyright', 5) ?></li>
      <li><?php the_field('phone_number', 5) ?></li>
      <li><a href="mailto:<?php the_field('contact_email', 5) ?>"><?php the_field('contact_email', 5) ?></a></li>
      <li><a href="<?php the_field('google_maps_link', 5) ?>" target=_blank><?php the_field('address', 5) ?></a></li>
      <li><a href="<?php the_field('instagram_account', 5) ?>" target=_blank><i class="fa fa-instagram"></i></a><a href="<?php the_field('facebook_account', 5) ?>" target=_blank><i class="fa fa-facebook"></i></a></li>
      <li><a href="http://cobblehilldigital.com" target=_blank>Site by Cobble Hill</a></li>
    </ul>

	</footer>

	</div> <!-- ENDS BODY WRAPPER -->
	<?php wp_footer(); ?>

</body>
</html>
