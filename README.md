#Yii2-Reviews
Yii2 extension for showcasing client reviews / testimonials in a jquery slider


#INSTALL
Add to your config file - and set your view path for the default controller for the index page of all reviews

```
'review'=>[
  'class'=>'monumentix\reviews\ReviewModule',
  'viewPath'=>'@app/themes/protech/views/reviews',
],
```



#WIDGET USAGE
```
<?=ReviewSliderWidget::widget([
    'viewFile'=> '@app/themes/protech/views/reviews/reviewSlider.php',
    'pluginOptions'=>
      [
        'id'=>'client-reviews-slider-widget',
        'items'=>2,
      ],
    ]);
?>
```
You can overwrite the default view as noted using the viewFile option
```
  'viewFile'=> '@app/themes/protech/views/reviews/reviewSlider.php',
```

#ABOUT
Extension contains and Admin controller for CRUD operations, and a widget for displaying the reviews in a Jquery slider.
