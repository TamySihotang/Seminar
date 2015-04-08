<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
<<<<<<< HEAD
/* @var $model common\models\PaperSearch */
=======
/* @var $model common\models\Paper\PaperSearch */
>>>>>>> 76c58ee72437bc4331656780392cdf747a010500
/* @var $form yii\widgets\ActiveForm */
?>

<div class="paper-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

<<<<<<< HEAD
    <?= $form->field($model, 'id_paper') ?>

    <?= $form->field($model, 'user_id') ?>
=======
    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'member_id') ?>
>>>>>>> 76c58ee72437bc4331656780392cdf747a010500

    <?= $form->field($model, 'pre_paper') ?>

    <?= $form->field($model, 'final_paper') ?>

    <?= $form->field($model, 'status') ?>

    <?php // echo $form->field($model, 'modified_time') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
