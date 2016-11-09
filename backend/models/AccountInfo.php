<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "account_info".
 *
 * @property integer $id
 * @property integer $club_ref
 * @property integer $saving_type
 * @property string $bank_name
 * @property string $bank_district
 * @property string $bank_state
 * @property string $last_amount
 * @property string $last_amount_dt
 * @property string $created_by
 * @property string $created_dt
 * @property string $updated_by
 * @property string $updated_dt
 */
class AccountInfo extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'account_info';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['club_ref', 'bank_name', 'last_amount'], 'required'],
            [['club_ref', 'saving_type'], 'integer'],
            [['created_dt', 'updated_dt'], 'safe'],
            [['bank_name', 'last_amount', 'last_amount_dt', 'created_by', 'updated_by'], 'string', 'max' => 255],
            [['bank_district', 'bank_state'], 'string', 'max' => 20],
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
            'saving_type' => 'Saving Type',
            'bank_name' => 'Bank Name',
            'bank_district' => 'Bank District',
            'bank_state' => 'Bank State',
            'last_amount' => 'Last Amount',
            'last_amount_dt' => 'Last Amount Dt',
            'created_by' => 'Created By',
            'created_dt' => 'Created Dt',
            'updated_by' => 'Updated By',
            'updated_dt' => 'Updated Dt',
        ];
    }
}
