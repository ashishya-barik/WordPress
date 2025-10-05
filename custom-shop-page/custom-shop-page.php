<?php
// Hide default WooCommerce products on category pages
add_action( 'wp_head', function() {
    if ( is_product_category() ) {
        echo '<style>
            .woocommerce.columns-4 ul.products {
                display: none !important;
            }
        </style>';
    }
});

add_action( 'woocommerce_before_shop_loop', function() {
    if ( is_shop() ) {
        echo '<div class="row custom-product-loop">';
        $args = array(
            'post_type'      => 'product',
            'posts_per_page' => -1,
        );

        $loop = new WP_Query( $args );

        if ( $loop->have_posts() ) {
            while ( $loop->have_posts() ) {
                $loop->the_post();
                global $product;
                ?>
                <div class="col-md-3">
                    <div class="custom-prod-loop-item">
                        <div class="prod-img">
                            <a href="<?php the_permalink(); ?>">
                                <?php if ( has_post_thumbnail() ) { the_post_thumbnail('medium'); } ?>
                            </a>
                            <div class="prod-content">
                                <h5><?php the_title(); ?></h5>
                                <span class="price"><?php echo $product->get_price_html(); ?></span>
                                <a href="<?php the_permalink(); ?>" class="view-prod-btn">View Product</a>
                            </div>
                        </div>
                    </div>
                </div>
                <?php
            }
        } else {
            echo '<p>No products found.</p>';
        }

        wp_reset_postdata();
        echo '</div>'; 
    }

    
    if ( is_product_category() ) {

        $term = get_queried_object();
        $thumbnail_id = get_term_meta( $term->term_id, 'thumbnail_id', true );
        $image = wp_get_attachment_url( $thumbnail_id );
        if ( $image ) {
            echo '<div class="custom-cat-banner">';
            echo '<img src="' . esc_url( $image ) . '" alt="' . esc_attr( $term->name ) . '">';
            echo '<h2 class="cat-title">' . esc_html( $term->name ) . '</h2>';
            echo '</div>';
        }
        echo '<div class="row custom-product-loop">';

        $args = array(
            'post_type' => 'product',
            'posts_per_page' => -1,
            'tax_query' => array(
                array(
                    'taxonomy' => 'product_cat',
                    'field'    => 'term_id',
                    'terms'    => $term->term_id,
                ),
            ),
        );

        $products = new WP_Query( $args );
        if ( $products->have_posts() ) {
            while ( $products->have_posts() ) {
                $products->the_post();
                global $product;
                ?>
                <div class="col-md-4">
                    <div class="custom-prod-loop-item">
                        <div class="prod-img">
                            <a href="<?php the_permalink(); ?>">
                                <?php if ( has_post_thumbnail() ) { the_post_thumbnail('medium'); } ?>
                                <div class="prod-content">
                                    <h5><?php the_title(); ?></h5>
                                    <span class="price"><?php echo $product->get_price_html(); ?></span>
                                    <a href="<?php the_permalink(); ?>" class="view-prod-btn">View Product</a>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <?php
            }
        } else {
            echo '<p>No products found in this category.</p>';
        }
        wp_reset_postdata();
        echo '</div>'; 
    }

    // Hide default WooCommerce loop
    echo '<style>.woocommerce ul.products { display:none !important; }</style>';

}, 5 );


add_action( 'init', function() {
    remove_action( 'woocommerce_before_shop_loop', 'woocommerce_result_count', 20 );
    remove_action( 'woocommerce_before_shop_loop', 'woocommerce_catalog_ordering', 30 );
});