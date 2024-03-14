<?php

declare(strict_types=1);

namespace Tests\Support;

use CodeIgniter\Test\DatabaseTestTrait;
use IctSolutions\CodeIgniterFreeRadius\Config\FreeRadius;

/**
 * @internal
 */
abstract class DatabaseTestCase extends TestCase
{
    use DatabaseTestTrait;

    protected $namespace = '\IctSolutions\CodeIgniterFreeRadius';

    /**
     * Auth Table names
     */
    protected array $tables;

    protected function setUp(): void
    {
        parent::setUp();

        /** @var FreeRadius $freeRadiusConfig */
        $freeRadiusConfig = config('FreeRadius');
        $this->tables     = $freeRadiusConfig->tables;
    }

    protected function tearDown(): void
    {
        parent::tearDown();
    }
}
