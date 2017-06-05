<?php

namespace app\modules\pages;

use yii\base\BootstrapInterface;
use Yii;

class Bootstrap implements BootstrapInterface
{
    public function bootstrap($app)
    {
        $app->i18n->translations['modules/pages/*'] = [
            'class' => 'yii\i18n\PhpMessageSource',
            'forceTranslation' => true,
            'basePath' => '@app/modules/pages/messages',
            'fileMap' => [
                'modules/pages/module' => 'module.php',
            ],
        ];
    }
}