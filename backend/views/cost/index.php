<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
<<<<<<< HEAD
/* @var $searchModel common\models\CostSearch */
=======
/* @var $searchModel common\models\Cost\CostSearch */
>>>>>>> 76c58ee72437bc4331656780392cdf747a010500
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Costs';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cost-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Cost', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

<<<<<<< HEAD
            'id_cost',
=======
            'id',
>>>>>>> 76c58ee72437bc4331656780392cdf747a010500
            'accomodation',
            'register',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
