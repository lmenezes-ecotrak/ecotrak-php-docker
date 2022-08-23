<?php 

/**
 * Local bootstrap overrides
 */
Configure::write('Exception', array(
	'handler' => 'ErrorHandler::handleException',
	'renderer' => 'ExceptionRenderer',
	'skipLog' => array('NotFoundException', 'UnauthorizedException'),
	'log' => true,
));
Configure::write('App.fullBaseUrl', 'http://localhost:8082');
Configure::write('debug',2);
Configure::write('Error', array(
	'handler' => 'ErrorHandler::handleError',
	'level' => E_ALL & ~E_NOTICE & ~E_DEPRECATED & ~E_USER_DEPRECATED & ~E_WARNING,
	'trace' => true
));
CakeLog::config('default', array(
	'engine' => 'file',
));