<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model frontend\models\Project */

$this->title = 'Create Posisi';
$this->params['breadcrumbs'][] = ['label' => 'Posisi', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="project-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('formposisi', [
        'model' => $model,
         'id_letak'=>$model,
           ]) ?>

</div>
