<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model kouosl\Urun\models\UrunList */

$this->title = 'Create Urun List';
$this->params['breadcrumbs'][] = ['label' => 'Urun Lists', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="urun-list-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
