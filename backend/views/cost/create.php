<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Cost\Cost */

$this->title = 'Create Cost';
$this->params['breadcrumbs'][] = ['label' => 'Costs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cost-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
