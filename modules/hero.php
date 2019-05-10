<?php
  $minHeight = get_sub_field('slides_height') . 'vh;';
  if(have_rows('hero_slider')):
    echo '<div class="hero-slide-wrap">';
    while(have_rows('hero_slider')): the_row();
      echo '<div class="hero-slide ' . ex_module_footnote('check') . '" style="min-height: ' . $minHeight . '; ' . ex_module_settings('style') . '">';
  $bg = get_sub_field('background');
  $darken = get_sub_field('darken_image') / 100;
  $heading = get_sub_field('heading');
  $headingSub = get_sub_field('sub_heading');
  $columnLeft = get_sub_field('left_column');
  $columnRight = get_sub_field('right_column');
?>
<?php if($bg): ?>
  <div class="module-bg" style="background-image: url(<?php echo $bg['sizes']['jumbo']; ?>); opacity: <?php echo $darken; ?>;">
    <img src="<?php echo $bg['sizes']['jumbo']; ?>" alt="<?php echo $bg['title']; ?>" />
  </div>
<?php endif; ?>
<?php if($heading) { echo '<h1 class="hero-heading">' . $heading . '</h1>'; } ?>
<?php if($headingSub) { echo '<div class="hero-heading-sub">' . $headingSub . '</div>'; } ?>
<?php if($columnLeft || $columnRight): ?>
  <div class="hero-columns">
    <?php if($columnLeft): ?>
      <div class="hero-column-left"><?php echo $columnLeft; ?></div>
    <?php endif; ?>
    <?php if($columnRight): ?>
      <div class="hero-column-right"><?php echo $columnRight; ?></div>
    <?php endif; ?>
  </div>
<?php endif; ?>
<?php
    echo ex_module_footnote('content') . '</div>';
  endwhile;
  echo '</div>';
endif;
?>
