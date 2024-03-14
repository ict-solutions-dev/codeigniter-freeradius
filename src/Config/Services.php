<?php

declare(strict_types=1);

namespace IctSolutions\CodeIgniterFreeRadius\Config;

use CodeIgniter\Config\BaseService;
use IctSolutions\CodeIgniterFreeRadius\FreeRadius;

class Services extends BaseService
{
    /**
     * The base FreeRadius class
     */
    public static function freeradius(bool $getShared = true): FreeRadius
    {
        if ($getShared) {
            return self::getSharedInstance('freeradius');
        }

        return new FreeRadius();
    }
}
