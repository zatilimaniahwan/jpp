<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "visiting_info".
 *
 * @property integer $id
 * @property integer $club_ref
 * @property string $pdk1_name
 * @property string $pdk2_name
 * @property string $visit_dt
 * @property integer $type_visit
 * @property integer $reason_visit
 * @property string $created_by
 * @property string $created_dt
 * @property string $updated_by
 * @property string $updated_dt
 */
class VisitingInfo extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'visiting_info';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['club_ref', 'pdk1_name', 'pdk2_name','type_visit', 'reason_visit','visit_dt'], 'required','message'=>'{attribute} tidak boleh kosong!'],
            [['club_ref', 'type_visit', 'reason_visit'], 'integer'],
            [['created_dt', 'updated_dt'], 'safe'],
            [['pdk1_name', 'pdk2_name', 'visit_dt', 'created_by', 'updated_by'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'club_ref' => 'No. Rujukan Kelab',
            'pdk1_name' => 'Nama Pegawai Bertugas 1',
            'pdk2_name' => 'Nama Pegawai Bertugas 2',
            'visit_dt' => 'Tarikh Lawatan',
            'type_visit' => 'Jenis Lawatan',
            'reason_visit' => 'Sebab Lawatan',
            'created_by' => 'Created By',
            'created_dt' => 'Created Dt',
            'updated_by' => 'Updated By',
            'updated_dt' => 'Updated Dt',
        ];
    }
}
