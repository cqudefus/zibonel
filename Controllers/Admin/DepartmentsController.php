<?php
	namespace controller\admin;
	use berkaPhp\Controller\AppController;

	class DepartmentsController extends AppController
	{

		function __construct() {
			parent::__construct();
		}

        /* Display all departments from database
        *  Default action in this controller
        *  @author berkaPhp
        */

		function index() {

			$result = $this->model->fetchAll();
			$this->appView->set('departments', $result);
			$this->appView->render();

		}

        /* Add department into database
        *  Getting data from Post
        *  @author berkaPhp
        */

		function add() {

			if($this->is_set($this->getPost())) {
				if ($this->model->add($this->getPost())) {
					$this->appView->set('message', ['success'=>'Saved department']);
				} else {
					$this->appView->set('message', ['error'=>' Could not Saved department !']);
				}
			}

			$this->appView->render();
		}

        /* Edit department and update the table
        *  Getting data from Post
        *  Id from params array
        *  @author berkaPhp
        */

		function edit($params) {

			$id = $params['params'];

			if($this->is_set($this->getPost())) {
				if ($this->model->update($this->getPost())) {
					$this->appView->set('message', ['success'=>'Edited department']);
				} else {
					$this->appView->set('message', ['error'=>' Could not Edit department !']);
				}
			}

			$result = $this->model->fetchBy(['fields'=>['dep_id'=>$id]]);
			$this->appView->set('department',$result);
			$this->appView->render();
		}

        /* Delete department from the table
        *  Getting department Id from params array
        *  @author berkaPhp
        */

		function delete($params) {

			$id = $params['params'];

			if($this->model->delete($id)) {
				$this->appView->set('message', ['success'=>'Deleted department']);
			} else {
				$this->appView->set('message', ['error'=>' Could not Delete department !']);
			}

			$this->index();

		}

        /* Viewing department from the table
        *  Getting department Id from params array
        *  @author berkaPhp
        */

		function view($params) {

			$id = $params['params'];

			$result = $this->model->fetchBy(['fields'=>['dep_id'=>$id]]);
			$this->appView->set('department',$result);
			$this->appView->render();
		}

	}

?>