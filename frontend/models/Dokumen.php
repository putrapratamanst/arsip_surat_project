<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "dokumen".
 *
 * @property integer $id
 * @property string $nama_dokumen
 * @property string $letak
 */
class Dokumen extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'dokumen';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nama_dokumen', 'letak'], 'required'],
            [['nama_dokumen', 'letak','tahun'], 'string', 'max' => 100],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nama_dokumen' => 'Nama Dokumen',
            'letak' => 'Letak',
        ];
    }
     public function getLetakKu()
    {
        return $this->hasOne(Letak::className(), ['id' => 'letak']);
    }
}
