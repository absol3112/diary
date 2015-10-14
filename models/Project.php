<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "project".
 *
 * @property integer $project_id
 * @property string $name
 * @property integer $type_id
 * @property string $link
 * @property string $image
 * @property integer $del_chk
 */
class Project extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'project';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['type_id', 'link', 'del_chk'], 'required'],
            [['type_id', 'del_chk'], 'integer'],
            [['name', 'link', 'image'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'project_id' => Yii::t('app', 'Project ID'),
            'name' => Yii::t('app', 'Name'),
            'type_id' => Yii::t('app', 'Type ID'),
            'link' => Yii::t('app', 'Link'),
            'image' => Yii::t('app', 'Image'),
            'del_chk' => Yii::t('app', 'Del Chk'),
        ];
    }
    public function getProjectType()
    {
        return $this->hasMany(ProjectType::className(), ['projectType_id' => 'type_id']);
    }
    public function getProjectTypeName()
    {
        return $this->projectType[0]->name;
    }
}
