<?php
namespace monumentix\reviews\models;

use yii\data\ActiveDataProvider;

use monumentix\reviews\models\ClientReviews;


class ClientReviewsSearch extends ClientReviews {

  public function rules(){
    return[
      [['fullname','location','quote'],'safe']
    ];
  }


  public function search($params){
    $query = parent::find();

    $dataProvider = new ActiveDataProvider([
      'query'=>$query,
      'pagination'=>[
        'pageSize'=>10,
      ],
    ]);

    $this->load($params);

    if (!$this->validate()) {
        // uncomment the following line if you do not want to return any records when validation fails
        // $query->where('0=1');
        return $dataProvider;
    }

    // grid filtering conditions
    $query->andFilterWhere([
        'id' => $this->id,
    ]);

    $query->andFilterWhere(['like', 'fullname', $this->fullname])
          ->andFilterWhere(['like', 'location', $this->location])
          ->andFilterWhere(['like', 'quote', $this->quote]);

    return $dataProvider;


  }//end search


}//end class



?>
