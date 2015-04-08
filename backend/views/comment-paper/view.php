<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\CommentPaper */

$this->title = $model->id_comment;
$this->params['breadcrumbs'][] = ['label' => 'Comment Papers', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="comment-paper-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id_comment], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id_comment], [
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
            'id_comment',
            'user_id',
            'paper_id',
            'content',
        ],
    ]) ?>

</div>
