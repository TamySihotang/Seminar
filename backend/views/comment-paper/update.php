<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\CommentPaper */

$this->title = 'Update Comment Paper: ' . ' ' . $model->id_comment;
$this->params['breadcrumbs'][] = ['label' => 'Comment Papers', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_comment, 'url' => ['view', 'id' => $model->id_comment]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="comment-paper-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
