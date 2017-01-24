<?php 

class User 
{

  private $id;
  private $name;
  private $email;
  private $table = "user";

    public function getTable()
    {
        return $this->table;
    }

    public function getId()
    {
        return $this->id;
    }

    public function _setId($id)
    {
        $this->id = $id;

        return $this;
    }

    public function getName()
    {
        return $this->name;
    }

    public function _setName($name)
    {
        $this->name = $name;

        return $this;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function _setEmail($email)
    {
        $this->email = $email;

        return $this;
    }
}

?>