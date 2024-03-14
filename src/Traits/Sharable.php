<?php

declare(strict_types=1);

namespace IctSolutions\CodeIgniterFreeRadius\Traits;

trait Sharable
{
    public function whereUsername(string $username): self
    {
        return $this->where('username', $username);
    }
}
