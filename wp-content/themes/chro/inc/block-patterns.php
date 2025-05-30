<?php
/**
 * chro Theme: Block Patterns
 *
 * @package WordPress
 * @subpackage chro
 * @since chro 2.5
 */

/**
 * Register Block Pattern Category.
 */
if ( function_exists( 'register_block_pattern_category' ) ) {

	register_block_pattern_category(
		'chro',
		array( 'label' => __( 'chro', 'chro' ) )
	);
}

/**
 * Register Block Patterns.
 */
if ( function_exists( 'register_block_pattern' ) ) {
	register_block_pattern(
		'chro/large-heading-with-button',
		array(
			'title'      => __( 'Large Heading with Button', 'chro' ),
			'categories' => array( 'chro' ),
			'content'    => '<!-- wp:heading {"level":1,"textColor":"black","style":{"typography":{"fontSize":50}}} -->
            <h1 class="has-black-color has-text-color" style="font-size:50px">' . __( 'Attract Leads with Marketing Campaigns that Work', 'chro' ) . '</h1>
            <!-- /wp:heading -->

            <!-- wp:buttons -->
            <div class="wp-block-buttons"><!-- wp:button {"borderRadius":0,"className":"is-style-fill"} -->
            <div class="wp-block-button is-style-fill"><a class="wp-block-button__link no-border-radius">' . __( 'Our Services', 'chro' ) . '</a></div>
            <!-- /wp:button --></div>
            <!-- /wp:buttons -->',
		)
	);

	register_block_pattern(
		'chro/images-with-text-and-link',
		array(
			'title'      => __( 'Images with Text and Link', 'chro' ),
			'categories' => array( 'chro' ),
			'content'    => '<!-- wp:spacer -->
            <div style="height:100px" aria-hidden="true" class="wp-block-spacer"></div>
            <!-- /wp:spacer -->
            <!-- wp:columns -->
            <div class="wp-block-columns"><!-- wp:column -->
            <div class="wp-block-column">
			<!-- wp:image {"className":"size-large"} -->
			<figure class="wp-block-image size-large"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/stripes.jpg" alt="' . __( 'Black Stripes', 'chro' ) . '"/></figure>
			<!-- /wp:image -->
            <!-- wp:heading {"textColor":"black","style":{"typography":{"fontSize":45}}} -->
            <h2 class="has-black-color has-text-color" style="font-size:45px">' . __( 'Branding', 'chro' ) . '</h2>
            <!-- /wp:heading -->
            <!-- wp:paragraph {"textColor":"black","style":{"typography":{"lineHeight":"1.8"}}} -->
            <p class="has-black-color has-text-color" style="line-height:1.8">' . __( 'Communicate your purpose and goals with a beautiful logo that encapsulates your business.', 'chro' ) . '</p>
            <!-- /wp:paragraph -->
            <!-- wp:paragraph {"style":{"typography":{"lineHeight":"3"}}} -->
            <p style="line-height:3"><a href="#"><strong>' . __( 'See Case Study', 'chro' ) . ' →</strong></a></p>
            <!-- /wp:paragraph --></div>
            <!-- /wp:column -->
            <!-- wp:column -->
            <div class="wp-block-column"><!-- wp:spacer {"height":254} -->
            <div style="height:254px" aria-hidden="true" class="wp-block-spacer"></div>
            <!-- /wp:spacer -->
			<!-- wp:image {"className":"size-large"} -->
			<figure class="wp-block-image size-large"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/white-border.jpg" alt="' . __( 'White border', 'chro' ) . '"/></figure>
			<!-- /wp:image -->
            <!-- wp:heading {"textColor":"black","style":{"typography":{"fontSize":45}}} -->
            <h2 class="has-black-color has-text-color" style="font-size:45px">' . __( 'Web Design', 'chro' ) . '</h2>
            <!-- /wp:heading -->
            <!-- wp:paragraph {"textColor":"black","style":{"typography":{"lineHeight":"1.8"}}} -->
            <p class="has-black-color has-text-color" style="line-height:1.8">' . __( 'Need a website? We&#39;ve got you covered. Our design team will create a stunning design to transform your brand.', 'chro' ) . '</p>
            <!-- /wp:paragraph -->
            <!-- wp:paragraph {"style":{"typography":{"lineHeight":"3.0"}}} -->
            <p style="line-height:3.0"><a href="#"><strong>' . __( 'See Case Study', 'chro' ) . ' →</strong></a></p>
            <!-- /wp:paragraph --></div>
            <!-- /wp:column --></div>
            <!-- /wp:columns -->',
		)
	);

	register_block_pattern(
		'chro/images-with-link',
		array(
			'title'      => __( 'Images with Link', 'chro' ),
			'categories' => array( 'chro' ),
			'content'    => '<!-- wp:spacer -->
            <div style="height:100px" aria-hidden="true" class="wp-block-spacer"></div>
            <!-- /wp:spacer -->
            <!-- wp:columns {"verticalAlignment":"top"} -->
            <div class="wp-block-columns are-vertically-aligned-top"><!-- wp:column -->
            <div class="wp-block-column"><!-- wp:group -->
            <div class="wp-block-group"><div class="wp-block-group__inner-container">
			<!-- wp:image {"align":"center","sizeSlug":"large","className":"is-style-default"} -->
			<div class="wp-block-image is-style-default"><figure class="aligncenter size-large"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/stripes.jpg" alt="' . __( 'Black Stripes', 'chro' ) . '"/></figure></div>
			<!-- /wp:image -->
            <!-- wp:heading {"align":"left","textColor":"black","style":{"typography":{"fontSize":30}}} -->
            <h2 class="has-text-align-left has-black-color has-text-color" style="font-size:30px">' . __( 'Branding', 'chro' ) . '</h2>
            <!-- /wp:heading -->
            <!-- wp:paragraph {"align":"left"} -->
            <p class="has-text-align-left"><a href="#">' . __( 'See Case Study', 'chro' ) . ' →</a></p>
            <!-- /wp:paragraph --></div></div>
            <!-- /wp:group --></div>
            <!-- /wp:column -->
            <!-- wp:column -->
            <div class="wp-block-column"><!-- wp:group -->
            <div class="wp-block-group"><div class="wp-block-group__inner-container">
			<!-- wp:image {"align":"center","sizeSlug":"large","className":"is-style-default"} -->
			<div class="wp-block-image is-style-default"><figure class="aligncenter size-large"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/white-border.jpg" alt="' . __( 'White border', 'chro' ) . '"/></figure></div>
			<!-- /wp:image -->
            <!-- wp:heading {"align":"left","textColor":"black","style":{"typography":{"fontSize":30}}} -->
            <h2 class="has-text-align-left has-black-color has-text-color" style="font-size:30px">' . __( 'Design', 'chro' ) . '</h2>
            <!-- /wp:heading -->
            <!-- wp:paragraph {"align":"left"} -->
            <p class="has-text-align-left"><a href="#">' . __( 'See Case Study', 'chro' ) . ' →</a></p>
            <!-- /wp:paragraph --></div></div>
            <!-- /wp:group --></div>
            <!-- /wp:column -->
            <!-- wp:column -->
            <div class="wp-block-column"><!-- wp:group -->
            <div class="wp-block-group"><div class="wp-block-group__inner-container">
			<!-- wp:image {"align":"center","sizeSlug":"large","className":"is-style-default"} -->
			<div class="wp-block-image is-style-default"><figure class="aligncenter size-large"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/direct-light.jpg" alt="' . __( 'Direct Light', 'chro' ) . '"/></figure></div>
			<!-- /wp:image -->
            <!-- wp:heading {"align":"left","textColor":"black","style":{"typography":{"fontSize":30}}} -->
            <h2 class="has-text-align-left has-black-color has-text-color" style="font-size:30px">' . __( 'Strategy', 'chro' ) . '</h2>
            <!-- /wp:heading -->
            <!-- wp:paragraph {"align":"left"} -->
            <p class="has-text-align-left"><a href="#">' . __( 'See Case Study', 'chro' ) . ' →</a></p>
            <!-- /wp:paragraph --></div></div>
            <!-- /wp:group --></div>
            <!-- /wp:column --></div>
            <!-- /wp:columns -->
            <!-- wp:spacer -->
            <div style="height:100px" aria-hidden="true" class="wp-block-spacer"></div>
            <!-- /wp:spacer -->',
		)
	);

	register_block_pattern(
		'chro/services',
		array(
			'title'      => __( 'Services', 'chro' ),
			'categories' => array( 'chro' ),
			'content'    => '<!-- wp:spacer -->
            <div style="height:100px" aria-hidden="true" class="wp-block-spacer"></div>
            <!-- /wp:spacer -->
            
            <!-- wp:heading {"level":1,"style":{"typography":{"fontSize":50}}} -->
            <h1 style="font-size:50px">' . __( 'Our Services', 'chro' ) . '</h1>
            <!-- /wp:heading -->
            
            <!-- wp:columns -->
            <div class="wp-block-columns"><!-- wp:column -->
            <div class="wp-block-column">
            <!-- wp:paragraph {"style":{"typography":{"fontSize":21, "lineHeight":"2.5"}}} -->
            <p style="font-size:21px"><a href="#">' . __( 'Branding', 'chro' ) . ' →</a><br><a href="#">' . __( 'Web Design', 'chro' ) . ' →</a><br><a href="#">' . __( 'Web Development', 'chro' ) . ' →</a></p>
            <!-- /wp:paragraph -->
            </div>
            <!-- /wp:column -->
            
            <!-- wp:column -->
            <div class="wp-block-column">
            <!-- wp:paragraph {"style":{"typography":{"fontSize":21, "lineHeight":"2.5"}}} -->
            <p style="font-size:21px"><a href="#">' . __( 'Content Strategy', 'chro' ) . ' →</a><br><a href="#">' . __( 'Marketing &amp; SEO', 'chro' ) . ' →</a><br><a href="#">' . __( 'Video Production', 'chro' ) . ' →</a></p>
            <!-- /wp:paragraph --></div>
            <!-- /wp:column --></div>
            <!-- /wp:columns -->
            
            <!-- wp:spacer -->
            <div style="height:100px" aria-hidden="true" class="wp-block-spacer"></div>
            <!-- /wp:spacer -->',
		)
	);

	register_block_pattern(
		'chro/contact-us',
		array(
			'title'      => __( 'Contact Us', 'chro' ),
			'categories' => array( 'chro' ),
			'content'    => '<!-- wp:cover {"customOverlayColor":"#93aab8","minHeight":700,"align":"center"} -->
            <div class="wp-block-cover aligncenter has-background-dim" style="background-color:#93aab8;min-height:700px"><div class="wp-block-cover__inner-container"><!-- wp:paragraph {"align":"left","textColor":"white","style":{"typography":{"fontSize":50}}} -->
            <p class="has-text-align-left has-white-color has-text-color" style="font-size:50px">' . __( 'We are proud to serve outstanding clients.', 'chro' ) . '</p>
            <!-- /wp:paragraph -->
            
            <!-- wp:buttons -->
            <div class="wp-block-buttons"><!-- wp:button {"borderRadius":0,"backgroundColor":"black","textColor":"white","className":"is-style-fill"} -->
            <div class="wp-block-button is-style-fill"><a class="wp-block-button__link has-white-color has-black-background-color has-text-color has-background no-border-radius">' . __( 'Contact us', 'chro' ) . '</a></div>
            <!-- /wp:button --></div>
            <!-- /wp:buttons --></div></div>
            <!-- /wp:cover -->',
		)
	);
}
