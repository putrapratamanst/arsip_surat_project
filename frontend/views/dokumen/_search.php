<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\DokumenSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="dokumen-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>


    <?= $form->field($model, 'nama_dokumen') ?>

 
    <?=$form->field($model, 'tahun') ?>
    <!-- <?= $form->field($model, 'tahun')->dropDownList(
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
               ); ?> -->
    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>

    </div>
    

    <?php ActiveForm::end(); ?>

</div>
