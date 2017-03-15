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
    'id'=>'ourWidget',
    'options' => [
      'thing1'=>'value1',
    ],
]); ?>
