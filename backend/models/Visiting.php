<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "visiting".
 *
 * @property integer $id
 * @property integer $club_ref
 * @property integer $visiting_id
 */
class Visiting extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'visiting';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['club_ref', 'visiting_id'], 'required'],
            [['club_ref', 'visiting_id'], 'integer'],
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
            'visiting_id' => 'Visiting ID',
        ];
    }
}
