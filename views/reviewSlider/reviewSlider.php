<?php foreach($dataProvider as $review):?>
  <div class="client-review well well-sm">
    <blockquote>
      <p><?=$review->quote?></p>
      <footer>
        <?=$review->fullname?>  <cite><?=$review->location?></cite>
      </footer>
    </blockquote>
  </div>
<?php endforeach; ?>
