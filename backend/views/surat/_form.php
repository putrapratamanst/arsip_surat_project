<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use dosamigos\ckeditor\CKEditor;

/* @var $this yii\web\View */
/* @var $model frontend\models\Surat */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="surat-form">


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
                                    <?= $form->field($model, 'nama')->textInput(['placeholder' => "Isi Nama Mahasiswa"]) ?>
  <?= $form->field($model, 'npm')->textInput(['placeholder' => "Isi NPM"]) ?>
  <?= $form->field($model, 'no_surat')->textInput(['placeholder' => "Isi Nomor Surat"]) ?>

    <?= $form->field($model, 'tempat')->textInput(['placeholder' => "Isi Tujuan Perusahaan"]) ?>
<?php echo $form->field($model, 'perihal')->dropDownList(['INTERNSHIP' => 'INTERNSHIP', 'OBSERVASI' => 'OBSERVASI']); ?>
<?= $form->field($model, 'tujuan')->widget(CKEditor::className(), [
        'options' => ['rows' => 6],
        'preset' => 'advanced'
    ]) ?>
<?= $form->field($model, 'isi')->widget(CKEditor::className(), [
        'options' => ['rows' => 6],
        'preset' => 'advanced'
    ]) ?>

     <div class="form-group">
      <label class="control-label col-sm-3"></label>
          <div class="col-sm-6">
          <?= Html::a('<span class="btn-label"><i class="glyphicon glyphicon-chevron-left"></i></span>Cancel',
          ['index'],
          [
              'class' => 'btn btn-labeled btn-info m-b-5 pull-left',
              'title' => 'Cancel'
          ]) ?>&nbsp;


          <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Approve', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
          </div>
      </div>

    <?php ActiveForm::end(); ?>

</div>
