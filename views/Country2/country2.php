<?php
use yii\helpers\Html;
use yii\widgets\LinkPager;
?>
<h1>Countries</h1>
<ul>
<?php foreach ($countries as $country2): ?>
    <li>
        <?= Html::encode("{$country2->Nume} ({$country2->Prenume})") ?>:
        
    </li>
<?php endforeach; ?>
</ul>

<?= LinkPager::widget(['pagination' => $pagination]) ?>