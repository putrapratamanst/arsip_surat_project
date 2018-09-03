<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Letak */

$this->title = 'Update Letak';
$this->params['breadcrumbs'][] = ['label' => 'Letaks', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="letak-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'modelsNilai'=>  $modelsNilai,

    ]) ?>

</div>
