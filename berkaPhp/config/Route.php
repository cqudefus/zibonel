<?php
	namespace berkaPhp\config;
	use berkaPhp\config\router\Routing;
    use berkaPhp\helpers\SessionHelper;

	$app = new \berkaPhp\config\router\AppRouter($_SERVER);

	$app->route('/', function($route){

        if($route['prefix'] == 'Admin') {

            if (SessionHelper::get('user') != null) {
                $rights = ['1', '2'];

                if(in_array(\berkaPhp\helpers\Auth::getActiveUser(false,'user_ref_role'), $rights)) {

                } else {
                    $route['controller'] = 'errors';
                    $route['action'] = 'unauthorized';
                }

            } else {
                $route['prefix'] = 'Default';
                $route['controller'] = 'users';
                $route['action'] = 'login';
            }

        }

        define('PREFIX', $route['prefix'] , true);

		Routing::to($route);

	});


?>






























<?php
// $app->get('/user', function($route){

	// 	Routing::to([
	// 		'controller'=>'Users',
	// 		'action'=>'view',
	// 		'params'=>[
	// 			'id'=>$route['params'][0]
	// 		]
	// 	]);
	// });

	// $app->get('/users', function($route) {

	// });

	// $app->get('/products', function($route){

	// });
	// $app->get('/attractions', function($route){
	// 	//var_dump($route);
	// 	//echo "string";
	// 	Routing::to(['controller'=>'Attractions', 'action'=>'index']);
	// 	//var_dump($route);
	// });
// $app->get('/attractions', function($route){
	// 	//var_dump($route);
	// 	//echo "string";
	// 	Routing::to(['controller'=>'Attractions', 'action'=>'index']);
	// 	//var_dump($route);
	// });

	// $app->get('/cities', function($route){
	// 	Routing::to(['controller'=>'Cities', 'action'=>'index']);
	// });




?>