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
      $output .= ' padding-top: ' . $pad['top'] . 'em; padding-bottom: ' . $pad['bottom'] . 'em;';
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

  // PART: Footnote
  function ex_module_footnote($return) {
    $output = '';
    $footnote = get_sub_field('footnote');
    $footColor = get_sub_field('footnote_color_module_color');
    if($return == 'content') {
      if($footnote) {
        $output .= '<div class="module-footnote module-footnote-color-' . $footColor . '">' . $footnote . '</div>';
      }
    } elseif($return == 'check') {
      if($footnote) {
        $output .= 'module-footnote-present';
      }
    }
    return $output;
  }

  // PART: Constructor
  function ex_module_constructor() {
    if(have_rows('content_builder')) {
      echo '<article class="page-content">';
        while(have_rows('content_builder')){ the_row();
          $contentModule = get_row_layout();
          echo '<section class="module module-' . $contentModule . ex_module_settings('class') . ' ' . ex_module_footnote('check') . '" style="' . ex_module_settings('style') . '"><div class="wrap">';
            if(ex_module_settings('id')) { echo '<a href="#" id="' . ex_module_settings('id') . '" name="' . ex_module_settings('id') . '" class="module-anchor"></a>'; }
            if(get_row_layout() == 'data_tiles') {
              get_template_part('modules/tiles');
            } elseif(get_row_layout() == 'features_blocks') {
              get_template_part('modules/blocks');
            } elseif(get_row_layout() == 'hero_image') {
              get_template_part('modules/hero');
            } elseif(get_row_layout() == 'single_column') {
              get_template_part('modules/single');
            } elseif(get_row_layout() == 'two_column') {
              get_template_part('modules/twocol');
            } elseif(get_row_layout() == 'table') {
              get_template_part('modules/table');
            }
          echo '</div>' . ex_module_footnote('content') . '</section>';
        }
      echo '</article>';
    }
  }
?>
