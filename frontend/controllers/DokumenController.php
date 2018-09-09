<?php

namespace frontend\controllers;

use Yii;
use frontend\models\Dokumen;
use frontend\models\Surat;
use frontend\models\DokumenSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * DokumenController implements the CRUD actions for Dokumen model.
 */
class DokumenController extends Controller
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
     * Lists all Dokumen models.
     * @return mixed
     */
    public function actionUnduh($id) 
    { 
        $download = Dokumen::findOne($id); 
        $path = Yii::getAlias('@backend').'/web/uploads/'.$download->file_url;

        if (file_exists($path)) {
            return Yii::$app->response->sendFile($path);
            Yii::app()->end();
        }
    }
    public function actionIndex()
    {
        $searchModel = new DokumenSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Dokumen model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {   
        $tahun = $this->findModel($id)->tahun;
        $surat = Surat::find()->where(['like', 'tanggal', $tahun])->all();
          
        return $this->render('view', [
            'model' => $this->findModel($id),
            'surat'=> $surat,
        ]);
    }
     public function actionLihat($id)
    {   
        $tahun = $this->findModel($id)->tahun;
        $nama_dokumen = $this->findModel($id)->nama_dokumen;
        if($nama_dokumen == "observasi"){
            $surat = Surat::find()->where(['like', 'tanggal', $tahun])->andWhere(['like', 'perihal', 'observasi'])->all();
        }else{
            $surat = Surat::find()->where(['like', 'tanggal', $tahun])->andWhere(['like', 'perihal', 'internship'])->all();
        }
        
          
        return $this->render('lihat', [
            'model' => $this->findModel($id),
            'surat'=> $surat,
        ]);
    }

    /**
     * Creates a new Dokumen model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Dokumen();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Dokumen model.
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
     * Deletes an existing Dokumen model.
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
     * Finds the Dokumen model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Dokumen the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Dokumen::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
