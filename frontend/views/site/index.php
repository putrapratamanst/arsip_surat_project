<?php

/* @var $this yii\web\View */
use yii\helpers\Html;


$this->title = '.:SISTEM INFORMASI SURAT:.';
?>
<div class="site-index">

    <div class="jumbotron">
           <marquee> <h1>SELAMAT DATANG!</h1> </marquee> 
         <!-- <marquee>  <h1>SELAMAT DATANG!</h1>   </marquee> -->


        <p class="lead">SISTEM INFORMASI SURAT DAN PENGELOLAAN DOKUMEN D4 TEKNIK INFORMATIKA</p> 

    </div>
    <div class="body-content">
<center> <?= Html::a('Ajukan Surat', ['/surat/create'], ['class'=>'btn btn-primary btn-lg'])?> 
  <?= Html::a('Status Pengajuan Surat', ['/surat/index'], ['class'=>'btn btn-warning btn-lg'])?> 
  <?= Html::a('Cari Dokumen', ['/dokumen/index'], ['class'=>'btn btn-info btn-lg'])?> 
  

</div>

    <div class="body-content">



    </div>
</div>
