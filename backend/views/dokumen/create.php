<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Dokumen */

$this->title = 'Create Dokumen';
$this->params['breadcrumbs'][] = ['label' => 'Dokumens', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="dokumen-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
