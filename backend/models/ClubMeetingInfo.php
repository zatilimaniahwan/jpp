<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "club_meeting_info".
 *
 * @property integer $id
 * @property integer $club_ref
 * @property string $meeting_type
 * @property string $notice_dt
 * @property string $event_dt
 * @property integer $total_member
 * @property string $notice_days
 * @property string $corum
 * @property string $agenda
 * @property string $created_by
 * @property string $created_dt
 * @property string $updated_by
 * @property string $updated_dt
 */
class ClubMeetingInfo extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'club_meeting_info';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['club_ref', 'total_member'], 'required'],
            [['club_ref', 'total_member'], 'integer'],
            [['created_dt', 'updated_dt'], 'safe'],
            [['meeting_type', 'notice_dt', 'event_dt', 'notice_days', 'corum', 'agenda', 'created_by', 'updated_by'], 'string', 'max' => 255],
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
            'meeting_type' => 'Meeting Type',
            'notice_dt' => 'Notice Dt',
            'event_dt' => 'Event Dt',
            'total_member' => 'Total Member',
            'notice_days' => 'Notice Days',
            'corum' => 'Corum',
            'agenda' => 'Agenda',
            'created_by' => 'Created By',
            'created_dt' => 'Created Dt',
            'updated_by' => 'Updated By',
            'updated_dt' => 'Updated Dt',
        ];
    }
}
