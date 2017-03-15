<?php
use yii\helpers\Html;
use yii\helpers\Url;

use kartik\icons\Icon;
use kartik\grid\GridView;

?>

<?php
  echo GridView::widget([
    'id'=>'client-reviews-grid',
    'dataProvider'=>$dataProvider,
    'filterModel'=>$model,
    'columns'=>[
      [
        'class'=>'kartik\grid\DataColumn',
        'hAlign'=>'left',
        'vAlign'=>'middle',
        'width'=>'25%',
        'attribute'=>'fullname',
      ],
      [
        'class'=>'kartik\grid\DataColumn',
        'hAlign'=>'left',
        'vAlign'=>'middle',
        'width'=>'25%',
        'attribute'=>'location',
      ],
      [
        'class'=>'kartik\grid\DataColumn',
        'hAlign'=>'left',
        'vAlign'=>'middle',
        'width'=>'40%',
        'attribute'=>'quote',
      ],

      [
        'class'=>'kartik\grid\ActionColumn',
        'hAlign'=>'center',
        'vAlign'=>'middle',
        'template'=>'{view} | {delete}',
        'width'=>'10%',
        'buttons'=>[
          'view'=>function($url, $model){
            return Html::a(Icon::show('pencil-square-o').'', Url::to(['update','id'=>$model->id]),['title'=>'Update', 'class'=>'btn btn-sm btn-primary']);
          },
          'delete'=>function($url,$model){
            return Html::a(
              Icon::show('trash').'',
              Url::to(['delete','id'=>$model->id]),
              [
                'title'=>'Delete',
                'class'=>'btn btn-sm  btn-danger ',
                'data'=>['confirm'=>'Are you sure you want to delete?','method'=>'post'],
              ]);
          },
        ],
      ],



    ]//end columns
  ]);//end gridview
