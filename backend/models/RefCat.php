<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "ref_cat".
 *
 * @property integer $id
 * @property string $cat
 * @property string $descr
 */
class RefCat extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'ref_cat';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['cat', 'descr'], 'required'],
            [['descr'], 'string'],
            [['cat'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'cat' => 'Cat',
            'descr' => 'Descr',
        ];
    }
}
