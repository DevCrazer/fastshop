<?php
/**
 * Welcome screen enhance template
 */
?>
<?php

?>
<div class="col two-col" style="overflow: hidden;">
	<div class="col">
		<div class="boxed enhance">
			<h2><?php printf( esc_html__( 'Enhance %s', 'fastshop' ), 'Fast shop' ); ?></h2>
			<p>
				<?php printf( esc_html__( 'Take a look at our range of extensions that compliment and extend %s functionality.', 'fastshop' ), 'Fast shop\'s' ); ?>
			</p>

			<ul class="extensions">
				<li><a href="https://www.pootlepress.com/products/fastshop-mega-menus?utm_source=product&utm_medium=upsell&utm_campaign=fastshopaddons">Mega Menus</a></li>
				<li><a href="https://www.pootlepress.com/products/fastshop-woocommerce-customiser?utm_source=product&utm_medium=upsell&utm_campaign=fastshopaddons">WooCommerce Customiser</a></li>
				<li><a href="https://www.pootlepress.com/products/fastshop-product-hero?utm_source=product&utm_medium=upsell&utm_campaign=fastshopaddons">Product Hero</a></li>
				<li><a href="https://www.pootlepress.com/products/fastshop-parallax-hero?utm_source=product&utm_medium=upsell&utm_campaign=fastshopaddons">Parallax Hero</a></li>
				<li><a href="https://www.pootlepress.com/products/fastshop-designer?utm_source=product&utm_medium=upsell&utm_campaign=fastshopaddons">Designer</a></li>
				<li><a href="https://www.pootlepress.com/products/fastshop-checkout-customiser/?utm_source=product&utm_medium=upsell&utm_campaign=fastshopaddons">Checkout Customiser</a></li>
				<li><a href="https://www.pootlepress.com/products/fastshop-reviews?utm_source=product&utm_medium=upsell&utm_campaign=fastshopaddons">Reviews</a></li>
				<li><a href="https://www.pootlepress.com/products/fastshop-pricing-tables?utm_source=product&utm_medium=upsell&utm_campaign=fastshopaddons">Pricing Tables</a></li>
				<li><a href="https://www.pootlepress.com/products/fastshop-blog-customiser?utm_source=product&utm_medium=upsell&utm_campaign=fastshopaddons">Blog Customiser</a></li>
			</ul>

			<a href="http://www.pootlepress.com/product-category/fastshop-extensions?utm_source=product&utm_medium=upsell&utm_campaign=fastshopaddons" class="button button-primary">
				<?php printf( esc_html__( 'View all %s extensions &rarr;', 'fastshop' ), 'Fast shop' ); ?>
			</a>

		</div>

		<div class="boxed free-plugins">
			<h2><?php esc_html_e( 'Install free plugins', 'fastshop' ); ?></h2>
			<p>
				<?php echo sprintf( esc_html__( 'There are a number of free plugins available for %s on the WordPress.org %splugin repository%s. Here are just a few:', 'fastshop' ), 'Fast shop', '<a href="https://wordpress.org/plugins/search.php?q=fastshop">', '</a>' ); ?>
			</p>
			<ul class="extensions">
				<li><a class="thickbox" href="<?php echo esc_url( wp_nonce_url( self_admin_url( 'plugin-install.php?tab=plugin-information&plugin=fastshop-product-pagination&TB_iframe=true&width=744&height=800' ), 'install-plugin_fastshop-product-pagination' ) ); ?>">Product Pagination</a></li>
				<li><a class="thickbox" href="<?php echo esc_url( wp_nonce_url( self_admin_url( 'plugin-install.php?tab=plugin-information&plugin=fastshop-product-sharing&TB_iframe=true&width=744&height=800' ), 'install-plugin_fastshop-product-sharing' ) ); ?>">Product Sharing</a></li>
				<li><a class="thickbox" href="<?php echo esc_url( wp_nonce_url( self_admin_url( 'plugin-install.php?tab=plugin-information&plugin=fastshop-footer-bar&TB_iframe=true&width=744&height=800' ), 'install-plugin_fastshop-footer-bar' ) ); ?>">Footer Bar</a></li>
				<li><a class="thickbox" href="<?php echo esc_url( wp_nonce_url( self_admin_url( 'plugin-install.php?tab=plugin-information&plugin=fastshop-sticky-add-to-cart&TB_iframe=true&width=744&height=800' ), 'install-plugin_fastshop-sticky-add-to-cart' ) ); ?>">Sticky Add to Cart</a></li>
			</ul>
		</div>
	</div>

	<div class="col boxed child-themes">
		<h2><?php esc_html_e( 'Child themes', 'fastshop' ); ?></h2>
		<p><?php printf( esc_html__( 'Take a look at our range of child themes for %s that allow you to easily change the look of your store to suit a specific industry.', 'fastshop' ), 'Fast shop' ); ?></p>

		<div class="child-theme">
			<a href="http://www.pootlepress.com/products/outlet?utm_source=product&utm_medium=upsell&utm_campaign=fastshopaddons">
				<img src="<?php echo esc_url( FS_URL ) . '/inc/admin/welcome-screen/img/outlet.jpg'; ?>" alt="<?php esc_html_e( 'Proshop Child Theme', 'fastshop' ); ?>" class="image-50" />
				<span class="child-theme-title">Outlet</span>
			</a>
		</div>

		<div class="child-theme">
			<a href="http://www.pootlepress.com/products/proshop?utm_source=product&utm_medium=upsell&utm_campaign=fastshopaddons">
				<img src="<?php echo esc_url( FS_URL ) . '/inc/admin/welcome-screen/img/proshop.jpg'; ?>" alt="<?php esc_html_e( 'Proshop Child Theme', 'fastshop' ); ?>" class="image-50" />
				<span class="child-theme-title">ProShop</span>
			</a>
		</div>

		<div class="child-theme">
			<a href="http://www.pootlepress.com/products/galleria?utm_source=product&utm_medium=upsell&utm_campaign=fastshopaddons">
				<img src="<?php echo esc_url( FS_URL ) . '/inc/admin/welcome-screen/img/galleria.jpg'; ?>" alt="<?php esc_html_e( 'Galleria Child Theme', 'fastshop' ); ?>" class="image-50" />
				<span class="child-theme-title">Galleria</span>
			</a>
		</div>

		<div class="child-theme">
			<a href="<?php echo esc_url( wp_nonce_url( self_admin_url( 'update.php?action=install-theme&theme=boutique' ), 'install-theme_boutique' ) ); ?>">
				<img src="<?php echo esc_url( FS_URL ) . '/inc/admin/welcome-screen/img/boutique.jpg'; ?>" alt="<?php esc_html_e( 'Boutique Child Theme', 'fastshop' ); ?>" class="image-50" />
				<p class="free"><?php esc_html_e( 'Free!', 'fastshop' ); ?></p>
				<span class="child-theme-title">Boutique</span>
			</a>
		</div>

		<a href="http://www.pootlepress.com/product-category/themes/fastshop-child-theme-themes?utm_source=product&utm_medium=upsell&utm_campaign=fastshopaddons" class="button button-primary">
			<?php printf( esc_html__( 'View all %s child themes &rarr;', 'fastshop' ), 'Fast shop' ); ?>
		</a>
	</div>
</div>