<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Paper */

$this->title = 'Update Paper: ' . ' ' . $model->id_paper;
$this->params['breadcrumbs'][] = ['label' => 'Papers', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_paper, 'url' => ['view', 'id' => $model->id_paper]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="paper-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
