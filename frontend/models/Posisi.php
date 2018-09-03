<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "posisi".
 *
 * @property int $id
 * @property string $posisi
 * @property int $id_letak
 */
class Posisi extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'posisi';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['posisi'], 'required'],
            [['id_letak'], 'integer'],
            [['posisi'], 'string', 'max' => 100],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'posisi' => 'Posisi',
            'id_letak' => 'Id Letak',
        ];
    }
    public function getLetakPosisi()
    {
        return $this->hasOne(Letak::className(), ['id' => 'id_letak']);
    }
}
