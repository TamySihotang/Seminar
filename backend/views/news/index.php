<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
<<<<<<< HEAD
/* @var $searchModel common\models\NewsSearch */
=======
/* @var $searchModel common\models\News\NewsSearch */
>>>>>>> 76c58ee72437bc4331656780392cdf747a010500
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'News';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="news-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create News', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

<<<<<<< HEAD
            'id_news',
            'user_id',
=======
            'id',
            'member_id',
>>>>>>> 76c58ee72437bc4331656780392cdf747a010500
            'date',
            'title',
            'content',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
