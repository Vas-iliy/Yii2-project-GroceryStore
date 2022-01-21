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
            'created_at',
            /*[
                'attribute' => 'created_at',
                'format' =>'datetime'
            ],*/
            'updated_at',
            'qty',
            'total',
            //'status',
            [
                'attribute' => 'status',
                'value' => function($data) {
                    return $data->status ? '<span class="text-green">Готов</span>' : '<span class="text-red">Новый</span>';
                },
                'format' => 'raw',
            ],
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
