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

    $app->delete('/delete-product/{id}', function (Request $request, Response $response, $args) {
        $id          = $args['id'];
        $result      = false;;
        $productoObj = $this->atlas
            ->select(Producto::class)
            ->whereEquals(['id' => $id])
            ->fetchRecord();

        if ($productoObj) {
            $productoObj->modified = date('Y-m-d H:i:s');
            $productoObj->estado   = 0;

            try {
                $this->atlas->update($productoObj);
                $result = true;
            } catch (\Throwable $th) {
                echo $th->getMessage();
            }
        }

        return $response->withJson([
            'code'    => $result,
            'message' => $result
                ? 'Producto eliminado'
                : 'Ha habido un error al intentar eliminar el producto',
        ]); 
    });

    $app->map(
        ['GET', 'POST', 'PUT', 'DELETE', 'PATCH'],
        '/{routes:.+}',
        function(Request $request, Response $response) {
            $handler = $this->notFoundHandler; // handle using the default Slim page not found handler
            return $handler($req, $res);
        }
    );
};
