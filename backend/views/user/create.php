<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
<<<<<<< HEAD
/* @var $model common\models\User */
=======
/* @var $model common\models\User\User */
>>>>>>> 76c58ee72437bc4331656780392cdf747a010500

$this->title = 'Create User';
$this->params['breadcrumbs'][] = ['label' => 'Users', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
