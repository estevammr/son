<?php

namespace LaravelAndroid\Repositories;

use Prettus\Repository\Contracts\RepositoryInterface;

/**
 * Interface BillPayRepository
 * @package namespace LaravelAndroid\Repositories;
 */
interface BillPayRepository extends RepositoryInterface, RepositoryMultitenancyInterface
{
    public function calculateTotal();
}
