<?php
use yii\helpers\Url;
?>
<?=$this->render('link')?>
<div class="card mt-2">
  <div class="card-header">
    
  </div>
  <div class="card-body">
  <?= yii2fullcalendar\yii2fullcalendar::widget([
      'options' => [
        'lang' => 'th',
        //... more options to be defined here!
      ],
      'events' => Url::to(['/timetrack/default/jsoncalendar'])
    ]);
?>
  </div>
  <div class="card-footer text-muted">
    Footer
  </div>
</div>
