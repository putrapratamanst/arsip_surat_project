<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\DokumenSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Dokumen';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="dokumen-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Dokumen', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
      //  'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id',
            'nama_dokumen',
            'letakKu.letak_penyimpanan',
            'tahun',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
