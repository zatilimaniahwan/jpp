<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "club_property".
 *
 * @property integer $id
 * @property integer $club_ref
 * @property string $property_name
 * @property integer $holder_id
 * @property string $created_by
 * @property string $created_dt
 * @property string $updated_by
 * @property string $updated_dt
 */
class ClubProperty extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'club_property';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['club_ref', 'holder_id'], 'integer'],
            [['property_name', 'holder_id'], 'required'],
            [['created_dt', 'updated_dt'], 'safe'],
            [['property_name', 'created_by', 'updated_by'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'club_ref' => 'Club Ref',
            'property_name' => 'Property Name',
            'holder_id' => 'Holder ID',
            'created_by' => 'Created By',
            'created_dt' => 'Created Dt',
            'updated_by' => 'Updated By',
            'updated_dt' => 'Updated Dt',
        ];
    }
}
