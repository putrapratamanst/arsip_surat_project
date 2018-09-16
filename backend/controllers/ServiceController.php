<?php

namespace backend\controllers;

use Yii;
use backend\models\Mahasiswa;
use backend\models\Dokumen;
use backend\models\Surat;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use common\models\LoginForm;

/**
 * DokumenController implements the CRUD actions for Dokumen model.
 */
class ServiceController extends Controller
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
    public function beforeAction($action)
    {
        $this->enableCsrfValidation = false;
        // $this->type = Yii::$app->user->identity->user_type;

        return parent::beforeAction($action);
    }


    public function actionLogin()
    {    
        $model = new LoginForm();
        if ($model->load(Yii::$app->getRequest()->getBodyParams(), '') && $model->login()) {
            return [
                'message' => 'Login sukses',
                'username' => Yii::$app->user->identity->username,

            ];
        } else {
            return [
                'message' => 'Login gagal'
            ];
        }
    }
    /**
     * Lists all Dokumen models.
     * @return mixed
     */
    public function actionGetAllMahasiswa()
    {
        $model = Mahasiswa::find()->all();

        $modelNew = [];
        foreach ($model as $key => $value) {
        $modelNew []= [
            'npm' => $value->attributes['npm'],
            'nama' => $value->attributes['nama'],
            'email' => $value->attributes['email'],
        ];

        }
        return json_encode($modelNew,JSON_UNESCAPED_SLASHES);
    }

    /**
     * Displays a single Dokumen model.
     * @param integer $id
     * @return mixed
     */
    public function actionGetOneMahasiswa($id)
    {
        $models = Mahasiswa::find()->where(['npm'=>$id])->one();
        $model[] = [
            'npm' => $models->npm,
            'nama' => $models->nama,
            'email' => $models->email,
        ];

        return json_encode($model,JSON_UNESCAPED_SLASHES);
    }
    public function actionGetAllDokumen()
    {
        $model = Dokumen::find()->all();

        $modelNew = [];
        foreach ($model as $key => $value) {
        $modelNew []= [
            'nama_dokumen' => $value->attributes['nama_dokumen'],
            'tahun' => $value->attributes['tahun'],
            'letak' => $value->letakKu->attributes['letak_penyimpanan'],
        ];

        }
        return json_encode($modelNew,JSON_UNESCAPED_SLASHES);
    }

    /**
     * Displays a single Dokumen model.
     * @param integer $id
     * @return mixed
     */
    public function actionGetOneDokumen($id)
    {
        $models = Dokumen::find()->where(['id'=>$id])->one();
        $model[] = [
            'nama_dokumen' => $models->nama_dokumen,
            'tahun' => $models->tahun,
            'letak' => $models->letakKu->letak_penyimpanan,
        ];

        return json_encode($model,JSON_UNESCAPED_SLASHES);
    }

    /**
     * Creates a new Dokumen model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionGetAllSurat()
    {
        $model = Surat::find()->all();

        $modelNew = [];
        foreach ($model as $key => $value) {
        $modelNew []= [
            'tempat' => $value->attributes['tempat'],
            'tujuan' => $value->attributes['tujuan'],
            'isi' => $value->attributes['isi'],
            'tanggal' => $value->attributes['tanggal'],
            'status' => $value->attributes['isi'],
            'perihal' => $value->attributes['perihal'],
            'nama' => $value->attributes['nama'],
            'no_surat' => $value->attributes['no_surat'],
        ];

        }
        return json_encode($modelNew,JSON_UNESCAPED_SLASHES);
    }

    public function actionGetOneSurat($id)
    {
        $models = Surat::find()->where(['id'=>$id])->one();
        $model[] = [
            'tempat' => $models->tempat,
            'tujuan' => $models->tujuan,
            'isi' => $models->isi,
            'tanggal' => $models->tanggal,
            'status' => $models->isi,
            'perihal' => $models->perihal,
            'nama' => $models->nama,
            'no_surat' => $models->no_surat,
        ];

        return json_encode($model,JSON_UNESCAPED_SLASHES);
    }


    /**
     * Updates an existing Dokumen model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
}
