<?php
  $from = get_sub_field('from');
  $quote = get_sub_field('quote');
?>
<blockquote>
  <?php
    if($quote) { echo '<q>' . $quote . '</q>'; }
    if($from) { echo '<cite>' . $from . '</cite>'; }
  ?>
</blockquote>
