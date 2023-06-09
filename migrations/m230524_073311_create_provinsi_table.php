<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%provinsi}}`.
 */
class m230524_073311_create_provinsi_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        // $this->createTable('{{%provinsi}}', [
        //     'id' => $this->primaryKey(),
        //     'prov_nama' => $this->varchar(30),
        //     'prov_nama_singkat' => $this->varchar(20),
        //     'total_kabupaten' => $this->varchar(100),
        // ]);
        $this->createTable('provinsi', array (
            'id' => 'pk',
            'prov_nama' => 'string', 
            'prov_nama_singkat' => 'string',
            'total_kabupaten' => 'string',
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%provinsi}}');
    }
}
