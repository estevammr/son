<?php

namespace App\Entity;

/**
 * @Entity(repositoryClass="CategoryRepository")
 * @Table(name="categories")
 */
class Category
{
  /**
   * @Id
   * @Column(type="integer")
   * @GeneratedValue(strategy="AUTO")
   */
  private $id;

   /**
   * @Column(type="string", length=200)
   */
  private $name;

  /**
   * @return mixed
   */
  public function getId()
  {
    return $this->id;
  } 

  /**
   * @return mixed
   */
  public function getName()
  {
    return $this->name;
  }

  /**
   * @param mixed $name
   * @return Category
   */
  public function setName($name)
  {
    $this->name = $name;
    return $this;
  }
}