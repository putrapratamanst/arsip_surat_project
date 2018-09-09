<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Mahasiswa */

$this->title = 'Update Mahasiswa:'.$model->nama;
$this->params['breadcrumbs'][] = ['label' => 'Mahasiswas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->npm, 'url' => ['view', 'id' => $model->npm]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="mahasiswa-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
