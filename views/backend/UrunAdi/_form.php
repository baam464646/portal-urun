<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model kouosl\Urun\models\Urun_Adi */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="urun--adi-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'ID')->textInput() ?>

    <?= $form->field($model, 'Urun_Adi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Urun_Tipi_ID')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
