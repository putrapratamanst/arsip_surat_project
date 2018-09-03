<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use backend\models\Letak;
use backend\models\Posisi;
use yii\helpers\ArrayHelper;
/* @var $this yii\web\View */
/* @var $model backend\models\Dokumen */
/* @var $form yii\widgets\ActiveForm */
$letak=Letak::find()->all();
$listletak=ArrayHelper::map($letak,'id','letak_penyimpanan');
$posisi=Posisi::find()->all();
$listposisi=ArrayHelper::map($posisi,'id','posisi');
?>

<div class="dokumen-form">

  <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data'],'layout' => 'horizontal',
                              'fieldConfig' => [
                                  'template' => "{label}\n{beginWrapper}\n{input}\n{hint}\n{error}\n{endWrapper}",
                                      'horizontalCssClasses' => [
                                          'label' => 'col-sm-3',
                                          // 'offset' => 'col-sm-offset-9',
                                          'wrapper' => 'col-sm-6',
                                          'error' => '',
                                          'hint' => '',
                                      ],
                                  ],]); ?>
    <?= $form->field($model, 'nama_dokumen')->textInput(['maxlength' => true]) ?>

  <?= $form->field($model, 'letak')->dropDownList(ArrayHelper::map(Letak::find()->asArray()->all(),'id','letak_penyimpanan'), ['prompt'=>'-Pilih Letak -',
      'onchange'=>'
                  $.post("/posisi/lists/'.'"+$(this).val(),
                  function( data ){
                   $( "select#dokumen-posisi" ).html(data);
              });' ]
    ); ?>     
  <?= $form->field($model, 'posisi')->dropDownList(ArrayHelper::map(Posisi::find()->asArray() ->all(),'id','posisi'),['prompt'=>'-Pilih Posisi -']); ?>

           <?= $form->field($model, 'tahun')->textInput(['maxlength' => true]) ?>


   <div class="form-group">
      <label class="control-label col-sm-3"></label>
          <div class="col-sm-6">
          <?= Html::a('<span class="btn-label"><i class="glyphicon glyphicon-chevron-left"></i></span>Cancel',
          ['index'],
          [
              'class' => 'btn btn-labeled btn-info m-b-5 pull-left',
              'title' => 'Cancel'
          ]) ?>&nbsp;


          <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
          </div>
      </div>


    <?php ActiveForm::end(); ?>

</div>
