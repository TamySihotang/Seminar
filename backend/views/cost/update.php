<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
<<<<<<< HEAD
/* @var $model common\models\Cost */

$this->title = 'Update Cost: ' . ' ' . $model->id_cost;
$this->params['breadcrumbs'][] = ['label' => 'Costs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_cost, 'url' => ['view', 'id' => $model->id_cost]];
=======
/* @var $model common\models\Cost\Cost */

$this->title = 'Update Cost: ' . ' ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Costs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
>>>>>>> 76c58ee72437bc4331656780392cdf747a010500
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="cost-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
