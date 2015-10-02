<?php

use yii\db\Schema;
use yii\db\Migration;

class m150915_085252_add_database_basic extends Migration
{
    public function safeUp()
    {
        $this->createTable('introduce', [
            'name_id' => Schema::TYPE_PK,
            'name' => Schema::TYPE_STRING,
            'job' => Schema::TYPE_STRING,
            'sex' => Schema::TYPE_BOOLEAN,
            'age' => Schema::TYPE_STRING,
            
        ]);
    }
    public function safeDown()
    {
        $this->dropTable('introduce');
    }
}
