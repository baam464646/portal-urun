<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model kouosl\Urun\models\UrunList */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="urun-list-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'ID')->textInput() ?>

    <?= $form->field($model, 'Urun_ID')->textInput() ?>

    <?= $form->field($model, 'Stock_ID')->textInput() ?>

    <?= $form->field($model, 'Stock_Sayisi')->textInput() ?>

    <?= $form->field($model, 'Urun_Tipi')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
