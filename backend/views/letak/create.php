<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Letak */

$this->title = 'Create Letak';
$this->params['breadcrumbs'][] = ['label' => 'Letaks', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="letak-create">


    <?= $this->render('_form', [
        'model' => $model,
        'modelsNilai'=>  $modelsNilai,

    ]) ?>

</div>
