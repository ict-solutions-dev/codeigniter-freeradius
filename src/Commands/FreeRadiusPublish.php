<?php

declare(strict_types=1);

namespace IctSolutions\CodeIgniterFreeRadius\Commands;

use CodeIgniter\CLI\BaseCommand;
use CodeIgniter\CLI\CLI;
use CodeIgniter\Publisher\Publisher;
use Throwable;

class FreeRadiusPublish extends BaseCommand
{
    protected $group       = 'FreeRadius';
    protected $name        = 'freeradius:publish';
    protected $description = 'Publish FreeRadius config file into the current application.';

    public function run(array $params): void
    {
        $source = service('autoloader')->getNamespace('IctSolutions\\CodeIgniterFreeRadius')[0];

        $publisher = new Publisher($source, APPPATH);

        try {
            $publisher->addPaths([
                'Config/FreeRadius.php',
            ])->merge(false);
        } catch (Throwable $e) {
            $this->showError($e);

            return;
        }

        foreach ($publisher->getPublished() as $file) {
            $contents = file_get_contents($file);
            $contents = str_replace('namespace IctSolutions\\CodeIgniterFreeRadius\\Config', 'namespace Config', $contents);
            $contents = str_replace('use CodeIgniter\\Config\\BaseConfig', 'use IctSolutions\\CodeIgniterFreeRadius\\Config\\FreeRadius as BaseFreeRadius', $contents);
            $contents = str_replace('class FreeRadius extends BaseConfig', 'class FreeRadius extends BaseFreeRadius', $contents);

            file_put_contents($file, $contents);
        }

        CLI::write(CLI::color('  Published! ', 'green') . 'You can customize the configuration by editing the "app/Config/FreeRadius.php" file.');
    }
}
