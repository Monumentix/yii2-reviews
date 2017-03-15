<?php
use monumentix\reviews\ReviewSliderWidget;
use kartik\icons\Icon;
?>

<div class="container text-center margin-t-sm">
<h3 class="text-center">
      A place holder controller/view for development
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
