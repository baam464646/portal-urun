<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model kouosl\Urun\models\Urun_Tipi */

$this->title = 'Update Urun  Tipi: ' . $model->ID;
$this->params['breadcrumbs'][] = ['label' => 'Urun  Tipis', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->ID, 'url' => ['view', 'id' => $model->ID]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="urun--tipi-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
