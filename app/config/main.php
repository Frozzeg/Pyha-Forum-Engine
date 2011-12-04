<?php
return array(
    'basePath' => dirname(__FILE__) . DIRECTORY_SEPARATOR . '..',
    'name' => 'Pyha.Ru',
    'preload' => array('log'),
    'import' => array(
        'application.models.*',
        'application.models.forms.*',
        'application.components.*',
        'application.components.widgets.*',
    ),
    'language' => 'ru',
    'defaultController' => 'index',
    'components' => array(
        'user' => array(
            'class' => 'WebUser',
            'loginUrl' => array('/user/login'),
            'allowAutoLogin' => true,
        ),
        'authManager' => array(
            'class' => 'PhpAuthManager',
        ),
        'db' => require(dirname(__FILE__) . '/db.php'),
        'urlManager' => array(
            'urlFormat' => 'path',
            'showScriptName' => false,
            'rules' => array(
                '<controller>/<id:[0-9]*>' => '<controller>/view',
                '<controller>/<action>' => '<controller>/<action>',
            ),
        ),
        'log' => array(
            'class' => 'CLogRouter',
            'routes' => array(
                array(
                    'class' => 'CWebLogRoute',
                    'categories' => 'application',
                    'levels' => 'error, warning, trace, profile, info',
                    'showInFireBug' => 1,
                ),
            ),
        ),
    ),
);