<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\CountrySearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="country-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'Film') ?>

    <?= $form->field($model, 'Pret') ?>

    <?= $form->field($model, 'locuri') ?>

    <?= $form->field($model, 'ocupate') ?>

    <?= $form->field($model, 'Libere') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>
public static function tableName()
{
    return '{{%country}}';
}
    <?php ActiveForm::end(); ?>

</div>
