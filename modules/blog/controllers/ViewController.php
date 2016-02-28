<?php

namespace app\modules\blog\controllers;

use Yii;
use app\modules\blog\models\Post;
use app\modules\blog\models\PostSearch;
use app\modules\blog\models\Category;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\helpers\ArrayHelper;

/**
 * PostController implements the CRUD actions for Post model.
 */
class ViewController extends Controller
{
    /**
     * Lists all Post models.
     * @return mixed
     */
    public function actionIndex()
{
    $post = new Post();
    $model = $post->find()->where(['status'=>1])->all();
//        $searchModel = new PostSearch();
//        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

    return $this->render('index', [
        // 'searchModel' => $searchModel,
        'model' => $model,
    ]);
}
    public function actionShow($id)
    {
        $post = new Post();
        $model = $post->findOne(['id'=>$id, 'status'=>1]);
//        $searchModel = new PostSearch();
//        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('show', [
            // 'searchModel' => $searchModel,
            'model' => $model,
        ]);
    }
}