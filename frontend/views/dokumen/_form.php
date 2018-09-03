<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\Dokumen */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="dokumen-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nama_dokumen')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'letak')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
