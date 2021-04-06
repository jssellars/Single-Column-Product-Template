<?php
/**
 * The Template for displaying all single products
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see         https://docs.woocommerce.com/document/template-structure/
 * @package     WooCommerce\Templates
 * @version     1.6.4
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

get_header( 'shop' ); ?>

<?php
		/**
		 * woocommerce_before_main_content hook.
		 *
		 * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
		 * @hooked woocommerce_breadcrumb - 20
		 */
		do_action( 'woocommerce_before_main_content' );
	?>
    
    <?php while ( have_posts() ) : ?>
			<?php the_post(); ?>
            
          <?php  global $product;

        /**
         * Hook: woocommerce_before_single_product.
         *
         * @hooked woocommerce_output_all_notices - 10
         */
        do_action( 'woocommerce_before_single_product' );

        if ( post_password_required() ) {
            echo get_the_password_form(); // WPCS: XSS ok.
            return;
        }
        ?>
        <div id="product-<?php the_ID(); ?>" <?php wc_product_class( '', $product ); ?>>
			<div class = "custom_full_img_span span_12">
			<img src="<?php	the_field('product_banner');?>" alt="Avatar" style="width:100%">
			<div style="text-align:center;margin-top:50px;" class = "custom_full_img_span span_12">
			<h2 class="text-wisdom"> <?php the_title(); ?> </h2>
			<p><?php the_excerpt(); ?> </p>
			</div>
			</div>

			<div style="margin-top:50px" class = "row" >
			<div style="text-align:center" class = "custom_full_img_span span_12">
			<h2 class="text-wisdom"> <?php the_field('type_heading');?>  </h2>
			<p><?php the_field('type_description');?> </p>
			<?php if( have_rows('flowers_type') ):	
					while ( have_rows('flowers_type') ) : the_row(); ?>
						<div style="display:inline-grid;margin: 0px 20px 3px;" id="<?php the_sub_field('flower_name');?>" class="card">
					<?php echo $all_variations; ?>				
					<img src="<?php	the_sub_field('flower_image');?>" alt="Avatar" style="width:100%">
					<div class="container">
						<h3 style="font-family: Parisienne;margin-top:20px;"><?php the_sub_field('flower_name');?></h3> 
						<h5><b><?php the_sub_field('flower_price');?> euro</b></h5> 
						<p style="font-size: 14px; padding-left: 15px; padding-right: 15px;line-height: 1.6rem;" ><?php the_sub_field('flower_description');?></p> 
					</div>
					</div>
				<?php
						
					endwhile;
		
				else :

				endif;?>
			
		</div>

	<?php endwhile; // end of the loop. ?>

		<div style="margin-top:0px" class = "row" >
			<div style="text-align:center" class = "custom_full_img_span span_12">
			<h2 class="text-wisdom"> <?php the_field('variation_heading');?> </h2>
			 <?php do_action( 'woocommerce_variable_add_to_cart' ); ?>		
			</div>
    	</div>
	</div>
	</div>
</div>

</div>

    <div class = "row" >
        <div style="text-align:center" class = "custom_full_img_span span_12">
        <?php do_action( 'woocommerce_after_single_product' ); ?>
        </div>
    </div>
		


<?php
get_footer( 'shop' );