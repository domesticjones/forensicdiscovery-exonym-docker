<?php
	get_header();
	if(have_posts()): while(have_posts()): the_post();
		if(have_rows('content_builder')):
			echo '<article class="page-content">';
				while(have_rows('content_builder')): the_row();
					$contentModule = get_row_layout();
					echo '<section class="module module-' . $contentModule . ex_module_settings('class') . '">';
						if(ex_module_settings('id')) { echo '<a href="#" name="' . ex_module_settings('id') . '"></a>'; }
						if(get_row_layout() == 'data_tiles') {
							get_template_part('modules/tiles');
						} elseif(get_row_layout() == 'features_blocks') {
							get_template_part('modules/blocks');
						} elseif(get_row_layout() == 'hero_image') {
							get_template_part('modules/hero');
						} elseif(get_row_layout() == 'quote') {
							get_template_part('modules/quote');
						} elseif(get_row_layout() == 'single_column') {
							get_template_part('modules/single');
						} elseif(get_row_layout() == 'two_column') {
							get_template_part('modules/twocol');
						}
					echo '</section>';
				endwhile;
			echo '</article>';
		endif;
	endwhile; endif;
	get_footer();
?>
