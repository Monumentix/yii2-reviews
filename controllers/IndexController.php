<?php

namespace monumentix\reviews\controllers;

use monumentix\reviews\models\ClientReviewsSearch;

use yii\web\Controller;

class IndexController extends Controller {

  public $defaultAction = 'index';

  public function actionIndex()
  {
      return $this->render('index',[        
      ]);
  }



}//end class
