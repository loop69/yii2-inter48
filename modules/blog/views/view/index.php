<?php

use yii\helpers\Html;
use yii\helpers\Url;
//use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\modules\blog\models\PostSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Posts');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="post-index">

    <h1><?= Html::encode($this->title) ?></h1>



    <?php foreach($model as $data):?>
        <div><h2>
                <a href="<?=Url::to(['show', 'id'=> $data->id])?>">
                    <?=$data->title?>
                </a></h2></div>
        <div><?=$data->content?></div>

        <br />
    <?php endforeach;?>


</div>