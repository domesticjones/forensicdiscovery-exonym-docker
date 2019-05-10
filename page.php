<?php
	get_header();
	if(have_posts()): while(have_posts()): the_post();
		ex_module_constructor();
	endwhile; endif;
	get_footer();
?>
