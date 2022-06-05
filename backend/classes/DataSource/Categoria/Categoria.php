<?php
declare(strict_types=1);

namespace DataSource\Categoria;

use Atlas\Mapper\Mapper;
use Atlas\Table\Row;

/**
 * @method CategoriaTable getTable()
 * @method CategoriaRelationships getRelationships()
 * @method CategoriaRecord|null fetchRecord($primaryVal, array $with = [])
 * @method CategoriaRecord|null fetchRecordBy(array $whereEquals, array $with = [])
 * @method CategoriaRecord[] fetchRecords(array $primaryVals, array $with = [])
 * @method CategoriaRecord[] fetchRecordsBy(array $whereEquals, array $with = [])
 * @method CategoriaRecordSet fetchRecordSet(array $primaryVals, array $with = [])
 * @method CategoriaRecordSet fetchRecordSetBy(array $whereEquals, array $with = [])
 * @method CategoriaSelect select(array $whereEquals = [])
 * @method CategoriaRecord newRecord(array $fields = [])
 * @method CategoriaRecord[] newRecords(array $fieldSets)
 * @method CategoriaRecordSet newRecordSet(array $records = [])
 * @method CategoriaRecord turnRowIntoRecord(Row $row, array $with = [])
 * @method CategoriaRecord[] turnRowsIntoRecords(array $rows, array $with = [])
 */
class Categoria extends Mapper
{
}
