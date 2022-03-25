	<?php 
global $WCFM, $WCFMmp;
$store_id = $WCFM->wcfm_vendor_support->wcfm_get_vendor_id_from_product( $post->ID );
$store_user      = wcfmmp_get_store( $store_id );
					$store_info      = $store_user->get_shop_info();
					$gravatar        = $store_user->get_avatar();
					$banner_type     = $store_user->get_list_banner_type();
					if( $banner_type == 'video' ) {
						$banner_video = $store_user->get_list_banner_video();
					} else {
						$banner          = $store_user->get_list_banner();
						if( !$banner ) {
							$banner = isset( $WCFMmp->wcfmmp_marketplace_options['store_list_default_banner'] ) ? $WCFMmp->wcfmmp_marketplace_options['store_list_default_banner'] : $WCFMmp->plugin_url . 'assets/images/default_banner.jpg';
							$banner = apply_filters( 'wcfmmp_list_store_default_bannar', $banner );
						}
					}
					$store_name      = isset( $store_info['store_name'] ) ? esc_html( $store_info['store_name'] ) : __( 'N/A', 'wc-multivendor-marketplace' );
					$store_name      = apply_filters( 'wcfmmp_store_title', $store_name , $store_id );
					$store_url       = wcfmmp_get_store_url( $store_id );


?>
<style>
.alex_produtos_destaques_store {
	padding: 10px;
	background: #fff;
	border-radius: 10px;
	-webkit-box-shadow: 0 4px 12px 0 rgba(0, 0, 0, .15);
	box-shadow: 0 4px 12px 0 rgba(0, 0, 0, .15);
	margin: 20px 0px 35px 0px;
		display: block;
	clear: both;
}
.alex_produtos_destaques_store h2 {
	TEXT-ALIGN: CENTER;
}
</style>
	<?php
		$author_id = $post->post_author;
		echo $author_id;
	?>
	
	
	
<!-- Featured products loop -->  
<?php
	$args = array(
		'author'     => $author_id,
		'posts_per_page' => 4,
		'post_type'      => 'product',
		'post_status'    => 'publish',
		'tax_query'      => array(
			array(
				'taxonomy' => 'product_visibility',
				'field'    => 'name',
				'terms'    => 'featured',
				'operator' => 'IN',
				),
			)  
	);
	$featured_product = new WP_Query( $args );
	if ( $featured_product->have_posts() ) : 
		echo '<div class="alex_produtos_destaques_store"><ul class="products">';
		echo '<h2>DESTAQUES</h2>';
		while ( $featured_product->have_posts() ) : $featured_product->the_post();
		$post_thumbnail_id     = get_post_thumbnail_id();
		$product_thumbnail     = wp_get_attachment_image_src($post_thumbnail_id, $size = 'thumbnail');
		$price = get_post_meta( get_the_ID(), '_regular_price', true);
		$product_thumbnail_alt = get_post_meta( $post_thumbnail_id, '_wp_attachment_image_alt', true );
?>
	<li class="product type-product status-publish first featured" style="display:none;">
		<div class="inner-product-content fade-hover">
			<div class="product-img-wrapper">
			<div class="pt-extra-gallery-img images">
				<a href="<?php the_permalink();?>">	
					<img src="<?php echo $product_thumbnail[0];?>" alt="<?php echo $product_thumbnail_alt;?>" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" loading="lazy">
				</a>
			</div>
			</div>
			<div class="product-description-wrapper">		
						<a href="<?php the_permalink();?>" class="link-to-product" rel="bookmark">
							<h2 class="woocommerce-loop-product__title"><?php the_title();?></h2>
						</a>
						<div class="short-description">
							<p><?php the_title();?></p>
						</div>
					
					<!-- ADD TO WISHLIST -->
					<?php echo do_shortcode('[yith_wcwl_add_to_wishlist]');?>
					<!-- COUNT TEXT -->
					<span class="price"><span class="woocommerce-Price-amount amount"><bdi><span class="woocommerce-Price-currencySymbol">R$</span><?php echo $price;?></bdi></span></span>
			</div>
	
	</div>
	</li>
<?php 
	endwhile; 
		echo '</ul></div>';
	endif; 		
	 wp_reset_query();
 ?>          
<!-- Featured products loop -->	
	
	
	
<!-- Categoria products loop -->  
<ul class="products" style="display:none;">
    <?php
	$args = array(
		'author'     => $author_id,
        'product_cat' => 'pizza',
        'posts_per_page' => 5,
        'orderby' => 'rand'
    );
	
    $loop = new WP_Query($args);
	
    while ($loop->have_posts()) : $loop->the_post();
        global $product; ?>
			<li class="product type-product status-publish first featured ">
			 <?php woocommerce_show_product_sale_flash($post, $product); ?>
				<div class="inner-product-content fade-hover">
					<div class="product-img-wrapper">
					<div class="pt-extra-gallery-img images">
						<a href="<?php echo get_permalink($loop->post->ID) ?>" title="<?php echo esc_attr($loop->post->post_title ? $loop->post->post_title : $loop->post->ID); ?>">	
							<?php if (has_post_thumbnail($loop->post->ID)) echo get_the_post_thumbnail($loop->post->ID, 'shop_catalog');
						else echo '<img src="'. woocommerce_placeholder_img_src().'" alt="Placeholder"/>'; ?>
						</a>
					</div>
					</div>
					<div class="product-description-wrapper">		
								<a href="<?php the_permalink();?>" class="link-to-product" rel="bookmark" title="<?php echo esc_attr($loop->post->post_title ? $loop->post->post_title : $loop->post->ID); ?>">
									<h2 class="woocommerce-loop-product__title"><?php the_title();?></h2>
								</a>
								<div class="short-description">
									<p><?php the_title();?></p>
								</div>
							
							<!-- ADD TO WISHLIST -->
							<?php echo do_shortcode('[yith_wcwl_add_to_wishlist]');?>
							<!-- COUNT TEXT -->
							
							<span class="price"><?php echo $product->get_price_html(); ?></span>
							
							<?php woocommerce_template_loop_add_to_cart($loop->post, $product); ?>
					</div>
				</div>
			</li>            
    <?php endwhile; ?>
    <?php wp_reset_query(); ?>
</ul>

         
<!-- Categoria products loop -->  

<?php //echo do_shortcode('[products limit="10" columns="5" category="etiquetas-personalizadas" cat_operator="AND"]'); ?>
<?php //echo do_shortcode('[wcmp_product_category vendor="" per_page="12" columns="4" orderby="title" order="DESC" category="" operator="IN"]'); ?>

<?php echo do_shortcode('[wcfm_store_hours]'); ?>


<ul class="products" style="display:none;">
<?php
    $args = array(
        'post_type' => 'product',
        'posts_per_page' => 12,
        'product_cat' => 'pizza'
        );
    $loop = new WP_Query( $args );
    if ( $loop->have_posts() ) {
        while ( $loop->have_posts() ) : $loop->the_post();
            woocommerce_get_template_part( 'content', 'product' );
        endwhile;
    } else {
        echo __( 'No products found' );
    }
    wp_reset_postdata();
?>
</ul><!--/.products-->
</div>
