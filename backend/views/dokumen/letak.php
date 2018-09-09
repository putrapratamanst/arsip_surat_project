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
            <!-- /.box-header -->
            <div class="box-body">
            <table id="example2" class="table table-bordered table-hover">

    <?php 
    foreach ($model as $key => $value) {?>
    <a href="/dokumen/list?id=<?=$value->letak?>"><?=$value->nama_dokumen;?>
    <img src="<?= Yii::getAlias('@web/uploads/') ?>file.png" height="100" style="margin: 10px"></a>

<?php } ?>

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