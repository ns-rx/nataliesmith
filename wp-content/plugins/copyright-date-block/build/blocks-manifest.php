<?php
// This file is generated. Do not modify it manually.
return array(
	'copyright-date-block' => array(
		'$schema' => 'https://schemas.wp.org/trunk/block.json',
		'apiVersion' => 3,
		'name' => 'copyright-block/copyright-date-block',
		'version' => '0.1.0',
		'title' => 'Copyright Date Block',
		'category' => 'widgets',
		'icon' => 'calendar',
		'description' => 'A Copyright Date block.',
		'example' => array(
			
		),
		'supports' => array(
			'html' => false,
			'align' => true
		),
		'attributes' => array(
			'startingYear' => array(
				'type' => 'string',
				'default' => '2002'
			)
		),
		'textdomain' => 'copyright-date-block',
		'editorScript' => 'file:./index.js',
		'style' => 'file:./style-index.css'
	)
);
