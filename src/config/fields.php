<?php

return array(

	'classmap' => array(
		'integer' => '\Mascame\Artificer\Fields\Types\Integer',
		'image'   => '\Mascame\Artificer\Plugins\Plupload\PluploadField',
		'hasOne'  => '\Mascame\Artificer\Fields\Types\Relations\hasOne',
		'hasMany' => '\Mascame\Artificer\Fields\Types\Relations\hasMany',
	),

	'types'    => array(
		// field_type => array('fieldname_1', 'fieldname_1')
		'integer'      => array(
			'id'
		),

		'checkbox'     => array(
			'accept',
            'active',
            'activated',
            'published',
		),

		'password'     => array(
			'password'
		),

		'text'         => array(
			'title',
			'username'
		),

		'textarea'     => array(
			''
		),

		'wysiwyg'      => array(
			'body'
		),

		'option'       => array(
			'selection'
		),

		'email'        => array(),

		'link'         => array(
			'url'
		),

		'date'         => array(
            '_at'
        ),

		'file'         => array(),

		'image'        => array(
			'image'
		),

		'image_center' => array(),

		'hasOne'       => array(
			'_id',
			'user_id',
			'fake_id'
		),

		'hasMany'      => array(),

		'default'      => array('text')
	),
);