<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Letak */

$this->title = $model->letak_penyimpanan;
$this->params['breadcrumbs'][] = ['label' => 'Letaks', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="letak-view">
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
                <h1><?= Html::encode($this->title) ?></h1>

                <p>
                    <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
                    <?= Html::a('Delete', ['delete', 'id' => $model->id], [
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
              <table id="example2" class="table table-bordered table-hover">
                <?= DetailView::widget([
                        'model' => $model,
                        'attributes' => [
                            //'id',
                            'letak_penyimpanan',
                        ],
                    ]) ?>
            </table>
            <div class="nilai-view">
            <h4>Posisi</h4>
            <table class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th>Nama Posisi</th>
                

                </tr>
              </thead>
              <tbody>
                <?php foreach ($modelsNilai as $i => $modelNilai): ?>
            <tr>

            <td> <?= $modelNilai->posisi?> </td>
             
            </tr>

            <?php endforeach; ?>
            </tbody>
            </table>

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