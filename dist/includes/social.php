<?php
  $insta = file_get_contents('https://instagram.will-crawford.co.uk/?handle=willocrawfordo');
  $insta = json_decode($insta);
?>

<div class="primary-container">
  <div class="social">
    <a href="<?php echo $insta[0]->url ?>" title="Instagram | Will Crawford" target="_blank" style="background-image: url(<?php echo $insta[0]->image; ?>);" class="default-psudeo default-background default-center"></a>
    <a href="<?php echo $insta[1]->url ?>" title="Instagram | Will Crawford" target="_blank" style="background-image: url(<?php echo $insta[1]->image; ?>);" class="default-psudeo default-background default-center"></a>
    <a href="<?php echo $insta[2]->url ?>" title="Instagram | Will Crawford" target="_blank" style="background-image: url(<?php echo $insta[2]->image; ?>);" class="default-psudeo default-background default-center"></a>
  </div>
</div>
