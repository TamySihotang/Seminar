<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
<<<<<<< HEAD
/* @var $model common\models\News */
=======
/* @var $model common\models\News\News */
>>>>>>> 76c58ee72437bc4331656780392cdf747a010500

$this->title = 'Create News';
$this->params['breadcrumbs'][] = ['label' => 'News', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="news-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
