<?php
	namespace controller\admin;
	use berkaPhp\Controller\AppController;

	class ContactsController extends AppController
	{

		function __construct() {
			parent::__construct();
		}

        /* Display all contacts from database
        *  Default action in this controller
        *  @author berkaPhp
        */

		function index() {

            if($this->is_set($this->getPost())) {
                if ($this->model->update($this->getPost())) {
                    $this->appView->set('message', ['success'=>'Edited contact']);
                } else {
                    $this->appView->set('message', ['error'=>' Could not Edit contact !']);
                }
            }

            $this->appView->set('title', 'Zibonel Fm Contacts');

			$result = $this->model->fetchAll();
			$this->appView->set('contacts', $result);
			$this->appView->render();

		}

	}

?>