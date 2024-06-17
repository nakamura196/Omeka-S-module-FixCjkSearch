<?php declare(strict_types=1);

namespace FixCjkSearch;

use Omeka\Module\AbstractModule;

class Module extends AbstractModule
{

    public function getConfig()
    {
        return require __DIR__ . '/config/module.config.php';
    }
}