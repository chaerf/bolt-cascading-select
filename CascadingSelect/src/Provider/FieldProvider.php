<?php

namespace Bolt\Extension\Chaerf\CascadingSelect\Provider;

use Bolt\Extension\Chaerf\CascadingSelect\Field\CascadingSelectFieldType;
use Bolt\Storage\FieldManager;
use Silex\Application;
use Silex\ServiceProviderInterface;

class FieldProvider implements ServiceProviderInterface
{
    public function register(Application $app)
    {
        $app['storage.typemap'] = array_merge(
            $app['storage.typemap'],
            [
                'cascadingselect' => CascadingSelectFieldType::class
            ]
        );

        $app['storage.field_manager'] = $app->share(
            $app->extend(
                'storage.field_manager',
                function (FieldManager $manager) {
                    $manager->addFieldType('url', new CascadingSelectFieldType());

                    return $manager;
                }
            )
        );

    }

    public function boot(Application $app)
    {
    }
}