<?php namespace Rage\StarsFieldType;

use Anomaly\Streams\Platform\Addon\FieldType\FieldType;

class StarsFieldType extends FieldType
{

	/**
	 * The database column type.
	 *
	 * @var string
	 */
	protected $columnType = 'float';

	/**
	 * The input view.
	 *
	 * @var string
	 */
	protected $inputView = 'rage.field_type.stars::input';

	/**
	 * The field type rules.
	 *
	 * @var array
	 */
	protected $rules = [
		'numeric'
	];

	/**
	 * The default config.
	 *
	 * @var array
	 */
	protected $config = [
		'separator' => ',',
		'point'     => '.',
		'decimals'  => 2,
		'min'       => 0,
	    'max'       => 5,
	    'size'      => 'md',

	];

}
