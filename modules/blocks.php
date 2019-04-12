<?php
  if(have_rows('blocks')):
    echo '<ul class="blocks-row">';
      while(have_rows('blocks')): the_row();
        $icon = get_sub_field('image');
        $heading = get_sub_field('heading');
        $paragraph = get_sub_field('paragraph');
        echo '<li>';
          if($icon) { echo '<div class="block-icon"><img src="' . $icon['sizes']['small'] . '" alt="' . $icon['title'] . '" /></div>'; }
          if($heading) { echo '<h2>' . $heading . '</h2>'; }
          if($paragraph) { echo '<p>' . $paragraph . '</p>'; }
          ex_module_cta();
        echo '</li>';
        echo ex_module_cta();
      endwhile;
    echo '</ul>';
  endif;
?>
