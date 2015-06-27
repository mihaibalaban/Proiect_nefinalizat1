<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "country2".
 *
 * @property string $Nume
 * @property string $Prenume
 */
class Country3 extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'country3';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Nume', 'Prenume'], 'required'],
            [['Nume', 'Prenume'], 'string', 'max' => 52]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'Nume' => 'Nume',
            'Prenume' => 'Prenume',
        ];
    }
}
