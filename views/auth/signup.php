<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;?>


<? $form = ActiveForm::begin()?>
<?= $form->field($model,'username');?>
<?= $form->field($model,'password')->passwordInput();?>
<?= $form->field($model,'passwordReload')->passwordInput();?>
<?= Html::submitButton('Login',['class' => 'btn btn-success']);?>
<? ActiveForm::end()?>