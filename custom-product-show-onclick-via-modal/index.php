<!-- My Custom Product Button -->
<div class="text-center my-4">
    <button type="button" class="btn btn-dark" id="openCustomProductModal">
        My Custom Product
    </button>
</div>

<!-- Bootstrap Modal -->
<div class="modal fade" id="customProductModal" tabindex="-1" aria-labelledby="customProductModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="customProductModalLabel">Product Details</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <?php
        $custom_product = wc_get_product(161);
        if ($custom_product) {
            $thumb_id = $custom_product->get_image_id();
            $thumb_url = wp_get_attachment_url($thumb_id);
            $thumb_alt = get_post_meta($thumb_id, '_wp_attachment_image_alt', true);
            ?>
            <div class="text-center mb-3">
                <img src="<?php echo esc_url($thumb_url); ?>" alt="<?php echo esc_attr($thumb_alt); ?>" style="max-width:120px;height:auto;">
            </div>
            <h4 class="mb-2"><?php echo esc_html($custom_product->get_name()); ?></h4>
            <div class="mb-2" style="color:#c00;font-weight:500;"><?php echo $custom_product->get_price_html(); ?></div>
            <form class="cart" action="<?php echo esc_url( apply_filters( 'woocommerce_add_to_cart_form_action', $custom_product->get_permalink() ) ); ?>" method="post" enctype="multipart/form-data">
                <div class="input-group mb-3" style="width:120px;margin:auto;">
                    <button class="btn btn-outline-secondary" type="button" id="modalQtyMinus">-</button>
                    <input type="text" class="form-control text-center" id="modalQtyInput" name="quantity" value="1" style="max-width:40px;">
                    <button class="btn btn-outline-secondary" type="button" id="modalQtyPlus">+</button>
                </div>
                <button type="submit" name="add-to-cart" value="<?php echo esc_attr($custom_product->get_id()); ?>" class="btn btn-dark w-100">
                    Add to Cart
                </button>
            </form>
            <?php
        } else {
            echo '<p>Product not found.</p>';
        }
        ?>
      </div>
    </div>
  </div>
</div>