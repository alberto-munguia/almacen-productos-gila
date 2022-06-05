<?php
use Slim\App;
use Atlas\Orm\Atlas;
use Psr\Http\Message\{
    ServerRequestInterface as Request,
    ResponseInterface as Response
};
use DataSource\Producto\Producto;

return function (App $app) {
    // Define app routes
    $app->get('/fetch-all', function (Request $request, Response $response) {
        $productos = $this->atlas->select(Producto::class)->fetchRecordSet();

        return $response->withJson($productos);
    });

    $app->post('/create-product', function (Request $request, Response $response) {
        $params = $request->getParsedBody();

        echo '<pre>';
        print_r($params);
        echo '</pre>';
        
        return $response->withJson([]);
    });

    $app->put('/update-product', function (Request $request, Response $response) {});

    $app->delete('/delete-product/{id}', function (Request $request, Response $response) {});

    $app->map(
        ['GET', 'POST', 'PUT', 'DELETE', 'PATCH'],
        '/{routes:.+}',
        function(Request $request, Response $response) {
            $handler = $this->notFoundHandler; // handle using the default Slim page not found handler
            return $handler($req, $res);
        }
    );
};
