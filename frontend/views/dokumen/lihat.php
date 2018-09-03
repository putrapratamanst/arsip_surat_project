<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use yii\grid\GridView;

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
    <!DOCTYPE html>
<html>
<head>
<style>
table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
}

tr:nth-child(even) {
    background-color: #dddddd;
}
</style>
</head>
<body>

<table>
  <tr>
    <th>NPM</th>
    <th>Nama</th>
    <th>Nomor</th>
    <th>View</th>
  </tr>
  <?php foreach ($surat as $key => $value) {?>
   
  <tr>
    <td><?php echo $value->npm; ?></td>
    <td><?php echo $value->nama; ?></td>
    <td><?php echo $value->no_surat; ?></td>
    <td><?= Html::a('<span class="btn-label"><i class="glyphicon glyphicon-eye"></i></span>Lihat Surat',
       ['/surat/view','id' => $value->id],
       [
           'class' => 'btn btn-labeled btn-info m-b-5 pull-left',
        ]) ?>&nbsp;</td>
  </tr>
  <?php } ?>
  
</table>

</body>
</html>
</div>
