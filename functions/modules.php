<?php
  // PART: Settings
  function ex_module_settings($return) {
    $output = '';
    if($return == 'id') {
      $output = get_sub_field('module_id');
    } elseif($return == 'class') {
      if(get_row_layout() == 'hero_image') {
        $output .= ' animate-parallax animate-z-normal';
      } else {
        $output .= ' module-color-' . get_sub_field('module_color');
        $output .= ' module-fontsize-' . get_sub_field('module_font_size');
      }
    } elseif($return == 'style') {
      $pad = get_sub_field('module_padding');
      $output .= ' padding-top: ' . $pad . 'vw; padding-bottom: ' . $pad . 'vw;';
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
