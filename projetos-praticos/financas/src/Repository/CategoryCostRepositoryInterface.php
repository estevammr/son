<?php
/**
 * Created by PhpStorm.
 * User: Natália
 * Date: 17/09/2017
 * Time: 16:41
 */
declare(strict_types = 1);
namespace EstevamFin\Repository;


interface CategoryCostRepositoryInterface extends RepositoryInterface
{
    public function sumByPeriod(string $dateStart, string $dateEnd, int $userId): array;
}
