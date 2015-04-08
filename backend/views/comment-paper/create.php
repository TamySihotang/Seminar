<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\CommentPaper */

$this->title = 'Create Comment Paper';
$this->params['breadcrumbs'][] = ['label' => 'Comment Papers', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="comment-paper-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
