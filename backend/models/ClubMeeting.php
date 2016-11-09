<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "club_meeting".
 *
 * @property integer $id
 * @property integer $meeting_id
 * @property integer $club_ref
 */
class ClubMeeting extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'club_meeting';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['meeting_id', 'club_ref'], 'required'],
            [['meeting_id', 'club_ref'], 'integer'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'meeting_id' => 'Meeting ID',
            'club_ref' => 'Club Ref',
        ];
    }
}
