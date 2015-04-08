<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
<<<<<<< HEAD
/* @var $model common\models\Paper */

$this->title = $model->id_paper;
=======
/* @var $model common\models\Paper\Paper */

$this->title = $model->id;
>>>>>>> 76c58ee72437bc4331656780392cdf747a010500
$this->params['breadcrumbs'][] = ['label' => 'Papers', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="paper-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
<<<<<<< HEAD
        <?= Html::a('Update', ['update', 'id' => $model->id_paper], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id_paper], [
=======
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
>>>>>>> 76c58ee72437bc4331656780392cdf747a010500
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
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
            'modified_time',
        ],
    ]) ?>

</div>
