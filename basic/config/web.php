<?php

$params = require __DIR__ . '/params.php';
$db = require __DIR__ . '/db.php';

$config = [
    'id' => 'basic',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
    'aliases' => [
        '@bower' => '@vendor/bower-asset',
        '@npm'   => '@vendor/npm-asset',
    ],
    'components' => [
        'request' => [
            // !!! insert a secret key in the following (if it is empty) - this is required by cookie validation
            'cookieValidationKey' => '1O5WYPiQ-_hNU7WEP_npHD1OfmJ2JyW8',
        ],
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        'user' => [
            'identityClass' => 'app\models\User',
            'enableAutoLogin' => true,
        ],
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
        'mailer' => [
            'class' => \yii\symfonymailer\Mailer::class,
            'viewPath' => '@app/mail',
            // send all mails to a file by default.
            'useFileTransport' => true,
        ],
        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
        'db' => $db,
        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'rules' => [
                '' => 'site/index',
                'dashboard' => 'dashboard/index',
                'jobdesk' => 'jobdesk/index',
                'employee/allemployee' => 'employee/allemployee',
                'employee/apointment' => 'employee/apointment',
                'leave/status' => 'leave/status',
                'leave/request' => 'leave/request',
                'leave/calendar' => 'leave/calendar',
                'leave/summary' => 'leave/summary',
                'attendance/dailylog' => 'attendance/dailylog',
                'attendance/request' => 'attendance/request',
                'attendance/detail' => 'attendance/detail',
                'attendance/summary' => 'attendance/summary',
                'administration/role' => 'administration/role',
                'administration/shift' => 'administration/shift',
                'administration/department' => 'administration/department',
                'administration/holiday' => 'administration/holiday',
                'administration/announcement' => 'administration/announcement',
                'setting/general' => 'setting/general',
                'setting/leave' => 'setting/leave',
                'setting/attendance' => 'setting/attendance',
                'setting/payroll' => 'setting/payroll',
                'setting/import' => 'setting/import',
            ],
        ],
    ],
    'params' => $params,
];

if (YII_ENV_DEV) {
    // configuration adjustments for 'dev' environment
    $config['bootstrap'][] = 'debug';
    $config['modules']['debug'] = [
        'class' => 'yii\debug\Module',
        // uncomment the following to add your IP if you are not connecting from localhost.
        //'allowedIPs' => ['127.0.0.1', '::1'],
    ];

    $config['bootstrap'][] = 'gii';
    $config['modules']['gii'] = [
        'class' => 'yii\gii\Module',
        // uncomment the following to add your IP if you are not connecting from localhost.
        //'allowedIPs' => ['127.0.0.1', '::1'],
    ];
}

return $config;
