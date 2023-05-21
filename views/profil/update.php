<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Profil019 $model */

$this->title = 'Update Profil019: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Profil019s', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="profil019-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
