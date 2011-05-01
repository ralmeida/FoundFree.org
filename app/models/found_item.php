<?php
class FoundItem extends AppModel {
	var $name = 'FoundItem';
	var $displayField = 'title';
	var $validate = array(
		'title' => array(
			'notempty' => array(
				'rule' => array('notempty'),
	//'message' => 'Your custom message here',
	//'allowEmpty' => false,
	//'required' => false,
	//'last' => false, // Stop validation after this rule
	//'on' => 'create', // Limit validation to 'create' or 'update' operations
	),
	),
		'image' => array(
			'notempty' => array(
				'rule' => array('notempty'),
	//'message' => 'Your custom message here',
	//'allowEmpty' => false,
	//'required' => false,
	//'last' => false, // Stop validation after this rule
	//'on' => 'create', // Limit validation to 'create' or 'update' operations
	),
	),
		'description' => array(
			'notempty' => array(
				'rule' => array('notempty'),
	//'message' => 'Your custom message here',
	//'allowEmpty' => false,
	//'required' => false,
	//'last' => false, // Stop validation after this rule
	//'on' => 'create', // Limit validation to 'create' or 'update' operations
	),
	),
		'lat' => array(
			'decimal' => array(
				'rule' => array('decimal'),
	//'message' => 'Your custom message here',
	//'allowEmpty' => false,
	//'required' => false,
	//'last' => false, // Stop validation after this rule
	//'on' => 'create', // Limit validation to 'create' or 'update' operations
	),
			'notempty' => array(
				'rule' => array('notempty'),
	//'message' => 'Your custom message here',
	//'allowEmpty' => false,
	//'required' => false,
	//'last' => false, // Stop validation after this rule
	//'on' => 'create', // Limit validation to 'create' or 'update' operations
	),
	),
		'lng' => array(
			'decimal' => array(
				'rule' => array('decimal'),
	//'message' => 'Your custom message here',
	//'allowEmpty' => false,
	//'required' => false,
	//'last' => false, // Stop validation after this rule
	//'on' => 'create', // Limit validation to 'create' or 'update' operations
	),
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
		'User' => array(
			'className' => 'User',
			'foreignKey' => 'user_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
			),
		'FoundItemCat' => array(
			'className' => 'FoundItemCat',
			'foreignKey' => 'found_item_cat_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
			)
			);

			var $hasMany = array(
		'FoundItemComment' => array(
			'className' => 'FoundItemComment',
			'foreignKey' => 'found_item_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
			),
		'FoundItemImage' => array(
			'className' => 'FoundItemImage',
			'foreignKey' => 'found_item_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
			)
			);

			function  afterFind($results, $primary = false) {
				parent::afterFind($results, $primary);
				foreach($results as $key=>$val) {
					if(isset($val['FoundItem'])) {
						$image = $this->FoundItemImage->_getDefaultImage($val['FoundItem']['id']);
						$ext = substr($image['FoundItemImage']['image'], strrpos($image['FoundItemImage']['image'], '.') + 1);
						$name = substr($image['FoundItemImage']['image'], 0, strrpos($image['FoundItemImage']['image'], '.') );
						$image['FoundItemImage']['thumb_image'] = $name."_thumb.".$ext;
						$results[$key]['FoundItem']['image'] = "/found_images/{$image['FoundItemImage']['image']}";
						$results[$key]['FoundItem']['image_thumb'] = "/found_images/{$image['FoundItemImage']['thumb_image']}";
						$results[$key]['FoundItem']['found_by'] = (isset($val['User']['username'])) ? $val['User']['username'] : "";
						$results[$key]['FoundItem']['category'] = (isset($val['FoundItemCat']['name'])) ? $val['FoundItemCat']['name'] : "";
						$results[$key]['FoundItem']['found_on'] = date('M jS Y', strtotime($val['FoundItem']['created']));
						$results[$key]['FoundItem']['description'] = ($val['FoundItem']['description']) ? $val['FoundItem']['description'] : "&nbsp;";
						$results[$key]['FoundItem']['json']["_".$val['FoundItem']['id']] = (object)$results[$key]['FoundItem'];
					}
				}
				return $results;
			}

}
?>