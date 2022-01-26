<?php

namespace Astrogoat\Affirm\Settings;

use Helix\Lego\Settings\AppSettings;

class AffirmSettings extends AppSettings
{
    public string $url;
    public string $public_key;

    protected array $rules = [
         'url' => ['required', 'url'],
         'access_token' => ['required'],
    ];

    public function description(): string
    {
        return 'Interact with Affirm.';
    }
}
