<?php

namespace app\models2;

use Yii;

/**
 * This is the model class for table "country".
 *
 * @property string $Film
 * @property string $Pret
 * @property integer $locuri
 * @property integer $ocupate
 * @property integer $Libere
 */
class Country extends \yii\db\ActiveRecord
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
            [['Film', 'Pret', 'Libere'], 'required'],
            [['locuri', 'ocupate', 'Libere'], 'integer'],
            [['Film'], 'string', 'max' => 32],
            [['Pret'], 'string', 'max' => 52]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'Film' => 'Film',
            'Pret' => '(lei)',
            'locuri' => 'Locuri',
            'ocupate' => 'Ocupate',
            'Libere' => 'Libere',
        ];
    }
}
