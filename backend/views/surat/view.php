<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Surat */

$this->title = $model->nama;
$this->params['breadcrumbs'][] = ['label' => 'Surats', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="surat-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
          <?= Html::a('<span class="btn-label"><i class="glyphicon glyphicon-chevron-left"></i></span>Back',
       ['/site/index'],
       [
           'class' => 'btn btn-labeled btn-info m-b-5 pull-left',
           'title' => 'Back'
       ]) ?>&nbsp;
        <?= Html::a('Approve', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
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
        //    'id',
            'nama',
            'npm',
            'no_surat',
            'tanggal',
            'tempat',
            'perihal',
                 ['attribute'=>"tujuan",
              'format'=>"raw",
            ],
             ['attribute'=>"isi",
              'format'=>"raw",
            ],
            'status',
        ],
    ]) ?>

</div>
