<?php

class FoundItemImage extends AppModel {

	var $name = 'FoundItemImage';
	var $displayField = 'image';
	var $validate = array(
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
	);
	//The Associations below have been created with all possible keys, those that are not needed can be removed
	var $belongsTo = array(
        'FoundItem' => array(
            'className' => 'FoundItem',
            'foreignKey' => 'found_item_id',
            'conditions' => '',
            'fields' => '',
            'order' => ''
            )
            );

            function  afterFind($results, $primary = false) {
            	//parent::afterFind($results, $primary);
            	foreach($results as $key=>$val) {
            		if(isset($val['FoundItemImage'])) {
            			$results[$key]['FoundItemImage']['image_url'] = "/found_item_images/view/{$val['FoundItemImage']['id']}";
            		}
            	}
            	return $results;
            }

            function _getDefaultImage($found_item_id) {
            	$this->recursive = -1;
            	return $this->find("first", array(
            "conditions" => array(
                "FoundItemImage.default" => 1,
                "FoundItemImage.found_item_id" => $found_item_id
            	)));
            }

}

?>