<?php
use yii\helpers\Html;
use yii\widgets\Breadcrumbs;
use common\widgets\Alert;
use common\components\Helper;
 
use yii\web\View;
$this->beginPage() ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title><?php echo Html::encode($this->title)?></title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?= Yii::getAlias('@web/theme/') ?>bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?= Yii::getAlias('@web/theme/') ?>bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?= Yii::getAlias('@web/theme/') ?>bower_components/Ionicons/css/ionicons.min.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="<?= Yii::getAlias('@web/theme/') ?>bower_components/jvectormap/jquery-jvectormap.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?= Yii::getAlias('@web/theme/') ?>dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?= Yii::getAlias('@web/theme/') ?>dist/css/skins/_all-skins.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">
t
    <!-- Logo -->
    <a href="/site/index" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b></b>Admin</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>SIS</b></span>
    </a>

    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
      <!-- Navbar Right Menu -->
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->
          <li class="dropdown messages-menu">
            
        
          </li>
          <!-- Notifications: style can be found in dropdown.less -->
        
          <!-- Tasks: style can be found in dropdown.less -->
         
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <a href="#">
                  <img src="<?= Yii::getAlias('@web/theme/') ?>dist/img/logo.png" class="'user-image" alt="sis">
                <a>
               
              </li>
              <!-- Menu Body -->
             <!--  -->
              <!-- Menu Footer-->
           <br>
                
                  <a href="/site/logout" class="btn btn-primary">Sign out</a>
              
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
         
        </ul>
      </div>

    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
             <img src="<?= Yii::getAlias('@web/theme/') ?>dist/img/logo.png" class="'img-circle" alt="sis"></center>
        </div>
        <div class="pull-left info">
          <p>Sistem Informasi Surat</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
            <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MENU</li>
        <!-- Optionally, you can add icons to the links -->
        <li><a href="/surat/index"><i class="fa fa-tags"></i> <span>Surat</span></a></li>
        <li><a href="/mahasiswa/index"><i class="glyphicon glyphicon-user"></i> <span>Mahasiswa</span></a></li>
        <li><a href="/letak/index"><i class="glyphicon glyphicon-folder-open"></i> <span>Letak</span></a></li>
        <li><a href="/dokumen/index"><i class="fa fa-calendar-check-o"></i> <span>Dokumen</span></a></li>
       
        <li><a href="/site/logout"><i class="glyphicon glyphicon-off"></i> <span>Logout</span></a></li>
        <!-- <li class="treeview">
          <a href="#"><i class="fa fa-link"></i> <span>Multilevel</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="#">Link in level 2</a></li>
            <li><a href="#">Link in level 2</a></li>
          </ul>
        </li> -->
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
       SISTEM INFORMASI SURAT
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Info boxes -->
      <div class="row">
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <a href="#">

            <span class="info-box-icon bg-aqua"><i class="fa fa-tags"></i></span>
            <div class="info-box-content">
              <span class="info-box-text">Internship</span>
              <span class="info-box-number">
                <?php
                use frontend\models\Surat;
                $internship = Surat::find()->where(["perihal"=>"INTERNSHIP"])->count();
                 echo $internship;

                ?>
                  
                </span>
            </a>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
        <a href="#">

            <span class="info-box-icon bg-red"><i class="fa fa-calendar-check-o"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Observasi</span>
              <span class="info-box-number"> <?php
                 $internship = Surat::find()->where(["perihal"=>"OBSERVASI"])->count();
                 echo $internship;

 
                ?></span>
            </a>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->

        <!-- fix for small devices only -->
 
         
      <!-- /.row -->

      
      <!-- /.row -->

      <!-- Main row -->
      <div class="row">
        <!-- Left col -->
        <div class="col-md-8">
          <!-- MAP & BOX PANE -->
        
          <!-- /.box -->
          <div class="row">
        
            <!-- /.col -->

            
            <!-- /.col -->
          </div>
          <!-- /.row -->

          <!-- TABLE: LATEST ORDERS -->
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Dokumen</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <?php
                use frontend\models\Dokumen;
                         $dokumen = Dokumen::find()->orderBy('id DESC')->limit(5)->all();
                ?>
              <div class="table-responsive">
                <table class="table no-margin">
                  <thead>
                  <tr>
                    <th>Dokumen</th>

                  </tr>
                  </thead>
                 <tbody>
                     <?php foreach ($dokumen as $dokumens): ?>

                  <tr>
                    <td><a href="/dokumen/view/<?php echo $dokumens->id; ?>"> 
                     <?php echo $dokumens->nama_dokumen; ?> </a> 
                    </td>
                    
                  
                        <td> <?php echo Html::a('<i class="glyphicon glyphicon-trash" ></i>',['/dokumen/delete','id'=>$dokumens->id ],
              ['data'=>['method'=>'GET']],
             ['onclick'=>""]); ?></td>
                  </tr>
                               <?php endforeach; ?> 

                  </tbody>
                </table>
              </div>
              <!-- /.table-responsive -->
            </div>
            <!-- /.box-body -->
            <div class="box-footer clearfix">
              <a href="/news/index" class="btn btn-sm btn-danger btn-flat pull-left">View All News</a>
            </div>
            <!-- /.box-footer -->
          </div>
           

   



        
          <!-- /.box -->
        </div>
        <!-- /.col -->

      
         <div class="col-md-4">
    
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Surat</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <!-- /.box-header -->
          <div class="box-body">
                  <?php

                        $surat = Surat::find()->orderBy('id DESC')->limit(3)->all();
                ?>
              <ul class="products-list product-list-in-box">
                <?php foreach ($surat as $key => $surats) { ?>
                  
                <li class="item">
                   
                  <div class="product-info">
                    <a href="/surat/<?php echo $surats->id;?>" class="product-title"><?php echo $surats->nama; ?></a>
                       
                  </div>
                </li>
            <?php }?>
              </ul>
            </div>
            <!-- /.box-body -->
            <div class="box-footer text-center">
              <a href="/promo/index" class="uppercase">View All Products</a>
            </div>
            <!-- /.box-footer -->
          </div>

          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
<footer class="main-footer">
    <!-- To the right -->
    
    <!-- Default to the left -->
    <strong>Copyright &copy; <?php echo date('Y'); ?> <a href="#">Doni Saputra</a>.</strong> All rights reserved.
  </footer>

  <!-- Control Sidebar -->
  
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>

</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="<?= Yii::getAlias('@web/theme/') ?>bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?= Yii::getAlias('@web/theme/') ?>bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- FastClick -->
<script src="<?= Yii::getAlias('@web/theme/') ?>bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="<?= Yii::getAlias('@web/theme/') ?>dist/js/adminlte.min.js"></script>
<!-- Sparkline -->
<script src="<?= Yii::getAlias('@web/theme/') ?>bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
<!-- jvectormap  -->
<script src="<?= Yii::getAlias('@web/theme/') ?>plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="<?= Yii::getAlias('@web/theme/') ?>plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- SlimScroll -->
<script src="<?= Yii::getAlias('@web/theme/') ?>bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- ChartJS -->
<script src="<?= Yii::getAlias('@web/theme/') ?>bower_components/Chart.js/Chart.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?= Yii::getAlias('@web/theme/') ?>dist/js/pages/dashboard2.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?= Yii::getAlias('@web/theme/') ?>dist/js/demo.js"></script>
</body>
</html>
