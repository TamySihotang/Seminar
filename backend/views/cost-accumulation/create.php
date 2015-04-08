<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
<<<<<<< HEAD
/* @var $model common\models\CostAccumulation */
=======
/* @var $model common\models\CostAccumulation\CostAccumulation */
>>>>>>> 76c58ee72437bc4331656780392cdf747a010500

$this->title = 'Create Cost Accumulation';
$this->params['breadcrumbs'][] = ['label' => 'Cost Accumulations', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cost-accumulation-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
