<?php

namespace backend\models;

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
            [['nama_dokumen', 'letak','tahun','file_url'], 'required'],
            [['nama_dokumen', 'letak','posisi'], 'string', 'max' => 100],
            [['file_url'], 'file'],
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

     public function upload()
    {
        if ($this->validate()) {
            $this->file_url->saveAs('uploads/' . $this->file_url->baseName . '.' . $this->file_url->extension);
            return true;
        } else {
            return false;
        }
    }
    
}
