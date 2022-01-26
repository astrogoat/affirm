<?php

namespace Astrogoat\Affirm\Settings;

use Astrogoat\Affirm\Actions\AffirmAction;
use Helix\Lego\Settings\AppSettings;

class AffirmSettings extends AppSettings
{
     public string $url;
     public string $public_key;

    protected array $rules = [
         'url' => ['required', 'url'],
         'public_key' => ['required'],
    ];

    public function description(): string
    {
        return 'Interact with Affirm.';
    }
}
