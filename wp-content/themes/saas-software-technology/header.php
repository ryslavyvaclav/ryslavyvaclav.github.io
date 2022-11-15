<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div class="content-ma">
 *
 * @package SAAS Software Technology
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width">
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?> class="main-bodybox">
	<?php if ( function_exists( 'wp_body_open' ) ) {
	    wp_body_open();
	} else {
	    do_action( 'wp_body_open' );
	}?>
	<?php if(get_theme_mod('saas_software_technology_preloader_hide',false)!= '' || get_theme_mod('saas_software_technology_responsive_preloader_hide',false) != ''){ ?>
    <?php if(get_theme_mod( 'saas_software_technology_preloader_type','center-square') == 'center-square'){ ?>
	    <div class='preloader'>
		    <div class='preloader-squares'>
				<div class='square'></div>
				<div class='square'></div>
				<div class='square'></div>
				<div class='square'></div>
		    </div>
			</div>
    <?php }else if(get_theme_mod( 'saas_software_technology_preloader_type') == 'chasing-square') {?>    
      <div class='preloader'>
				<div class='preloader-chasing-squares'>
					<div class='square'></div>
					<div class='square'></div>
					<div class='square'></div>
					<div class='square'></div>
				</div>
			</div>
    <?php }?>
	<?php }?>
	<header role="banner">
		<a class="screen-reader-text skip-link" href="#main"><?php esc_html_e( 'Skip to content', 'saas-software-technology' ); ?><span class="screen-reader-text"><?php esc_html_e( 'Skip to content', 'saas-software-technology' );?></span></a>
		<div id="header">
			<div class="container">
				<div class="header-box">
					<div class="row">
						<div class="col-lg-3 col-md-4 col-9 align-self-center">
							<div class="logo">
				     	 	<?php if ( has_custom_logo() ) : ?>
			     	    	<div class="site-logo"><?php the_custom_logo(); ?></div>
		            <?php endif; ?>
		            <?php if( get_theme_mod( 'saas_software_technology_site_title',true) != '') { ?>
			            <?php $blog_info = get_bloginfo( 'name' ); ?>
			            <?php if ( ! empty( $blog_info ) ) : ?>
				            <?php if ( is_front_page() && is_home() ) : ?>
				              <h1 class="site-title mt-0 p-0"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				            <?php else : ?>
				              <p class="site-title mt-0 p-0"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
				            <?php endif; ?>
			            <?php endif; ?>
				        <?php }?>
				        <?php if( get_theme_mod( 'saas_software_technology_site_tagline',true) != '') { ?>
			            <?php
			            $description = get_bloginfo( 'description', 'display' );
			            if ( $description || is_customize_preview() ) :
			            ?>
				            <p class="site-description">
				              <?php echo esc_html($description); ?>
				            </p>
			            <?php endif; ?>
				        <?php }?>
					    </div>
						</div>
						<div class="col-lg-7 col-md-6 col-3 align-self-center px-md-0">
							<div class="menubox <?php if( get_theme_mod( 'saas_software_technology_sticky_header') != '') { ?> sticky-header<?php } else { ?>close-sticky <?php } ?>">
								<?php if(has_nav_menu('primary')){ ?>
							   	<div class="toggle-menu responsive-menu text-end">
				           	<button role="tab" onclick="saas_software_technology_menu_open()"><i class="<?php echo esc_attr(get_theme_mod('saas_software_technology_responsive_open_menu_icon','fas fa-bars'));?>"></i><span class="screen-reader-text"><?php esc_html_e('Open Menu','saas-software-technology'); ?></span></button>
				         	</div>
				         	<div id="menu-sidebar" class="nav side-menu">
				            <nav id="primary-site-navigation" class="primary-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Top Menu', 'saas-software-technology' ); ?>">
				              <?php 
				                wp_nav_menu( array( 
				                  'theme_location' => 'primary',
				                  'container_class' => 'main-menu-navigation clearfix' ,
				                  'menu_class' => 'clearfix',
				                  'items_wrap' => '<ul id="%1$s" class="%2$s mobile_nav m-0 p-0">%3$s</ul>',
				                  'fallback_cb' => 'wp_page_menu',
				                ) ); 
				              ?>
				              <a href="javascript:void(0)" class="closebtn responsive-menu" onclick="saas_software_technology_menu_close()"><i class="<?php echo esc_attr(get_theme_mod('saas_software_technology_responsive_close_menu_icon','fas fa-times'));?>"></i><span class="screen-reader-text"><?php esc_html_e('Close Menu','saas-software-technology'); ?></span></a>
				            </nav>
				        	</div>
				      	<?php }?>
				      </div>
						</div>
						<div class="col-lg-2 col-md-2 align-self-center text-md-end text-center header-icons">
							<div class="search-box d-inline-block">
		        		<button type="button" onclick="saas_software_technology_search_show()"><i class="fas fa-search"></i></button>
		        	</div>
			        <div class="search-outer">
			          <div class="serach_inner">
			          	<?php get_search_form(); ?>
			          </div>
			        	<button type="button" class="closepop" onclick="saas_software_technology_search_hide()">X</button>
			        </div>
							<?php if(class_exists('woocommerce')){ ?>
								<a class="cart-contents" href="<?php if(function_exists('wc_get_cart_url')){ echo esc_url(wc_get_cart_url()); } ?>" class="d-inline-block"><i class="fas fa-shopping-cart"></i><span class="screen-reader-text"><?php esc_html_e( 'Cart','saas-software-technology' );?></span></a>
							<?php }?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>