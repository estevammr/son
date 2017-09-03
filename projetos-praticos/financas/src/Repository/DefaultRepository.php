<?php
/**
 * Created by PhpStorm.
 * User: estev_000
 * Date: 03/09/2017
 * Time: 11:20
 */
declare(strict_types=1);
namespace EstevamFin\Repository;


class DefaultRepository implements RepositoryInterface
{

    /**
     * @var string
     */
    private $modelClass;
    /**
     * @var Model
     */
    private $model;

    /**
     * DefaultRepository constructor.
     *
     * @param string $modelClass
     */
    public function __construct(string $modelClass)
    {
        $this->modelClass = $modelClass;
        $this->model = new $modelClass;
    }

    public function all(): array
    {
        return $this->model->all()->toArray();
    }

    public function find(int $id, bool $failIfNotExist = true)
    {
        return $failIfNotExist ? $this->model->findOrFail($id) :
            $this->model->find($id);
    }

    public function create(array $data)
    {
        $this->model->fill($data);
        $this->model->save();
        return $this->model;
    }

    public function update($id, array $data)
    {
        $model = $this->find($id);
        $model->fill($data);
        $model->save();
        return $model;
    }

    public function delete($id)
    {
        $model = $this->find($id);
        $model->delete();
    }

    public function findByField(string $field, $value)
    {
        return $this->model->where($field, '=', $value)->get();
    }
}