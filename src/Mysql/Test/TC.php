<?php
namespace Olive\UDMS\Addon\Mysql\Test;

class TC
{
    public static function Data()
    {
        return [
          'type' => 'mysql',
          'host' => 'localhost',
          'charset' => 'utf8mb4',
          'login' => [
            'username' => 'root',
            'password' => ''
          ]
        ];
    }
}
