<?php

namespace acalvino4\embed;

use Craft;
use craft\base\Plugin as BasePlugin;

/**
 * Embed Implicit Default plugin
 *
 * @method static Plugin getInstance()
 * @author acalvino4
 * @copyright acalvino4
 * @license MIT
 */
class Plugin extends BasePlugin
{
    public string $schemaVersion = '1.0.0';

    // public static function config(): array
    // {
    //     return [
    //         'components' => [
    //             // Define component configs here...
    //         ],
    //     ];
    // }

    public function init(): void
    {
        parent::init();

        // Defer most setup tasks until Craft is fully initialized
        // Craft::$app->onInit(function() {
        //     $this->attachEventHandlers();
        //     // ...
        // });

        Craft::$app->view->registerTwigExtension(new Extension());
    }

    // private function attachEventHandlers(): void
    // {
    //     // Register event handlers here ...
    //     // (see https://craftcms.com/docs/4.x/extend/events.html to get started)
    // }
}
