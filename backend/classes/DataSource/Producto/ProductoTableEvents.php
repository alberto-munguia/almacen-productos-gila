<?php
declare(strict_types=1);

namespace DataSource\Producto;

use Atlas\Query\Delete;
use Atlas\Query\Insert;
use Atlas\Query\Select;
use Atlas\Query\Update;
use Atlas\Table\Row;
use Atlas\Table\Table;
use Atlas\Table\TableEvents;
use PDOStatement;

class ProductoTableEvents extends TableEvents
{
}
