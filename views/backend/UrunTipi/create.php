<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model kouosl\Urun\models\Urun_Tipi */

$this->title = 'Create Urun  Tipi';
$this->params['breadcrumbs'][] = ['label' => 'Urun  Tipis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="urun--tipi-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
