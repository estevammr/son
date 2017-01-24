<?php 

namespace Source;

class Conn implements IConn
{
  private $dsn;
  private $user;
  private $password;

  public function __construct($dsn, $user, $password)
  {
    $this->dsn = $dsn;
    $this->user = $user;
    $this->password = $password;
  }
  public function connect()
  {
    return new \PDO($this->dsn, $this->user, $this->password);
  }
} 
