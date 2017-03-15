<?php
namespace monumentix\reviews;

use monumentix\reviews\models\ClientReviewsSearch;
use monumentix\reviews\assets\ReviewsSliderAsset;

use yii;
use yii\base\Widget;
use yii\helpers\Html;
use yii\helpers\Json;

use yii\base\InvalidCallException;

class ReviewSliderWidget extends Widget{

  public $viewFile ;
  public $options  ; //widget HTML container options
  public $pluginOptions = [] ; // our owl plugin options

  public function init(){
    //assign unigue id if not passed in
    if(!isset($this->options['id'])){
      $this->options['id'] = $this->getId();
    }
    //start the widget
    echo Html::beginTag('div',$this->options);
  }

  public function run(){
    if(isset($this->viewFile)){
      //render the passed in view object instead
      echo $this->render($this->viewFile, [
        'dataProvider' => ClientReviewsSearch::getFeaturedReviews(),
      ]);
    }else{
      echo $this->render('reviewSlider/reviewSlider.php', [
        'dataProvider' => ClientReviewsSearch::getFeaturedReviews(),
      ]);
    }

    echo Html::endTag('div');
    $this->registerClientScript();
  }

  private function registerClientScript(){
    //get view and assign assets
    $view=$this->getView();
    ReviewsSliderAsset::register($view);

    //register carousel js with view
    $id=$this->options['id'];
    $options = Json::encode($this->pluginOptions);
    $view->registerJs("jQuery('#".$id."').owlCarousel($options)");
  }

}//end class
?>
