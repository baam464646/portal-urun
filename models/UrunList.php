<?php

namespace kouosl\Urun\models;

use Yii;

/**
 * This is the model class for table "UrunList".
 *
 * @property int $ID
 * @property int $Urun_ID
 * @property int $Stock_ID
 * @property int $Stock_Sayisi
 * @property string $Urun_Tipi
 */
class UrunList extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'UrunList';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['ID'], 'required'],
            [['ID', 'Urun_ID', 'Stock_ID', 'Stock_Sayisi'], 'integer'],
            [['Urun_Tipi'], 'string', 'max' => 30],
            [['ID'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'ID' => 'ID',
            'Urun_ID' => 'Urun  ID',
            'Stock_ID' => 'Stock  ID',
            'Stock_Sayisi' => 'Stock  Sayisi',
            'Urun_Tipi' => 'Urun  Tipi',
        ];
    }
}
