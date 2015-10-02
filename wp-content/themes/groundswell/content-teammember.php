<li class="team-member">
  <?php the_post_thumbnail() ?>
  <div class="overlay">
    <h2><?php the_title() ?> - <span><?php the_field('title') ?></span></h2>
    <?php the_content() ?>
  </div>
</li>
