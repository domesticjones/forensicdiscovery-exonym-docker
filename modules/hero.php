<?php
  $bg = get_sub_field('background');
  $heading = get_sub_field('heading');
  $headingSub = get_sub_field('sub_heading');
  $columnLeft = get_sub_field('left_column');
  $columnRight = get_sub_field('right_column');
  $footColor = get_sub_field('footnote_color');
  $footnote = get_sub_field('footnote');
?>
<?php if($bg): ?>
  <div class="module-bg" style="background-image: url(<?php echo $bg['sizes']['jumbo']; ?>);">
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
    <?php if($columnLeft && $columnRight) { echo '<div class="hero-column-border"></div>'; } ?>
    <?php if($columnRight): ?>
      <div class="hero-column-right"><?php echo $columnRight; ?></div>
    <?php endif; ?>
  </div>
<?php endif; ?>
<?php if($footnote) { echo '<div class="hero-footnote hero-footnote-color-' . $footColor . '">' . $footnote . '</div>'; } ?>
