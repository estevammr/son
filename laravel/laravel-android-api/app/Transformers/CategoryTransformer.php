<?php

namespace LaravelAndroid\Transformers;

use League\Fractal\TransformerAbstract;
use LaravelAndroid\Models\Category;

/**
 * Class CategoryTransformer
 * @package namespace LaravelAndroid\Transformers;
 */
class CategoryTransformer extends TransformerAbstract
{

    /**
     * Transform the \Category entity
     * @param \Category $model
     *
     * @return array
     */
    public function transform(Category $model)
    {
        return [
            'id'         => (int) $model->id,
            'name'       => $model->name,
            'created_at' => $model->created_at,
            'updated_at' => $model->updated_at
        ];
    }
}