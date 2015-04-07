<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\CostAccumulation\CostAccumulationSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Cost Accumulations';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cost-accumulation-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Cost Accumulation', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'member_id',
            'paper_id',
            'cost_id',
            'item',
            // 'item_cost',
            // 'total',
            // 'due_date',
            // 'status',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
