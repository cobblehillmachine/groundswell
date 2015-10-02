<?php get_header(); ?>

  <?php $args = array('post_type'=>'homepageheros', 'orderby'=>'rand', 'posts_per_page'=>'1');
  $hero = new WP_Query($args);
  while ($hero->have_posts()) : $hero->the_post();
  $img_id = get_post_thumbnail_id();
  $img_url = wp_get_attachment_image_src($img_id, 'full'); ?>
  <div class="homepage-hero" style="background-image:url(<?php echo $img_url[0] ?>)">
    <header class="<?php the_field('header_color') ?> homepage">
      <div class="logo">
        <a href="/"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/groundswell-logo-blue.png" alt="" class="blue"></a>
        <a href="/"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/groundswell-logo-white.png" alt="" class="white"></a>
      </div>
      <div class="hamburger">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/hamburger-blue.png" alt="" class="blue">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/hamburger-white.png" alt="" class="white">
      </div>
    </header>


    <?php the_content() ?>
  </div>
  <?php endwhile; wp_reset_postdata(); ?>

<div class="skinny-cont homepage-ctas">
  <?php while( have_rows('homepage_ctas') ): the_row();
    $cta = get_sub_field('cta');?>
    <div class="cta">
      <?php echo $cta ?>
    </div>
  <?php endwhile; ?>
</div>

<div class="case-study-slider main-cont">
  <div class="flexslider">
    <ul class="slides">
      <?php $case_studies = new WP_query(array('post_type' => 'casestudies', 'posts_per_page' => '-1', 'order' => 'ASC'));
      while ($case_studies->have_posts()) : $case_studies->the_post();
        get_template_part('content', 'casestudyskinny');
      endwhile; wp_reset_postdata(); ?>
    </ul>
  </div>
</div>

<?php get_footer(); ?>
