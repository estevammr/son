<?php

namespace LaravelAndroid\Transformers;

use League\Fractal\TransformerAbstract;
use LaravelAndroid\Models\BillPay;

/**
 * Class BillPayTransformer
 * @package namespace LaravelAndroid\Transformers;
 */
class BillPayTransformer extends TransformerAbstract
{
	protected $defaultIncludes = ['category'];
    /**
     * Transform the \BillPay entity
     * @param \BillPay $model
     *
     * @return array
     */
    public function transform(BillPay $model)
    {
        return [
            'id'         => (int) $model->id,
			'name'		 => $model->name,
        	'date_due'   => $model->date_due,
        	'value'      => (float) $model->value,
        	'done'       => (bool) $model->done,
            'created_at' => $model->created_at,
            'updated_at' => $model->updated_at
        ];
    }
    
    public function includeCategory(BillPay $model)
    {
    	return $this->item($model->category, new CategoryTransformer());
    }
}
