<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;?>

<div style="width: 22%;">
    <? $form = ActiveForm::begin()?>
    <?= $form->field($model,'oldPass');?>
    <?= $form->field($model,'newPass')->passwordInput();?>
    <?= $form->field($model,'repeatNewPass')->passwordInput();?>
    <?= Html::submitButton('Login',['class' => 'btn btn-success']);?>
    <? ActiveForm::end()?>
</div>
