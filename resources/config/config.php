<?php

return [
	'decimals'      => [
		'type'     => 'anomaly.field_type.integer',
		'required' => true,
		'config'   => [
			'min' => 1,
		],
	],
	'min'           => [
		'type'  => 'anomaly.field_type.text',
		'rules' => [
			'numeric',
		],
		'config' => [
			'default_value' => '0'
		]
	],
	'max'           => [
		'type'  => 'anomaly.field_type.text',
		'rules' => [
			'numeric',
		],
		'config' => [
			'default_value' => '5'
		]
	],
	'step'           => [
		'type'  => 'anomaly.field_type.text',
		'rules' => [
			'numeric',
		],
	    'config' => [
	    	'default_value' => '0.5'
	    ]
	],
	'size'           => [
		'type'  => 'anomaly.field_type.select',
		'config'   => [
			'default_value' => 'md',
			'options'       => [
				'xs'      => 'Extra Small',
				'sm'      => 'Small',
				'md'      => 'Medium',
				'lg'      => 'Large',
				'xl'      => 'Extra Large',
			],
		],
	],
	'displayOnly'           => [
		'type'  => 'anomaly.field_type.boolean',
		'config' => [
			'default_value' => false
		]
	],
	'showCaption'           => [
		'type'  => 'anomaly.field_type.boolean',
		'config' => [
			'default_value' => false
		]
	],
	'showClear'           => [
		'type'  => 'anomaly.field_type.boolean',
		'config' => [
			'default_value' => false
		]
	],
	'default_value' => [
		'type'  => 'anomaly.field_type.text',
		'rules' => [
			'numeric',
		],
	],
	'separator'     => [
		'type'     => 'anomaly.field_type.select',
		'required' => true,
		'config'   => [
			'default_value' => ',',
			'options'       => [
				','      => '1,000',
				'.'      => '1.000',
				'`'      => '1`000',
				'&#160;' => '1 000',
			],
		],
	],
	'point'         => [
		'type'     => 'anomaly.field_type.select',
		'required' => true,
		'config'   => [
			'default_value' => '.',
			'options'       => [
				',' => '0,10',
				'.' => '0.10',
				'`' => '0`10',
			],
		],
	],
];