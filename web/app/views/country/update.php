<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\country */

$this->title = 'Update Country: ' . ' ' . $model->PRET;
$this->params['breadcrumbs'][] = ['label' => 'Countries', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->PRET, 'url' => ['view', 'id' => $model->PRET]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="country-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
