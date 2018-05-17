<?php namespace Rage\StarsFieldType;

use Anomaly\Streams\Platform\Addon\FieldType\FieldTypeSchema;
use Anomaly\Streams\Platform\Assignment\Contract\AssignmentInterface;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Fluent;

/**
 * Class StarsFieldTypeSchema
 *
 * @package       Rage\StarsFieldType
 */
class StarsFieldTypeSchema extends FieldTypeSchema
{

    /**
     * @param Blueprint           $table
     * @param AssignmentInterface $assignment
     */
    public function addColumn(Blueprint $table, AssignmentInterface $assignment)
    {
        // Skip if the column already exists.
        if ($this->schema->hasColumn($table->getTable(), $this->fieldType->getColumnName())) {
            return;
        }

        /**
         * Add the column to the table.
         *
         * @var Blueprint|Fluent $column
         */
        $column = $table->{$this->fieldType->getColumnType()}(
            $this->fieldType->getColumnName(),
            11,
            array_get($this->fieldType->getConfig(), 'decimals', 2)
        )->nullable(!$assignment->isTranslatable() ? !$assignment->isRequired() : true);

        if (!str_contains($this->fieldType->getColumnType(), ['text', 'blob'])) {
            $column->default(array_get($this->fieldType->getConfig(), 'default_value'));
        }

        // Mark the column unique if desired and not translatable.
        if ($assignment->isUnique() && !$assignment->isTranslatable()) {
            $table->unique($this->fieldType->getColumnName());
        }
    }
}
