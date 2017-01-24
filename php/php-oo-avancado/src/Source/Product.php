<?php

namespace Source;  

class Product implements IProduct
{
  private $id;
  public $name;
  public $desc;

  public function getId() : int
  {
    return $this->id;
  }

  public function setId($id)
  {
    $this->id = $id;
    return $this;
  }

  public function getName() : string
  {
    return $this->name;
  }

  public function setName($name)
  {
    $this->name = $name;
    return $this;
  }

  public function getDesc() : string
  {
    return $this->desc;
  }

  public function setDesc($desc)
  {
    $this->desc = $desc;
    return $this;
  }

}
