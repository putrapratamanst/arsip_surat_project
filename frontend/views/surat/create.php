<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model frontend\models\Surat */

$this->title = 'Create Surat';
// $this->params['breadcrumbs'][] = ['label' => 'Surats', 'url' => ['index']];
// $this->params['breadcrumbs'][] = $this->title;
?>
<div class="surat-create">

  <center>  <h1><?= Html::encode($this->title) ?></h1> </center>
<br>
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
