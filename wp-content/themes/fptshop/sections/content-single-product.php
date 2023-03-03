<div class="tabbedPanels">  <!-- begins the tabbed panels / wrapper-->
 
 <ul class="tabs">
  <li><a href="#panel1">Internet FPT</a></li>
  <li><a href="#panel2">Combo FPT</a></li>
  <li><a href="#panel3">FPT PlayBox</a></li>
  <li><a href="#panel4">FPT Camera</a></li>
 </ul>

<div class="panelContainer">
   <div id="panel1" class="panel">
   <?php
      $args = array(
      'post_type' => 'post',
      'post_status' => 'publish',
      'posts_per_page' => 1,
      'cat'  => 61,
      );
      $new_list = new WP_Query($args);
      if( $new_list -> have_posts()) : ?>
      <div class="latest-post-content">
      <?php while($new_list -> have_posts()) : $new_list -> the_post(); ?>
         <div>
         <div class="latest-post-content-thumbnail"><?php the_post_thumbnail('thumbnail')?></div>
         <h4 class="latest-post-content-title"><?php echo the_title();?></h4>
         <p><?php echo the_content();?></p>
         </div>
         <?php endwhile;	wp_reset_postdata(); ?>
         <?php
         else : esc_html_e( 'No testimonials in the diving taxonomy!', 'text-domain' );
         endif; ?>
      </div>
   </div>
<!-- end panel 1 -->

   <div id="panel2" class="panel">
   <?php
      $args = array(
      'post_type' => 'post',
      'post_status' => 'publish',
      'posts_per_page' => 1,
      'cat'  => 63,
      );
      $new_list = new WP_Query($args);
      if( $new_list -> have_posts()) : ?>
      <div class="latest-post-content">
      <?php while($new_list -> have_posts()) : $new_list -> the_post(); ?>
         <div>
         <div class="latest-post-content-thumbnail"><?php the_post_thumbnail('thumbnail')?></div>
         <h4 class="latest-post-content-title"><?php echo the_title();?></h4>
         <p><?php echo the_content();?></p>
         </div>
         <?php endwhile;	wp_reset_postdata(); ?>
         <?php
         else : esc_html_e( 'No testimonials in the diving taxonomy!', 'text-domain' );
         endif; ?>
      </div>
   </div> <!-- end panel 2 -->


   <div id="panel3" class="panel">
   <?php
      $args = array(
      'post_type' => 'post',
      'post_status' => 'publish',
      'posts_per_page' => 1,
      'cat'  => 62,
      'paged'=>$paged,
      );
      $new_list = new WP_Query($args);
      if( $new_list -> have_posts()) : ?>
      <div class="latest-post-content">
      <?php while($new_list -> have_posts()) : $new_list -> the_post(); ?>
         <div>
         <div class="latest-post-content-thumbnail"><?php the_post_thumbnail('thumbnail')?></div>
         <h4 class="latest-post-content-title"><?php echo the_title();?></h4>
         <p><?php echo the_content();?></p>
         </div>
         <?php endwhile;	wp_reset_postdata(); ?>
         <?php
         else : esc_html_e( 'No testimonials in the diving taxonomy!', 'text-domain' );
         endif; ?>
      </div>
   </div>  <!-- end panel 3 -->

   <div id="panel4" class="panel">
   <?php
         $args = array(
         'post_type' => 'post',
         'post_status' => 'publish',
         'posts_per_page' => 1,
         'cat'  => 64,
         'paged'=>$paged,
         );
         $new_list = new WP_Query($args);
         if( $new_list -> have_posts()) : ?>
         <div class="latest-post-content">
         <?php while($new_list -> have_posts()) : $new_list -> the_post(); ?>
            <div>
            <div class="latest-post-content-thumbnail"><?php the_post_thumbnail('thumbnail')?></div>
            <h4 class="latest-post-content-title"><?php echo the_title();?></h4>
            <p><?php echo the_content();?></p>
            </div>
            <?php endwhile;	wp_reset_postdata(); ?>
            <?php
            else : esc_html_e( 'No testimonials in the diving taxonomy!', 'text-domain' );
            endif; ?>
         </div>
   </div>  <!-- end panel 4 -->

</div> <!-- end div class="panelContainer" or panel wrapper -->

</div> <!-- ends the tabbed panels / wrapper-->

<script>
    jQuery(document).ready(function() {
      jQuery('.tabs a').click(function(){
      
         jQuery('.panel').hide();
         jQuery('.tabs a.active').removeClass('active');
         jQuery(this).addClass('active');
         
         var panel = jQuery(this).attr('href');
         jQuery(panel).fadeIn(1000);
         
         return false;  // prevents link action
         
      });  // end click 

      jQuery('.tabs li:first a').click();

   }); // end ready
</script>