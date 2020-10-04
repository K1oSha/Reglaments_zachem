<?php

   $config =[
    'id'=>'reglament',
    'basePath'=> realpath(__DIR__.'/../'),
       'bootstrap'=>['debug','gii'],
      'components'=>[
        'urlManager'=>[
          'enablePrettyUrl'=>true,
            'showScriptName'=>false,
        ],
          'request'=>[
              'cookieValidationKey' => 'vsemprivetktoetochitaet',
              'baseUrl' => ''
          ],
          'db'=> require(__DIR__.'/db.php'),
          'user'=>[
              'identityClass' =>'app\models\UserIdentity',
              'enableAutoLogin' => true,
          ],
          'authManager' => [
              'class' => 'yii\rbac\DbManager',
              // uncomment if you want to cache RBAC items hierarchy
              // 'cache' => 'cache',
          ],
          'cache' => [
              'class' => 'yii\caching\FileCache',  // Подключаем файловое кэширование данных
          ],
          'mailer' => [
            'class' => 'yii\swiftmailer\Mailer',
           //   'useFileTransport' => true, //команда чтобы эмейлы отправлялись в локальный файл (понарошку)
            'transport' => [
                'class' => 'Swift_SmtpTransport',
                'host' => 'mail.hosting.reg.ru',
                'port' => '465',
                'encryption' => 'ssl',
                'username' => 'dev@it-demo.ru',
                'password' => '_oHaI33u'
                  ],
            ],
//          'errorHandler'=>[
//              'errorAction'=>'site/error',
//          ],
      ],
       'modules'=>[
           'debug'=>'yii\debug\Module',
           'gii' => 'yii\gii\Module',
       ],
        ];

   return $config;