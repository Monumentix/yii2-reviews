<?php

namespace monumentix\reviews\assets;

use yii\web\AssetBundle;

class ReviewsSliderAsset extends AssetBundle{

  //public $sourcePath = '@monumentix/reviews/assets/';
  public $sourcePath = '@bower/owl.carousel/dist';

  public $css = [
    'assets/owl.carousel.min.css',
  ];

  public $js = [
    'owl.carousel.min.js',
  ];

  public $depends = [
    'yii\web\JqueryAsset',
  ];

}//end class
?>
