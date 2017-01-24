<?php  

namespace Source;

interface IServiceProduct
{
  public function list();
   public function save() : int;
  public function update();
  public function delete();
}

