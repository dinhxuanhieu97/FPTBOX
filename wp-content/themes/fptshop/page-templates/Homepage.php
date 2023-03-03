 <?php
 /**
 * template name: Home Page
 */
 get_header();
 get_template_part('sections/main-slider'); ?>

<section class="page_session diva_services">
	<div class="row_divide">
		<?php  while(have_rows('fpt_services','option')) : the_row(); ?>
			<div class="col-divide-3 col-divide-md-6 col-divide-sm-12 diva_services--contain">
			<a href="<?php echo site_url(get_sub_field('fpt_link_servives','option')); ?>">
				<div class="diva_style_image">
					<img src="<?php echo get_sub_field('fpt_services_image','option'); ?>" />
				</div>
				<div class="abs_content">
					<h2><?php echo get_sub_field('fpt_services_title','option'); ?></h2>
					<h4><?php echo get_sub_field('fpt_services_small_title','option'); ?></h4>
					<p><?php echo get_sub_field('fpt_services_content','option'); ?></p>
				</div>
			</a>
			</div>
		<?php endwhile; ?>
	</div>
</section>

<div class="page_session hotline--contain">HOTLINE ĐĂNG KÝ LẮP ĐẶT: 
<a href="tel:<?php echo get_field('company_phone','option'); ?>"><?php echo get_field('company_phone','option'); ?>
</a> 
</div>

<section class="page_session fpt_content_services">
	<div class="container">
		<div class="row_divide">
			<div class="col-divide-8 col-divide-sm-12">
				<?php get_template_part('sections/content-single-product'); ?>
			</div>
			<div class="col-divide-4 col-divide-sm-12">
				<div class="widget--sidbar">
					<?php if (is_active_sidebar('Sidebar')){dynamic_sidebar('sidebar');}?>
				</div>
			</div>
		</div>
	</div>
</section>
<div class="clear"></div>
<?php 
get_template_part('sections/related-post');
get_footer();
?>

