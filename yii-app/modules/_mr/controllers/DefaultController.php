<?php

namespace app\modules\mr\controllers;

use app\modules\mr\models\EventsSearch;
use Yii;
use yii\data\Pagination;
use yii\web\Controller;

/**
 * Default controller for the `Mr` module
 */
class DefaultController extends Controller
{
    public function actionIndex()
    {
        $searchModel = new EventsSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        if ($searchModel->q) {
            $dataProvider->query->andFilterWhere(['like', 'title', $searchModel->q]);
        } else {
            $dataProvider->query->andWhere(['>', 'end', Date('Y-m-d H:i:s')]);
        }
        $dataProvider->pagination = ['pageSize' => 8];
        $dataProvider->setSort([
            'defaultOrder' => [
                'start' => SORT_ASC,
                'end' => SORT_DESC,
            ],
        ]);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }
}