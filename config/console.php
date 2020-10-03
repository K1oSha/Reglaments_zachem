<?php


return [
    'id'=>'finance-console',
    'basePath'=> dirname(__DIR__),
    'components'=>[
        'db'=> require (__DIR__. '/db.php'),
        'authManager' => [
            'class' => 'yii\rbac\DbManager',
        ]

    ]

];