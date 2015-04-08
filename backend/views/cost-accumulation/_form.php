<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\CostAccumulation */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="cost-accumulation-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'user_id')->textInput() ?>

    <?= $form->field($model, 'paper_id')->textInput() ?>

    <?= $form->field($model, 'cost_id')->textInput() ?>

    <?= $form->field($model, 'item')->textInput(['maxlength' => 64]) ?>

    <?= $form->field($model, 'item_cost')->textInput(['maxlength' => 64]) ?>

    <?= $form->field($model, 'total')->textInput(['maxlength' => 64]) ?>

    <?= $form->field($model, 'due_date')->textInput() ?>

    <?= $form->field($model, 'status')->textInput(['maxlength' => 64]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
