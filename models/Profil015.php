<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "profil_015".
 *
 * @property int $id
 * @property int $id_mahasiswa
 * @property string $foto_profile
 */
class Profil015 extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'profil_015';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_mahasiswa', 'foto_profile'], 'required'],
            [['id_mahasiswa'], 'integer'],
            [['foto_profile'], 'string', 'max' => 200],
            [['id_mahasiswa'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'id_mahasiswa' => 'Id Mahasiswa',
            'foto_profile' => 'Foto Profile',
        ];
    }
}
