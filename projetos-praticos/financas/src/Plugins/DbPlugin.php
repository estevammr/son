<?php
/**
 * Created by PhpStorm.
 * User: estev_000
 * Date: 03/09/2017
 * Time: 09:54
 */
declare(strict_types=1);
namespace EstevamFin\Plugins;

use EstevamFin\Models\CategoryCost;
use EstevamFin\Models\User;
use EstevamFin\Repository\RepositoryFactory;
use EstevamFin\ServiceContainerInterface;
use Illuminate\Database\Capsule\Manager as Capsule;
use Interop\Container\ContainerInterface;

class DbPlugin implements PluginInterface
{
    public function register(ServiceContainerInterface $container)
    {
        $capsule = new Capsule();
        $config = include __DIR__ . '/../../config/db.php';
        $capsule->addConnection($config['development']);
        $capsule->bootEloquent();

        $container->add('repository.factory', new RepositoryFactory());
        $container->addLazy('category-cost.repository', function (ContainerInterface $container) {
            return $container->get('repository.factory')->factory(CategoryCost::class);
        });

        $container->addLazy('user.repository', function (ContainerInterface $container) {
            return $container->get('repository.factory')->factory(User::class);
        });
    }
}