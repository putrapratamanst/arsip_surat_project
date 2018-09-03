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
        $modelsNilai = $model->posisiku;

        return $this->render('view',[
          'model'=> $model,
          'modelsNilai' => (empty($modelsNilai)) ? [new Nilai] : $modelsNilai,
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
      // $model->user_id = \Yii::$app->user->identity->id;
      // $model->npm = \Yii::$app->user->identity->username;


        $modelsNilai = [new Posisi];


       if ($model->load(Yii::$app->request->post())){
         // $model->waktu_daftar = date('Y-m-d h:m:s');

         $model->save();
    
   $modelsNilai = Tabular::createMultiple(Posisi::classname());
           Tabular::loadMultiple($modelsNilai, Yii::$app->request->post());


           // validate all models
           $valid = $model->validate();
           $valid = Tabular::validateMultiple($modelsNilai) && $valid;


           if ($valid) {
               $transaction = \Yii::$app->db->beginTransaction();
               try {
                   if ($flag = $model->save(false)) {
                       foreach ($modelsNilai as $indexTools =>$modelNilai) {
                           $modelNilai->id_letak = $model->id;
                       //    $modelNilai->user_id = \Yii::$app->user->identity->id;

                           if (! ($flag = $modelNilai->save(false))) {
                               $transaction->rollBack();
                               break;
                           }
                       }
                   }
                   if ($flag) {
                       $transaction->commit();
                       return $this->redirect(['view', 'id' => $model->id]);
                   }
               } catch (Exception $e) {
                   $transaction->rollBack(); \Yii::$app->session->setFlash('error','gagal');
               }

       }else{
        echo "gagal";
       }

       } else {
           return $this->render('create', [
               'model' => $model,
                'modelsNilai' => (empty($modelsNilai)) ? [new Posisi] : $modelsNilai,



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
         $modelsNilai = $model->posisiku;



         if ($model->load(Yii::$app->request->post())) {

             $oldIDs = ArrayHelper::map($modelsNilai, 'id', 'id');
             $modelsNilai = Tabular::createMultiple(Posisi::classname(), $modelsNilai);
             Tabular::loadMultiple($modelsNilai, Yii::$app->request->post());
             $deletedIDs = array_diff($oldIDs, array_filter(ArrayHelper::map($modelsNilai, 'id', 'id')));

             // ajax validation


             // validate all models
             $valid = $model->validate();
             $valid = Tabular::validateMultiple($modelsNilai) && $valid;

             if ($valid) {
                 $transaction = \Yii::$app->db->beginTransaction();
                 try {
                     if ($flag = $model->save(false)) {
                         if (! empty($deletedIDs)) {
                             Posisi::deleteAll(['id' => $deletedIDs]);
                         }
                         foreach ($modelsNilai as $modelNilai) {
                             $modelNilai->id_letak = $model->id;
                            // $modelNilai->user_id = \Yii::$app->user->identity->id;

                             if (! ($flag = $modelNilai->save(false))) {
                                 $transaction->rollBack();
                                 break;
                             }
                         }
                     }
                     if ($flag) {
                         $transaction->commit();
                         return $this->redirect(['view', 'id' => $model->id]);
                     }
                 } catch (Exception $e) {
                     $transaction->rollBack();
                 }

         }

         } else {
             return $this->render('update', [
                 'model' => $model,
                 'modelsNilai' => (empty($modelsNilai)) ? [new Posisi] : $modelsNilai
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
