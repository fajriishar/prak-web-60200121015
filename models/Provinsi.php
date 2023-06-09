<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "provinsi".
 *
 * @property int $id
 * @property string|null $prov_nama
 * @property string|null $prov_nama_singkat
 * @property string|null $total_kabupaten
 */
class Provinsi extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'provinsi';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['prov_nama', 'prov_nama_singkat', 'total_kabupaten'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'prov_nama' => 'Prov Nama',
            'prov_nama_singkat' => 'Prov Nama Singkat',
            'total_kabupaten' => 'Total Kabupaten',
        ];
    }
}
