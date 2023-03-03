<?php
 get_header();
?>

<section class="top_backgroud_overlay">
    <div class="container">
        <?php while(have_posts()){
            the_post() ; ?>
            <div class="sp-title">
                <h4><?php echo the_title(); ?></h4>		
            </div>
        <?php }?>
    </div>
</section>

<section class="single__page">
    <div class="container">
		<div class="row_divide">
			<div class="col-divide-8">
			<?php while(have_posts()){
            the_post() ; ?>
			<div class="single__page-breadcum">
				<span><a href="<?php echo get_home_url(); ?>"><i class="fa fa-home" aria-hidden="true"></i>&nbsp;Trang Chủ</a></span>
				<span>>></span>
				<span><?php echo the_title(); ?></span>
			</div>
			<div class="single__page-content">
				<h1 class="big--title"><?php echo the_title(); ?></h1>
					<?php echo the_content(); ?>
			</div>
			<?php }?>

			
			</div>
			<div class="col-divide-4">
				<div class="widget--sidbar">
					<?php if (is_active_sidebar('Sidebar')){dynamic_sidebar('sidebar');}?>
				</div>
			</div>
		</div>

        
    </div>
</section>
<?php get_template_part('sections/related-post') ?>

<?php
 get_footer();
?>