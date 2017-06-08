<?php

/**
 * Created by PhpStorm.
 * User: estev_000
 * Date: 05/06/2017
 * Time: 21:29
 */

use Doctrine\ORM\EntityRepository;

class CategoryRepository extends EntityRepository
{
    public function listar()
    {
        $categories = $this->getEntityManager()->createQueryBuilder();
        $categories->select('categoria')
            ->from('App\Entity\Category', 'categoria')
            ->groupBy('categoria.name');
        return $categories->getQuery()->getResult();
    }
}