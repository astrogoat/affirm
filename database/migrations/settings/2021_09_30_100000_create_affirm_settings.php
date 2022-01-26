<?php

use Spatie\LaravelSettings\Migrations\SettingsMigration;

class CreateAffirmSettings extends SettingsMigration
{
    public function up(): void
    {
        $this->migrator->add('affirm.enabled', false);
        // $this->migrator->add('affirm.url', '');
        // $this->migrator->addEncrypted('affirm.access_token', '');
    }

    public function down()
    {
        $this->migrator->delete('affirm.enabled');
        // $this->migrator->delete('affirm.url');
        // $this->migrator->delete('affirm.access_token');
    }
}
