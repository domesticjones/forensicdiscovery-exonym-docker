<?php
  /* Template Name: Contact */
	get_header();
	if(have_posts()): while(have_posts()): the_post();
?>
  <article class="page-contact">
    <div class="wrap">
      <h1 class="contact-header"><?php the_title(); ?></h1>
      <ul class="contact-data">
        <li>
          <h2></h2>
        </li>
      </ul>
    </div>
  </article>
<?php
	endwhile; endif;
	get_footer();
?>
