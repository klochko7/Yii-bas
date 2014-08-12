<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ExpSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="exp-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_exp') ?>

    <?= $form->field($model, 'date') ?>

    <?= $form->field($model, 'time') ?>

    <?= $form->field($model, 'name') ?>

    <?= $form->field($model, 'bones_num') ?>

    <?php // echo $form->field($model, 'throws') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
