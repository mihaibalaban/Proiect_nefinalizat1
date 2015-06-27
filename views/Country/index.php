<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\CountrySearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Filme care ruleaza';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="country-index">

    <h1><?= Html::encode($this->title) ?></h1>
    

    

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'Film',
            'Pret',
            'locuri',
            'ocupate',
            'Libere',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]);
	
	?>
	<p>"Click pentru a vizualiza filmul"</P>
	<ul id="horz-nav-ul" class="sf-menu">
            <li class="focus"><a href="http://localhost:8080/basic/web/index.php?r=country3/index">Focus</a></li>
            <li class="about"><a href="http://localhost:8080/basic/web/index.php?r=country2/index">Vertigo</a></li>

</div>
