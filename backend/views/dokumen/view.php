<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Dokumen */

$this->title = $model->nama_dokumen;
$this->params['breadcrumbs'][] = ['label' => 'Dokumens', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="dokumen-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
           <?= Html::a('<span class="btn-label"><i class="glyphicon glyphicon-chevron-left"></i></span>Back',
       ['/site/index'],
       [
           'class' => 'btn btn-labeled btn-info m-b-5 pull-left',
           'title' => 'Back'
       ]) ?>&nbsp;
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            // /'id',
            'nama_dokumen',
            'letakKu.letak_penyimpanan',
            'letakKu.letakPosisi.posisi',

            'tahun',
        ],
    ]) ?>

</div>
