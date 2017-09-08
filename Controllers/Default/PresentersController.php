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

        /* Add presenter into database
        *  Getting data from Post
        *  @author berkaPhp
        */

		function add() {

			if($this->is_set($this->getPost())) {
				if ($this->model->add($this->getPost())) {
					$this->appView->set('message', ['success'=>'Saved presenter']);
				} else {
					$this->appView->set('message', ['error'=>' Could not Saved presenter !']);
				}
			}

			$this->appView->render();
		}

        /* Edit presenter and update the table
        *  Getting data from Post
        *  Id from params array
        *  @author berkaPhp
        */

		function edit($params) {

			$id = $params['params'];

			if($this->is_set($this->getPost())) {
				if ($this->model->update($this->getPost())) {
					$this->appView->set('message', ['success'=>'Edited presenter']);
				} else {
					$this->appView->set('message', ['error'=>' Could not Edit presenter !']);
				}
			}

			$result = $this->model->fetchBy(['fields'=>['pr_id'=>$id]]);
			$this->appView->set('presenter',$result);
			$this->appView->render();
		}

        /* Delete presenter from the table
        *  Getting presenter Id from params array
        *  @author berkaPhp
        */

		function delete($params) {

			$id = $params['params'];

			if($this->model->delete($id)) {
				$this->appView->set('message', ['success'=>'Deleted presenter']);
			} else {
				$this->appView->set('message', ['error'=>' Could not Delete presenter !']);
			}

			$this->index();

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