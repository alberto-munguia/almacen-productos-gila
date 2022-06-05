<?php

use Slim\App;

return function (App $app) {
    $container = $app->getContainer();

    $container['atlas'] = function ($container) {
        $args         = $container['settings']['atlas']['pdo'];
        $atlasBuilder = new \Atlas\Orm\AtlasBuilder(...$args);

        $atlasBuilder->setFactory(function ($class) use ($container) {
            if ($container->has($class)) {
                return $container->get($class);
            }

            return new $class();
        });

        return $atlasBuilder->newAtlas();
    };
};