<?php
/**
 *
 * PHP versions 4 and 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright 2005-2010, Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2005-2010, Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       cake
 * @subpackage    cake.cake.libs.view.templates.errors
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */
?>
<h2>
<?php __('Missing View'); ?>
</h2>
<p class="error">
	<strong><?php __('Error'); ?>: </strong>
	<?php printf(__('The view for %1$s%2$s was not found.', true), '<em>' . $controller . 'Controller::</em>', '<em>' . $action . '()</em>'); ?>
</p>
<p class="error">
	<strong><?php __('Error'); ?>: </strong>
	<?php printf(__('Confirm you have created the file: %s', true), $file); ?>
</p>
<p class="notice">
	<strong><?php __('Notice'); ?>: </strong>
	<?php printf(__('If you want to customize this error message, create %s', true), APP_DIR . DS . 'views' . DS . 'errors' . DS . 'missing_view.ctp'); ?>
</p>
