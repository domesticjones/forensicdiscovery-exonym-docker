<?php
  /* Template Name: Contact */
	get_header();
	if(have_posts()): while(have_posts()): the_post();
?>
  <article class="page-contact">
    <h1 class="contact-header"><?php the_title(); ?></h1>
    <?php the_content(); ?>
    <ul class="contact-data">
      <li>
        <h2 class="contact-subhead">Email</h2>
        <?php ex_contact('email'); ?>
      </li>
      <li>
        <h2 class="contact-subhead">Phone</h2>
        <?php ex_contact('phone'); ?>
      </li>
      <li>
        <h2 class="contact-subhead">Address</h2>
        <p>
          <?php ex_brand('legal'); ?><br />
          <?php ex_contact('address'); ?>
        </p>
      </li>
    </ul>
    <?php echo do_shortcode('[contact-form-7 id="132" title="Footer Contact Form"]'); ?>
  </article>
<?php
	endwhile; endif;
	get_footer();
?>
