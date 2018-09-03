<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\SuratSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="surat-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'npm') ?>


    <div class="form-group"><?= Html::a('<span class="btn-label"><i class="glyphicon glyphicon-chevron-left"></i></span>Back',
     ['/site/index'],
     [
         'class' => 'btn btn-labeled btn-info m-b-5 pull-left',
         'title' => 'Back'
     ]) ?>&nbsp;
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
