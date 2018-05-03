<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Berry */

$this->title = 'Update Berry: {nameAttribute}';
$this->params['breadcrumbs'][] = ['label' => 'Berries', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="berry-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
