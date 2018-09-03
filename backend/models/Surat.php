<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "surat".
 *
 * @property integer $id
 * @property string $tempat
 * @property string $tujuan
 * @property string $isi
 * @property string $tanggal
 * @property string $npm
 * @property string $status
 * @property string $perihal
 * @property string $nama
 */
class Surat extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'surat';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['tempat', 'tujuan', 'isi', 'tanggal', 'npm', 'status', 'perihal', 'nama'], 'required'],
            [['isi','no_surat'], 'string'],
            [['tanggal'], 'safe'],
            [['tempat', 'perihal'], 'string', 'max' => 30],
            [['tujuan'], 'string', 'max' => 1000],
            [['npm'], 'string', 'max' => 7],
            [['status'], 'string', 'max' => 20],
            [['nama'], 'string', 'max' => 100],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'tempat' => 'Tempat',
            'tujuan' => 'Tujuan',
            'isi' => 'Isi',
            'tanggal' => 'Tanggal',
            'npm' => 'Npm',
            'status' => 'Status',
            'perihal' => 'Perihal',
            'nama' => 'Nama',
        ];
    }
}
