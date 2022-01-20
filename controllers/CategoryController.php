<?php

namespace app\controllers;

use app\models\Category;
use app\models\Product;
use yii\data\Pagination;
use yii\web\NotFoundHttpException;

class CategoryController extends AppController
{
    public function actionView($id)
    {
        $category = Category::findOne($id);
        if (empty($category)) {
            throw new NotFoundHttpException('No Category');
        }
        $this->setMeta("{$category->title}::" . \Yii::$app->name, $category->keywords, $category->description);
        $pages = new Pagination(['totalCount' => $category->getProducts()->count(), 'pageSize' => 4, 'forcePageParam' => false, 'pageSizeParam' => false]);
        $products = $category->getProducts()->offset($pages->offset)->limit($pages->limit)->all();
        return $this->render('view', compact('products', 'category', 'pages'));
    }

    public function actionSearch()
    {
        $q = trim($this->request->get('q'));
        $this->setMeta("Seqrch: {$q} ::" . \Yii::$app->name);
        if (!$q) {
            return $this->render('search');
        }
        $query = Product::find()->where(['like', 'title', $q]);
        $pages = new Pagination(['totalCount' => $query->count(), 'pageSize' => 4, 'forcePageParam' => false, 'pageSizeParam' => false]);
        $products = $query->offset($pages->offset)->limit($pages->limit)->all();
        return $this->render('search', compact('products', 'pages', 'q'));
    }
}