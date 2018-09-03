<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "letak".
 *
 * @property int $id
 * @property string $letak_penyimpanan
 */
class Letak extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'letak';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['letak_penyimpanan'], 'required'],
            [['letak_penyimpanan'], 'string', 'max' => 100],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'letak_penyimpanan' => 'Letak Penyimpanan',
        ];
    }
        public function getPosisiku()
    {
        return $this->hasMany(Posisi::className(), ['id_letak' => 'id']);
    }
    public function getLetakPosisi()
    {
        return $this->hasOne(Posisi::className(), ['id_letak' => 'id']);
    }
}
