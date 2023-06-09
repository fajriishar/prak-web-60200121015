<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%mahasiswa}}`.
 */
class m230526_002442_create_mahasiswa_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        // $this->createTable('{{%mahasiswa}}', [
        //     'id' => $this->primaryKey(),
        //     'nim' => $this->integer(11),
        //     'nama' => $this->varchar(30),
        //     'ipk' => $this->integer(4),
        //     'id_jurusan' => $this->integer(5),
        // ]);
        $this->createTable('mahasiswa', array (
            'id' => 'pk',
            'nim' => 'string', 
            'nama' => 'string',
            'ipk' => 'string',
            'id_jurusan' => 'string',
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%mahasiswa}}');
    }
}
