<?php
use monumentix\reviews\ReviewSliderWidget;
use kartik\icons\Icon;
?>

<div class="container text-center margin-t-sm">
<h3 class="text-center">
      Client Reviews
  </h3>
</div>
<hr class="thin">
<?=ReviewSliderWidget::widget([
    'viewFile'=> '@app/themes/protech/views/reviews/reviewSlider.php',
    'pluginOptions'=>
      [
        'id'=>'client-reviews-slider-widget',
        'items'=>2,
      ],
    ]);
?>
