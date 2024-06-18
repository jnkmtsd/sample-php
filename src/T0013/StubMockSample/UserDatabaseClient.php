<?php

declare(strict_types=1);

namespace App\T0013\StubMockSample;

class UserDatabaseClient
{
    public function connectInfo(): array
    {
        // 本来は動的
        return [
            'dbms' => 'mysql',
            'host' => 'localhost',
            'dbname' => 'test',
            'charset' => 'utf8',
        ];
    }

    public function register(string $name, string $email): array
    {
        // 本来はデータベースにデータを登録する処理が入る
        return [
            'id' => 'A123',
            'name' => $name,
            'email' => $email,
        ];
    }
}
