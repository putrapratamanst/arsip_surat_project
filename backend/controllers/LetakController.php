<?php

namespace backend\controllers;

use Yii;
use backend\models\Posisi;
use backend\models\Letak;
use backend\models\LetakSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use frontend\models\Tabular;
use yii\helpers\ArrayHelper;

/**
 * LetakController implements the CRUD actions for Letak model.
 */
class LetakController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['GET','POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all Letak models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new LetakSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Letak model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
   public function actionView($id)
      {
        $model = $this->findModel($id);

        return $this->render('view',[
          'model'=> $model,
        ]);

            }

    /**
     * Creates a new Letak model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
   public function actionCreate()
   {
        $model = new Letak();

      if ($model->load(Yii::$app->request->post()) &&  $model->save()){
        return $this->redirect(['view', 'id' => $model->id]);
       } else {
           return $this->render('create', [
               'model' => $model,
           ]);
       }
   }

    /**
     * Updates an existing Letak model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
     {
         $model = $this->findModel($id);

         if ($model->load(Yii::$app->request->post()) && $model->save()) {
          return $this->redirect(['view', 'id' => $model->id]);
         } else {
             return $this->render('update', [
                 'model' => $model,
             ]);
         }
     }

    /**
     * Deletes an existing Letak model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Letak model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Letak the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Letak::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
