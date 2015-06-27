<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\country2 */

$this->title = 'Creaza rezervare: ' . ' ' . $model->Nume;
$this->params['breadcrumbs'][] = ['label' => 'Country2s', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->Nume, 'url' => ['view', 'id' => $model->Nume]];
$this->params['breadcrumbs'][] = 'Creaza';
?>
<div class="country2-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
