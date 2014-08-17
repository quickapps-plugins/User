<?php
/**
 * Licensed under The GPL-3.0 License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @since	 1.0.0
 * @author	 Christopher Castro <chris@quickapps.es>
 * @link	 http://www.quickappscms.org
 * @license	 http://opensource.org/licenses/gpl-3.0.html GPL-3.0 License
 */
namespace User\Config;

use Cake\Routing\Router;

Router::connect('/unauthorized', [
	'plugin' => 'User',
	'controller' => 'gateway',
	'action' => 'unauthorized',
]);

Router::connect('/admin/login', [
	'plugin' => 'User',
	'controller' => 'gateway',
	'action' => 'login',
	'prefix' => 'admin'
]);

Router::connect('/login', [
	'plugin' => 'User',
	'controller' => 'gateway',
	'action' => 'login',
]);