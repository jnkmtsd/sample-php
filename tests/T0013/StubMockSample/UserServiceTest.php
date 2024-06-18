<?php

declare(strict_types=1);

namespace Test\T0013\StubMockSample;

use App\T0013\StubMockSample\UserDatabaseClient;
use PHPUnit\Framework\TestCase;
use App\T0013\StubMockSample\UserService;

final class UserServiceTest extends TestCase
{
    public function test_getInfo()
    {
        // スタブ
        $expected = 'dbms: mysql,host: localhost,dbname: test,charset: utf8,';
        $userDatabaseClient = $this->createStub(UserDatabaseClient::class);
        $userDatabaseClient->method('connectInfo')
            ->willReturn([
                'dbms' => 'mysql',
                'host' => 'localhost',
                'dbname' => 'test',
                'charset' => 'utf8',
            ]);

        $userService = new UserService($userDatabaseClient);
        $actual = $userService->getInfo();

        $this->assertSame($expected, $actual);
    }

    public function test_register()
    {
        // モック
        $param = [
            'name' => 'Test User',
            'email' => 'testuser@example.com'
        ];
        $expected = [
            'id' => 'A123',
            'name' => $param['name'],
            'email' => $param['email'],
        ];
        $userDatabaseClient = $this->createMock(UserDatabaseClient::class);
        $userDatabaseClient->expects($this->once())
            ->method('register')
            ->with($param['name'], $param['email'])
            ->willReturn($expected);

        $userService = new UserService($userDatabaseClient);
        $actual = $userService->register($param);
        $this->assertSame($expected, $actual);
    }
}
