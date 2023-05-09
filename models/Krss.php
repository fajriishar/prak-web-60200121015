<?php

namespace app\models;

use Yii;

class Krss extends \yii\db\ActiveRecord
{
    public static function tableName()
    {
        return 'krs';
    }
    public function rules()
    {
        return [
            [['matkul', 'nama', 'nim'], 'required'],
            [['matkul'], 'string', 'max' => 50],
            [['nama'], 'string', 'max' => 15],
            [['nim'], 'string', 'max' => 11],
            [['nim'], 'unique'],
        ];
    }

    public function attributeLabels()
    {
        return [
            'matkul' => 'Matkul',
            'nama' => 'Nama',
            'nim' => 'Nim',
        ];
    }
}
