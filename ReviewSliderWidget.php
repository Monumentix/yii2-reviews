<?php
namespace monumentix\reviews;

use yii;
use yii\base\InvalidCallException;

class ReviewSliderWidget extends \yii\base\Widget{

  public $dataProvider  ; //the dataprovider used by the wideget
  public $options  ; //options array we can use later

  public function init(){
    parent::init();
  }

  public function run(){
    $init = $this->initOptions();

    if($init === true ) {
      //All checks passed
      return $this->render('reviewSlider/reviewSlider.php');
    }else{
      //Checks Failed
      return $this->render('reviewSlider/error.php',[
        'init'=>$init,
        ]);
    }
  }



  /*
  * initOptions - handles loading and checking of variables for needed data
  *   before attempting to load/render slides
  *
  *   return True on success and Array of errors on false
  */
  public function initOptions(){
    $results = false;

    //check for dataProvider
    if(!isset($this->dataProvider)){
        $results[] = ['error'=>'No Data Provider Set'];
    }

    if(!isset($this->someThing)){
        $results[] = ['error'=>'No thing set Provider Set'];
    }

    //See if we ever set an error message and return the error or else just return "True"
    if($results == false){
      return true;
    }else
      return $results;
  }//end initOptions


}//end class
?>
