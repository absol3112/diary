<?php

use yii\db\Schema;
use yii\db\Migration;

class m151013_071245_create_table_project_type extends Migration
{
    public function safeUp()
    {
        $this->createTable('project_type', [
            'projectType_id' => Schema::TYPE_PK,
            'name' => Schema::TYPE_STRING,
            'del_chk' => Schema::TYPE_BOOLEAN . ' NOT NULL'
        ]);
    }

    public function safeDown()
    {
        $this->dropTable('project');
    }
}
