<?php
use yii\helpers\Html;
use yii\widgets\DetailView;
use kartik\grid\GridView;
use frontend\models\SemesterPendek;

/* @var $this yii\web\View */
/* @var $model backend\models\SemesterPendek */

//$this->title = $model->npm;

?>
<!DOCTYPE html>
<html>
<head>
</head>
<body>
  <p align="center"><b>SISTEM INFORMASI SURAT D4 TEKNIK INFORMATIKA</b></p>
  <p align="center">Politeknik Pos Indonesia</p>
  <p align="center">Jl. Sariasih no. 54, Jawa Barat 40151, Indonesia</p>

<p align="center"><?= Html::img('image/logo.png');?><hr>
</body>
</html>

<div class="surat-view">



 
    <td> <?= $model->tempat ?> </td>, <?= $model->tanggal ?><br>
    Perihal   :<?= $model->perihal ?> <br>
<br>    <pre><?= $model->tujuan ?></pre>
    <pre><?= $model->isi ?></pre>
    <br><br><br>
    DIREKTUR POLITEKNIK POS INDONESIA
    <br>
    <br>
    <br>
    <br>
    <u>Dr.Ir.Agus Purnomo, MT</u>
    <br>  
    NIK. 213.64.111
    <br>
    <br>
    Tembusan  : Arsip





</div>
