<?php  

namespace Source;

class ServiceProduct implements IServiceProduct
{

  private $db;
  private $product;

  public function __construct(IConn $db, IProduct $product)
  {
    $this->db = $db->connect();
    $this->product = $product;
  }

  public function list()
  {
    $stmt = $this->db->prepare("SELECT * FROM products");
    $stmt->execute();
    return $stmt->fetchAll(\PDO::FETCH_ASSOC);
  }
  
  public function save() : int
  {
    $stmt = $this->db->prepare("INSERT INTO `products` (`name`, `desc`) VALUES (:name, :desc)");
    $stmt->bindValue(':name', $this->product->getName());
    $stmt->bindValue(':desc', $this->product->getDesc());
    $stmt->execute();
    return $this->db->lastInsertId();
  }

  public function update()
  {
    $query = "UPDATE `products` SET `name` = :name, `desc` = :desc WHERE `id` = :id";
    $stmt = $this->db->prepare($query);
    $stmt->bindValue(':id', $this->product->getId());
    $stmt->bindValue(':name', $this->product->getName());
    $stmt->bindValue(':desc', $this->product->getDesc());
    return $stmt->execute();
  }
  
  public function delete()
  {
    $query = "DELETE FROM `products` WHERE `id` = :id";
    $stmt = $this->db->prepare($query);
    $stmt->bindValue(':id', $this->product->getId());
    return $stmt->execute();
  }

}
