<?php

use yii\db\Schema;
use yii\db\Migration;

class m151015_050155_create_table_messenger extends Migration
{
    public function safeUp()
    {
        $this->createTable('messenger', [
            'messenger_id' => Schema::TYPE_PK,
            'name' => Schema::TYPE_STRING,
            'email' => Schema::TYPE_STRING,
            'detail'=> Schema::TYPE_STRING,
            'read_chk'=>Schema::TYPE_BOOLEAN . ' NOT NULL',
            'del_chk' => Schema::TYPE_BOOLEAN . ' NOT NULL'
        ]);
    }
    public function safeDown()
    {
        $this->dropTable('messenger');
    }
}
