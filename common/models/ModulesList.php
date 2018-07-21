<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "modules_list".
 *
 * @property int $module_id
 * @property string $module_name
 * @property string $controller
 * @property string $icon
 * @property int $is_active
 *
 * @property RoleModulePermission[] $roleModulePermissions
 */
class ModulesList extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'modules_list';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['controller', 'icon'], 'required'],
            [['is_active'], 'integer'],
            [['module_name'], 'string', 'max' => 100],
            [['controller'], 'string', 'max' => 50],
            [['icon'], 'string', 'max' => 25],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'module_id' => 'Module ID',
            'module_name' => 'Module Name',
            'controller' => 'Controller',
            'icon' => 'Icon',
            'is_active' => 'Status',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRoleModulePermissions()
    {
        return $this->hasMany(RoleModulePermission::className(), ['module_id' => 'module_id']);
    }
}
