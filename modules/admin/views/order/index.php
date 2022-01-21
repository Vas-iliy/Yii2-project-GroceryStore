<?php

use app\models\Order;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Список заказов';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="order-index">
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            'id',
            //'created_at',
            [
                'attribute' => 'created_at',
                'format' =>'datetime'
            ],
            'updated_at',
            'qty',
            'total',
            'status',
            //'name',
            //'email:email',
            //'phone',
            //'address',
            //'note:ntext',
            [
                'class' => ActionColumn::class,
                'header' => 'Действия',
                'urlCreator' => function ($action, Order $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                 }
            ],
        ],
    ]); ?>


</div>
