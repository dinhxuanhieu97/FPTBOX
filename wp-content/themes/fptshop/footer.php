<section class="footer">
	  <div class="footer__main mt-20">
	     <div class="main__contain container">
            <div class="row_divide">
                <div class="col-divide-3 left__footer col-divide-lg-12">
                    <h3><?php echo get_field('title_chinh_sach','option'); ?></h3>
                    <div class="line_blue_parent"> <span class="line_blue"></span></div>
                    <div class="left__footer-hd">
                        <a href="<?php echo site_url("huong-dan-mua-hang"); ?>">Hướng dẫn mua hàng</a>
                    </div>
                    <div class="left__footer-hd">
                        <a href="<?php echo site_url("hinh-thuc-thanh-toan"); ?>">Hình thức thanh toán</a>
                    </div>
                    <div class="left__footer-hd">
                        <a href="<?php echo site_url("chinh-sach-bao-mat"); ?>">Chính sách bảo mật</a>
                    </div>

                    </div>

				<div class="col-divide-5 col-divide-lg-12">
					<div class="title_contact">
                        <h3 class="title--item text--upcase"><?php echo get_field('tieu_de_thong_tin_cong_ty','option'); ?></h3>
                        <div class="line_blue_parent"> <span class="line_blue"></span></div>
                        <div class="line--height">
                                    <p><i class="fas fa-map-marker-alt mr-15"></i>Địa chỉ:<?php echo get_field('company_address','option'); ?></p>
                                    <p><i class="fas fa-phone-square transform-ro90 mr-15"></i>Điện thoại: <a href="tel:<?php echo get_field('company_phone','option'); ?>"><?php echo get_field('company_phone','option'); ?></a></p>
                                    <p><i class="fas fa-phone-square transform-ro90 mr-15"></i>Điện thoại hỗ trợ:
                                        <?php while(have_rows('company_phone_support','option')) : the_row(); ?>
                                            &nbsp;-&nbsp;<a href="tel: <?php echo get_sub_field('tel-support','option'); ?>"><?php echo get_sub_field('tel-support','option'); ?></a>
                                        <?php endwhile; ?>
                                    </p>
                                    <p><i class="fas fa-fax mr-15"></i>Fax: <?php echo get_field('company_fax','option'); ?></p>
                                    <p><i class="fas fa-envelope mr-15"></i>Email: <a href="mailto: <?php echo get_field('company_email','option'); ?>"><?php echo get_field('company_email','option'); ?></a></p>
                        </div>
                    </div>
				</div>
				<div class="col-divide-4 right--footer col-divide-lg-12">
					<?php echo get_field('fanpage_facebook','option'); ?>
                </div>

            </div>
		 </div>
	  </div>
	  <div class="footer__sub">
	    <div class="container d--flex space--between">
		<a class="text--light" href="https://www.facebook.com/hieu.77k1" target="_blank">Serviced by KEY-TEAM. All Rights Reserved.</a>
		<a class="text--light" href="<?php echo site_url();?>" target="_blank">© Bản quyền thuộc về <?php echo the_title() ?></a>
		</div>
	  </div>
</section>

<?php
// get_template_part('sections/popUpNoti');
// get_template_part('sections/popupdk'); ?>
 </body>
</html>
