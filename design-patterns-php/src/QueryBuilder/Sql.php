<?php

namespace SON\Db\QueryBuilder;

class Sql implements Strategy
{
    public function table(string $table) : Strategy
    {
        $this->table = $table;
        return $this;
    }
    public function select($columns = '*') : Strategy 
    {
        $this->sql = sprintf('SELECT * FROM %s;', $this->table);
        return $this;
    }
    public function getQuery() : string
    {
        return $this->sql;
    }
}