<?php

use yii\db\Schema;
use yii\db\Migration;

class m150915_093555_add_project_table extends Migration
{
    public function safeUp()
    {
        $this->createTable('project', [
            'project_id' => Schema::TYPE_PK,
            'project_name' => Schema::TYPE_STRING,
            'image' => Schema::TYPE_STRING,
            'type' => Schema::TYPE_STRING,     
        ]);
    }
    public function safeDown()
    {
        $this->dropTable('project');
    }
}
