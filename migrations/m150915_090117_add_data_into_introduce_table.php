<?php

use yii\db\Schema;
use yii\db\Migration;

class m150915_090117_add_data_into_introduce_table extends Migration
{
    public function safeUp()
    {
        $this->insert('introduce', [
            'name' => 'Nguyễn Chí Thắng',
            'job' => 'Developer',
            'sex' => '0',
            'age' => '21',
        ]);
    }
    public function safeDown()
    {
        $this->delete('introduce', 'name_id = :NAME_ID', array('NAME_ID' => '1'));
    }
}
