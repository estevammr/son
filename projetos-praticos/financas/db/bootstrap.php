<?php

use EstevamFin\Application;
use EstevamFin\Plugins\AuthPlugin;
use EstevamFin\Plugins\DbPlugin;
use EstevamFin\ServiceContainer;

$serviceContainer = new ServiceContainer();
$app = new Application($serviceContainer);

$app->plugin(new DbPlugin());
$app->plugin(new AuthPlugin());
return $app;