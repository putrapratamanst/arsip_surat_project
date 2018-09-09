<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\DokumenSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Dokumen';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="mahasiswa-index">
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
                
            <h1><?= Html::encode($this->title) ?></h1>
            <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

            <p>
                <?= Html::a('Create Dokumen', ['create'], ['class' => 'btn btn-success']) ?>
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

                            'nama_dokumen',
                            'letak',
                            'tahun',

                            ['class' => 'yii\grid\ActionColumn'],
                        ],
                    ]); ?>
</div>
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