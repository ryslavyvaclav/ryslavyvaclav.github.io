<?php
/**
 * The template part for displaying slider
 *
 * @package SAAS Software Technology
 * @subpackage saas_software_technology
 * @since SAAS Software Technology 1.0
 */
?>
<article id="post-<?php the_ID(); ?>" <?php post_class('inner-service'); ?>>
  <div class="services-box mb-5">    
    <?php if(has_post_thumbnail() && get_theme_mod( 'saas_software_technology_feature_image_hide',true) != '') { ?>
      <div class="service-image">
        <a href="<?php echo esc_url( get_permalink() ); ?>">
          <?php  the_post_thumbnail(); ?>
          <span class="screen-reader-text"><?php the_title(); ?></span>
        </a>
      </div>
    <?php }?>
    <div class="lower-box">
      <div class="tc-category">
        <?php the_category(); ?>
      </div>
      <h2><a href="<?php echo esc_url( get_permalink() ); ?>"><?php the_title(); ?><span class="screen-reader-text"><?php the_title(); ?></span></a></h2>
      <?php if( get_theme_mod( 'saas_software_technology_date_hide',true) != '' || get_theme_mod( 'saas_software_technology_comment_hide',true) != '' || get_theme_mod( 'saas_software_technology_author_hide',true) != '' || get_theme_mod( 'saas_software_technology_time_hide',true) != '') { ?>
        <div class="metabox py-1 px-2 mb-3">
          <?php if( get_theme_mod( 'saas_software_technology_date_hide',true) != '') { ?>
            <span class="entry-date me-2"><i class="far fa-calendar-alt me-1"></i><?php echo esc_html( get_the_date() ); ?></span>
          <?php } ?>

          <?php if( get_theme_mod( 'saas_software_technology_author_hide',true) != '') { ?>
            <span class="entry-author me-2"><i class="fas fa-user me-1"></i><a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' )) ); ?>"><?php the_author(); ?><span class="screen-reader-text"><?php the_author(); ?></span></a></span>
          <?php } ?>

          <?php if( get_theme_mod( 'saas_software_technology_comment_hide',true) != '') { ?>
            <i class="fas fa-comments me-1"></i><span class="entry-comments me-2"> <?php comments_number( __('0 Comments','saas-software-technology'), __('0 Comments','saas-software-technology'), __('% Comments','saas-software-technology') ); ?></span>
          <?php } ?>

          <?php if( get_theme_mod( 'saas_software_technology_time_hide',false) != '') { ?>
            <span class="entry-time"><i class="fas fa-clock me-1"></i> <?php echo esc_html( get_the_time() ); ?></span>
          <?php }?>
        </div>
      <?php } ?>
      <?php if(get_theme_mod('saas_software_technology_post_content') == 'Full Content'){ ?>
        <?php the_content(); ?>
      <?php }
      if(get_theme_mod('saas_software_technology_post_content', 'Excerpt Content') == 'Excerpt Content'){ ?>
        <?php if(get_the_excerpt()) { ?>
          <p><?php $saas_software_technology_excerpt = get_the_excerpt(); echo esc_html( saas_software_technology_string_limit_words( $saas_software_technology_excerpt, esc_attr(get_theme_mod('saas_software_technology_post_excerpt_length','20')))); ?><?php echo esc_html( get_theme_mod('saas_software_technology_button_excerpt_suffix','[...]') ); ?></p>
        <?php }?>
      <?php }?>
      <?php if ( get_theme_mod('saas_software_technology_post_button_text','Read More') != '' ) {?>
        <div class="read-btn mt-4">
          <a href="<?php echo esc_url( get_permalink() );?>" class="blogbutton-small" ><?php echo esc_html( get_theme_mod('saas_software_technology_post_button_text',__( 'Read More','saas-software-technology' )) ); ?><span class="screen-reader-text"><?php echo esc_html( get_theme_mod('saas_software_technology_post_button_text',__( 'Read More','saas-software-technology' )) ); ?></span>
          </a>
        </div>
      <?php }?>
    </div>
  </div>
</article>