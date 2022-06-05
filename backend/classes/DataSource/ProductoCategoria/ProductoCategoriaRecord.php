<?php
declare(strict_types=1);

namespace DataSource\ProductoCategoria;

use Atlas\Mapper\Record;

/**
 * @method ProductoCategoriaRow getRow()
 */
class ProductoCategoriaRecord extends Record
{
    use ProductoCategoriaFields;
}
