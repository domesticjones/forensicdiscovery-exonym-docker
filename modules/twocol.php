<div class="twocol-left" style="width: <?php the_sub_field('left_column_width'); ?>%;">
  <?php
    the_sub_field('left_column');
    echo ex_module_cta('cta_left_call_to_actions');
  ?>
</div>
<?php if(get_sub_field('show_column_rule')) {
  echo '<hr class="column-rule-vert" />';
} ?>
<div class="twocol-right" style="width: <?php the_sub_field('right_column_width'); ?>%;">
  <?php
    the_sub_field('right_column');
    echo ex_module_cta('cta_right_call_to_actions');
  ?>
</div>
