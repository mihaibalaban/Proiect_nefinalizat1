<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\countrysearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="country-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'PRET') ?>

    <?= $form->field($model, 'FILM') ?>

    <?= $form->field($model, 'locuri') ?>

    <?= $form->field($model, 'ocupate') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
