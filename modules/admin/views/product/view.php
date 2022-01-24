<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Product */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Products', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="product-view">

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
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
            'id',
            'title',
            //'category_id',
            [
                'attribute' => 'category_id',
                'value' => isset($model->category->title) ?
                    '<a href="' . \yii\helpers\Url::to(['category/view', 'id' => $model->category->id])
                    .'">' . $model->category->title . '</a>' : '-',
                'format' => 'raw',
            ],
            'content:raw',
            'price',
            'old_price',
            'description',
            'keywords',
            //'img',
            [
                    'attribute' => 'img',
                'value' => $model->img ? "@web/products/{$model->img}" : "@web/products/no-image.png",
                'format' => ['image', ['width' => 100]],
            ],
            //'is_offer',
            [
                'attribute' => 'is_offer',
                'value' => $model->is_offer ? '<span class="text-green">Да</span>' : '<span class="text-red">Нет</span>',
                'format' => 'raw',
            ],
        ],
    ]) ?>

</div>
