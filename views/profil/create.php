<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Profil019 $model */

$this->title = 'Create Profil019';
$this->params['breadcrumbs'][] = ['label' => 'Profil019s', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="profil019-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
