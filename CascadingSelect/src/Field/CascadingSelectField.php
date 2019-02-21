<?php

namespace Bolt\Extensions\Chaerf\CascadingSelect\Field;

use Bolt\Storage\Field\Type\FieldTypeBase;

class CascadingSelectField extends FieldTypeBase
{
    public function getName()
    {
        return 'cascadingselect';
    }

    public function getTemplate()
    {
        return '@bolt/_cascadingselect.twig';
    }

    public function getStorageType()
    {
        return 'text';
    }

    public function getStorageOptions()
    {
        return ['default' => ''];
    }
}