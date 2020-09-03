<?php

namespace app\modules\financial\controllers;

use Yii;
use app\modules\financial\models\FinancialConfig;
use app\modules\financial\models\FinancialConfigSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\Response;
use yii\helpers\Html;
/**
 * ConfigsController implements the CRUD actions for FinancialConfig model.
 */
class ConfigsController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all FinancialConfig models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new FinancialConfigSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    public function actionList()
    {
        $searchModel = new FinancialConfigSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        Yii::$app->response->format = Response::FORMAT_JSON;

        return $this->renderAjax('list', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single FinancialConfig model.
     * @param string $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new FinancialConfig model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new FinancialConfig();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            if (Yii::$app->request->isAjax) {
                Yii::$app->response->format = Response::FORMAT_JSON;
                    return [
                        'title' => '<i class="fas fa-plus"></i> สร้างใหม่',
                        'content' => $this->renderAjax('view',['model' => $model]),
                        'footer' =>  Html::submitButton('แก้ไข', ['class' => 'btn btn-warning']).Html::submitButton('ยกเลิก', ['class' => 'btn btn-default','onclick' => 'return closeModal()'])
                    ]; 
            }else{
                return $this->redirect(['index']);

            }
        }
        if (Yii::$app->request->isAjax) {
            Yii::$app->response->format = Response::FORMAT_JSON;
            return [
                'title' => '<i class="fas fa-plus"></i> สร้างใหม่',
                'content' => $this->renderAjax('create',['model' => $model]),
                // 'footer' =>  Html::submitButton('บันทึก', ['class' => 'btn btn-success','onclick' => 'return SaveForm()']).Html::submitButton('ยกเลิก', ['class' => 'btn btn-default','onclick' => 'return closeModal()'])
            ];
        }else{
            return $this->render('create',['model' => $model]);
        }
    }

    /**
     * Updates an existing FinancialConfig model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post())) {
            if($model->save()){
                  if (Yii::$app->request->isAjax) {
                Yii::$app->response->format = Response::FORMAT_JSON;

                    return [
                        'title' => '<i class="fas fa-plus"></i> สร้างใหม่',
                        'content' => $this->renderAjax('view',['model' => $model]),
                        'footer' =>  Html::submitButton('แก้ไข', ['class' => 'btn btn-warning']).Html::submitButton('ยกเลิก', ['class' => 'btn btn-default','onclick' => 'return closeModal()'])
                    ]; 
            }else{
                return $this->redirect(['index']);

            }

            }
            // return $this->redirect(['index']);

            // if (Yii::$app->request->isAjax) {
            //     // Yii::$app->response->format = Response::FORMAT_JSON;
            //     // return $model->save();
            //         // return [
            //         //     'title' => '<i class="fas fa-plus"></i> สร้างใหม่',
            //         //     'content' => $this->renderAjax('view',['model' => $model]),
            //         //     'footer' =>  Html::submitButton('แก้ไข', ['class' => 'btn btn-warning']).Html::submitButton('ยกเลิก', ['class' => 'btn btn-default','onclick' => 'return closeModal()'])
            //         // ]; 
            // }else{

            // }
        }
        if (Yii::$app->request->isAjax) {
            Yii::$app->response->format = Response::FORMAT_JSON;
            return [
                'title' => '<i class="fas fa-plus"></i> สร้างใหม่',
                'content' => $this->renderAjax('update',['model' => $model]),
                // 'footer' =>  Html::submitButton('บันทึก', ['class' => 'btn btn-success','onclick' => 'return SaveForm()']).Html::submitButton('ยกเลิก', ['class' => 'btn btn-default','onclick' => 'return closeModal()'])
            ];
        }else{
            return $this->render('update',['model' => $model]);
        }
    }

    /**
     * Deletes an existing FinancialConfig model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the FinancialConfig model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $id
     * @return FinancialConfig the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = FinancialConfig::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
