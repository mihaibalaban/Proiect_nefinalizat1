<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\country2 */

$this->title = 'Creaza Rezervare Vertigo';
$this->params['breadcrumbs'][] = ['label' => 'Country2s', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="country2-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
