<?php

class User extends AppModel {

	var $name = 'User';
	var $displayField = 'username';

	var $validate = array(
        'first_name' => array(
            'alphanumeric' => array(
                'rule' => array('alphanumeric'),
                'message' => 'Must be Alpha Numeric',
                'allowEmpty' => false,
                'required' => false
	),
            'notempty' => array(
                'rule' => array('notempty'),
                'message' => 'Required',
                'allowEmpty' => false,
                'required' => true
	)
	),
        'last_name' => array(
            'alphanumeric' => array(
                'rule' => array('alphanumeric'),
                'message' => 'Must be Alpha Numeric',
                'allowEmpty' => false,
                'required' => true
	),
            'notempty' => array(
                'rule' => array('notempty'),
                'message' => 'Required',
                'allowEmpty' => false,
                'required' => true
	)
	),
        'username' => array(
            'notempty' => array(
                'rule' => array('notempty'),
                'message' => 'Required',
                'allowEmpty' => false,
                'required' => true
	),
            'isUnique' => array(
                'rule' => array('isUnique'),
                'message'=> 'Must be unique',
                'on' => 'create'
                )
                ),
        'email' => array(
            'email' => array(
                'rule' => array('email'),
                'message' => 'Must be valid',
                'allowEmpty' => false,
                'required' => true,
                //'on' => 'create', // Limit validation to 'create' or 'update' operations
                ),
            'isUnique' => array(
                'rule' => array('isUnique'),
                'message'=> 'Must be unique',
                'on' => 'create'
                )
                ),
        'email2' => array(
            'email' => array(
                'rule' => array('email'),
                'message' => 'Must be valid',
                'allowEmpty' => false,
                'required' => true,
                'on' => 'create', // Limit validation to 'create' or 'update' operations
                ),
                ),
        'password' => array(
            'userdefined' => array(
                'rule' => array('_compPasswords'),
                'message' => 'Passwords must match',
                'allowEmpty' => false,
                'required' => false,
                'on' => 'update'
                )
                ),
        'agree' => array(
            'notempty' => array(
                'rule' => array('notempty'),
                'message'=>'You must agree to the Term of Service',
                'allowEmpty' => false,
                'required' => true,
                'on' => 'create'
                )
                )
                );

                //The Associations below have been created with all possible keys, those that are not needed can be removed
                var $belongsTo = array(
        'Signup' => array(
            'className' => 'Signup',
            'foreignKey' => 'signup_id',
            'conditions' => '',
            'fields' => '',
            'order' => ''
            )
            );
            var $hasMany = array(
        'AppReleaseComment' => array(
            'className' => 'AppReleaseComment',
            'foreignKey' => 'user_id',
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
        'FeedPost' => array(
            'className' => 'FeedPost',
            'foreignKey' => 'user_id',
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
        'FoundItemComment' => array(
            'className' => 'FoundItemComment',
            'foreignKey' => 'user_id',
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
        'UserGroup' => array(
            'className' => 'UserGroup',
            'foreignKey' => 'user_id',
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
        'FoundItem' => array(
            'className' => 'FoundItem',
            'foreignKey' => 'id',
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

            function  beforeSave($options = array()) {
            	debug($options);
            	parent::beforeSave($options);
            }

            function _compPasswords() {
            	return true;
            }

            function _validateCaptcha(){
            	App::import('Vendor', 'recaptchalib');
            	if (empty($this->params['Recaptcha.private_key'])) {
            		return __('No public key was set for reCaptcha.', true);
            	}
            	$privatekey = $this->params['Recaptcha.private_key'];
            	$resp = recaptcha_check_answer ($privatekey,
            	$_SERVER["REMOTE_ADDR"],
            	$_POST["recaptcha_challenge_field"],
            	$_POST["recaptcha_response_field"]);

            	if (!$resp->is_valid) {
            		// What happens when the CAPTCHA was entered incorrectly
            		die ("The reCAPTCHA wasn't entered correctly. Go back and try it again." .
             "(reCAPTCHA said: " . $resp->error . ")");
            	} else {
            		// Your code here to handle a successful verification
            	}

            }

}

?>