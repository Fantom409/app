<?php

declare(strict_types=1);

use App\AuthClient\Hydra;
use Yiisoft\Yii\AuthClient\Client\GitHub;
use Yiisoft\Yii\AuthClient\Client\Google;

return [
    Google::class => [
        'setClientId()' => [
            'clientId' => '607621440059-691v7ooec7l96pihusu5jfmevl0g8vga.apps.googleusercontent.com'
        ],
        'setClientSecret()' => [
            'clientSecret' => 'R0YYd5j1dgTlxtI5YQVcDsPI'
        ]
    ],
    GitHub::class => [
        'setClientId()' => [
            'clientId' => 'eb063b1009b3141492ad'
        ],
        'setClientSecret()' => [
            'clientSecret' => 'aa8e5a6b122335427af3c588abae967d71f94599'
        ]
    ],
    Hydra::class => [
        'setClientId()' => [
            'clientId' => 'my-client'
        ],
        'setClientSecret()' => [
            'clientSecret' => 'my-client'
        ]
    ]
];
