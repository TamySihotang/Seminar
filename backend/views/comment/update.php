<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\CommentPaper\CommentPaper */

$this->title = 'Update Comment Paper: ' . ' ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Comment Papers', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="comment-paper-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
