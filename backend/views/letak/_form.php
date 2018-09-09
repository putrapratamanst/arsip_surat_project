<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use wbraganca\dynamicform\DynamicFormWidget;
use yii\helpers\ArrayHelper;

?>

<div class="letak-index">
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h1><?= Html::encode($this->title) ?></h1>
              <?php // echo $this->render('_search', ['model' => $searchModel]); ?>
            </div>
            <!-- /.box-header -->

            <?php $form = ActiveForm::begin(); ?>

            <?= $form->field($model, 'letak_penyimpanan')->textInput(['maxlength' => true])->label('Nama Folder') ?>

            <div class="form-group">
                <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
            </div>

            <?php ActiveForm::end(); ?>

    </section>
</div>