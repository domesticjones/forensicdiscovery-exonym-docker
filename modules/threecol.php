<div class="threecol-left" style="width: <?php the_sub_field('left_column_width'); ?>%;">
  <?php
    the_sub_field('left_column');
  ?>
</div>
<?php if(get_sub_field('first_column_rule')) {
  echo '<hr class="column-rule-vert" />';
} ?>
<div class="threecol-middle" style="width: <?php the_sub_field('middle_column_width'); ?>%;">
  <?php
    the_sub_field('middle_column');
  ?>
</div>
<?php if(get_sub_field('second_column_rule')) {
  echo '<hr class="column-rule-vert" />';
} ?>
<div class="threecol-right" style="width: <?php the_sub_field('right_column_width'); ?>%;">
  <?php
    the_sub_field('right_column');
  ?>
</div>
