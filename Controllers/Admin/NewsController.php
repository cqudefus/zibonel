<?php
	namespace controller\admin;
	use berkaPhp\Controller\AppController;

	class NewsController extends AppController
	{

		function __construct() {
			parent::__construct();
		}

        /* Display all news from database
        *  Default action in this controller
        *  @author berkaPhp
        */

		function index() {

			$result = $this->model->fetchAll();

            $this->appView->set('title', 'Zibonel Fm News');
			$this->appView->set('news', $result);
			$this->appView->render();

		}

        /* Add new into database
        *  Getting data from Post
        *  @author berkaPhp
        */

		function add() {

			if($this->is_set($this->getPost())) {
				if ($this->model->add($this->getPost())) {
					$this->appView->set('message', ['success'=>'Saved new']);
				} else {
					$this->appView->set('message', ['error'=>' Could not Saved new !']);
				}
			}

			$this->appView->render();
		}

        /* Edit new and update the table
        *  Getting data from Post
        *  Id from params array
        *  @author berkaPhp
        */

		function edit($params) {

			$id = $params['params'];

			if($this->is_set($this->getPost())) {
				if ($this->model->update($this->getPost())) {
					$this->appView->set('message', ['success'=>'Edited new']);
				} else {
					$this->appView->set('message', ['error'=>' Could not Edit new !']);
				}

                $id = $this->getPost()['id'];
			}

			$result = $this->model->fetchBy(['fields'=>['id'=>$id]]);
			$this->appView->set('new',$result);
			$this->appView->render();
		}

        /* Delete new from the table
        *  Getting new Id from params array
        *  @author berkaPhp
        */

		function delete($params) {

			$id = $params['params'];

			if($this->model->delete($id)) {
				$this->appView->set('message', ['success'=>'Deleted new']);
			} else {
				$this->appView->set('message', ['error'=>' Could not Delete new !']);
			}

			$this->index();

		}

        /* Viewing new from the table
        *  Getting new Id from params array
        *  @author berkaPhp
        */

		function view($params) {

			$id = $params['params'];

			$result = $this->model->fetchBy(['fields'=>['id'=>$id]]);
			$this->appView->set('new',$result);
			$this->appView->render();
		}

	}

?>