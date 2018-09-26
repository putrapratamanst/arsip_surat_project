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
<div class="mahasiswa-index">
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
                
            <h1><?= Html::encode($this->title) ?></h1>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
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

  <?= $form->field($model, 'letak')->dropDownList(ArrayHelper::map(Letak::find()->asArray()->all(),'id','letak_penyimpanan'), ['prompt'=>'-Pilih Letak -']
    ); ?>     
  

          <!--  <?= $form->field($model, 'tahun')->textInput(['maxlength' => true]) ?> -->
           <?= $form->field($model, 'tahun')->dropDownList(
                       [
                        '2001' => '2001', 
                        '2002' => '2002', 
                        '2003' => '2003',
                        '2004' => '2004',
                        '2005' => '2005',
                        '2006' => '2006',
                        '2007' => '2007',
                        '2008' => '2008',
                        '2009' => '2009',
                        '2010' => '2010',
                        '2011' => '2011',
                        '2012' => '2012',
                        '2013' => '2013',
                        '2014' => '2014',
                        '2015' => '2015',
                        '2016' => '2016',
                        '2017' => '2017',
                        '2018' => '2018',
                    ],['prompt'=>'Pilih Tahun']
               ); ?>

          <?= $form->field($model, 'file_url')->fileInput()->label('Upload File') ?>



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
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
</div>