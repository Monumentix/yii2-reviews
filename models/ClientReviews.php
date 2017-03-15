<?php
namespace monumentix\reviews\models;

use yii\db\ActiveRecord;
use yii\db\Expression;
use yii\behaviors\TimestampBehavior;
use yii2tech\ar\softdelete\SoftDeleteBehavior;

class ClientReviews extends ActiveRecord {

  public static function tableName(){
    return 'reviews';
  }

  public function rules(){
    return[
      [['fullname','location','quote'],'required'],
      [['created_at','updated_at','is_deleted','is_featured'],'integer'],
      [['fullname','location','quote'],'string','max'=>255]
    ];
  }

  public function behaviors(){
    return[
      'timestamp' => [
                 'class' => 'yii\behaviors\TimestampBehavior',
                 'attributes' => [
                     ActiveRecord::EVENT_BEFORE_INSERT => ['created_at', 'updated_at'],
                     ActiveRecord::EVENT_BEFORE_UPDATE => ['updated_at'],
                 ],
             ],//end timestamp
     'softDeleteBehavior'=>[
          'class'=>SoftDeleteBehavior::className(),
          'softDeleteAttributeValues'=>[
            'is_deleted'=>true,
          ],
        ],
    ];
  }

  /*filters not deleted records from active queries as a default scope*/
  public static function find(){
    return parent::find()->andWhere(['is_deleted'=>false]);
  }


  public function attributeLabels(){
      return[
        'id'=>'Id',
        'is_featured'=>'Featured'
      ];
  }//end lables


}//end class
