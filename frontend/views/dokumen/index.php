<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\SuratSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */
//
// $this->title = 'Surats';
// $this->params['breadcrumbs'][] = $this->title;
?>
<div class="jumbotron">
     <h1>CARI DOKUMEN </h1>
     <hr>
    <p class="lead">SILAHKAN ISI FORM DENGAN MEMASUKKAN NAMA DOKUMEN</p>
</div>
<div class="surat-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <?php  echo $this->render('_search', ['model' => $searchModel]);
?>
<?php
if(!$searchModel["nama_dokumen"]==""){
  echo GridView::widget([
      'dataProvider' => $dataProvider,
      // 'filterModel' => $searchModel,
      'columns' => [
          ['class' => 'yii\grid\SerialColumn'],

          'nama_dokumen',
          'letakKu.letak_penyimpanan',
          'tahun',
          
           // 'tanggal',
          // 'npm',
          // 'status',
          // 'perihal',

          [
              'class' => 'yii\grid\ActionColumn',
              'template' => '{view}',
              'contentOptions'=>['style'=>'width: 105px;'],
                'buttons' => [
                  'view' => function ($url) {
                      return Html::a(
                          '<button type="button" class="btn btn-info"><i class="glyphicon glyphicon-eye-open"></i></button>',
                          $url,
                          [
                              'title' => 'View',
                              'data-pjax' => '0',
                              'data' => [
                                  'method' => 'post',
                              ]
                          ]
                      );
                  },
                   
                                        
                                    ]
           ],   
              ],
  ]);

}?>
   </div>

</div>
