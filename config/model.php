<?php

return [

	'directories'      => [
		'\\App\\Models' => app_path() . '/Models',
	],

	'hidden'           => [
//		'BookAttribute',
	],

	'route_permission' => [
		'admin.model.store'   => 'create',
		'admin.model.create'  => 'create',
		'admin.model.update'  => 'update',
		'admin.model.edit'    => 'update',
		'admin.model.destroy' => 'delete',
		'admin.model.show'    => 'view',
		'admin.model.all'     => 'view',
	],

	'default_model' => [
		/**
		 * The real value will never be shown (just that)
		 */
		'hidden'    => ['password'],

		// Editable, fillable, updatable
		//	'fillable'  => [],
		//
		//	// Not updatable, not editable
		//	'guarded'   => ['id'],

		//	'list'      => ['*'],
		//
		//	'list-hide' => ['image_center'],

		/**
		 * Fields that are shown on creation
		 */
		'create' => [],

		/**
		 * Fields that are shown on edit
		 */
		'edit' => [],

		/**
		 * Fields that will be shown when on list view mode
		 */
		'list' => [
			'show' => ['*'],
			'hide' => ['password'],
		],

		'fields'    => [

		]
	]
];