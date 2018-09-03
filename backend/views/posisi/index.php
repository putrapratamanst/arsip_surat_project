<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\PosisiSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Posisis';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="posisi-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Posisi', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'posisi',
            'id_letak',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
