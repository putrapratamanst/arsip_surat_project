<?php
use yii\helpers\Html;
use yii\widgets\DetailView;
use kartik\grid\GridView;
use frontend\models\SemesterPendek;

/* @var $this yii\web\View */
/* @var $model backend\models\SemesterPendek */

//$this->title = $model->npm;

?>
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
<!-- Tempat: <?php echo $model->tempat; ?><br> -->
<?php echo $model->tujuan; ?>
 
 <br>
  <?php echo $model->isi; ?>

</font>
</div>
 <center><?php echo Html::img(Yii::$app->params['front']."/uploads/footer.png", ["width"=>"800"]);?></center>
 <center><?php echo Html::img(Yii::$app->params['front']."/uploads/footer2.png", ["width"=>"1000"]);?></center>
 