<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "menu".
 *
 * @property integer $id
 * @property string $title_my
 * @property string $title_en
 * @property string $type
 * @property integer $parent_id
 * @property integer $display_status
 * @property string $url
 * @property string $icon
 * @property string $created_by
 * @property string $created_dt
 * @property string $updated_by
 * @property string $updated_dt
 */
class Menu extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'menu';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title_my', 'type'], 'required'],
            [['parent_id', 'display_status'], 'integer'],
            [['created_dt', 'updated_dt'], 'safe'],
            [['title_my', 'title_en', 'url', 'icon', 'created_by', 'updated_by'], 'string', 'max' => 255],
            [['type'], 'string', 'max' => 10],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title_my' => 'Tajuk BM',
            'title_en' => 'Tajuk En',
            'type' => 'Jenis',
            'parent_id' => 'Parent ID',
            'display_status' => 'Display Status',
            'url' => 'Url',
            'icon' => 'Icon',
            'created_by' => 'Created By',
            'created_dt' => 'Created Dt',
            'updated_by' => 'Updated By',
            'updated_dt' => 'Updated Dt',
        ];
    }
}
