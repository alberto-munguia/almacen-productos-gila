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
        $productos = $this->atlas
            ->select(Producto::class)
            ->whereEquals(['estado' => 1])
            ->fetchRecordSet();

        return $response->withJson($productos);
    });

    $app->post('/create-product', function (Request $request, Response $response) {
        $params  = $request->getParsedBody();
        $code    = 0;
        $message = 'Ha habido un error al intentar crear el producto';

        $productoObj = $this->atlas->newRecord(Producto::class, [
            'sku'      => $params['sku'],
            'nombre'   => $params['nombre'],
            'marca'    => $params['marca'],
            'precio'   => $params['precio'],
            'created'  => date('Y-m-d H:i:s'),
            'modified' => date('Y-m-d H:i:s'),
        ]);

        try {
            $this->atlas->insert($productoObj);
        } catch (\Throwable $th) {
            echo $th->getMessage();
        }

        if (!empty($productoObj->id)) {
            $code = 1;
            $message = 'Producto creado';
        }

        return $response->withJson([
            'code'    => (int) $code,
            'message' => $message,
        ]);
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
            'code'    => (int) $result,
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
