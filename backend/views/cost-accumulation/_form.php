<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
<<<<<<< HEAD
/* @var $model common\models\CostAccumulation */
=======
/* @var $model common\models\CostAccumulation\CostAccumulation */
>>>>>>> 76c58ee72437bc4331656780392cdf747a010500
/* @var $form yii\widgets\ActiveForm */
?>

<div class="cost-accumulation-form">

    <?php $form = ActiveForm::begin(); ?>

<<<<<<< HEAD
    <?= $form->field($model, 'user_id')->textInput() ?>
=======
    <?= $form->field($model, 'member_id')->textInput() ?>
>>>>>>> 76c58ee72437bc4331656780392cdf747a010500

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
