<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\SuratSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="surat-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'tempat') ?>

    <?= $form->field($model, 'tujuan') ?>

    <?= $form->field($model, 'isi') ?>

    <?= $form->field($model, 'tanggal') ?>

    <?php // echo $form->field($model, 'npm') ?>

    <?php // echo $form->field($model, 'status') ?>

    <?php // echo $form->field($model, 'perihal') ?>

    <?php // echo $form->field($model, 'nama') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
