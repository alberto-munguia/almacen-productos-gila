<?php
declare(strict_types=1);

namespace DataSource\Categoria;

use Atlas\Mapper\Record;

/**
 * @method CategoriaRow getRow()
 */
class CategoriaRecord extends Record
{
    use CategoriaFields;
}
