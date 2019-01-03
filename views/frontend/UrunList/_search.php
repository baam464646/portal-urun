<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model kouosl\Urun\models\UrunListSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="urun-list-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'ID') ?>

    <?= $form->field($model, 'Urun_ID') ?>

    <?= $form->field($model, 'Stock_ID') ?>

    <?= $form->field($model, 'Stock_Sayisi') ?>

    <?= $form->field($model, 'Urun_Tipi') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
