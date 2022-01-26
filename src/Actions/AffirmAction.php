<?php

namespace Astrogoat\Affirm\Actions;

use Helix\Lego\Apps\Actions\Action;

class AffirmAction extends Action
{
    public static function actionName(): string
    {
        return 'Affirm action name';
    }

    public static function run(): mixed
    {
        return redirect()->back();
    }
}
