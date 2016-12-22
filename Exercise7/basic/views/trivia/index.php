<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;

/* @var $this yii\web\View */
/* @var $searchModel app\models\TriviaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Trivias';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-index">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script>
$(document).ready(function()
{
    $("#show").click(function(){
        $("answers").toggle(500);
    });
});
</script>

<<h1>Trivia Section</h1>
<p></p>
        <?php
            if (Yii::$app->user->isGuest) {
                
            } elseif(Yii::$app->user->identity->username) {
                echo Html::a('Edit a Trivia', ['trivia/index'], ['class' => 'btn btn-success']);
            }
            ?>

<br></br>

<?php foreach ($trivias as $trivia): ?>
    <li>
        <strong><?= Html::encode("{$trivia->questions}") ?>:</strong>
        <br></br>
        <answers style="display:none"><?= Html::encode("{$trivia->answer}") ?>      </answers>
        <br></br>
    </li>
<?php endforeach; ?>
<button id="show">Show all answer</button>
<p></p>
</ul>
</div>