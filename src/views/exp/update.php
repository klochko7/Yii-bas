<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Exp */

$this->title = 'Update Exp: ' . ' ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Exps', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id_exp]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="exp-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
