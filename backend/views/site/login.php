<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \common\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
$this->title = 'Login';

?>
<!-- <div class="container">

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
 -->    <!-- 'placeholder' => "Username"
    ['placeholder' => "Password"]-->
<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>

<head>
  <link href="//fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900" rel="stylesheet">
</head>

<body>
  <h1>Sistem Informasi Surat Dan Dokumen</h1>
  <div class="w3ls-login box">
    <img src="<?= Yii::getAlias('@web/theme/') ?>dist/img/logo.png" class="img-responsive" alt="User Image" height="300">
    <!-- form starts here -->
     <?php $form = ActiveForm::begin([
        'options' => ['autoComplete'=>'off'],
        'id' => 'login-form'
    ]); ?>
      <div class="agile-field-txt">
        <?= $form->field($model, 'username')->textInput(['placeholder'=>'Username'])->label(false) ?>
      </div>
      <div class="agile-field-txt">
        <?= $form->field($model, 'password')->passwordInput(['placeholder'=>'Password'])->label(false) ?>
      </div>
      <div class="w3ls-bot">
        <?= Html::submitButton('Sign In', ['class' => 'btn btn-lg btn-primary btn-block', 'name' => 'login-button']) ?>
      </div>
    <?php ActiveForm::end(); ?>
  </div>
  <!-- //form ends here -->
  <!--copyright-->
  <div class="copy-wthree">
    <p>© 2018 Politeknik Pos Indonesia. All Rights Reserved.| Design by
        <a href="#">Doni Saputra</a></p>
  </div>
  <!--//copyright-->
</body>

</html>