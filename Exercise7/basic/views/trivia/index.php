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
<div class="trivia-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
         <?php
            if (Yii::$app->user->isGuest) {
                
            } elseif(Yii::$app->user->identity->username) {
                echo Html::a('Create a Trivia', ['create'], ['class' => 'btn btn-success']); 
            }
            ?>
    </p>
    <?php Pjax::begin(); ?>   
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'questions',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
    <?php Pjax::end(); ?>
</div>
