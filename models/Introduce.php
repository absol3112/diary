<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "introduce".
 *
 * @property integer $name_id
 * @property string $name
 * @property string $job
 * @property integer $sex
 * @property string $age
 */
class Introduce extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'introduce';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['sex'], 'integer'],
            [['name', 'job', 'birth'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'name_id' => Yii::t('app', 'Name ID'),
            'name' => Yii::t('app', 'P0001'),
            'job' => Yii::t('app', 'P0002'),
            'sex' => Yii::t('app', 'P0003'),
            'birth' => Yii::t('app', 'P0004'),
        ];
    }
}
