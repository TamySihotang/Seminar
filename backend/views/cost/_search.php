<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
<<<<<<< HEAD
/* @var $model common\models\CostSearch */
=======
/* @var $model common\models\Cost\CostSearch */
>>>>>>> 76c58ee72437bc4331656780392cdf747a010500
/* @var $form yii\widgets\ActiveForm */
?>

<div class="cost-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

<<<<<<< HEAD
    <?= $form->field($model, 'id_cost') ?>
=======
    <?= $form->field($model, 'id') ?>
>>>>>>> 76c58ee72437bc4331656780392cdf747a010500

    <?= $form->field($model, 'accomodation') ?>

    <?= $form->field($model, 'register') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
