<?php

date_default_timezone_set("UTC"); 
use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ExpSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Exps';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="exp-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php  //echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Exp', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            'id_exp',
            'date',
            'time',
            'name',
            'bones_num',
            'throws',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
