<?php
	namespace controller;
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

			$result = $this->model->fetchAll();
            $this->appView->set('title', 'Contacts us');
            $this->appView->set('page_title', 'Get in touch!');
			$this->appView->set('contacts', $result);
			$this->appView->render();

		}

        /* Add contact into database
        *  Getting data from Post
        *  @author berkaPhp
        */

		function add() {

			if($this->is_set($this->getPost())) {
				if ($this->model->add($this->getPost())) {
					$this->appView->set('message', ['success'=>'Saved contact']);
				} else {
					$this->appView->set('message', ['error'=>' Could not Saved contact !']);
				}
			}

			$this->appView->render();
		}

        /* Edit contact and update the table
        *  Getting data from Post
        *  Id from params array
        *  @author berkaPhp
        */

		function edit($params) {

			$id = $params['params'];

			if($this->is_set($this->getPost())) {
				if ($this->model->update($this->getPost())) {
					$this->appView->set('message', ['success'=>'Edited contact']);
				} else {
					$this->appView->set('message', ['error'=>' Could not Edit contact !']);
				}
			}

			$result = $this->model->fetchBy(['fields'=>['id'=>$id]]);
			$this->appView->set('contact',$result);
			$this->appView->render();
		}

        /* Delete contact from the table
        *  Getting contact Id from params array
        *  @author berkaPhp
        */

		function delete($params) {

			$id = $params['params'];

			if($this->model->delete($id)) {
				$this->appView->set('message', ['success'=>'Deleted contact']);
			} else {
				$this->appView->set('message', ['error'=>' Could not Delete contact !']);
			}

			$this->index();

		}

        /* Viewing contact from the table
        *  Getting contact Id from params array
        *  @author berkaPhp
        */

		function view($params) {

			$id = $params['params'];

			$result = $this->model->fetchBy(['fields'=>['id'=>$id]]);
			$this->appView->set('contact',$result);
			$this->appView->render();
		}

	}

?>