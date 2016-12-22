<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;

/* @var $this yii\web\View */

$this->title = 'My Yii Application';
?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script>
    $(document).ready(function()
    {
        $("#show0").click(function(){
            $("answers0").toggle(500);
        });
    });
</script>


<div class="site-index">

    <div class="jumbotron"  id="home">
        <nav class="navbar navbar-inverse navbar-fixed-top">
        <ul class ="nav navbar-nav">
          <li><a class= "scroll-link" href="#home">Home</a></li>
          <li><a href="#gallery">Gallery</a></li>
          <li><a href="#trivia">Trivia</a></li>
          <li><a href="http://localhost/Exercise7/basic/web/index.php?r=users%2Findex">Form</a></li>            
          <li><a href="http://localhost/Exercise7/basic/web/index.php?r=site%2Flogin">Login</a></li>
        </ul>
        </nav>

        <answers0 style="display: none; width: 480px"><img src="images/0.jpg" class="img-responsive" alt=""></answers0>
        <br><br>
        <br><br>

        <h1>GET TO KNOW ME!</h1>

        <p class="lead">Yesha Ann Sogocio Alfafara</p>

        <p><a class="btn btn-lg btn-success" id="show0">Let's Start</a></p>
        <br><br>
        <br><br>
        <br><br>
        <br id="gallery"><br>
        <br><br>
        <br><br>

    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script>
    $(document).ready(function()
    {
        $("#show1").click(function(){
            $("answers1").toggle(500);
        });
    });
    </script>


    <div class="body-content">

        <div class="row">
            <div class="col-lg-4">
                     <img src="images/1.jpg" class="img-responsive" alt="">

                <h2 style="text-align:center">SIMPLE</h2>
                <br><br>

                <center><p><answers1 style="display:none"> I find hapiness in the simplest of ways</answers1></p></center>
            </div>

            <div class="col-lg-4">
             <img src="images/3.jpg" class="img-responsive" alt="">
                <h2 style="text-align:center">FIERCE</h2>
                <br><br>

                <center><p><answers1 style="display:none"> Nature formed me fierce...</answers1></p></center>
        <br><br>
        <br><br>
        <br><br>
                <center><p><a class="btn btn-lg btn-success" id="show1">Show &dArr;</a></p></center>
            </div>

            <div class="col-lg-4">
             <img src="images/2.jpg" class="img-responsive" alt="">
                <h2 style="text-align:center">OPTIMIST</h2>
                <br><br>

                <center><p><answers1 style="display:none"> I choose to be happy</answers1></p></center>

            </div>
        </div>

        <br><br>
        <br><br>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script>
    $(document).ready(function()
    {
        $("#show").click(function(){
            $("answers").toggle(500);
        });
    });
    </script>

    <<h1 id="trivia">Trivias About Me</h1>
    <p></p>
            <?php
                if (Yii::$app->user->isGuest) {
                    
                } elseif(Yii::$app->user->identity->username) {
                    echo Html::a('Edit a Trivia', ['trivia/index'], ['class' => 'btn btn-success']);
                }
                ?>
    <br></br>
    <div class="body-content">
        <ul>
            <?php foreach ($trivias as $trivia): ?>
                    <strong><?= Html::encode("{$trivia->questions}") ?>:</strong>
                    <br></br>
                    <answers style="display:none"><?= Html::encode("{$trivia->answer}") ?></answers>
                    <br></br>
            <?php endforeach; ?>
            <p><a class="btn btn-default" id="show">Show Answers</a></p>
            </div>
            <p></p>
        </ul>
    </div>
</div>
