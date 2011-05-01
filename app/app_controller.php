<?php

class AppController extends Controller {

	var $components = array(
        'Auth'=> array(
	//'authorize' => 'actions',
            'actionPath'  => 'controllers/',
            'loginAction' => array(
                'controller' => 'users',
                'action'     => 'login',
                'plugin'     => false,
                'admin'      => false,
	),
            'logoutRedirect' => array(
                'controller'   => 'pages',
                'action'       => 'display', 'home'
                )
                ),
        'Recaptcha.Captcha'=> array(
            'private_key' => '6Lco-MMSAAAAADuhpwDWhcwGOh5MZ4x7emcD9cjG',
            'public_key'  => '6Lco-MMSAAAAAJSkH7aOJqEds5sD_GofaOtniNTR'
            ),
        'Session',
        'RequestHandler'
        );

        var $helpers = array(
        'GoogleMapV3',
        'Javascript',
        'Form',
        'Session',
        'Recaptcha.CaptchaTool'
        );

        function __construct() {
        	ini_set("memory_limit","100M");
        	parent::__construct();
        }

        function beforeFilter() {
        	$this->Auth->allow('display');

        	$page = null;
        	if(isset($this->params['pass'][0])) $page = $this->params['pass'][0];
        	$this->set("page", $page);
        	$this->set("page_name", $this->name);
        	$this->set("page_action", $this->action);
        	$this->set("AuthUser", $this->Auth->User());

        	if($this->RequestHandler->isMobile()) {
        		$this->is_mobile = true;
        		$this->set('is_mobile', $this->is_mobile );
        		$this->layout = 'mobile';
        		if($this->viewPath!='pages') {
        			$this->viewPath = $this->viewPath.DS.'mobile';
        		}
        	}
        }

        function _doJsonJayout($data) {
        	if($this->Auth->User('id')) {
        		$logedin = true;
        	} else  {
        		$logedin = false;
        	}
        	$data['logedin'] = $logedin;
        	$this->set("data", $data);
        	$this->layout = 'json';
        	$this->viewPath = '';
        	$this->render('json');
        }

}

?>
