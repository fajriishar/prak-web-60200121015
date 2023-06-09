<?php

use yii\db\Migration;

/**
 * Class m230608_140652_mahasiswa015
 */
class m230608_140652_mahasiswa015 extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%mahasiswa015}}',[
            'id015'=> $this->primaryKey(),
            'nim015'=> $this->string(15)->notNull()->unique(),
            'nama015'=> $this->string(50)->notNull(),
            'kelas015'=> $this->string(50)->notNull(),
            'status015'=> $this->string(50)->notNull(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%mahasiswa015}}');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m230608_140652_mahasiswa015 cannot be reverted.\n";

        return false;
    }
    */
}
