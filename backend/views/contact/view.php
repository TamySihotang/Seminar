<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
<<<<<<< HEAD
/* @var $model common\models\Contact */
=======
/* @var $model common\models\Contact\Contact */
>>>>>>> 76c58ee72437bc4331656780392cdf747a010500

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Contacts', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="contact-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
<<<<<<< HEAD
        <?= Html::a('Update', ['update', 'id' => $model->id_contact], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id_contact], [
=======
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
>>>>>>> 76c58ee72437bc4331656780392cdf747a010500
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
<<<<<<< HEAD
            'id_contact',
=======
            'id',
>>>>>>> 76c58ee72437bc4331656780392cdf747a010500
            'title',
            'email:email',
            'web',
            'phone',
        ],
    ]) ?>

</div>
