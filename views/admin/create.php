<?php

use yii\helpers\Html;
use yii\helpers\Url;

use yii\widgets\Breadcrumbs;
use kartik\icons\Icon;

$this->title = 'Create Client Review';
$this->params['breadcrumbs'][] = ['label' => 'Reviews Admin', 'url' => ['index']];
?>
<?=Html::a(Icon::show('plus').' New Review', Url::to(['create']),['class'=>'btn btn-sm btn-success pull-right margin-t-xs']) ?>

<?=Breadcrumbs::widget([
    'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
  ]);
?>

<h1>Create Review</h1>
<div class="clients-reviews-create">
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>
</div>
