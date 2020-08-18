<?php

use kartik\grid\GridView;
use yii\helpers\Html;
use yii\web\View;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel app\modules\hr\models\DepartmentSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Departments';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="show-form-department"></div>
<?php Pjax::begin(['id' => 'department-container']);?>
<div class="department-index">
    <?=GridView::widget([
    'dataProvider' => $dataProvider,
    'filterModel' => $searchModel,
    'columns' => [
        ['class' => 'kartik\grid\SerialColumn'],
        'name',
        [
            'class' => 'yii\grid\ActionColumn',
            'contentOptions' => ['style' => 'width:80px;',
                'noWrap' => true,
            ],
            'template' => '<div>{update} {delete}</div>',
            'buttons' => [
                'update' => function ($url, $model, $key) {
                    return Html::button('<i class="fas fa-edit"></i>', [
                        'value' => \yii\helpers\Url::to(['update', 'id' => $model->id]),
                        'title' => 'แก้ไขการ' . $this->title,
                        'class' => 'btn btn-warning btn-xs text-white',
                        // 'onclick' =>''
                        'onclick' => "
                            $.ajax({
                                type: 'get',
                                url: '" . \yii\helpers\Url::to(['update', 'id' => $model->id]) . "',
                                beforeSend: function(){

                                },
                                success: function (response) {
                                    $('.show-form-department').html(response.content);
                                }
                            });
                            ",
                    ]);
                },
                'delete' => function ($url, $model, $key) {
                    return Html::a('<i class="far fa-trash-alt"></i>', $url, [
                        'title' => Yii::t('yii', 'Delete'),
                        'class' => 'btn btn-danger btn-xs',
                        'onclick' => "
                                if (confirm('ลบข้อมูล?')) {
                                    $.ajax('$url', {
                                        type: 'POST',
                                        beforeSend: function() {
                                        },
                                        success:function (response) {
                                            console.log(response);
                                            if(response.status == true){
                                                loadFormDepartment();
                                                $.pjax.reload({container:'#department-container', async: false,url:'index.php?r=hr/department'});
                                            }else{

                                            }

                                        }
                                    })
                                }
                                return false;
                            ",
                    ]);
                },

            ],
        ],
    ],
]);?>


    <?php Pjax::end();?>
</div>
<?php
$js = <<< JS
loadFormDepartment();

function loadFormDepartment(){
    $.ajax({
        type: "get",
        url: "index.php?r=hr/department/create",
        dataType: "json",
        success: function (response) {
            $('.show-form-department').html(response.content);
            console.log('load department');
        }
    });
}

function saveDepartment(){
    var form = $('#form-department');
    $.ajax({
                url: form.attr('action'),
                type: 'post',
                dataType: 'json',
                data: form.serialize(),
                beforeSend: function() {
                    // beforeSendData();
                },
                success: function (response) {
                    if(response == true) {
                        $.pjax.reload({container:"#department-container", async: false,url:'index.php?r=hr/department'});
                        // closeModal();
                        loadFormDepartment()
                    }
                },
                error: function(xhr) { // if error occured
                    alert("Error occured.please try again");
                },
                complete: function() {
                },
            });
}
JS;
$this->registerJS($js, View::POS_END);
?>