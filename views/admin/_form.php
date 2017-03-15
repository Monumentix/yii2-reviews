<?php
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

?>
<div class="reviews-form">
  <?php $form = ActiveForm::begin(); ?>

  <?= $form->field($model, 'fullname')->textInput() ?>
  <?= $form->field($model, 'location')->textInput() ?>

  <?= $form->field($model, 'quote')->textarea(['rows' => 6]) ?>

  <?= $form->field($model, 'is_featured')->checkbox() ?>

  <div class="form-group">
      <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
  </div>

  <?php ActiveForm::end(); ?>
</div>
