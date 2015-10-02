<?php
/**
 * Template Name: Template - Hero
 * Description: Generic Sub Page Template
 *
 * @package WordPress
 * @subpackage themename
 */

get_header(); ?>

<div class="hero">
  <header class="<?php the_field('header_color') ?> hero">
    <div class="logo">
        <a href="/"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/groundswell-logo-blue.png" alt="" class="blue"></a>
        <a href="/"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/groundswell-logo-white.png" alt="" class="white"></a>
      </div>
      <div class="hamburger">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/hamburger-blue.png" alt="" class="blue">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/hamburger-white.png" alt="" class="white">
      </div>
    </header>
  <?php the_post_thumbnail() ?>
</div>

<div class="content <?php the_title() ?>">
  <?php while ( have_posts() ) : the_post();?>
    <?php the_content() ?>
  <?php endwhile; wp_reset_postdata(); ?>
</div>

<!-- ABOUT PAGE -->
<?php if (is_page('about')) { ?>
<hr class="about">
<div class="skinny-cont team">
  <div class="intro"><?php the_field('team_intro'); ?></div>
  <?php $team_members = new WP_query(array('post_type' => 'teammembers', 'posts_per_page' => '-1', 'order' => 'ASC'));
  while ($team_members->have_posts()) : $team_members->the_post();
    get_template_part('content', 'teammember');
  endwhile; wp_reset_postdata(); ?>
</div>
<div class="main-cont clients">
  <div class="intro">
    <?php the_field('clients_intro'); ?>
  </div>
  <div class="table">
    <div class="table-row">
    <?php $i = 0;
      while( have_rows('clients') ): the_row();
      $black_and_white_image = get_sub_field('black_and_white_image');
      $color_image = get_sub_field('color_image');
      $external_link = get_sub_field('external_link');
      $i++?>
      <div class="client">
        <a href="<?php echo $external_link ?>">
          <img class="main" src="<?php echo $black_and_white_image ?>" alt="">
          <img class="hover" src="<?php echo $color_image ?>" alt="">
        </a>
      </div>
      <?php if ($i == 5) { ?>
        </div>
        <div class="table-row">
      <?php } ?>
    <?php endwhile; ?>
    <div class="client">
      <a class="circle" href="/case-studies">View<br>Case<br>Studies</a>
    </div>
    </div>
  </div>
</div>
<?php } ?>

<!-- SERVICES PAGE -->
<?php if (is_page('services')) { ?>
<div class="main-cont services">
  <?php while( have_rows('service_list') ): the_row();
    $icon = get_sub_field('icon');
    $title = get_sub_field('title');
    $description = get_sub_field('description');?>
    <div class="service">
      <img src="<?php echo $icon ?>" alt="">
      <h3><?php echo $title ?></h3>
      <p><?php echo $description ?></p>
    </div>
  <?php endwhile; ?>
</div>
<div class="services-cta">
  <h2>See us in action</h2>
  <div class="buttons">
    <a href="/case-studies" class="button">View our case studies</a>
    <a href="/recent-work" class="button">Check out recent work</a>
  </div>
</div>
<?php } ?>


<?php get_footer(); ?>
