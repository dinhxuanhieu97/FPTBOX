<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
     <meta charset="<?php bloginfo('charset'); ?>" />
     <meta name="viewport" content="width=device-width, initial-scale=1.0" />
     <meta http-equiv="X-UA-Compatible" content="IE=edge" />
     <!-- <meta property="og:image" content="<?php echo esc_url($featured_img_url); ?>" /> -->
     <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
     <?php wp_head(); ?>   	
</head>
<body>
	<header>
        <section class="container">
            <div class="row_divide menu__desktop">
                <div class="header_logo col-divide-2">
				    <a href="<?php echo get_home_url(); ?>"><img src="<?php echo get_field('logo','option');  ?>" /></a>
                </div>
                <div class="col-divide-8 diva-menu">
     			    <?php wp_nav_menu(array( '	theme_location' => 'headerMenuLocation' )); ?>
                </div>
                <div class="col-divide-2 diva--phone">
                    <a href="tel:<?php echo get_field('company_phone','option'); ?>"><i class="fa fa-phone-square" aria-hidden="true"></i> <?php echo get_field('company_phone','option'); ?></a>
                </div>
            </div>
        </section>
	</header>
    <div class="menu__mobile">
        <div class="row_divide">
            <span class="click-close col-divide-lg-4">X</span>
            <span class="click-open col-divide-lg-4"><i class="fa fa-bars" aria-hidden="true"></i></span>
            <div class="mobile--logo col-divide-lg-4">
                <a href="<?php echo get_home_url(); ?>"><img src="<?php echo get_field('logo','option');  ?>" /></a>
            </div>
            <div class="col-divide-lg-4 menu__mobile-phone">
                <a href="tel:<?php echo get_field('company_phone','option'); ?>"><i class="fa fa-phone-square" aria-hidden="true"></i></a>
            </div>
        </div>
        <div class="menu__mobile-content slide-in-blurred-tl">
            <?php wp_nav_menu(array( ' theme_location' => 'headerMenuLocation' )); ?>
        </div>
    </div>

<script type="text/javascript">
    jQuery(document).ready(function () {
        jQuery(window).scroll(function(){
                var scroll = jQuery(window).scrollTop();
                if (scroll >= 50) {
                jQuery("header").css({position:'fixed'});
                } else if (scroll <= 50) {
                    jQuery("header").css({position:'unset'});
                }
            });
    });
</script>
		
	