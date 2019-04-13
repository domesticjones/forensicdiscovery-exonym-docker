<?php
  $headingIcon = get_sub_field('heading_icon');
  $heading = get_sub_field('heading_text');
  $paragraph = get_sub_field('heading_paragraph');
  $name = get_sub_field('tile_set_name');
  $search = get_sub_field('tile_search');
?>
<?php if($heading): ?>
  <h2 class="tiles-heading">
    <?php if($headingIcon) { echo '<img src="' . $headingIcon['sizes']['small'] . '" alt="' . $headingIcon['title'] . '" />'; } ?>
    <span><?php echo $heading; ?></span>
  </h2>
  <?php
    if($paragraph) { echo '<div class="tiles-paragraph">' . $paragraph . '</div>'; }
    if(have_rows('tiles')) {
      echo '<div class="tiles-wrap">';
        echo '<h3>' . $name . '</h3>';
        if($search) { echo '<div class="live-search"><input type="search" placeholder="Filter through ' . $name . ' below"></div>'; }
        echo '<ul>';
          while(have_rows('tiles')) {
            the_row();
            $icon = get_sub_field('icon');
            $iconClass = '';
            if(empty($icon)) { $iconClass = ' noicon'; }
            $data = get_sub_field('data');
            $color = $data['color'];
            if($color) {
              $colorStyle = ' class="tile tile-colored' . $iconClass . '" style="background-color: ' . $color . '"';
            } else {
              $colorStyle = ' class="tile-transparent' . $iconClass . '"';
            }
            echo '<li' . $colorStyle . '>';
              if($icon) { echo '<img src="' . $icon['sizes']['small'] . '" alt="' . $icon['title'] . '" class="tile-icon" />'; }
              echo '<div class="tile-text">';
                if($data['title']) { echo '<strong>' . $data['title'] . '</strong>'; }
                if($data['sub_title']) { echo '<span>' . $data['sub_title'] . '</span>'; }
                if($data['category']) { echo '<em>' . $data['category'] . '</em>'; }
              echo '</div>';
            echo '</li>';
          }
        echo '</ul>';
      echo '</div>';
    }
  ?>
<?php endif; ?>
