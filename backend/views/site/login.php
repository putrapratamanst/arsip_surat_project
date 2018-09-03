<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \common\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
$this->title = 'Login';

?>
<div class="container">

      <div class="form-signin">
         <?php $form = ActiveForm::begin(['id' => 'login-form']); ?>
         <br>
         <br>

          <center>
            <img src="<?= Yii::getAlias('@web/theme/') ?>dist/img/logo.png" class="img-responsive" alt="User Image"></center>
        <br>
       <center>
        <div class="col-md-12">
        <?= $form->field($model, 'username')->textInput(['autofocus' => true,]) ?>
        <?= $form->field($model, 'password')->passwordInput() ?>


    <?= Html::submitButton('Sign In', ['class' => 'btn btn-lg btn-primary btn-block', 'name' => 'login-button']) ?>
            <?php ActiveForm::end(); ?>
</div></center>
      </div>

    </div>
    <!-- 'placeholder' => "Username"
    ['placeholder' => "Password"]-->
