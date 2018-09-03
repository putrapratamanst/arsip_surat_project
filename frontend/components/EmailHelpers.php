<?php
namespace frontend\components;

use Yii;
/**
* 
*/
class EmailHelpers
{
	
    public static function registration($dataNama,$dataEmail,$dataNpm,$dataStatus)
    {
        Yii::$app->mailer->compose(['html' => '@frontend/views/surat/mail'],
            [
                'nama' => $dataNama,
                'email' => $dataEmail,
                'npm' => $dataNpm,
                'status' => $dataStatus,
            ])
        ->setFrom('adm1n8897@gmail.com')
        ->setTo($dataEmail)
        ->setSubject('Letter Registration - Sistem Informasi Surat')
        ->send();
    }

}
  
?>
