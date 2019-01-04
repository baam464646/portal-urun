<?php
use yii\helpers\Html;
use yii\grid\GridView;
/* @var $this yii\web\View */
/* @var $searchModel kouosl\Urun\models\UrunListSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */
$this->title = 'Urun Listesi';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="urun-list-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
     //  'filterModel' => $searchModel,
      /*  'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
			'ID',
            'Urun_ID',
			'Stock_ID'
			'Stock_Sayisi'
            'Urun_Tipi'
            ['class' => 'yii\grid\ActionColumn'],
        ],*/
    ]); ?>
</div>