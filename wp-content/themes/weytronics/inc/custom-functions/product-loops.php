<?php       
    function productsloop(){
        ?>
            <div class="featured_slider slider">
                <?php 
                    global $woocommerce; 
                
                    $args = array(
                        'post_type' =>  'product',
                    );

                    $loop = new WP_QUERY($args); 

                    while ($loop->have_posts() ) : $loop->the_post(); 
                    
                    $product = wc_get_product($loop->post);
                        ?>
                            <!-- Slider Item -->
                            <div class="featured_slider_item">
                                <div class="border_active"></div>
                                <div class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
                                <div class="product_image d-flex flex-column align-items-center justify-content-center">
                                       <img src="<?php echo the_post_thumbnail_url(); ?>" class="img-fluid">
                                </div>
                                <div class="product_content">
                                    <div class="product_price">
                                      Ksh.<?php
                                        // var_dump($product);
                                        echo $product->price; 
                                       ?>

                                    </div>
                                    <div class="product_name">
                                        <div>
                                            <a href="<?php echo get_permalink( $loop->post->ID ) ?>"><?php the_title(); ?></a>
                                        </div>
                                    </div>
                                    <div class="product_extras">
                                        <div class="product_color">
                                            <input type="radio" checked name="product_color" style="background:#b19c83">
                                            <input type="radio" name="product_color" style="background:#000000">
                                            <input type="radio" name="product_color" style="background:#999999">
                                        </div>
                                        <button class="product_cart_button">
                                            <a href="" title="<?php $product->name; ?>" class="text-white">
                                                Add to Cart
                                            </a>
                                        </button>
                                    </div>
                                </div>
                                <div class="product_fav"><i class="fas fa-heart">
                                    <a href="<?php echo esc_url( add_query_arg( 'add_to_wishlist', $product_id ) )?>" rel="nofollow" data-product-id="<?php echo $product_id ?>" data-product-type="<?php echo $product_type?>" class="<?php echo $link_classes ?>" >
    <?php echo $icon ?>
    <?php echo $label ?>
</a>
                                </i></div>
                                    <ul class="product_marks">
                                        <li class="product_mark product_discount">-25%</li>
                                        <li class="product_mark product_new">new</li>
                                    </ul>
                                </div>
                            </div>                         
                        <?php 
                    endwhile;  
                ?>
            </div>
    <?php 
    }
    wp_reset_query();

    add_shortcode('showproducts','productsloop'); 