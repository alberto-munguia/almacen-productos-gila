<?php
/**
 * This file was generated by Atlas. Changes will be overwritten.
 */
declare(strict_types=1);

namespace DataSource\Categoria;

use Atlas\Table\Row;

/**
 * @property mixed $id int(10,0) unsigned NOT NULL
 * @property mixed $nombre varchar(50) NOT NULL
 * @property mixed $created datetime NOT NULL
 * @property mixed $modified datetime NOT NULL
 * @property mixed $estado tinyint(3,0) NOT NULL
 */
class CategoriaRow extends Row
{
    protected $cols = [
        'id' => null,
        'nombre' => null,
        'created' => null,
        'modified' => null,
        'estado' => 1,
    ];
}
