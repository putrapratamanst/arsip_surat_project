<?php

namespace backend\controllers;

use Yii;
use backend\models\Dokumen;
use backend\models\DokumenSearch;
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
                    'delete' => ['GET','POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all Dokumen models.
     * @return mixed
     */
    // public function actionIndex()
    // {
    //     $searchModel = new DokumenSearch();
    //     $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

    //     return $this->render('index', [
    //         'searchModel' => $searchModel,
    //         'dataProvider' => $dataProvider,
    //     ]);
    // }
    public function actionIndex()
    {
        $model = Dokumen::find()->groupBy('letak')->all();    
        return $this->render('index', [
            'model' => $model,
        ]);
    }
    public function actionList($id)
    {
        $model = Dokumen::find()->where(['letak'=>$id])->all();    
        return $this->render('letak', [
            'model' => $model,
        ]);
    }

    public function actionMenuEasyOrder()
    {

        $model = Yii::$app->getRequest()->post();
        // echo '<pre>';
        // print_r($model);die();

        if ($new_order = Yii::$app->getRequest()->post('new_order')) {
            $new_order = json_decode($new_order);

            $connection = Yii::$app->db;
            foreach ($new_order as $parent_index => $parent_item) {
                $parent_model = $this->findMenuModel($parent_item->id);
                $parent_model->order = $parent_index +1;
                $parent_model->parent = null;
                $parent_model->save();
                if (isset($parent_item->children)) {
                    foreach ($parent_item->children as $children_index => $children_item) {
                        $children_model = $this->findMenuModel($children_item->id);
                        $children_model->order = $children_index;
                        $children_model->parent = $parent_item->id;
                        $children_model->save();
                    }
                }
            }
            Helper::invalidate();
            return $this->redirect(['index']);
        }
        // $page_name = 'Menu Easy Order';
        $icon = 'icon-cursor-move';
        // // $this->view->params['dev_notice'] = Yii::$app->params['dev_notice']['wip'];

        // Yii::$app->view->title = $page_name.' | '.Yii::$app->name;
        // Yii::$app->params['breadcrumbs'] = array(
        //     ['label' => 'Access Menu', 'url' => ['/admin/menu']],
        //     'Easy Order',
        // );

        $items = $this->getMenus();

        return $this->render('newIndex', [
            'menuItems' => $items,
            'pageName' => '',//$page_name,
            'icon' => $icon,
        ]);
    }

    public function getMenus($ar = null, $pid = null) {
        if (!$ar) {
            $tableName = 'dokumen';
            $ar = (new \yii\db\Query())
                ->select(['m.id','m.nama_dokumen as name', 'm.tahun','letak'=>'p.letak_penyimpanan'])
                ->from(['m' => $tableName])
                ->leftJoin(['p' => 'letak'], '[[m.letak]]=[[p.id]]')
                ->all();
        }

        $op = array();
        foreach( $ar as $item ) {
                        echo"<pre>";print_r($item);
            if( $item['letak'] == $pid ) {
                $op[$item['id']] = array(
                    'id' => $item['id'],
                    'label' => $item['name'],
                    'url' => $item['route'],
                    'letak' => $item['letak'],
                    'order' => $item['order'],
                );
                $children =  $this->getMenus( $ar, $item['id'] );
                if( $children ) {
                    $op[$item['id']]['items'] = $children;
                }
                $order[] = $item['order'];
            }
            if ($op != []) {
                array_multisort($order, $op);
            }
        }
            exit();

        return $op;
    }    /**
     * Displays a single Dokumen model.
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

    public function actionUpload()
    {
        $fileName = 'file';
        $uploadPath = 'uploads';

        if (isset($_FILES[$fileName])) {
            $file = \yii\web\UploadedFile::getInstanceByName($fileName);

            //Print file data
            //print_r($file);

            if ($file->saveAs($uploadPath . '/' . $file->name)) {
                //Now save file data to database

                echo \yii\helpers\Json::encode($file);
            }
        }else{
            return $this->render('upload');
        }

        return false;
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
