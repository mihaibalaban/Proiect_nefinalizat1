<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Country2 */

$this->title = $model->Nume;
$this->params['breadcrumbs'][] = ['label' => 'Country2s', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="country2-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->Nume], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->Nume], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'Nume',
            'Prenume',
        ],
    ]) ?>

</div>
