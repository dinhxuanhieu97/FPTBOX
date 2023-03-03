<section class="diva-information">
	<div class="container">
		<div class="diva-newspaper-title"> 
			<h3><?php echo get_field('diva_information_event_title','option'); ?> </h3>
		</div>
		<div class="item__title title--item">
			<?php
			$args = array(
				'post_type'   => 'post',
				'post_status' => 'publish',
			);

			$news_list = new WP_Query( $args );
			if( $news_list->have_posts() ) :
			?>

			<div class="news__list">
				<?php
				while( $news_list->have_posts() ) :
					$news_list->the_post();
					?>
					<div class="row-divide news-Slides" style="margin:15px">
						<div class="news__item-img">
							<a href="<?php the_permalink();?>"><?php the_post_thumbnail('medium')?></a>
						</div>
						<div class="news__item-contain">
							<div class="news__item-content">
								<a href="<?php the_permalink();?>"><h4 class="title--item news__item-title"><?php echo the_title();?></h4></a>
							</div>
						</div>
						<div class="clear"></div>
					</div>
					<?php
				endwhile;
				wp_reset_postdata();
				?>
				<?php
				else :
					esc_html_e( 'No testimonials in the diving taxonomy!', 'text-domain' );
				endif;?>
		</div>
	</div>
</section>