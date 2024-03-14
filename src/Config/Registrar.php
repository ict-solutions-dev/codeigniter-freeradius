<?php

declare(strict_types=1);

namespace IctSolutions\CodeIgniterFreeRadius\Config;

class Registrar
{
    public static function Database()
    {
        return [
            'radius' => [
                'DSN'          => '',
                'hostname'     => 'localhost',
                'username'     => '',
                'password'     => '',
                'database'     => '',
                'DBDriver'     => 'MySQLi',
                'DBPrefix'     => '',
                'pConnect'     => false,
                'DBDebug'      => true,
                'charset'      => 'utf8',
                'DBCollat'     => 'utf8_general_ci',
                'swapPre'      => '',
                'encrypt'      => false,
                'compress'     => false,
                'strictOn'     => false,
                'failover'     => [],
                'port'         => 3306,
                'numberNative' => false,
            ],
        ];
    }
}
