<?php

//Pastas
define('PUBLIC_PATH', realpath(dirname(__FILE__) . '/public'));
define('MODEL_PATH', realpath(dirname(__FILE__) . '/../models'));
define('VIEW_PATH', realpath(dirname(__FILE__) . '/../views'));
define('TEMPLATE_PATH', realpath(dirname(__FILE__) . '/../views/templates'));
define('CONTROLLER_PATH', realpath(dirname(__FILE__) . '/../controllers'));

//Arquivos
// require_once(realpath(dirname(__FILE__) . '/database.php'));
require_once(realpath(dirname(__FILE__) . '/loader.php'));


// require_once(realpath(MODEL_PATH . '/Model.php'));
// require_once(realpath(MODEL_PATH . '/User.php'));
// require_once(realpath(MODEL_PATH . '/WorkingHours.php'));

// require_once(realpath(EXCEPTION_PATH . '/AppException.php'));
// require_once(realpath(EXCEPTION_PATH . '/ValidationException.php'));