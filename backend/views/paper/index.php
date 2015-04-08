<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
<<<<<<< HEAD
/* @var $searchModel common\models\PaperSearch */
=======
/* @var $searchModel common\models\Paper\PaperSearch */
>>>>>>> 76c58ee72437bc4331656780392cdf747a010500
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Papers';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="paper-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Paper', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

<<<<<<< HEAD
            'id_paper',
            'user_id',
=======
            'id',
            'member_id',
>>>>>>> 76c58ee72437bc4331656780392cdf747a010500
            'pre_paper',
            'final_paper',
            'status',
            // 'modified_time',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
