<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Mahasiswa */

$this->title = $model->npm;
$this->params['breadcrumbs'][] = ['label' => 'Mahasiswas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="mahasiswa-index">
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
                <h1><?= Html::encode($this->title) ?></h1>

                <p>
                    <?= Html::a('Update', ['update', 'id' => $model->npm], ['class' => 'btn btn-primary']) ?>
                    <?= Html::a('Delete', ['delete', 'id' => $model->npm], [
                        'class' => 'btn btn-danger',
                        'data' => [
                            'confirm' => 'Are you sure you want to delete this item?',
                            'method' => 'post',
                        ],
                    ]) ?>
                </p>
            </div>
            <!-- /.box-header -->
            <div class="box-body">

    

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'npm',
            'nama',
            'email',
        ],
    ]) ?>

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