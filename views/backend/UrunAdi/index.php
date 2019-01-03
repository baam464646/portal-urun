<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel kouosl\Urun\models\Urun_AdiSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Urun  Adis';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="urun--adi-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Urun  Adi', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'ID',
            'Urun_Adi',
            'Urun_Tipi_ID',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
