<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model frontend\models\Surat */

$this->title = $model->nama;
// $this->params['breadcrumbs'][] = ['label' => 'Surats', 'url' => ['index']];
// $this->params['breadcrumbs'][] = $this->title;
?>
<div class="surat-view">

    <center><h1><?= Html::encode($this->title) ?></h1></center>
    <b><hr></b>

    <?php if($model->status=="PENDING"){?>
    
    <p>
      <?= Html::a('<span class="btn-label"><i class="glyphicon glyphicon-chevron-left"></i></span>Back',
       ['/site/index'],
       [
           'class' => 'btn btn-labeled btn-info m-b-5 pull-left',
           'title' => 'Back'
       ]) ?>&nbsp;
        <!-- <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?> -->

    </p>
<b><h3>SURAT ANDA SEDANG DIPROSES OLEH ADMIN!</h3></b>
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            //'id',
            'nama',
            'npm',
            'perihal',
            'tempat',
             'tanggal',
              ['attribute'=>"tujuan",
              'format'=>"raw",
            ],
             ['attribute'=>"isi",
              'format'=>"raw",
            ],
              'status',

        ],
    ]) ?>
  <?php } ?>

</div>
<style>
.tanpa-padding {
   padding-left: 170px ;
   padding-right: 170px ;
}
 
</style>
<?php if($model->status=="ACTIVE"){?>
  <p>
          <?= Html::a('<span class="btn-label"><i class="glyphicon glyphicon-chevron-left"></i></span>Back',
       ['/site/index'],
       [
           'class' => 'btn btn-labeled btn-info m-b-5 pull-left',
           'title' => 'Back'
       ]) ?>&nbsp;
         
    </p>
<center><?php echo Html::img(Yii::$app->params['front']."/uploads/surat.png", ["width"=>"1000","class"=>"img-responsive"]);?></center>
<div class="tanpa-padding">
<font face="Times New Rowman" size="4"><?php echo "Bandung, ", substr($model->tanggal,8);
$bulan = substr($model->tanggal,-5,-3);

        if($bulan==01){
          echo " Januari";
        }
        if($bulan==02){
          echo " Februari";
        }
        if($bulan==03){
          echo " Maret";
        }
        if($bulan==04){
          echo " April";
        }if($bulan==05){
          echo " Mei";
        }if($bulan==06){
          echo " Juni";
        }if($bulan==07){
          echo " Juli";
        }if($bulan==12){
          echo " Desember";
        }if($bulan==11){
          echo " November";
        }if($bulan==10){
          echo " Oktober";
        }
        if(stristr($bulan, '09') == TRUE) {
         echo ' September';
        }
         if(stristr($bulan, '08') == TRUE) {
         echo ' Agustus';
        }
          ?>
           <?php echo substr($model->tanggal,0,4); ?>
           <!-- <?php echo substr($model->tanggal,0,4); ?> -->
      <br>
        Nomor:    <?php echo $model->no_surat; ?><br>
Perihal:    <?php echo $model->perihal; ?><br>

 <?php echo $model->tujuan; ?>
 <br>
  <?php echo $model->isi; ?>

</font>
</div>
 <center><?php echo Html::img(Yii::$app->params['front']."/uploads/footer.png", ["width"=>"800"]);?></center>
 <center><?php echo Html::img(Yii::$app->params['front']."/uploads/footer2.png", ["width"=>"1000"]);?></center>
 

  <?php } ?>