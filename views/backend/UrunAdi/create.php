<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model kouosl\Urun\models\Urun_Adi */

$this->title = 'Create Urun  Adi';
$this->params['breadcrumbs'][] = ['label' => 'Urun  Adis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="urun--adi-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
