<?php

class ServicePerson
{
  private $db;
  private $person;

  public function __construct(IConn $db, IPerson $person)
  {
    $this->db = $db->connect();
    $this->person = $person;
  }

  public function getList()
  {
    $query = "select * from `user`";
    $stmt = $this->db->prepare($query);
    $stmt->execute();

    return $stmt->fetchAll(\PDO::FETCH_ASSOC);
  }

  public function getFind($id)
  {
    $query = "select * from `user` where `id` = :id";
    $stmt = $this->db->prepare($query);
    $stmt->bindValue(":id", $id);
    $stmt->execute();

    return $stmt->fetch(\PDO::FETCH_ASSOC); 
  }

  public function saveData()
  {
    $query = "insert into `user` (`name`) values (:name)";
    $stmt = $this->db->prepare($query);
    $stmt->bindValue(":name", $this->person->getName());
    $stmt->execute();

    return $this->db->lastInsertId(); 
  }

  public function updateData()
  {
    $query = "update `user` set `name` = :name where `id` = :id";
    $stmt = $this->db->prepare($query);
    $stmt->bindValue(":name", $this->person->getName());
    $stmt->bindValue(":id", $this->person->getId());
    $ret = $stmt->execute();

    return $ret;
  }

  public function deleteData(int $id)
  {
    $query = "delete from `user` where `id` = :id";
    $stmt = $this->db->prepare($query);
    $stmt->bindValue(":id", $id);
    $ret = $stmt->execute();

    return $ret;
  }

}