<!DOCTYPE html>
<html>
<head>
    <title></title>
    <style type="text/css">
       
        
    </style>
    <?php $this->registerCss($this->render('_style.css'));?>
</head>
<body>
    <div class="headers">
        <div class="title">
            <h1>SISTEM INFORMASI SURAT</h1>
        </div>
        <div class="contents">
        <p>Surat anda telah masuk kedalam sistem kami, harap tunggu balasan email kami untuk mengetahui informasi proses surat selanjutnya</p>
        <center><h3>Nama: <?=$nama;?></h3>
        <h3>NPM: <?=$npm;?></h3>
        <h3>Email: <?=$email;?></h3>
        <h3>Status Surat anda: <?=$status;?></h3></center>
        </div>
    </div>
</body>
</html>
