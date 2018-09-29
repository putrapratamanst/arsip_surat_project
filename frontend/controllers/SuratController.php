<?php

namespace frontend\controllers;

use Yii;
use frontend\models\Surat;
use frontend\models\Mahasiswa;
use frontend\models\SuratSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use frontend\components\EmailHelpers;
use kartik\mpdf\Pdf;

/**
 * SuratController implements the CRUD actions for Surat model.
 */
class SuratController extends Controller
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
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all Surat models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new SuratSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
         
    }

    /**
     * Displays a single Surat model.
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
     * Creates a new Surat model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Surat();
        $model->tanggal = date("Y-m-d");
        $model->status = "PENDING";
        
        if ($model->load(Yii::$app->request->post())){
            $nama = Mahasiswa::find()->where([ "npm" => $model->nama ])->asArray()->all();
            $model->nama = $nama[0]['nama'];

            $dataNama =  $nama[0]['nama'];
            $dataEmail =  $nama[0]['email'];
            $dataNpm =  $nama[0]['npm'];
            $dataStatus =  $model->status;

            if ($model->save()){
                EmailHelpers::registration($dataNama,$dataEmail,$dataNpm,$dataStatus);
                \Yii::$app->session->setFlash('success','Cek email anda');

            }
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Surat model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
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
     * Deletes an existing Surat model.
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
     * Finds the Surat model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Surat the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */

    public function actionPrint($id){
          // get your HTML raw content without any layouts or scripts
          //$content = $this->renderPartial('_reportView');
          $model = $this->findModel($id);
          $content = $this->renderPartial('print',[
                'model' => $this->findModel($id),
            ]);
          // setup kartik\mpdf\Pdf component
          $pdf = new Pdf([
              // set to use core fonts only
            'mode' => Pdf::MODE_CORE,
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
              'cssFile' => '@vendor/kartik-v/yii2-mpdf/assets/kv-mpdf-bootstrap.min.css',
              // any css to be embedded if required
              'cssInline' => '.kv-heading-1{font-size:18px}',
              // set mPDF properties on the fly
              'options' => ['title' => $this->findModel($id)->id],
              // call mPDF methods on the fly
              'methods' => [
                   'SetHeader' => ['D4 TEKNIK INFORMTIKA'],
                  'SetFooter'=>['{PAGENO}'],
              ]
          ]);
          Yii::$app->response->format = \yii\web\Response::FORMAT_RAW;
          Yii::$app->response->headers->add('Content-Type', 'application/pdf');
          // return the pdf output as per the destination setting
          return $pdf->render();
        }
    protected function findModel($id)
    {
        if (($model = Surat::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
