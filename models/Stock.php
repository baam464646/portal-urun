<?php
namespace kouosl\Urun\models;
use Yii;

/**
 * This is the model class for table "Stock".
 *
 * @property int $ID
 * @property int $Urun_Sayisi
 */
class Stock extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'Stock';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['ID'], 'required'],
            [['ID', 'Urun_Sayisi'], 'integer'],
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
            'Urun_Sayisi' => 'Urun  Sayisi',
        ];
    }
}
