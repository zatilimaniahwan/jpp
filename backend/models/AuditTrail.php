<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "audit_trail".
 *
 * @property integer $id
 * @property string $user_id
 * @property integer $menu_id
 * @property string $action_dt
 * @property string $action_type
 * @property integer $data_id
 */
class AuditTrail extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'audit_trail';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['user_id', 'menu_id', 'action_type', 'data_id'], 'required'],
            [['menu_id', 'data_id'], 'integer'],
            [['action_dt'], 'safe'],
            [['user_id', 'action_type'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'user_id' => 'User ID',
            'menu_id' => 'Menu ID',
            'action_dt' => 'Action Dt',
            'action_type' => 'Action Type',
            'data_id' => 'Data ID',
        ];
    }
}
