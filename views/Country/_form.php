<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Country */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="country-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Film')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Pret')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'locuri')->textInput() ?>

    <?= $form->field($model, 'ocupate')->textInput() ?>

    <?= $form->field($model, 'Libere')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
