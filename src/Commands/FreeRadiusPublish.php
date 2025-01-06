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
    protected $description = 'Publish FreeRadius configuration file and update Database configuration file.';

    public function run(array $params)
    {
        $this->publishConfig();
        $this->updateDatabaseConfig();

        CLI::write(CLI::color('  Published! ', 'green') . 'You can customize the configurations in app/Config/ directory.');
    }

    private function publishConfig()
    {
        $source     = service('autoloader')->getNamespace('IctSolutions\\CodeIgniterFreeRadius')[0];
        $publisher  = new Publisher($source, APPPATH);
        $configPath = APPPATH . 'Config/FreeRadius.php';

        if (file_exists($configPath)) {
            CLI::write(CLI::color('  Skipped: ', 'yellow') . 'FreeRadius config file already exists.');

            return;
        }

        try {
            $publisher->addPaths([
                'Config/FreeRadius.php',
            ])->merge(false);

            foreach ($publisher->getPublished() as $file) {
                $contents = file_get_contents($file);
                $contents = str_replace('namespace IctSolutions\\CodeIgniterFreeRadius\\Config', 'namespace Config', $contents);
                $contents = str_replace('use CodeIgniter\\Config\\BaseConfig', 'use IctSolutions\\CodeIgniterFreeRadius\\Config\\FreeRadius as BaseFreeRadius', $contents);
                $contents = str_replace('class FreeRadius extends BaseConfig', 'class FreeRadius extends BaseFreeRadius', $contents);
                file_put_contents($file, $contents);
            }
        } catch (Throwable $e) {
            $this->showError($e);

            return;
        }
    }

    private function updateDatabaseConfig()
    {
        $databaseConfig = APPPATH . 'Config/Database.php';

        try {
            $contents = file_get_contents($databaseConfig);

            if (str_contains($contents, 'radius =')) {
                CLI::write(CLI::color('  Skipped: ', 'yellow') . 'Radius database group already exists.');

                return;
            }

            $constructPos = strpos($contents, 'public function __construct');
            if ($constructPos === false) {
                CLI::write(CLI::color('  Error: ', 'red') . 'Could not find __construct() in Database.php');

                return;
            }

            $lineStart = strrpos(substr($contents, 0, $constructPos), "\n") + 1;

            $radiusConfig = "    /**\n";
            $radiusConfig .= "     * The RADIUS database connection.\n";
            $radiusConfig .= "     *\n";
            $radiusConfig .= "     * @var array<string, mixed>\n";
            $radiusConfig .= "     */\n";
            $radiusConfig .= "    public array \$radius = [\n";
            $radiusConfig .= "        'DSN'          => '',\n";
            $radiusConfig .= "        'hostname'     => 'localhost',\n";
            $radiusConfig .= "        'username'     => 'radius',\n";
            $radiusConfig .= "        'password'     => 'radius',\n";
            $radiusConfig .= "        'database'     => 'radius',\n";
            $radiusConfig .= "        'DBDriver'     => 'MySQLi',\n";
            $radiusConfig .= "        'DBPrefix'     => '',\n";
            $radiusConfig .= "        'pConnect'     => false,\n";
            $radiusConfig .= "        'DBDebug'      => true,\n";
            $radiusConfig .= "        'charset'      => 'utf8',\n";
            $radiusConfig .= "        'DBCollat'     => 'utf8_general_ci',\n";
            $radiusConfig .= "        'swapPre'      => '',\n";
            $radiusConfig .= "        'encrypt'      => false,\n";
            $radiusConfig .= "        'compress'     => false,\n";
            $radiusConfig .= "        'strictOn'     => false,\n";
            $radiusConfig .= "        'failover'     => [],\n";
            $radiusConfig .= "        'port'         => 3306,\n";
            $radiusConfig .= "        'numberNative' => false,\n";
            $radiusConfig .= "    ];\n\n";

            $contents = substr_replace($contents, $radiusConfig, $lineStart, 0);
            file_put_contents($databaseConfig, $contents);

            CLI::write(CLI::color('  Added: ', 'green') . 'Radius database group to Database config.');
        } catch (Throwable $e) {
            $this->showError($e);

            return;
        }
    }
}
