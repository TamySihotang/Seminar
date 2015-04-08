<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\CostAccumulationSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="cost-accumulation-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_accumulation') ?>

    <?= $form->field($model, 'user_id') ?>

    <?= $form->field($model, 'paper_id') ?>

    <?= $form->field($model, 'cost_id') ?>

    <?= $form->field($model, 'item') ?>

    <?php // echo $form->field($model, 'item_cost') ?>

    <?php // echo $form->field($model, 'total') ?>

    <?php // echo $form->field($model, 'due_date') ?>

    <?php // echo $form->field($model, 'status') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
