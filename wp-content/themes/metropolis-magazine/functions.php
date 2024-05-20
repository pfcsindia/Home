<?php

function metropolis_magazine_pattern_styles()
{
	wp_enqueue_style('metropolis-magazine-patterns', get_stylesheet_directory_uri() . '/assets/css/patterns.css', array(), filemtime(get_template_directory() . '/assets/css/patterns.css'));
	if (is_admin()) {
		global $pagenow;
		if ('site-editor.php' === $pagenow) {
			// Do not enqueue editor style in site editor
			return;
		}
		wp_enqueue_style('metropolis-magazine-editor', get_stylesheet_directory_uri() . '/assets/css/editor.css', array(), filemtime(get_template_directory() . '/assets/css/editor.css'));
	}
}
add_action('enqueue_block_assets', 'metropolis_magazine_pattern_styles');


add_theme_support('wp-block-styles');


// Register customer Metropolis Magazine pattern categories
function metropolis_magazine_register_block_pattern_categories()
{
	register_block_pattern_category(
		'heros',
		array(
			'label'       => __('Heros', 'metropolis-magazine'),
			'description' => __('Metropolis Magazine hero patterns', 'metropolis-magazine'),
		)
	);
	register_block_pattern_category(
		'navigation_headers',
		array(
			'label'       => __('Headers', 'metropolis-magazine'),
			'description' => __('Metropolis Magazine navigation header patterns', 'metropolis-magazine'),
		)
	);
	register_block_pattern_category(
		'teams',
		array(
			'label'       => __('Teams', 'metropolis-magazine'),
			'description' => __('Metropolis Magazine team patterns', 'metropolis-magazine'),
		)
	);
}

add_action('init', 'metropolis_magazine_register_block_pattern_categories');
