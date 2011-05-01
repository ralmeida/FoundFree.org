<?php
class FoundItemComment extends AppModel {
	var $name = 'FoundItemComment';
	var $displayField = 'comment';
	var $validate = array(
		'comment' => array(
			'notempty' => array(
				'rule' => array('notempty'),
	//'message' => 'Your custom message here',
	//'allowEmpty' => false,
	//'required' => false,
	//'last' => false, // Stop validation after this rule
	//'on' => 'create', // Limit validation to 'create' or 'update' operations
	),
	),
	);
	//The Associations below have been created with all possible keys, those that are not needed can be removed

	var $belongsTo = array(
		'FoundItem' => array(
			'className' => 'FoundItem',
			'foreignKey' => 'found_item_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
			),
		'User' => array(
			'className' => 'User',
			'foreignKey' => 'user_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
			)
			);
}
?>