<?php

namespace app\modules\financial\controllers;

use yii\web\Controller;
use kartik\mpdf\Pdf;
use Mpdf\Config\ConfigVariables;
use Mpdf\Config\FontVariables;
use Yii;
use \yii\web\Response;
use app\modules\financial\models\FinancialConfig;

class DefaultController extends Controller
{
    /**
     * Renders the index view for the module
     * @return string
     */
    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionReport()
    {
        $model = FinancialConfig::find()->where(['type' => 'address'])->one();
        $content = $this->renderPartial('report',['model' => $model]);

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
            'marginTop' => 5,
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
            // return $this->render('report');
       
    }
}
