<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Mahasiswa */
/* @var $form yii\widgets\ActiveForm */

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

		    <?php $form = ActiveForm::begin(); ?>

		    <?= $form->field($model, 'nama')->textInput() ?>

		    <?= $form->field($model, 'npm')->textInput(['maxlength' => true]) ?>

		    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

		    <div class="form-group">
		        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
		    </div>

		    <?php ActiveForm::end(); ?>

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