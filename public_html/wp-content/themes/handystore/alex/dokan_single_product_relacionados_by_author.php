<?php 
/**
 * Prints seller info in product single page
 *
 * @global WC_Product $product
 * @param type $val
 */
    global $product;
    $author = get_user_by('id', $product->post->post_author);
    $store_info = dokan_get_store_info($author->ID);	
?>
<div class="main_products_relacionados_by_author">
<h2> Mais produtos desse vendedor </h2>

<ul class="products products_relacionados_by_author lazyloaded" data-expand="-100">
    <?php

        $args = array(
            'post_type' => 'product',
            'posts_per_page' => 4,
			'author' => $author->ID,
		/* alex comenta
            'tax_query' => array(
                    array(
                        'taxonomy' => 'product_visibility',
                       'field'    => 'name',
                        'terms'    => 'featured',
                    ),
                ),
		*/
            );
        $loop = new WP_Query( $args );
        if ( $loop->have_posts() ) {
            while ( $loop->have_posts() ) : $loop->the_post();
                wc_get_template_part( 'content', 'product' );
            endwhile;
        } else {
            echo __( 'Produto não existe' );
        }
        wp_reset_postdata();
    ?>
</ul><!--/.products-->

<a class="button vermais" href="<?php printf('%s', dokan_get_store_url($author->ID), $author->display_name);?>"> Veja mais produtos desse vendedor</a>

</div>