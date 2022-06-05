<?php
declare(strict_types=1);

namespace DataSource\Producto;

use Atlas\Mapper\RecordSet;

/**
 * @method ProductoRecord offsetGet($offset)
 * @method ProductoRecord appendNew(array $fields = [])
 * @method ProductoRecord|null getOneBy(array $whereEquals)
 * @method ProductoRecordSet getAllBy(array $whereEquals)
 * @method ProductoRecord|null detachOneBy(array $whereEquals)
 * @method ProductoRecordSet detachAllBy(array $whereEquals)
 * @method ProductoRecordSet detachAll()
 * @method ProductoRecordSet detachDeleted()
 */
class ProductoRecordSet extends RecordSet
{
}
