<?php

namespace monumentix\reviews\controllers;

use yii\web\Controller;
use monumentix\reviews\models\ClientReviews;
use monumentix\reviews\models\ClientReviewsSearch;

class AdminController extends Controller {

  public function actionIndex()
  {
      //Get all records for grid and model for forms
      $model = new ClientReviewsSearch();
      $dataProvider = $model->search(\Yii::$app->request->queryParams);

      return $this->render('index',[
        'model'=>$model,
        'dataProvider'=>$dataProvider,
      ]);
  }//end index

  public function actionCreate(){
    $model = new ClientReviews();

    if ($model->load(\Yii::$app->request->post()) && $model->save()) {
        //project is saved now we need to save the images
        return $this->redirect(['index']);
    } else {

      return $this->render('create.php', [
          'model' => $model,
      ]);
    }
  }

  public function actionUpdate($id){
    $model = $this->findModel($id);

    if ($model->load(\Yii::$app->request->post()) && $model->save()) {
        return $this->redirect(['index']);
    } else {
        return $this->render('update', [
            'model' => $model,
        ]);
    }
  }

  public function actionDelete($id){
    $this->findModel($id)->softDelete();

    return $this->redirect(['index']);
  }


  /**
   * Finds the Projects model based on its primary key value.
   * If the model is not found, a 404 HTTP exception will be thrown.
   * @param integer $id
   * @return Projects the loaded model
   * @throws NotFoundHttpException if the model cannot be found
   */
  protected function findModel($id)
  {
      if (($model = ClientReviews::findOne($id)) !== null) {
          return $model;
      } else {
          throw new NotFoundHttpException('The requested page does not exist.  <span class="small">The requested model record does not appear to exist</span>.');
      }
  }



}//end class
