<?php

namespace Bolt\Extensions\Chaerf\CascadingSelect;

use Bolt\Asset\File\JavaScript;
use Bolt\Asset\File\Stylesheet;
use Bolt\Controller\Zone;
use Bolt\Extension\SimpleExtension;
use Bolt\Extensions\Bolt\CascadingSelect\Field\CascadingSelectField;
use Bolt\Extension\Chaerf\CascadingSelect\Provider\FieldProvider;

class CascadingSelectExtension extends SimpleExtension
{
    public function registerFields()
    {
        return [
            new CascadingSelectField(),
        ];
    }

    public function getServiceProviders()
    {
        return [
            $this,
            new FieldProvider()
        ];
    }

    protected function registerTwigPaths()
    {
        return [
            'templates/bolt' => ['position' => 'prepend', 'namespace' => 'bolt']
        ];
    }

    protected function registerAssets()
    {
        return [
            Stylesheet::create('css/cascadingselect.css')->setZone(Zone::BACKEND),
            JavaScript::create('js/cascadingselect.js')->setZone(Zone::BACKEND),
            JavaScript::create('js/start.js')->setZone(Zone::BACKEND),
        ];
    }
}