<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
 use unclead\multipleinput\MultipleInput;
 use backend\models\Posisi;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $model frontend\models\ProjectTask */
/* @var $form yii\widgets\ActiveForm */
// $employee_id = Letak::find()->select('id')->where(['project_id'=>$project_id])->all();

// $pic=ProjectTeam::find()->leftJoin('employee', '`employee`.`employee_id` = `project_team`.`employee_id`')->where(['project_id'=>$project_id])->with('employee')
// ->all();
//      $pics = (new \yii\db\Query())->select(['employee.employee_id', 'employee.name'])
//               ->from(['project_team', 'employee'])
//               ->where('project_team.employee_id = employee.employee_id')
//               ->andWhere(['project_id'=>$project_id])
//               ->all();

//     $newData = array();
//     $pic = ProjectTeam::find()->where(['project_id'=>$project_id])->all();

//     foreach ($pic as $key => $row) {
//         $newData[] = $row->employee; 
//     }
   

    

// $listpic=ArrayHelper::map($newData,'employee_id','name');
?>
<div class="project-task-form">

    <?php $form = ActiveForm::begin(); ?>

    



<?= $form->field($model, 'member')->widget(MultipleInput::className(), [
    // 'max' => 4,
    'columns' => [
      
        [
            'name'  => 'employee_id',
            'title' => ' ',
            'type'=>'dropDownList',
            'enableError' => true,
          'items'=> '',
            'options' => [
                'class' => 'input-priority',
                      'prompt' => 'Select Member',

            ]
        ],
    
      
    ]
 ]);
?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
