<?php

use yii\helpers\Html;
use yii\helpers\Url;
use kartik\icons\Icon;

use yii\widgets\Breadcrumbs;

$this->title = 'Admin Client Review';
$this->params['breadcrumbs'][] = ['label' => 'Reviews', 'url' => ['index']];
?>
<div class="row">
  <div class="col-md-12">
    <?=Breadcrumbs::widget([
        'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
      ]);
    ?>
  </div>
</div>
<div class="row">
  <div class="col-md-12">
    <?=Html::a(Icon::show('plus').' New Review', Url::to(['create']),['class'=>'btn btn-sm btn-success pull-right margin-t-xs']) ?>
    <h1>Admin Page</h1>
  </div>
</div>

<div class="row">
  <div class="col-md-12">
  <?php
      echo $this->render('_grid',[
        'dataProvider' =>$dataProvider,
        'model'=>$model,
      ]);
  ?>
  </div>
</div>
