<?php

namespace backend\controllers;

use Yii;
<<<<<<< HEAD
use common\models\CostAccumulation;
use common\models\CostAccumulationSearch;
=======
use common\models\CostAccumulation\CostAccumulation;
use common\models\CostAccumulation\CostAccumulationSearch;
>>>>>>> 76c58ee72437bc4331656780392cdf747a010500
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * CostAccumulationController implements the CRUD actions for CostAccumulation model.
 */
class CostAccumulationController extends Controller
{
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['post'],
                ],
            ],
        ];
    }

    /**
     * Lists all CostAccumulation models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new CostAccumulationSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single CostAccumulation model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new CostAccumulation model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new CostAccumulation();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
<<<<<<< HEAD
            return $this->redirect(['view', 'id' => $model->id_accumulation]);
=======
            return $this->redirect(['view', 'id' => $model->id]);
>>>>>>> 76c58ee72437bc4331656780392cdf747a010500
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing CostAccumulation model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
<<<<<<< HEAD
            return $this->redirect(['view', 'id' => $model->id_accumulation]);
=======
            return $this->redirect(['view', 'id' => $model->id]);
>>>>>>> 76c58ee72437bc4331656780392cdf747a010500
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing CostAccumulation model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the CostAccumulation model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return CostAccumulation the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = CostAccumulation::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
