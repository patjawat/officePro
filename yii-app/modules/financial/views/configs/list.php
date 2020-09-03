<?php

use yii\helpers\Html;
use kartik\grid\GridView;
use yii\widgets\Pjax;
use yii\web\View;
/* @var $this yii\web\View */
/* @var $searchModel app\modules\financial\models\FinancialConfigSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'การตั้งค่า';
$this->params['breadcrumbs'][] = $this->title;
?>
<?php Pjax::begin()?>
                  <?= GridView::widget([
                      'dataProvider' => $dataProvider,
                      // 'filterModel' => $searchModel,
                      'id' => 'config-container',
                      'pjax' =>false,
                      'columns' => [
                          'code',
                          'name',
                          [
                            'class' => 'kartik\grid\ActionColumn',
                            'contentOptions' => ['style' => 'width:80px;',
                                'noWrap' => true
                            ],
                            'template' => '<div>{update} | {delete}</div>',
                            'buttons' => [
                                'update' => function($url, $model, $key) {
                                    return Html::a('<i class="far fa-edit"></i>', $url,['class' => 'edit-form','data' => ['pjax' => false]]);
                                    // return '<p class="edit-form">Edit</p>';
                                },
                                'delete' => function($url, $model, $key) {
                                  return Html::a('<i class="far fa-trash-alt"></i>', $url, [
                                              'title' => Yii::t('yii', 'Delete'),
                                              'class' => '',
                                              'onclick' => "
                                                      if (confirm('ลบข้อมูล?')) {
                                                          $.ajax('$url', {
                                                              type: 'POST'
                                                          }).done(function(data) {
                                                              $.pjax.reload({
                                                                  container:'#grid-medication-pjax',
                                                                  history:false,
                                                                  replace: false,
                                                                  url:'index.php?r=doctorworkbench/medication'
                                                                   });
                                                              // loadMedication();
                                                              loadMedicationForm();
                                                          });
                                                      }
                                                      return false;
                                                  ",
                                  ]);
                              }

                            ]
                        ]
                        //   [
                        //     'width' => '110px',
                        //     'class' => 'kartik\grid\ActionColumn',
                        // ],
                      ],
                  ]); ?>
<?php Pjax::end()?>

                  <?php
$js = <<< JS


$('.edit-form').click(function (e) { 
  e.preventDefault();
  var url = $(this).attr('href');
  $.ajax({
    type: "get",
    url: url,
    dataType: "json",
    success: function (res) {
      $('#btn-save').addClass('btn btn-warning').html('<i class="far fa-edit"></i> แก้ไข');
      $('.show-form').html(res.content);
      // $.pjax.reload({container: '#config-container'});

    }
  });
  
});

JS;
$this->registerJS($js,View::POS_END);
?>
             