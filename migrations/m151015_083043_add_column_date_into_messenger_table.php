<?php

use yii\db\Schema;
use yii\db\Migration;

class m151015_083043_add_column_date_into_messenger_table extends Migration
{
    public function safeUp()
    {
        $this->addColumn('messenger', 'date', Schema::TYPE_DATETIME. ' NOT NULL ');
    }

    public function safeDown()
    {
        $this->dropColumn('messenger', 'date');
    }
}
