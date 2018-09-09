<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Surat */

$this->title = 'Approve Surat: ' . $model->nama;
$this->params['breadcrumbs'][] = ['label' => 'Surat', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->nama, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Approve';
?>
<div class="surat-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
