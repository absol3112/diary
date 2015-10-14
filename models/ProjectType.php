<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "project_type".
 *
 * @property integer $projectType_id
 * @property string $name
 * @property integer $del_chk
 */
class ProjectType extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'project_type';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['del_chk'], 'required'],
            [['del_chk'], 'integer'],
            [['name'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'projectType_id' => Yii::t('app', 'Project Type ID'),
            'name' => Yii::t('app', 'Name'),
            'del_chk' => Yii::t('app', 'Del Chk'),
        ];
    }
}
