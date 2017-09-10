<?php
	namespace controller;
	use berkaPhp\Controller\AppController;

	class PresentersController extends AppController
	{

		function __construct() {
			parent::__construct();
		}

        /* Display all presenters from database
        *  Default action in this controller
        *  @author berkaPhp
        */

		function index() {

			$result = $this->model->fetchAll([],['join'=> true]);
			$this->appView->set('presenters', $result);
            $this->appView->set('page_title', 'Presenters');
			$this->appView->render();

		}

        /* Viewing presenter from the table
        *  Getting presenter Id from params array
        *  @author berkaPhp
        */

		function view($params) {

			$id = $params['params'];

			$result = $this->model->fetchBy(['fields'=>['pr_id'=>$id]], ['join'=> true]);
            $this->appView->set('page_title', '');
			$this->appView->set('presenter',$result);
			$this->appView->render();
		}

	}

?>