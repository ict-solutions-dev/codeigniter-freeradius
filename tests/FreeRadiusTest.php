<?php

namespace Tests;

use IctSolutions\CodeIgniterFreeRadius\FreeRadius;
use InvalidArgumentException;
use Tests\Support\TestCase;

/**
 * @internal
 */
final class FreeRadiusTest extends TestCase
{
    public function testReturnsServiceByDefault()
    {
        $this->assertInstanceOf(FreeRadius::class, service('freeradius'));
    }

    public function testUsernameLength()
    {
        $username = service('freeradius')->username();

        $this->assertLessThanOrEqual(setting('FreeRadius.usernameLength') + 1, strlen((string) $username));
    }

    public function testPasswordLength()
    {
        $password = service('freeradius')->password();

        $this->assertLessThanOrEqual(setting('FreeRadius.passwordLength'), strlen((string) $password));
    }

    public function testGenerateRandomStringException()
    {
        $this->expectException(InvalidArgumentException::class);

        service('freeradius')->generateRandomString('invalidType');
    }
}
