<?php
//use yii\helpers\Url;
use yii\helpers\Html;

$this->title = Yii::t('app', 'Post');
$this->params['breadcrumbs'][] = ['label' => 'блог', 'url' => ['/blog/view']];
$this->params['breadcrumbs'][] = $model->title;
?>
<div class="body-content">

    <div class="row">
        <div class="col-lg-6">
<h2><?=$model->title?></h2>
<div><?=$model->content?></div>


            <?php if (Yii::$app->user->can('updatePost', ['post' => $model])) {
                echo Html::a('Редактировать', ['/blog/post/update', 'id' => $model->id], ['class' => 'btn btn-primary']);
            } ?>
            <?php if (Yii::$app->user->can('deletePost', ['post' => $model])) {
                echo Html::a('Удалить', ['/blog/post/delete', 'id' => $model->id], ['class' => 'btn btn-danger', 'data-method' => 'post'] );
            } ?>
             </div>
        </div>
    </div>
<div id="hypercomments_widget"></div>
<script type="text/javascript">
    _hcwp = window._hcwp || [];
    _hcwp.push({widget:"Stream", widget_id: 70960});
    (function() {
        if("HC_LOAD_INIT" in window)return;
        HC_LOAD_INIT = true;
        var lang = (navigator.language || navigator.systemLanguage || navigator.userLanguage || "en").substr(0, 2).toLowerCase();
        var hcc = document.createElement("script"); hcc.type = "text/javascript"; hcc.async = true;
        hcc.src = ("https:" == document.location.protocol ? "https" : "http")+"://w.hypercomments.com/widget/hc/70960/"+lang+"/widget.js";
        var s = document.getElementsByTagName("script")[0];
        s.parentNode.insertBefore(hcc, s.nextSibling);
    })();
</script>
<a href="http://hypercomments.com" class="hc-link" title="comments widget">comments powered by HyperComments</a>