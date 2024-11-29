<?php

declare(strict_types=1);

namespace App\Modules\Sanctum;

class SanctumAuthorizeRequest
{
    private string $email;
    private string $password;
    private string $device;

    public function __construct(
        string $email,
        string $password,
        string $device,
    ) {
        $this->email = $email;
        $this->password = $password;
        $this->device = $device;
    }

    public function GetEmail(): string
    {
        return $this->email;
    }

    public function GetPassword(): string
    {
        return $this->password;
    }

    public function GetDevice(): string
    {
        return $this->device;
    }
}
