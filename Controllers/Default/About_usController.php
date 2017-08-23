<?php
	namespace controller;
	use berkaPhp\Controller\AppController;

	class About_usController extends AppController
    {

        function __construct()
        {
            parent::__construct();
        }

        /* Display all about_us from database
        *  Default action in this controller
        *  @author berkaPhp
        */

        function index()
        {

            $result = $this->model->fetchAll();
            $this->appView->set('title', 'About Us');
            $this->appView->set('page_title', 'About Zibonel FM');
            $this->appView->set('about_us', $result);
            $this->appView->render();

        }

        function our_vision()
        {
            $this->appView->set('title', 'About Us');
            $this->appView->set('page_title', 'About Zibonel FM');
            $this->appView->render();

        }
    }

?>