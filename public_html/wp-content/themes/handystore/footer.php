<?php /* The Footer */ ?>
			</div>
		</div><!-- end of Content wrapper -->
	 <?php /* Shortcode section */
			if (handy_get_option('footer_shortcode_section')==true) {
				if (class_exists('Woocommerce')) {
					if ( is_front_page() || is_home() || is_shop() || is_product() || is_page_template( 'page-templates/front-page.php' ) ) {
						if (function_exists('pt_shortcode_section')) pt_shortcode_section();
					}
				} else {
					if ( is_front_page() || is_home() || is_page_template( 'page-templates/front-page.php' ) ) {
					  if (function_exists('pt_shortcode_section')) pt_shortcode_section();
				  }
				}
			} ?>
			
		<?php if(is_product() || wcfm_is_store_page()) {?>
				<?php //wc_get_template_part( 'alex_2020/wcfm_footer_store' );  ?>
		<?php } ?>
		<?php //wc_get_template_part('alex_2020/alex_footer_modal_css');?>
		
		<?php // wc_get_template_part('alex_2020/alex_footer_modal_css_minha_conta');?>

		<style>
			.top-footer-mais_info {
			text-align: center;
			position: relative;
			background: #f9f9f9;
		}
		.top-footer-mais_info span {
			background: #fff;
			text-align: center;
			padding: 10px 20px 10px 20px;
			border-radius: 10px 10px 0px 0px;
			margin: 10px 10px 0px 10px;
			display: inline-block;
			color: #333;
			font-size: 13px;
			-webkit-box-shadow: 0px -1px 1px -1px #00000026;
			box-shadow: 0px -1px 1px -1px #00000026;
		}
		</style>

		<footer class="site-footer"<?php if (function_exists('handy_custom_footer_bg')) handy_custom_footer_bg(); ?> itemscope="itemscope" itemtype="http://schema.org/WPFooter"><!-- Site's Footer -->

			<div class="top-footer-mais_info"> <span> <i class="fa fa-info-circle" aria-hidden"true"=""></i> Mais informações</span> </div>
			
			<div class="top-footer-widget"><!-- Extra widget area -->
				<div class="container">
					<div class="row">
						<div class="col-xs-12 col-sm-12 col-md-12">
							<?php if ( is_active_sidebar( 'top-footer-sidebar' ) ) : ?>
                            	<?php dynamic_sidebar( 'top-footer-sidebar' ); ?>
                        	<?php endif; ?>
                    	</div>
					</div>
				</div>
			</div><!-- end of Extra widget area -->
			
			<svg version="1.1" id="Camada_1_color" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 2414.6 60" style="enable-background:new 0 0 2414.6 60;" xml:space="preserve">
				<path d="M2414.6,60c-64.2,0-128.3-0.1-192.5-0.1c-738.9,0-1477.8,0-2216.7,0c-1.7,0-3.3,0-5,0c-0.1-0.4-0.3-0.7-0.4-1.1
					c11.1-4.5,21.8-11.1,33.3-13c12.2-2,25.1,0.6,37.7,0.9c4.2,0.1,8.9,0.3,12.6-1.3c9.5-4,18.1-10.2,27.8-13.4
					c12.2-4.1,24.9-7.4,37.6-8.6c7.2-0.6,15,3.6,22.4,5.9c9.7,2.9,19.3,6.1,28.9,9c1.5,0.5,3.5,0.8,4.9,0.3c8.5-3,16.8-1.3,25,0.9
					c4,1.1,7.7,0.9,11.6-0.7c6.9-2.8,14-5.3,21-7.9c1.4-0.5,3-1.1,4.3-0.8c10.1,2.2,21,1.2,30.3,8.3c0.3-2.2,0.6-3.7,0.8-5.6
					c7.7,2.7,14.8,5.6,20.4,11.5c0.9,1,2.6,1.9,3.8,1.8c10.4-0.9,20.9-1.7,31.1-3.4c6.9-1.2,12.9-1.4,19,2.8c6.6,4.6,14.1,2.7,21.2,1.1
					c10.1-2.3,20.1-5.5,30.4-7.1c5.9-1,13.2-1.6,18,1c5,2.7,9.2,2.1,13.9,2.1c1.8,0,3.8,0,5.4,0.6c17.6,6.6,35.8,3.1,53.7,3.6
					c2.5,0.1,5.4-0.6,7.7-1.8c9.6-5.2,20-6.8,30.7-7.9c10.6-1,21.1-2.1,31.7,0.5c3.2,0.8,7.1,0.1,10.4-0.9c8.9-2.9,16.6,1.3,24.7,3.6
					c2.4,0.7,5.1,1.1,7.6,0.9c6.4-0.5,12.8-1.6,19.2-2.2c5.7-0.5,11.5-0.8,17.2-0.8c2.6,0,5.5,0.4,7.7,1.5c4,2,7.8,2.1,12,1.1
					c8.5-1.9,16.7-1.6,24.8,2.3c2.6,1.3,6.2,0.5,9.4,0.6c1.1,0,2.4-0.7,3.3-0.3c15.9,6.9,31.8,3.7,47.4-0.3c7.8-2,15.1-4.2,23.3-1.2
					c3.7,1.3,8.2,0.4,12.3,0.5c6.5,0.1,13.3-1.9,19.5,2.1c1.1,0.7,3.2,0.8,4.3,0.2c9.1-4.6,19-1.9,28.4-3.5c7.2-1.2,14.4-2.1,21.6-2.6
					c2.8-0.2,5.8,0.8,8.6,1.7c4.2,1.2,8.3,2.1,12.6,0.2c1-0.5,3-0.4,3.7,0.3c3.1,3,6.1,1.9,9.6,0.7c6.6-2.3,13.4-2.2,20.2,0.8
					c3.4-6.6,9.6-8.1,16.1-8c12.3,0.1,24.6,0.6,36.9,1c0.5,0,1.2,0.5,1.4,0.3c5.4-4.2,12.4-1.9,18.4-4.5c4.7-2,11.4-3,15.9-1.2
					c17.4,7.1,35,4.4,52.7,3.7c8.1-0.3,16.3-0.8,24.4-1c2.3-0.1,4.8,0.1,6.9,0.9c11.3,4.8,23.4,4.4,35.3,5.2c2.2,0.1,4.6-0.6,6.8-1.4
					c3.6-1.4,7-2.4,9.9,1.4c0.4,0.6,1.8,0.7,2.7,0.6c7.5-1.1,15-2.3,22.6-3.4c1.5-0.2,3-0.2,4.4-0.3c4.3-0.3,8.6-0.3,12.8-0.9
					c2.4-0.3,4.6-2,6.6,0.9c0.4,0.5,2.2,0.2,3.3,0c4.9-0.9,9.7-2.4,14.6-2.9c3.4-0.3,6.9,1,10.4,1.1c5.2,0.2,10.6,0.4,15.8-0.1
					c9.8-1.1,19.5-2.1,29.1,1.3c0.6,0.2,1.4,0.1,2,0.4c5.4,2.3,10.3-4.4,16.5,0.2c4.8,3.5,10.6-1.4,15.9-2.9c9.6-2.7,18.9-2,28.4,0.9
					c7.4,2.3,15.2,3.3,22.9,4.3c2,0.2,5.3-1.3,6.1-2.9c2.4-5,5.8-4.2,10-3.1c7.2,1.9,14.5,3.5,21.7,5.1c0.9,0.2,2,0.2,3,0
					c21.4-5.4,43.3-3.1,65-4c4.2-0.2,8.4-2.4,12.5-3.7c2.3-0.7,4.6-1.9,6.9-2c4.4-0.3,8.8-0.2,13.2,0c12.2,0.4,24.5,0.9,36.7,1.6
					c3.1,0.2,5.6,0.5,7.8-2.6c1.1-1.6,3.7-2.5,5.8-2.9c3.9-0.8,7.9-1.1,11.9-1.5c1.3-0.1,2.9-0.5,3.9,0c8.2,4.1,16.3,2,24.2-0.8
					c3.9-1.4,6.8-0.7,9.2,2.4c3.3,4.1,7.1,4.3,11.5,1.9c1.3-0.7,2.9-1.4,4.2-1.3c12,1.1,22.5-5.3,34-6.4c1.1-0.1,2.3-0.3,3.6-0.6
					c0.8,2.3,1.5,4.4,2.3,6.7c2.7-1.5,5-3.1,7.6-4.1c5.9-2.3,11.3-0.5,16.7,2.4c1.8,1,4.4,1.6,6.3,1.1c13.4-3,26.6-3.9,39.8,0.7
					c1.2,0.4,2.6,0.5,3.8,0.3c6.1-0.5,12.2-1.3,18.3-1.7c6.6-0.4,13.1-1.1,19.2,3.1c2,1.4,6,1.3,8.6,0.4c4.4-1.5,8.3-1.2,12.6-0.2
					c2.6,0.6,5.6-0.6,8.4-0.9c6-0.6,12.1-1.1,18.1-1.5c1-0.1,1.9,0.5,2.9,0.5c5,0.3,9.5,1.1,14.5-2.2c3.6-2.4,9.6-1,14.5-1.4
					c7.9-0.7,15.8-1.3,23.6-2.2c4.1-0.4,8.1-1.4,12.2-2c5.7-0.7,11.5-1.3,17.2-1.9c1.8-0.2,3.8-0.6,5.4,0c7.9,2.8,15.8,1.1,23.7,0.2
					c4.5-0.5,9.1-1.1,13.4-0.4c12.7,2,24.7-1.4,37-3.4c2.1-0.3,4.5-0.9,6.4-0.3c4.1,1.3,7.5,0.6,10.8-1.9c0.9-0.7,2.4-1.5,3.1-1.2
					c4.5,2.1,8.4,1.1,12.6-1c1.7-0.9,4.4-0.6,6.4,0c9.2,3.2,18.4,2.1,27.6,0.4c1.3-0.2,3.3-0.3,4.1,0.4c3.9,3.6,7.9,3.7,12.2,1.2
					c0.5-0.3,1.3-0.2,2.2-0.2c0.3,3.6,0.6,7.1,1,10.6c0.4,0.1,0.8,0.2,1.2,0.3c0.9-1.2,1.9-2.4,2.9-3.6c0.2,0,0.6-0.2,0.9-0.1
					c7.3,4.7,13.3,2.2,19-3.1c4.2-3.9,9.3-5.2,15.1-5.2c3.9,0,8.1-1.6,11.7-3.4c7.2-3.5,13.3-3.9,19.6,2.1c2,1.9,6.6,3,9,2
					c5.5-2.3,10.5-1.2,15.4,0.7c4.1,1.6,6.8,1.1,9.3-2.4c1.5-2.1,3.4-4,5.1-6c0.3,0,0.7,0,1,0c2.3,1.6,4.5,3.9,7.1,4.8
					c15.8,5.4,31.8,10.2,47.6,15.6c13.2,4.6,25.9,11.8,40.5,5.6c10.9-4.6,21.2-0.1,29.9,4.7c12.4,6.8,25.1,8.8,38.7,8.4
					c1.8-0.1,3.6,0.2,5.3,0.8c13.3,4.2,26.5,8.6,39.8,12.6c8.5,2.5,17.3,4.3,26,6.5C2414.6,59.3,2414.6,59.7,2414.6,60z">
				</path>
			</svg>

			<div class="footer-widgets"><!-- Footer's widgets -->
				<div class="container">
					<div class="row">

					<div class="col-xs-12 col-sm-6 col-md-3">
                        <?php if ( is_active_sidebar( 'footer-sidebar-1' ) ) : ?>
                            <?php dynamic_sidebar( 'footer-sidebar-1' ); ?>
                        <?php endif; ?>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-3">
                        <?php if ( is_active_sidebar( 'footer-sidebar-2' ) ) : ?>
                            <?php dynamic_sidebar( 'footer-sidebar-2' ); ?>
                        <?php endif; ?>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-3">
                        <?php if ( is_active_sidebar( 'footer-sidebar-3' ) ) : ?>
                            <?php dynamic_sidebar( 'footer-sidebar-3' ); ?>
                        <?php endif; ?>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-3">
                        <?php if ( is_active_sidebar( 'footer-sidebar-4' ) ) : ?>
                            <?php dynamic_sidebar( 'footer-sidebar-4' ); ?>
                        <?php endif; ?>
                    </div>

					</div>
				</div>
			</div><!-- end of Footer's widgets -->

			<div class="footer-bottom"><!-- Copyrights -->
				<div class="container">
					<div class="row">
						<div class="site-info col-xs-12 col-sm-12 col-md-12">
							<?php /* Get content from admin panel */
							if ( handy_get_option('site_copyright') && handy_get_option('site_copyright')!='' ) { ?>
								&copy;&nbsp;<span itemprop="copyrightYear"><?php echo date("Y"); ?></span>&nbsp;
								<span itemprop="copyrightHolder"><?php echo handy_get_option('site_copyright');?></span>
							<?php } else {
								echo '&copy;&nbsp;<span itemprop="copyrightYear">' . date("Y") . '</span>&nbsp;<span itemprop="copyrightHolder"> by <a href="http://alexsulino.com.br/" itemprop="url">Alex Sulino</a></span>';
							}
							?>
						</div>
					</div>
				</div>
			</div><!-- end of Copyrights -->

		</footer><!-- end of Site's Footer -->

		<?php if (function_exists('pt_site_wrapper_end')) pt_site_wrapper_end(); ?>

		<?php wp_footer(); ?>

	</body>

</html>
