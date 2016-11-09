<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "account".
 *
 * @property integer $id
 * @property integer $acc_id
 * @property integer $acc_type
 * @property integer $club_ref
 */
class Account extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'account';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['acc_id', 'acc_type', 'club_ref'], 'required'],
            [['acc_id', 'acc_type', 'club_ref'], 'integer'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'acc_id' => 'Acc ID',
            'acc_type' => 'Acc Type',
            'club_ref' => 'Club Ref',
        ];
    }
}
