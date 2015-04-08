<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
<<<<<<< HEAD
/* @var $model common\models\Contact */

$this->title = 'Update Contact: ' . ' ' . $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Contacts', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id_contact]];
=======
/* @var $model common\models\Contact\Contact */

$this->title = 'Update Contact: ' . ' ' . $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Contacts', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id]];
>>>>>>> 76c58ee72437bc4331656780392cdf747a010500
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="contact-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
