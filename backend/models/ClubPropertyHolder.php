<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "club_property_holder".
 *
 * @property integer $id
 * @property integer $property_id
 * @property string $holder_name
 * @property string $created_by
 * @property string $created_dt
 * @property string $updated_by
 * @property string $updated_dt
 */
class ClubPropertyHolder extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'club_property_holder';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['property_id', 'holder_name'], 'required'],
            [['property_id'], 'integer'],
            [['created_dt', 'updated_dt'], 'safe'],
            [['holder_name', 'created_by', 'updated_by'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'property_id' => 'Property ID',
            'holder_name' => 'Holder Name',
            'created_by' => 'Created By',
            'created_dt' => 'Created Dt',
            'updated_by' => 'Updated By',
            'updated_dt' => 'Updated Dt',
        ];
    }
}
