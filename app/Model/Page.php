<?php
App::uses('AppModel', 'Model');
/**
 * Page Model
 *
 * @property User $User
 * @property PageGroup $PageGroup
 */
class Page extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'name';


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'User' => array(
			'className' => 'User',
			'foreignKey' => 'user_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'PageGroup' => array(
			'className' => 'PageGroup',
			'foreignKey' => 'page_group_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
