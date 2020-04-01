<?php
use yii\bootstrap\ActiveForm;
use yii\helpers\Html;

echo Html::tag('h1','Isikan Komentar Anda');
$form = ActiveForm::begin([
    'enableClientValidation' =>false,
    'layout' => 'horizontal',
]);
echo $form->field($model,'nama')->label('Nama Anda');
echo $form->field($model,'pesan')->label('Pesan Anda');
echo Html::submitButton('Simpan',['class'=>'btn btn-success col-sm-offset-5']);
ActiveForm::end();