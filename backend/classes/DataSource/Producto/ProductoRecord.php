<?php
declare(strict_types=1);

namespace DataSource\Producto;

use Atlas\Mapper\Record;

/**
 * @method ProductoRow getRow()
 */
class ProductoRecord extends Record
{
    use ProductoFields;
}
