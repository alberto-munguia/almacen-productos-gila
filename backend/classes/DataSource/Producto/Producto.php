<?php
declare(strict_types=1);

namespace DataSource\Producto;

use Atlas\Mapper\Mapper;
use Atlas\Table\Row;

/**
 * @method ProductoTable getTable()
 * @method ProductoRelationships getRelationships()
 * @method ProductoRecord|null fetchRecord($primaryVal, array $with = [])
 * @method ProductoRecord|null fetchRecordBy(array $whereEquals, array $with = [])
 * @method ProductoRecord[] fetchRecords(array $primaryVals, array $with = [])
 * @method ProductoRecord[] fetchRecordsBy(array $whereEquals, array $with = [])
 * @method ProductoRecordSet fetchRecordSet(array $primaryVals, array $with = [])
 * @method ProductoRecordSet fetchRecordSetBy(array $whereEquals, array $with = [])
 * @method ProductoSelect select(array $whereEquals = [])
 * @method ProductoRecord newRecord(array $fields = [])
 * @method ProductoRecord[] newRecords(array $fieldSets)
 * @method ProductoRecordSet newRecordSet(array $records = [])
 * @method ProductoRecord turnRowIntoRecord(Row $row, array $with = [])
 * @method ProductoRecord[] turnRowsIntoRecords(array $rows, array $with = [])
 */
class Producto extends Mapper
{
}
