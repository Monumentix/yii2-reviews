<?php

use yii\helpers\Html;
use yii\helpers\Url;
use kartik\icons\Icon;

use yii\widgets\Breadcrumbs;

$this->title = 'Update Client Review';
$this->params['breadcrumbs'][] = ['label' => 'Reviews Admin', 'url' => ['index']];
?>

<?=Breadcrumbs::widget([
    'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
  ]);
?>

<?=Html::a(Icon::show('plus').' New Review', Url::to(['create']),['class'=>'btn btn-sm btn-success pull-right margin-t-xs']) ?>
<h1>Update Review</h1>

<div class="clients-reviews-update">
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>
</div>
