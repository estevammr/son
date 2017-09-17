<?php
/**
 * Created by PhpStorm.
 * User: estev_000
 * Date: 03/09/2017
 * Time: 11:19
 */
declare(strict_types = 1);
namespace EstevamFin\Repository;


interface RepositoryInterface
{
    public function all(): array;
    public function find(int $id, bool $failIfNotExist = true);
    public function create(array $data);
    public function update($id, array $data);
    public function delete($id);
    public function findByField(string $field,$value);
}
