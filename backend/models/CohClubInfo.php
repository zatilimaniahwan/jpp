<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "coh_club_info".
 *
 * @property integer $id
 * @property integer $club_ref
 * @property string $amount
 * @property string $created_by
 * @property string $created_dt
 * @property string $updated_by
 * @property string $updated_dt
 */
class CohClubInfo extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'coh_club_info';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['club_ref', 'amount'], 'required'],
            [['club_ref'], 'integer'],
            [['created_dt', 'updated_dt'], 'safe'],
            [['amount', 'created_by', 'updated_by'], 'string', 'max' => 255],
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
            'amount' => 'Amount',
            'created_by' => 'Created By',
            'created_dt' => 'Created Dt',
            'updated_by' => 'Updated By',
            'updated_dt' => 'Updated Dt',
        ];
    }
}
