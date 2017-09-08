<?php
	namespace controller;
	use berkaPhp\Controller\AppController;

	class EventsController extends AppController
	{

		function __construct() {
			parent::__construct();
		}

        /* Display all events from database
        *  Default action in this controller
        *  @author berkaPhp
        */

		function index() {

			$result = $this->model->fetchAll();
			$this->appView->set('events', $result);
			$this->appView->set('page_title', 'Our Events');
			$this->appView->render();

		}

        /* Add event into database
        *  Getting data from Post
        *  @author berkaPhp
        */

		function add() {

			if($this->is_set($this->getPost())) {
				if ($this->model->add($this->getPost())) {
					$this->appView->set('message', ['success'=>'Saved event']);
				} else {
					$this->appView->set('message', ['error'=>' Could not Saved event !']);
				}
			}

			$this->appView->render();
		}

        /* Edit event and update the table
        *  Getting data from Post
        *  Id from params array
        *  @author berkaPhp
        */

		function edit($params) {

			$id = $params['params'];

			if($this->is_set($this->getPost())) {
				if ($this->model->update($this->getPost())) {
					$this->appView->set('message', ['success'=>'Edited event']);
				} else {
					$this->appView->set('message', ['error'=>' Could not Edit event !']);
				}
			}

			$result = $this->model->fetchBy(['fields'=>['id'=>$id]]);
			$this->appView->set('event',$result);
			$this->appView->render();
		}

        /* Delete event from the table
        *  Getting event Id from params array
        *  @author berkaPhp
        */

		function delete($params) {

			$id = $params['params'];

			if($this->model->delete($id)) {
				$this->appView->set('message', ['success'=>'Deleted event']);
			} else {
				$this->appView->set('message', ['error'=>' Could not Delete event !']);
			}

			$this->index();

		}

        /* Viewing event from the table
        *  Getting event Id from params array
        *  @author berkaPhp
        */

		function view($params) {

			$id = $params['params'];

			$result = $this->model->fetchBy(['fields'=>['id'=>$id]]);
			$this->appView->set('event',$result);
			$this->appView->set('page_title', 'Our Events');
			$this->appView->render();
		}

	}

?>
