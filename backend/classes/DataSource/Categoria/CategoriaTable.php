<?php
/**
 * This file was generated by Atlas. Changes will be overwritten.
 */
declare(strict_types=1);

namespace DataSource\Categoria;

use Atlas\Table\Table;

/**
 * @method CategoriaRow|null fetchRow($primaryVal)
 * @method CategoriaRow[] fetchRows(array $primaryVals)
 * @method CategoriaTableSelect select(array $whereEquals = [])
 * @method CategoriaRow newRow(array $cols = [])
 * @method CategoriaRow newSelectedRow(array $cols)
 */
class CategoriaTable extends Table
{
    const DRIVER = 'mysql';

    const NAME = 'categorias';

    const COLUMNS = [
        'id' => [
            'name' => 'id',
            'type' => 'int unsigned',
            'size' => 10,
            'scale' => 0,
            'notnull' => true,
            'default' => null,
            'autoinc' => true,
            'primary' => true,
            'options' => null,
        ],
        'nombre' => [
            'name' => 'nombre',
            'type' => 'varchar',
            'size' => 50,
            'scale' => null,
            'notnull' => true,
            'default' => null,
            'autoinc' => false,
            'primary' => false,
            'options' => null,
        ],
        'created' => [
            'name' => 'created',
            'type' => 'datetime',
            'size' => null,
            'scale' => null,
            'notnull' => true,
            'default' => null,
            'autoinc' => false,
            'primary' => false,
            'options' => null,
        ],
        'modified' => [
            'name' => 'modified',
            'type' => 'datetime',
            'size' => null,
            'scale' => null,
            'notnull' => true,
            'default' => null,
            'autoinc' => false,
            'primary' => false,
            'options' => null,
        ],
        'estado' => [
            'name' => 'estado',
            'type' => 'tinyint',
            'size' => 3,
            'scale' => 0,
            'notnull' => true,
            'default' => 1,
            'autoinc' => false,
            'primary' => false,
            'options' => null,
        ],
    ];

    const COLUMN_NAMES = [
        'id',
        'nombre',
        'created',
        'modified',
        'estado',
    ];

    const COLUMN_DEFAULTS = [
        'id' => null,
        'nombre' => null,
        'created' => null,
        'modified' => null,
        'estado' => 1,
    ];

    const PRIMARY_KEY = [
        'id',
    ];

    const AUTOINC_COLUMN = 'id';

    const AUTOINC_SEQUENCE = null;
}
