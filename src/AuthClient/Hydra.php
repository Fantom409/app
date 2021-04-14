<?php

declare(strict_types=1);

namespace App\AuthClient;

use Yiisoft\Yii\AuthClient\OAuth2;

class Hydra extends OAuth2
{
    protected string $tokenUrl = 'https://127.0.0.1:4444/oauth2/token';
    protected string $authUrl = 'http://127.0.0.1:4444/oauth2/auth';

    protected function initUserAttributes(): array
    {
        return [];
    }

    public function getName(): string
    {
        return 'hydra';
    }

    public function getTitle(): string
    {
       return 'Hydra';
    }
}