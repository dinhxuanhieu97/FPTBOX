<div class="news__tt">
			<h3 class="title--section title--background text--upcase">Danh sách sản phẩm theo hãng</h3>
			  <?php
			  $args = array(
			  'post_type' => 'post',
			  'post_status' => 'publish',
			  );
			  $new_list = new WP_Query($args);
			  if( $new_list -> have_posts()) : ?>
			  <div class="news__ttcontent">
				<?php
				while($new_list -> have_posts()) : $new_list -> the_post();
				?>
				<div class="row-divide news-Slides swing-in-left-fwd" style="margin: 15px;">
				  <div class="news__ttcontent-img">
					<a href="<?php the_permalink();?>"><?php the_post_thumbnail('medium')?></a>
				  </div>
				  <div class="news__ttcontent-contain">
					<div class="news__ttcontent-content">
					  <a href="<?php the_permalink();?>"><h4 class="news__ttcontent-title"><?php echo the_title();?></h4></a>
					  <div class="ttcontent--theday">
						<i class="far fa-clock"></i>&nbsp;<?php echo get_the_date(); ?>&nbsp;<?= gt_get_post_view(); ?>
					  </div>
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
				endif;
				?>
			  </div>
		</div>