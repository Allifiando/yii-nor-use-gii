<?php

namespace app\models;

use yii\base\Model;
use yii\helpers\ArrayHelper;

use app\models\Setor;

class SetorForm extends Model
{
    public $id;
    public $tgl_jual;
    public $jumlah;
    public $terjual;
    public $untung;

    public function rules()
    {
        return[
            [['id','tgl_jual','jumlah','terjual','untung']]
        ];
    }

    public function attributeLabels()
	{
		return [
			'tgl_jual' => 'Tanggal Jual',
            'jumlah' => 'Jumlah Jual',
            'terjual' => 'Terjual',
            'untung' => 'Untung',
		];
	}
}