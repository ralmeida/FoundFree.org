<?php
class AppError extends ErrorHandler {

	/**
	 * Displays an error page (e.g. 404 Not found).
	 *
	 * @param array $params Parameters for controller
	 * @access public
	 */
	function error($params) {
		extract($params, EXTR_OVERWRITE);
		$this->controller->set(array(
			'code' => $code,
			'name' => $name,
			'message' => $message,
			'title' => $code . ' ' . $name
		));
		$this->_outputMessage('error404');
	}

	/**
	 * Convenience method to display a 404 page.
	 *
	 * @param array $params Parameters for controller
	 * @access public
	 */
	function error404($params) {
		extract($params, EXTR_OVERWRITE);

		if (!isset($url)) {
			$url = $this->controller->here;
		}
		$url = Router::normalize($url);
		$this->controller->header("HTTP/1.0 404 Not Found");
		$this->controller->set(array(
			'code' => '404',
			'name' => __('Not Found', true),
			'message' => h($url),
			'base' => $this->controller->base
		));
		$this->_outputMessage('error404');
	}

	/**
	 * Convenience method to display a 500 page.
	 *
	 * @param array $params Parameters for controller
	 * @access public
	 */
	function error500($params) {
		extract($params, EXTR_OVERWRITE);

		if (!isset($url)) {
			$url = $this->controller->here;
		}
		$url = Router::normalize($url);
		$this->controller->header("HTTP/1.0 500 Internal Server Error");
		$this->controller->set(array(
			'code' => '500',
			'name' => __('An Internal Error Has Occurred', true),
			'message' => h($url),
			'base' => $this->controller->base
		));
		$this->_outputMessage('error500');
	}
	/**
	 * Renders the Missing Controller web page.
	 *
	 * @param array $params Parameters for controller
	 * @access public
	 */
	function missingController($params) {
		extract($params, EXTR_OVERWRITE);

		$controllerName = str_replace('Controller', '', $className);
		$this->controller->set(array(
			'controller' => $className,
			'controllerName' => $controllerName,
			'title' => __('Missing Controller', true)
		));
		$this->_outputMessage('missingController');
	}

	/**
	 * Renders the Missing Action web page.
	 *
	 * @param array $params Parameters for controller
	 * @access public
	 */
	function missingAction($params) {
		extract($params, EXTR_OVERWRITE);

		$controllerName = str_replace('Controller', '', $className);
		$this->controller->set(array(
			'controller' => $className,
			'controllerName' => $controllerName,
			'action' => $action,
			'title' => __('Missing Method in Controller', true)
		));
		$this->_outputMessage('missingAction');
	}

	/**
	 * Renders the Private Action web page.
	 *
	 * @param array $params Parameters for controller
	 * @access public
	 */
	function privateAction($params) {
		extract($params, EXTR_OVERWRITE);

		$this->controller->set(array(
			'controller' => $className,
			'action' => $action,
			'title' => __('Trying to access private method in class', true)
		));
		$this->_outputMessage('privateAction');
	}

	/**
	 * Renders the Missing Table web page.
	 *
	 * @param array $params Parameters for controller
	 * @access public
	 */
	function missingTable($params) {
		extract($params, EXTR_OVERWRITE);

		$this->controller->header("HTTP/1.0 500 Internal Server Error");
		$this->controller->set(array(
			'code' => '500',
			'model' => $className,
			'table' => $table,
			'title' => __('Missing Database Table', true)
		));
		$this->_outputMessage('missingTable');
	}

	/**
	 * Renders the Missing Database web page.
	 *
	 * @param array $params Parameters for controller
	 * @access public
	 */
	function missingDatabase($params = array()) {
		$this->controller->header("HTTP/1.0 500 Internal Server Error");
		$this->controller->set(array(
			'code' => '500',
			'title' => __('Scaffold Missing Database Connection', true)
		));
		$this->_outputMessage('missingScaffolddb');
	}

	/**
	 * Renders the Missing View web page.
	 *
	 * @param array $params Parameters for controller
	 * @access public
	 */
	function missingView($params) {
		extract($params, EXTR_OVERWRITE);

		$this->controller->set(array(
			'controller' => $className,
			'action' => $action,
			'file' => $file,
			'title' => __('Missing View', true)
		));
		$this->_outputMessage('missingView');
	}

