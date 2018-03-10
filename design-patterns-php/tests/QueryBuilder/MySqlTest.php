<?php

namespace SON\Db\QueryBuilder;

class MySqlTest extends \PHPUnit_Framework_TestCase
{
    public function testSelectQuery()
    {
        $sql = new MySql();

        $query = $sql->table('users')
            ->select()
            ->getQuery();

            $this->assertEquals('SELECT * FROM `users`;', $query);
    }

    public function testSelectQueryWithColumns()
    {
        $sql = new MySql();

        $query = $sql->table('users')
            ->select('login, password')
            ->getQuery();

            $this->assertEquals('SELECT `login`, `password` FROM `users`;', $query);
    }

    public function testSelectQueryWithColumnsArray()
    {
        $sql = new MySql();

        $query = $sql->table('users')
            ->select(['login', 'password'])
            ->getQuery();

            $this->assertEquals('SELECT `login`, `password` FROM `users`;', $query);
    }
}