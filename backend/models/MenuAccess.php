<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "menu_access".
 *
 * @property integer $id
 * @property integer $menu_id
 * @property integer $role_i
 */
class MenuAccess extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'menu_access';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['menu_id', 'role_i'], 'required'],
            [['menu_id', 'role_i'], 'integer'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'menu_id' => 'Menu ID',
            'role_i' => 'Role I',
        ];
    }
}
