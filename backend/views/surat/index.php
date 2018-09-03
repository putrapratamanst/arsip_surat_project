<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\SuratSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Surat';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="surat-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <!-- <?= Html::a('Create Surat', ['create'], ['class' => 'btn btn-success']) ?> -->
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id',
            'nama',
            //'tujuan',
           // 'isi:ntext',
            'tempat',
            // 'npm',
            // 'status',
            // 'perihal',
            // 'nama',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
