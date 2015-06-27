<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "country".
 *
 * @property string $PRET
 * @property string $FILM
 * @property integer $locuri
 * @property integer $ocupate
 */
class rezervari extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'country';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['PRET', 'FILM'], 'required'],
            [['locuri', 'ocupate'], 'integer'],
            [['PRET'], 'string', 'max' => 32],
            [['FILM'], 'string', 'max' => 52]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'PRET' => 'Pret',
            'FILM' => '(lei)',
            'locuri' => 'Locuri',
            'ocupate' => 'Ocupate',
        ];
    }
}
