<?php

use yii\db\Schema;
use yii\db\Migration;

class m150915_094020_add_column_link_to_project_table extends Migration
{
    public function safeUp()
    {
        $this->addColumn('project', 'link', Schema::TYPE_STRING. 'NOT NULL');
    }

    public function safeDown()
    {
        $this->dropColumn('project', 'link');
    }
}
