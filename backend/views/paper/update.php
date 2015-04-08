<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
<<<<<<< HEAD
/* @var $model common\models\Paper */

$this->title = 'Update Paper: ' . ' ' . $model->id_paper;
$this->params['breadcrumbs'][] = ['label' => 'Papers', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_paper, 'url' => ['view', 'id' => $model->id_paper]];
=======
/* @var $model common\models\Paper\Paper */

$this->title = 'Update Paper: ' . ' ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Papers', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
>>>>>>> 76c58ee72437bc4331656780392cdf747a010500
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="paper-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
