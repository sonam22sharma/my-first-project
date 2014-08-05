<?php
App::uses('AppModel', 'Model');
App::uses('BlowfishPasswordHasher', 'Controller/Component/Auth');
/**
 * User Model
 *
 */
class User extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'username';

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'id' => array(
			'alphaNumeric' => array(
				'rule' => array('alphaNumeric'),
				
			),
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				
			),
		),
	);



	public function beforeSave($options = array()){

		if(isset($this->data[$this->alias]['password'])){

			$bfph = new BlowfishPasswordHasher();
			$this->data[$this->alias]['password'] = $bfph->hash($this->data[$this->alias]['password']);
			}
			return true;

	}
}
