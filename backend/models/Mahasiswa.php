<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "mahasiswa".
 *
 * @property int $npm
 * @property string $nama
 */
class Mahasiswa extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'mahasiswa';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['npm', 'nama','email'], 'required'],
            [['npm'], 'integer'],
            [['email'], 'email'],
            [['nama','email'], 'string', 'max' => 100],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'npm' => 'Npm',
            'nama' => 'Nama',
        ];
    }
}
