<?php
declare(strict_types=1);

namespace DataSource\Categoria;

use Atlas\Mapper\RecordSet;

/**
 * @method CategoriaRecord offsetGet($offset)
 * @method CategoriaRecord appendNew(array $fields = [])
 * @method CategoriaRecord|null getOneBy(array $whereEquals)
 * @method CategoriaRecordSet getAllBy(array $whereEquals)
 * @method CategoriaRecord|null detachOneBy(array $whereEquals)
 * @method CategoriaRecordSet detachAllBy(array $whereEquals)
 * @method CategoriaRecordSet detachAll()
 * @method CategoriaRecordSet detachDeleted()
 */
class CategoriaRecordSet extends RecordSet
{
}
