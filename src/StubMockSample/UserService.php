<?php

declare(strict_types=1);

namespace App\StubMockSample;

class UserService
{
    private $userDatabaseClient;

    public function __construct(UserDatabaseClient $userDatabaseClient)
    {
        $this->userDatabaseClient = $userDatabaseClient;
    }

    public function getInfo(): string
    {
        $info = $this->userDatabaseClient->connectInfo();
        $result = '';
        foreach ($info as $key => $value) {
            $result .= "{$key}: {$value},";
        }

        return $result;
    }

    public function register(array $param): array
    {
        $name = $param['name'];
        $email = $param['email'];

        return $this->userDatabaseClient->register($name, $email);
    }
}
