<?php

namespace app\modules\mr\controllers;

use app\modules\mr\models\Events;
use app\modules\mr\models\EventsSearch;
use chillerlan\QRCode\QRCode;
use kartik\mpdf\Pdf;
use Mpdf\Config\ConfigVariables;
use Mpdf\Config\FontVariables;
use Yii;
use yii\filters\VerbFilter;
use yii\helpers\Html;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\web\Response;

/**
 * EventsController implements the CRUD actions for Events model.
 */
class EventsController extends Controller
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
     * Lists all Events models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new EventsSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Events model.
     * @param integer $id
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
     * Creates a new Events model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Events();
        $start = Yii::$app->request->get('start');
        $end = Yii::$app->request->get('end');
        $timeEnd = explode(" ", $end);
        $thStart = Yii::$app->thaiFormatter->asDate($start, 'php:d/m/Y H:i:s');
        $thEnd = Yii::$app->thaiFormatter->asDate($end, 'php:d/m/Y H:i:s') . '-' . $timeEnd[1];
        if ($model->load(Yii::$app->request->post())) {
            Yii::$app->response->format = Response::FORMAT_JSON;
            $model->start = $start;
            $model->end = $end;
            $model->save(false);
            return $this->redirect(['index']);

        }

        if (Yii::$app->request->isAjax) {
            Yii::$app->response->format = Response::FORMAT_JSON;
            return ['title' => 'จองห้องประชุม วันที่ : ' . $thStart . ' - ' . $timeEnd[1],
                'content' => $this->renderAjax('create', [
                    'model' => $model,
                ]),
                'footer' => Html::button('<i class="fas fa-power-off"></i> ปิด', ['class' => 'btn btn-default pull-left', 'data-dismiss' => "modal"]) .
                Html::submitButton('<i class="fas fa-check"></i> บันทึก', ['class' => 'btn btn-success', 'onclick' => 'return saveMeetingRoom()']),
            ];
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Events model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);
        $timeEnd = explode(" ", $model->end);
        $thStart = Yii::$app->thaiFormatter->asDate($model->start, 'php:d/m/Y H:i:s');
        $thEnd = Yii::$app->thaiFormatter->asDate($model->end, 'php:d/m/Y H:i:s') . '-' . $timeEnd[1];
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['index']);
        }

        if (Yii::$app->request->isAjax) {
            Yii::$app->response->format = Response::FORMAT_JSON;
            return ['title' => 'แก้ไขการจอง : ' . $thStart . ' - ' . $timeEnd[1],
                'content' => $this->renderAjax('update', [
                    'model' => $model,
                ]),
                'footer' => Html::button('<i class="fas fa-power-off"></i> ปิด', ['class' => 'btn btn-default pull-left', 'data-dismiss' => "modal"]) .
                Html::submitButton('<i class="fas fa-check"></i> บันทึก', ['class' => 'btn btn-success', 'onclick' => 'return saveMeetingRoom()']),
            ];
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    protected function findModel($id)
    {
        if (($model = Events::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }

    public function actionJsoncalendar($start = null, $end = null, $_ = null)
    {

        \Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;
        $models = Events::find()->all();
        $events = [];
        foreach ($models as $model) {
            $events[] = [
                'id' => $model->id,
                'title' => $model->title,
                'start' => date('Y-m-d\TH:i:s\Z', strtotime($model->start)),
                'end' => date('Y-m-d\TH:i:s\Z', strtotime($model->end)),
                'backgroundColor' => $model->room->color, //red
                'borderColor' => $model->room->color, //red
                'textColor' => '#fff', //red
                'editable' => true,
                'droppable' => true,
                'startEditable' => true, // ใช้เม้าเลื่อไปวันอื่นได้
                'durationEditable' => true,
            ];
        }
        return $events;
    }

    public function actionEventUpdate()
    {
        \Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;
        $event = Yii::$app->request->post();
        $id = $event['id'];
        $model = $this->findModel($id);
        $model->start = $event['start'];
        $model->end = $event['end'];
        return $model->save(false);
        // return $event;

    }

    public function actionPrintQr($id)
    {
        $model = $this->findModel($id);
        $content = $this->renderPartial('print_qr', [
            'model' => $model,
        ]);

        // setup kartik\mpdf\Pdf component
        $pdf = new Pdf([
            'mode' => Pdf::MODE_UTF8,
            // A4 paper format
            'format' => Pdf::FORMAT_A4,
            // portrait orientation
            'orientation' => Pdf::ORIENT_PORTRAIT,
            // stream to browser inline
            'destination' => Pdf::DEST_BROWSER,
            // your html content input
            'content' => $content,
            // format content from your own css file if needed or use the
            // enhanced bootstrap css built by Krajee for mPDF formatting
            // 'cssFile' => '@app/web/css/pdf.css',
            'cssFile' => '@app/web/css/kv-mpdf-bootstrap.css',
            // any css to be embedded if required
            'cssInline' => '.bd{border:1.5px solid; text-align: center;} .ar{text-align:right} .imgbd{border:1px solid}',
            // set mPDF properties on the fly
            'options' => ['title' => 'Preview Report Case: '],
            // call mPDF methods on the fly
            'methods' => [
                // 'SetHeader'=>'OPD-DOCTOR-RECORD',
                'SetFooter' => ['{PAGENO}'],
                'SetHeader' => false,
                'SetFooter' => false,
            ],
            'marginLeft' => 1,
            'marginRight' => 1,
            // 'marginTop' => 5,
            // 'marginBottom' => 10,
            // 'marginFooter' => 5
        ]);
        // Fonts Config
        $defaultConfig = (new ConfigVariables())->getDefaults();
        $fontDirs = $defaultConfig['fontDir'];

        $defaultFontConfig = (new FontVariables())->getDefaults();
        $fontData = $defaultFontConfig['fontdata'];

        $pdf->options['fontDir'] = array_merge($fontDirs, [
            Yii::getAlias('@webroot') . '/fonts',
        ]);
        $pdf->options['fontdata'] = $fontData + [
            'angsana' => [
                'R' => 'Angsana.ttf',
                'TTCfontID' => [
                    'R' => 1,
                ],
            ],
            'sarabun' => [
                'R' => 'thsarabunnew-webfont.ttf',
            ],
        ];
        return $pdf->render();
    }

    public function actionQr()
    {
        Yii::$app->response->format = Response::FORMAT_HTML;
        $data = 'https://programmerthailand.com';
        $qr = new QRCode();

        return '<img src="' . $qr->render($data) . '" />';
    }

}