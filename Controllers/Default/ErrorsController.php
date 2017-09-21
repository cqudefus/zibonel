<?php
	namespace controller;
	use berkaPhp\Controller\AppController;

	class ErrorsController extends AppController
	{

		function __construct() {
			parent::__construct(false);
		}

		function index($params) {
			$this->appView->render();
		}

        function unauthorized() {
            $this->appView->set('title', 'Error ');
            $this->appView->set('page_title', 'Error');
            $this->index("");
        }

        function no_found() {
            $this->appView->set('title', 'Error ');
            $this->appView->set('page_title', 'Error');
            $this->index("");
        }

        function templatenotfound($params) {

            $details = $params['options'];
            $this->appView->set('title', 'Error ');
            $this->appView->set('page_title', 'Error');

            $this->appView->set("details", $details);
            $this->index("");

        }

        function controllernotfound($params) {

            $this->appView->set('title', 'Error ');
            $this->appView->set('page_title', 'Error');

            $details = $params['options'];
            $this->appView->set("details", $details);
            $this->index("");

        }

        function actionnotfound($params) {

            $details = $params['options'];
           // $this->console($details);
            $this->appView->set('title', 'Error ');
            $this->appView->set('page_title', 'Error');

            $this->appView->set("details", $details);
            $this->index("");
        }

        function modelnotfound($params) {
            $this->appView->set('title', 'Error ');
            $this->appView->set('page_title', 'Error');

            $details = $params['options'];
            $this->appView->set("details", $details);
            $this->index("");
        }

        function dbnotconnected() {
            $this->appView->render();
        }

        function componentnotfound($params) {
            $this->appView->render();
        }

	}

?>