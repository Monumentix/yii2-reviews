<?php

namespace monumentix\reviews\controllers;

use yii\web\Controller;

class IndexController extends Controller {

  public $defaultAction = 'index';

  public function actionIndex()
  {
      return $this->render('index',[
        'thing'=>'thing',
      ]);
  }



}//end class
