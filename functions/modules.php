<?php
  // PART: Settings
  function ex_module_settings($return) {
    if($return == 'id') {
      $output = get_sub_field('module_id');
    } elseif($return == 'class') {
      $output = 'module-color-' . get_sub_field('module_color');
      $output .= ' module-pad-' . get_sub_field('module_padding');
    }
    return $output;
  }

  // PART: Call to Action
  function ex_module_cta($row = 'call_to_actions') {
    $output = '';
    if(have_rows($row)): while(have_rows($row)): the_row();
      $link = get_sub_field('link');
      $output = '<a href="' . $link['url'] . '" target="' . $link['target'] . '" class="button">' . $link['title'] . '</a>';
    endwhile; endif;
    return $output;
  }
?>
