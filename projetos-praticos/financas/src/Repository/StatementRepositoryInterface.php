<?php
/**
 * Created by PhpStorm.
 * User: Natália
 * Date: 17/09/2017
 * Time: 16:13
 */

namespace EstevamFin\Repository;


interface StatementRepositoryInterface
{
    public function all(string $dateStart, string $dateEnd, int $userId): array;
}
