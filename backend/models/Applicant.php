<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "applicant".
 *
 * @property integer $id
 * @property string $ref_no
 * @property string $user_id
 * @property string $password
 * @property string $club_name
 * @property string $add_reg_1
 * @property string $add_reg_2
 * @property string $postcode_reg
 * @property string $district_reg
 * @property string $state_reg
 * @property string $add_letter_1
 * @property string $add_letter_2
 * @property string $postcode_letter
 * @property string $district_letter
 * @property string $state_letter
 * @property string $leader_name
 * @property string $secretary_name
 * @property string $treasury_name
 * @property integer $club_type
 * @property string $docs_completed
 * @property string $total_member
 * @property string $entrance_fee
 * @property string $member_fee
 * @property string $founded_dt
 * @property string $created_by
 * @property string $created_dt
 * @property string $updated_by
 * @property string $updated_dt
 */
class Applicant extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'applicant';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['user_id', 'password', 'club_name', 'add_reg_1', 'add_reg_2', 'postcode_reg', 'leader_name', 'secretary_name', 'treasury_name', 'docs_completed', 'total_member', 'entrance_fee', 'member_fee'], 'required'],
            [['club_type'], 'integer'],
            [['created_dt', 'updated_dt'], 'safe'],
            [['ref_no', 'user_id', 'password', 'club_name', 'add_reg_1', 'add_reg_2', 'add_letter_1', 'add_letter_2', 'leader_name', 'secretary_name', 'treasury_name', 'docs_completed', 'total_member', 'entrance_fee', 'member_fee', 'created_by', 'updated_by'], 'string', 'max' => 255],
            [['postcode_reg', 'postcode_letter'], 'string', 'max' => 5],
            [['district_reg', 'state_reg', 'district_letter', 'state_letter', 'founded_dt'], 'string', 'max' => 20],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'ref_no' => 'Ref No',
            'user_id' => 'User ID',
            'password' => 'Password',
            'club_name' => 'Club Name',
            'add_reg_1' => 'Add Reg 1',
            'add_reg_2' => 'Add Reg 2',
            'postcode_reg' => 'Postcode Reg',
            'district_reg' => 'District Reg',
            'state_reg' => 'State Reg',
            'add_letter_1' => 'Add Letter 1',
            'add_letter_2' => 'Add Letter 2',
            'postcode_letter' => 'Postcode Letter',
            'district_letter' => 'District Letter',
            'state_letter' => 'State Letter',
            'leader_name' => 'Leader Name',
            'secretary_name' => 'Secretary Name',
            'treasury_name' => 'Treasury Name',
            'club_type' => 'Club Type',
            'docs_completed' => 'Docs Completed',
            'total_member' => 'Total Member',
            'entrance_fee' => 'Entrance Fee',
            'member_fee' => 'Member Fee',
            'founded_dt' => 'Founded Dt',
            'created_by' => 'Created By',
            'created_dt' => 'Created Dt',
            'updated_by' => 'Updated By',
            'updated_dt' => 'Updated Dt',
        ];
    }
}
