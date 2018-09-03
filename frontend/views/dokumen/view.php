<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model frontend\models\Dokumen */

$this->title = $model->nama_dokumen;
// $this->params['breadcrumbs'][] = ['label' => 'Dokumens', 'url' => ['index']];
// $this->params['breadcrumbs'][] = $this->title;
?>
<div class="dokumen-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
          <?= Html::a('<span class="btn-label"><i class="glyphicon glyphicon-chevron-left"></i></span>Back',
       ['/site/index'],
       [
           'class' => 'btn btn-labeled btn-info m-b-5 pull-left',
           'title' => 'Back'
       ]) ?>&nbsp;
       
    </p>
 <br>
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
           // 'id',
            'nama_dokumen',
            'letakKu.letak_penyimpanan',
            'letakKu.letakPosisi.posisi',

        ],
    ]) ?>
<p>
  <?php if($model->nama_dokumen =="laporan internship" and $model->tahun==2018 or$model->nama_dokumen =="internship" and $model->tahun==2018  or$model->nama_dokumen =="laporan observasi" and $model->tahun==2018 or $model->nama_dokumen =="observasi" and $model->tahun==2018 ){?>
  <?php /*if($model->nama_dokumen =="laporan internship" and $model->tahun==2018 or$model->nama_dokumen =="internship" and $model->tahun==2018 or$model->nama_dokumen =="surat internship" and $model->tahun==2018 or$model->nama_dokumen =="laporan observasi" and $model->tahun==2018 or $model->nama_dokumen =="observasi" and $model->tahun==2018 ){ */ ?>

          <?= Html::a('<span class="btn-label"><i class="glyphicon glyphicon-eye"></i></span>Lihat Semua Dokumen',
       ['/dokumen/lihat','id' => $model->id],
       [
           'class' => 'btn btn-labeled btn-info m-b-5 pull-left',
           'title' => 'Back'
       ]) ?>&nbsp;
       <?php } ?>
    </p>
</div>
