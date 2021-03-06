<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\LetakSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Folder';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="letak-index">
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h1><?= Html::encode($this->title) ?></h1>
              <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

              <p>
                  <?= Html::a('Create Letak', ['create'], ['class' => 'btn btn-success']) ?>
              </p>

            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example2" class="table table-bordered table-hover">
                    <?= GridView::widget([
                        'dataProvider' => $dataProvider,
                        'summary' => "",
                        'filterModel' => $searchModel,
                        'columns' => [
                            ['class' => 'yii\grid\SerialColumn'],

                            //'id',
                            'letak_penyimpanan',

                            ['class' => 'yii\grid\ActionColumn'],
                        ],
                    ]); ?>
                </table>
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