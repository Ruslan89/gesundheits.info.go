<?php
get_header();
pageBanner();

while(have_posts()) {
  the_post();
?>

<div class="container container--narrow page-section">

	<div class="metabox metabox--position-up metabox--with-home-link">
    <p><a class="metabox__blog-home-link" href="<?php echo get_post_type_archive_link('heilmittel'); ?>"><i class="fa fa-home" aria-hidden="true"></i> Alle Heilmittel</a> <span class="metabox__main"><?php echo get_the_category_list(', ') ?></span></p>
  </div>

  	<div class="generic-content">
      <div class="row group">
        <div class="one-third">
          <?php the_post_thumbnail('heilmittelPortrait'); ?>
        </div>

        <div class="two-thirds">

          <h2 class="headline headline--mainBlue"><?php the_title(); ?><strong> Einleitung</strong></h2>
          <?php the_field('main_body_content'); ?>

        </div>     
      </div>  
    </div>

  <div class="worko-tabs">
  
    <input class="state" type="radio" title="tab-one"   name="tabs-state" id="tab-one" checked />
    <input class="state" type="radio" title="tab-two"   name="tabs-state" id="tab-two" />
    <input class="state" type="radio" title="tab-three" name="tabs-state" id="tab-three" />
    <input class="state" type="radio" title="tab-four"  name="tabs-state" id="tab-four" />

    <div class="tabs flex-tabs">
        <label for="tab-one"    id="tab-one-label"    class="tab"><?php the_field('content_part_1_headline'); ?></label>
        <label for="tab-two"    id="tab-two-label"    class="tab"><?php the_field('content_part_2_headline'); ?></label>
        <label for="tab-three"  id="tab-three-label"  class="tab">Häufig gestellte Fragen</label>
        <label for="tab-four"   id="tab-four-label"   class="tab">Erfahrungsberichte</label>


        <div id="tab-one-panel" class="panel active"> 
          <hr class="section-break">            
          <p class="headline headline--medium"><?php the_field('content_part_1_text'); ?></p>
        </div>
        <div id="tab-two-panel" class="panel">
          <hr class="section-break">
          <p class="headline headline--medium"><?php the_field('content_part_2_text'); ?></p>
        </div>
        <div id="tab-three-panel" class="panel">
          <hr class="section-break">
          <h3 class="headline headline--medium-tab"><?php the_field('content_part_3_headline'); ?></h3>
          <p class="headline headline--medium-tab"><?php the_field('content_part_3_text'); ?></p>
          <hr class="section-break">
          <h3 class="headline headline--medium-tab"><?php the_field('content_part_4_headline'); ?></h3>
          <p class="headline headline--medium-tab"><?php the_field('content_part_4_text'); ?></p>
          <hr class="section-break">
          <h3 class="headline headline--medium-tab"><?php the_field('content_part_5_headline'); ?></h3>
          <p class="headline headline--medium-tab"><?php the_field('content_part_5_text'); ?></p>
          <hr class="section-break">
          <h3 class="headline headline--medium-tab"><?php the_field('content_part_6_headline'); ?></h3>
          <p class="headline headline--medium-tab"><?php the_field('content_part_6_text'); ?></p>
          <hr class="section-break">
          <h3 class="headline headline--medium-tab"><?php the_field('content_part_7_headline'); ?></h3>
          <p class="headline headline--medium-tab"><?php the_field('content_part_7_text'); ?></p>
          <hr class="section-break">
          <h3 class="headline headline--medium-tab"><?php the_field('content_part_8_headline'); ?></h3>
          <p class="headline headline--medium-tab"><?php the_field('content_part_8_text'); ?></p>
          <hr class="section-break">
          <h3 class="headline headline--medium-tab"><?php the_field('content_part_9_headline'); ?></h3>
          <p class="headline headline--medium-tab"><?php the_field('content_part_9_text'); ?></p>
          <hr class="section-break">
          <h3 class="headline headline--medium-tab"><?php the_field('content_part_10_headline'); ?></h3>
          <p class="headline headline--medium-tab"><?php the_field('content_part_10_text'); ?></p>
          <hr class="section-break">
          <h3 class="headline headline--medium-tab"><?php the_field('content_part_11_headline'); ?></h3>
          <p class="headline headline--medium-tab"><?php the_field('content_part_11_text'); ?></p>
          <hr class="section-break">
          <h3 class="headline headline--medium-tab"><?php the_field('content_part_12_headline'); ?></h3>
          <p class="headline headline--medium-tab"><?php the_field('content_part_12_text'); ?></p>
          <hr class="section-break">
          <h3 class="headline headline--medium-tab"><?php the_field('content_part_13_headline'); ?></h3>
          <p class="headline headline--medium-tab"><?php the_field('content_part_13_text'); ?></p>
          <hr class="section-break">
          <h3 class="headline headline--medium-tab"><?php the_field('content_part_14_headline'); ?></h3>
          <p class="headline headline--medium-tab"><?php the_field('content_part_14_text'); ?></p>
          <hr class="section-break">
          <h3 class="headline headline--medium-tab"><?php the_field('content_part_15_headline'); ?></h3>
          <p class="headline headline--medium-tab"><?php the_field('content_part_15_text'); ?></p>
        </div>
        <div id="tab-four-panel" class="panel">
          <h3 class="headline headline--medium">Alle Erfahrungsberichte zu <?php the_title(); ?></h3>
          <p class="headline headline--medium"><?php the_field('testimonial_shortcode_slider'); ?></p>
          <hr class="section-break">
          <h3 class="headline headline--medium">Schreibe deinen Erfahrungsbericht zu <?php the_title(); ?></h3>
          <p class="headline headline--medium"><?php the_field('testimonial_shortcode_form'); ?></p>
        </div>
   </div> 

  <?php get_template_part('template-parts/page-themen'); ?>
        
        <div>
          <?php 
          // Magazin
          $verwandterMagazinbeitrag = new WP_Query (array(
            'posts_per_page'  => 3,
            'post_type'       => 'post', 
            'orderby'         => 'meta_value_num',
            'order'           => 'ASC',
            'meta_query'      =>  array (
                                    array (
                                      'key'     => 'passendes_heilmittel',
                                      'compare' => 'LIKE',
                                      'value'   => '"' . get_the_ID() . '"'
                                    ),
                                  ),
          ));

            if ($verwandterMagazinbeitrag->have_posts()) {
              echo '<hr class="section-break">';
              echo '<h2 class="headline headline--medium">Magazin:</h2>';
              while($verwandterMagazinbeitrag->have_posts()) {
                $verwandterMagazinbeitrag->the_post(); ?>
                <div class="post-item">
                  <h2 class="headline headline--medium headline--post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

                  <div class="generic-content">
                    <?php the_excerpt(); ?>
                    <p><a class="btn btn--blue" href="<?php the_permalink(); ?>">Lesen &raquo;</a></p>
                  </div>

                </div>
 
              <?php
 
              } wp_reset_postdata();
            }
          ?>
        </div>

        <div>
          <?php  
          // Beschwerden
          $passendeBeschwerde = new WP_Query (array(
            'posts_per_page'  => 3,
            'post_type'       => 'beschwerde', 
            'orderby'         => 'menu_order',
            'order'           => 'ASC',
            'meta_query'      =>  array (
                                    array (
                                      'key'     => 'passendes_heilmittel',
                                      'compare' => 'LIKE',
                                      'value'   => '"' . get_the_ID() . '"'
                                    ),
                                  ),
          )); 

          if ($passendeBeschwerde->have_posts()) {
            echo '<hr class="section-break">';
            echo '<h2 class="headline headline--medium">Beschwerden:</h2>';     
            while($passendeBeschwerde->have_posts()) {
              $passendeBeschwerde->the_post(); ?>
              <div class="row group">
                
              <div class="post-item"> 		
                <h2 class="headline headline--medium headline--post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

                <div>
                  <?php if (has_excerpt()) {
                    echo get_the_excerpt();
                    } else {
                    echo wp_trim_words(get_field('main_body_content'), 20); 
                    } ?>
                    <p><a class="btn btn--blue" href="<?php the_permalink(); ?>">Lesen &raquo;</a></p>
                </div>
              </div> 
              <?php
              } wp_reset_postdata();
            }
          ?>
        </div>

        <?php 
        // Heilmittel
          $passendesHeilmittel = get_field('passendes_heilmittel');

          if ($passendesHeilmittel) {
            echo '<hr class="section-break">';
            echo '<h2 class="headline headline--medium">Heilmittel:</h2>';
          foreach($passendesHeilmittel as $heilmittel) { ?>
            <div class="row group">
              
            <div class="post-item"> 		
              <h2 class="headline headline--medium headline--post-title"><a href="<?php echo get_the_permalink($heilmittel); ?>"><?php echo get_the_title($heilmittel); ?></a></h2>

              <div>
                <?php if (has_excerpt()) {
                  echo get_the_excerpt();
                  } else {
                  echo wp_trim_words(get_field('main_body_content'), 20); 
                  } ?>
                  <p><a class="btn btn--blue" href="<?php echo get_the_permalink($heilmittel); ?>">Lesen &raquo;</a></p>
              </div>
            </div>
          <?php 
            } 
          } ?>
          
          <div>
          <?php  
          // Vitalstoff
          $passenderVitalstoff = new WP_Query (array(
            'posts_per_page'  => 3,
            'post_type'       => 'vitalstoff', 
            'orderby'         => 'menu_order',
            'order'           => 'ASC',
            'meta_query'      =>  array (
                                    array (
                                      'key'     => 'passendes_heilmittel',
                                      'compare' => 'LIKE',
                                      'value'   => '"' . get_the_ID() . '"'
                                    ),
                                  ),
          ));

          if ($passenderVitalstoff->have_posts()) {
            echo '<hr class="section-break">';
            echo '<h2 class="headline headline--medium">Vitalstoff:</h2>';     
            while($passenderVitalstoff->have_posts()) {
              $passenderVitalstoff->the_post(); ?>
              <div class="row group">
                
              <div class="post-item"> 		
                <h2 class="headline headline--medium headline--post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

                <div>
                  <?php if (has_excerpt()) {
                    echo get_the_excerpt();
                    } else {
                    echo wp_trim_words(get_field('main_body_content'), 20); 
                    } ?>
                    <p><a class="btn btn--blue" href="<?php the_permalink(); ?>">Lesen &raquo;</a></p>
                </div>
              </div>

              <?php
              } wp_reset_postdata();
            }
          ?>
        </div>  
        </div> 
        </div> 


    
	
<?php }
get_footer();
?><?php
