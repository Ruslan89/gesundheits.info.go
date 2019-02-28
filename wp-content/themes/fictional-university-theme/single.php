<?php
  
  get_header();

  while(have_posts()) {
    the_post();
    pageBanner();
     ?>

    <div class="container container--narrow page-section">
          <div class="metabox metabox--position-up metabox--with-home-link">
        <p><a class="metabox__blog-home-link" href="<?php echo site_url('/blog'); ?>"><i class="fa fa-home" aria-hidden="true"></i> Magazin</a> <span class="metabox__main">Geschrieben von <?php the_author_posts_link(); ?> am <?php the_time('d.m.y'); ?></span></p>
      </div>

      <div class="generic-content"><?php the_content(); ?></div>

    </div>
    

    
  <?php }

  get_footer();

?>