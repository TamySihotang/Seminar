<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
<<<<<<< HEAD
/* @var $model common\models\NewsSearch */
=======
/* @var $model common\models\News\NewsSearch */
>>>>>>> 76c58ee72437bc4331656780392cdf747a010500
/* @var $form yii\widgets\ActiveForm */
?>

<div class="news-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

<<<<<<< HEAD
    <?= $form->field($model, 'id_news') ?>

    <?= $form->field($model, 'user_id') ?>
=======
    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'member_id') ?>
>>>>>>> 76c58ee72437bc4331656780392cdf747a010500

    <?= $form->field($model, 'date') ?>

    <?= $form->field($model, 'title') ?>

    <?= $form->field($model, 'content') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
