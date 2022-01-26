<?php

namespace Astrogoat\Affirm\Settings;

use Astrogoat\Affirm\Actions\AffirmAction;
use Helix\Lego\Settings\AppSettings;

class AffirmSettings extends AppSettings
{
    // public string $url;
    // public string $access_token;

    protected array $rules = [
        // 'url' => ['required', 'url'],
        // 'access_token' => ['required'],
    ];

    protected static array $actions = [
        // AffirmAction::class,
    ];

    // public static function encrypted(): array
    // {
    //     return ['access_token'];
    // }

    public function description(): string
    {
        return 'Interact with Affirm.';
    }
}
