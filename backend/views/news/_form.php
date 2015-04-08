<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
<<<<<<< HEAD
/* @var $model common\models\News */
=======
/* @var $model common\models\News\News */
>>>>>>> 76c58ee72437bc4331656780392cdf747a010500
/* @var $form yii\widgets\ActiveForm */
?>

<div class="news-form">

    <?php $form = ActiveForm::begin(); ?>

<<<<<<< HEAD
    <?= $form->field($model, 'user_id')->textInput() ?>
=======
    <?= $form->field($model, 'member_id')->textInput() ?>
>>>>>>> 76c58ee72437bc4331656780392cdf747a010500

    <?= $form->field($model, 'date')->textInput() ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => 64]) ?>

    <?= $form->field($model, 'content')->textInput(['maxlength' => 64]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
