<?php

namespace LaravelAndroid\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use LaravelAndroid\Repositories\CategoryRepository;
use LaravelAndroid\Models\Category;
use LaravelAndroid\Presenters\CategoryPresenter;

/**
 * Class CategoryRepositoryEloquent
 * @package namespace LaravelAndroid\Repositories;
 */
class CategoryRepositoryEloquent extends BaseRepository implements CategoryRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return Category::class;
    }

    

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
    
    public function presenter()
    {
    	return CategoryPresenter::class;
    }
    
    public function applyMultitenancy()
    {
    	Category::clearBootedModels();
    }
}
