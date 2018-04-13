<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "setor".
 *
 * @property int $id
 * @property string $tgl_jual
 * @property int $jumlah
 * @property int $terjual
 * @property int $untung
 */
class NewSetor extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'setor';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['tgl_jual', 'jumlah', 'terjual', 'untung'], 'required'],
            [['tgl_jual'], 'safe'],
            [['jumlah', 'terjual', 'untung'], 'integer'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'tgl_jual' => 'Tgl Jual',
            'jumlah' => 'Jumlah',
            'terjual' => 'Terjual',
            'untung' => 'Untung',
        ];
    }
}
