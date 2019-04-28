<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>
<div style="width: 22%;">
    <? $form = ActiveForm::begin()?>
    <?= $form->field($model,'oldPass');?>
    <?= $form->field($model,'newPass');?>
    <?= $form->field($model,'repeatNewPass');?>
    <?= Html::submitButton('Save',['class' => 'btn btn-success']);?>
    <? ActiveForm::end()?>
</div>