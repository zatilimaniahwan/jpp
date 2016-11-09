<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "ref_list".
 *
 * @property integer $id
 * @property string $code
 * @property string $label_my
 * @property string $label_en
 * @property integer $cat
 * @property integer $sort
 * @property string $nilai
 * @property string $created_by
 * @property string $created_dt
 * @property string $updated_by
 * @property string $updated_dt
 */
class RefList extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'ref_list';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['code', 'label_my', 'cat', 'sort'], 'required'],
            [['cat', 'sort'], 'integer'],
            [['created_dt', 'updated_dt'], 'safe'],
            [['code'], 'string', 'max' => 10],
            [['label_my', 'label_en', 'nilai', 'created_by', 'updated_by'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'code' => 'Code',
            'label_my' => 'Label My',
            'label_en' => 'Label En',
            'cat' => 'Cat',
            'sort' => 'Sort',
            'nilai' => 'Nilai',
            'created_by' => 'Created By',
            'created_dt' => 'Created Dt',
            'updated_by' => 'Updated By',
            'updated_dt' => 'Updated Dt',
        ];
    }
}
