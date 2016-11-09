<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "notes_visiting".
 *
 * @property integer $id
 * @property integer $visiting_id
 * @property integer $club_ref
 * @property string $action_type
 * @property string $created_by
 * @property string $created_dt
 * @property string $updated_by
 * @property string $updated_dt
 */
class NotesVisiting extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'notes_visiting';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['visiting_id', 'club_ref', 'action_type'], 'required'],
            [['visiting_id', 'club_ref'], 'integer'],
            [['created_dt', 'updated_dt'], 'safe'],
            [['action_type', 'created_by', 'updated_by'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'visiting_id' => 'Visiting ID',
            'club_ref' => 'Club Ref',
            'action_type' => 'Action Type',
            'created_by' => 'Created By',
            'created_dt' => 'Created Dt',
            'updated_by' => 'Updated By',
            'updated_dt' => 'Updated Dt',
        ];
    }
}
