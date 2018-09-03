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

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
