<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "mahasiswa015".
 *
 * @property int $id015
 * @property string $nim015
 * @property string $nama015
 * @property string $kelas015
 * @property string $status015
 */
class Mahasiswa015 extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'mahasiswa015';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nim015', 'nama015', 'kelas015', 'status015'], 'required'],
            [['nim015'], 'string', 'max' => 15],
            [['nama015', 'kelas015', 'status015'], 'string', 'max' => 50],
            [['nim015'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id015' => 'ID015',
            'nim015' => 'No. Induk Mahasiswa015',
            'nama015' => 'Nama Mahasiswa015',
            'kelas015' => 'Kelas015',
            'status015' => 'Status015',
        ];
    }
}
