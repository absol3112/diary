<?php

use yii\db\Schema;
use yii\db\Migration;

class m151006_074254_create_table_project extends Migration
{
    public function safeUp()
    {
        $this->createTable('project', [
            'project_id' => Schema::TYPE_PK,
            'name' => Schema::TYPE_STRING,            
            'type_id' => Schema::TYPE_INTEGER . ' NOT NULL',
            'link' => Schema::TYPE_STRING . ' NOT NULL',
            'image' => Schema::TYPE_STRING,
            'del_chk' => Schema::TYPE_BOOLEAN . ' NOT NULL'
        ]);
    }

    public function safeDown()
    {
        $this->dropTable('project');
    }
}
