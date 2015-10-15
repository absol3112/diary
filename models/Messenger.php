<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "messenger".
 *
 * @property integer $messenger_id
 * @property string $name
 * @property string $email
 * @property string $detail
 * @property integer $read_chk
 * @property integer $del_chk
 */
class Messenger extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'messenger';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['read_chk', 'del_chk','name', 'email', 'detail'], 'required'],
            [['email'], 'email'],
            [['read_chk', 'del_chk'], 'integer'],
            [['name', 'email', 'detail'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'messenger_id' => Yii::t('app', 'Messenger ID'),
            'name' => Yii::t('app', 'Name'),
            'email' => Yii::t('app', 'Email'),
            'detail' => Yii::t('app', 'Detail'),
            'read_chk' => Yii::t('app', 'Read Chk'),
            'del_chk' => Yii::t('app', 'Del Chk'),
        ];
    }
}
