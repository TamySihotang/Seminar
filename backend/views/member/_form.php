<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Member\Member */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="member-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'first_name')->textInput(['maxlength' => 64]) ?>

    <?= $form->field($model, 'last_name')->textInput(['maxlength' => 64]) ?>

    <?= $form->field($model, 'username')->textInput(['maxlength' => 64]) ?>

    <?= $form->field($model, 'password')->passwordInput(['maxlength' => 64]) ?>

    <?= $form->field($model, 'jenis_kelamin')->textInput(['maxlength' => 64]) ?>

    <?= $form->field($model, 'birth')->textInput(['maxlength' => 64]) ?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => 64]) ?>

    <?= $form->field($model, 'telepon')->textInput(['maxlength' => 64]) ?>

    <?= $form->field($model, 'foto')->textInput(['maxlength' => 64]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
