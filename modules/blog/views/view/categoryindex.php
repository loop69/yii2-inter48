<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\ListView;
use app\modules\blog\models;
//use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\modules\blog\models\PostSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title =  $category_title;
$this->params['breadcrumbs'][] = ['label' => 'блог', 'url' => ['/blog/view']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="post-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <div class="body-content">
        <div class="row">
            <div class="col-lg-6">
                 <?php echo ListView::widget([
                    'dataProvider' => $listDataProvider,
                    'itemView' => '_listbycategory', ]);
                 ?>
            </div>
        </div>
    </div>
</div>