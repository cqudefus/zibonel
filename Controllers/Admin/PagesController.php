<?php
	namespace controller\admin;
	use berkaPhp\Controller\AppController;

	class PagesController extends AppController
	{

		function __construct() {
			parent::__construct(false);
		}

		function index() {
            $this->appView->set('title', 'Admin');
            $this->appView->set('home', true);
			$this->appView->render();
		}
	}

?>