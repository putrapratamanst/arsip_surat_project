<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Mahasiswa */

$this->title = 'Input user';
$this->params['breadcrumbs'][] = ['label' => 'Mahasiswas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="mahasiswa-create">


    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
