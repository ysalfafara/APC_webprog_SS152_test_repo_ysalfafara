<?php
use yii\helpers\Html;
use yii\widgets\LinkPager;
?>
<h1>Trivias</h1>
<ul>
<?php foreach ($trivias as $trivia): ?>
    <li>
        <strong><?= Html::encode("{$trivia->question}") ?>:</strong> </br>
        <?= $trivia->answer ?>
    </li>
<?php endforeach; ?>
</ul>