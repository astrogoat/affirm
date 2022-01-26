<?php

use Spatie\LaravelSettings\Migrations\SettingsMigration;

class CreateAffirmSettings extends SettingsMigration
{
    public function up(): void
    {
        $this->migrator->add('affirm.enabled', false);
        $this->migrator->add('affirm.url', 'https://cdn1.affirm.com/js/v2/affirm.js');
        $this->migrator->addEncrypted('affirm.public_key', '');
    }

    public function down()
    {
        $this->migrator->delete('affirm.enabled');
        $this->migrator->delete('affirm.url');
        $this->migrator->delete('affirm.public_key');
    }
}
