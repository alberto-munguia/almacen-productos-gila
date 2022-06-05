<?php
declare(strict_types=1);

namespace DataSource\ProductoCategoria;

use Atlas\Mapper\Mapper;
use Atlas\Table\Row;

/**
 * @method ProductoCategoriaTable getTable()
 * @method ProductoCategoriaRelationships getRelationships()
 * @method ProductoCategoriaRecord|null fetchRecord($primaryVal, array $with = [])
 * @method ProductoCategoriaRecord|null fetchRecordBy(array $whereEquals, array $with = [])
 * @method ProductoCategoriaRecord[] fetchRecords(array $primaryVals, array $with = [])
 * @method ProductoCategoriaRecord[] fetchRecordsBy(array $whereEquals, array $with = [])
 * @method ProductoCategoriaRecordSet fetchRecordSet(array $primaryVals, array $with = [])
 * @method ProductoCategoriaRecordSet fetchRecordSetBy(array $whereEquals, array $with = [])
 * @method ProductoCategoriaSelect select(array $whereEquals = [])
 * @method ProductoCategoriaRecord newRecord(array $fields = [])
 * @method ProductoCategoriaRecord[] newRecords(array $fieldSets)
 * @method ProductoCategoriaRecordSet newRecordSet(array $records = [])
 * @method ProductoCategoriaRecord turnRowIntoRecord(Row $row, array $with = [])
 * @method ProductoCategoriaRecord[] turnRowsIntoRecords(array $rows, array $with = [])
 */
class ProductoCategoria extends Mapper
{
}
