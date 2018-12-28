<?php
/**
 * The template for displaying product content within loops
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce/Templates
 * @version 3.4.0
 */

defined( 'ABSPATH' ) || exit;

global $product;

// Ensure visibility.
if ( empty( $product ) || ! $product->is_visible() ) {
	return;
}
?>
<div class="product_item is_new">
	<div class="product_border"></div>
	<div class="product_image d-flex flex-column align-items-center justify-content-center">
		<!-- Image  -->
		<?php 
			
		?>
	</div>
	<div class="product_content">
		<div class="product_price">
			Ksh.
			<?php  
				echo $product->price; 
			?>
		</div>
		<div class="product_name">
			<div>
				<a href="<?php echo $product->slug; ?>" tabindex="0">
					<?php 
						echo $product->name; 
					?>
				</a>
			</div>
		</div>
	</div>
	<div class="product_fav">
		<i class="fas fa-shopping-basket"></i>
	</div>
	<ul class="product_marks d-none">
		<li class="product_mark product_discount">-25%</li>
		<li class="product_mark product_new">new</li>
	</ul>
</div>