	/**
	 * Renders the Missing Layout web page.
	 *
	 * @param array $params Parameters for controller
	 * @access public
	 */
	function missingLayout($params) {
		extract($params, EXTR_OVERWRITE);

		$this->controller->layout = 'default';
		$this->controller->set(array(
			'file' => $file,
			'title' => __('Missing Layout', true)
		));
		$this->_outputMessage('missingLayout');
	}

	/**
	 * Renders the Database Connection web page.
	 *
	 * @param array $params Parameters for controller
	 * @access public
	 */
	function missingConnection($params) {
		extract($params, EXTR_OVERWRITE);

		$this->controller->header("HTTP/1.0 500 Internal Server Error");
		$this->controller->set(array(
			'code' => '500',
			'model' => $className,
			'title' => __('Missing Database Connection', true)
		));
		$this->_outputMessage('missingConnection');
	}

	/**
	 * Renders the Missing Helper file web page.
	 *
	 * @param array $params Parameters for controller
	 * @access public
	 */
	function missingHelperFile($params) {
		extract($params, EXTR_OVERWRITE);

		$this->controller->set(array(
			'helperClass' => Inflector::camelize($helper) . "Helper",
			'file' => $file,
			'title' => __('Missing Helper File', true)
		));
		$this->_outputMessage('missingHelperFile');
	}

	/**
	 * Renders the Missing Helper class web page.
	 *
	 * @param array $params Parameters for controller
	 * @access public
	 */
	function missingHelperClass($params) {
		extract($params, EXTR_OVERWRITE);

		$this->controller->set(array(
			'helperClass' => Inflector::camelize($helper) . "Helper",
			'file' => $file,
			'title' => __('Missing Helper Class', true)
		));
		$this->_outputMessage('missingHelperClass');
	}

	/**
	 * Renders the Missing Behavior file web page.
	 *
	 * @param array $params Parameters for controller
	 * @access public
	 */
	function missingBehaviorFile($params) {
		extract($params, EXTR_OVERWRITE);

		$this->controller->set(array(
			'behaviorClass' => Inflector::camelize($behavior) . "Behavior",
			'file' => $file,
			'title' => __('Missing Behavior File', true)
		));
		$this->_outputMessage('missingBehaviorFile');
	}

	/**
	 * Renders the Missing Behavior class web page.
	 *
	 * @param array $params Parameters for controller
	 * @access public
	 */
	function missingBehaviorClass($params) {
		extract($params, EXTR_OVERWRITE);

		$this->controller->set(array(
			'behaviorClass' => Inflector::camelize($behavior) . "Behavior",
			'file' => $file,
			'title' => __('Missing Behavior Class', true)
		));
		$this->_outputMessage('missingBehaviorClass');
	}

	/**
	 * Renders the Missing Component file web page.
	 *
	 * @param array $params Parameters for controller
	 * @access public
	 */
	function missingComponentFile($params) {
		extract($params, EXTR_OVERWRITE);

		$this->controller->set(array(
			'controller' => $className,
			'component' => $component,
			'file' => $file,
			'title' => __('Missing Component File', true)
		));
		$this->_outputMessage('missingComponentFile');
	}

	/**
	 * Renders the Missing Component class web page.
	 *
	 * @param array $params Parameters for controller
	 * @access public
	 */
	function missingComponentClass($params) {
		extract($params, EXTR_OVERWRITE);

		$this->controller->set(array(
			'controller' => $className,
			'component' => $component,
			'file' => $file,
			'title' => __('Missing Component Class', true)
		));
		$this->_outputMessage('missingComponentClass');
	}

	/**
	 * Renders the Missing Model class web page.
	 *
	 * @param unknown_type $params Parameters for controller
	 * @access public
	 */
	function missingModel($params) {
		extract($params, EXTR_OVERWRITE);

		$this->controller->set(array(
			'model' => $className,
			'title' => __('Missing Model', true)
		));
		$this->_outputMessage('missingModel');
	}
}
?>
