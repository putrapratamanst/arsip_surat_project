<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Letak */

$this->title = 'Create Letak';
$this->params['breadcrumbs'][] = ['label' => 'Letaks', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="letak-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'modelsNilai'=>  $modelsNilai,

    ]) ?>

</div>
