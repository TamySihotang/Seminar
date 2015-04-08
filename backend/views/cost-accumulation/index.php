<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
<<<<<<< HEAD
/* @var $searchModel common\models\CostAccumulationSearch */
=======
/* @var $searchModel common\models\CostAccumulation\CostAccumulationSearch */
>>>>>>> 76c58ee72437bc4331656780392cdf747a010500
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

<<<<<<< HEAD
            'id_accumulation',
            'user_id',
=======
            'id',
            'member_id',
>>>>>>> 76c58ee72437bc4331656780392cdf747a010500
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
