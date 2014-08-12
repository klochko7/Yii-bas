<?php

namespace app\controllers;

use Yii;
use app\models\Exp;
use app\models\ExpSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\data\ActiveDataProvider;

/**
 * ExpController implements the CRUD actions for Exp model.
 */
class ExpController extends Controller
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
     * Lists all Exp models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new ExpSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Exp model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id) {
        $model = $this->findModel($id);
        $resultsProvider = new ActiveDataProvider([
                    'query' => \app\models\Results::find()->where(['id_exp' => $model->id_exp]),
                    'pagination' => [
                        'pageSize' => 10,
                        ],
         ]);
        return $this->render('view', [
               'model' => $model,
               'resultsProvider' => $resultsProvider,
                ]);
    }
    

    /**
     * Creates a new Exp model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Exp();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id_exp]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        } 
    }

    /**
     * Updates an existing Exp model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id_exp]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Exp model.
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
     * Finds the Exp model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Exp the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Exp::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
