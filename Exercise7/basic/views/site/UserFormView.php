<?php 
use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>

<?php
	if(Yii::$app->session->hasFlash('success')){
		echo "<div class ='alert alert-success'>".Yii::$app->session->getFlash('success')."</div>";
	}
?>

<?php $form = ActiveForm::begin(); ?>
<?= $form->field($model,'fname'); ?>
<?= $form->field($model,'lname'); ?>
<?= $form->field($model,'nickname'); ?>
<?= $form->field($model,'email'); ?>
<?= $form->field($model,'homeAdd'); ?>
<?= $form->field($model,'gender'); ?>
<?= $form->field($model,'phoneNum'); ?>
<?= $form->field($model,'comment'); ?>

<?= Html::submitButton('Submit',['class'=>'btn btn-success']); ?>

<?php $form = ActiveForm::end(); ?>﻿