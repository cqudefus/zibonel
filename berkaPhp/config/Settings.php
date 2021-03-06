<?php
	namespace berkaPhp\config;

    define('DEBUG', false, true);

    //Database settings
    define('SERVER', '127.0.0.1', true);
    define('DB', 'zibonale', true);
    define('DB_USERNAME', 'root', true);
    define('DB_PW', $_SERVER['SERVER_NAME']=='www.zibonelefm.co.za' ? '' : '', true);

    //default controller
    define('HOME', 'pages' , true);

    //default prefix
    define('DEFAULT_PREFIX', 'Default' , true);
    define('LOGIN_URL', '' , true);

    define('SITE_URL', 'www.yourlivesite.com' , true);
    define('LOGO_URL', '/Views/Default/Assets/logo.png' , true);


?>

















































<?php

    function prefixes() {
        return ['Default', 'Admin'];
    }

    function settings(){
		$localDatabase = array(
			'server' => SERVER,
			'username' => DB_USERNAME,
            'password' => DB_PW,
            'dbname' => DB
		);

		return $localDatabase ;
	}

	mysqli_report(MYSQLI_REPORT_STRICT);
    $is_connected = null;

    try {
        new \mysqli(SERVER,DB_USERNAME, DB_PW, DB );
        $is_connected = true;
    } catch (\mysqli_sql_exception $e) {
        $is_connected = false;
    }

    define('IS_DB_CONNECTED', $is_connected, true);

?>

