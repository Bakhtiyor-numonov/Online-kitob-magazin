<?php

declare(strict_types=1);

namespace App\Component\User;

use Symfony\Component\Serializer\Annotation\Groups;

class FullNameDto
{
    public function __construct(
        #[Groups(['user:write','user:read'])]
        private string $givenName,

        #[Groups(['user:write','user:read'])]
        private string $famlyName,

        #[Groups(['user:write'])]
        private int $age
    ) {
    }

    public function getGivenName(): string
    {
        return $this->givenName;
    }

    public function getFamlyName(): string
    {
        return $this->famlyName;
    }

    public function getAge(): int
    {
        return $this->age;
    }
}