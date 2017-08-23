<?php
	namespace controller\admin;
	use berkaPhp\Controller\AppController;

	class About_usController extends AppController
	{

		function __construct() {
			parent::__construct();
		}

        /* Display all about_us from database
        *  Default action in this controller
        *  @author berkaPhp
        */

		function index() {

            if($this->is_set($this->getPost())) {
                if ($this->model->update($this->getPost())) {
                    $this->appView->set('message', ['success'=>'Edited about us']);
                } else {
                    $this->appView->set('message', ['error'=>' Could not Edit about us !']);
                }
            }

            $this->appView->set('title', 'About us');

			$result = $this->model->fetchAll();
			$this->appView->set('about_us', $result);
			$this->appView->render();

		}

        /* Add about_u into database
        *  Getting data from Post
        *  @author berkaPhp
        */

		function add() {

			if($this->is_set($this->getPost())) {
				if ($this->model->add($this->getPost())) {
					$this->appView->set('message', ['success'=>'Saved about_u']);
				} else {
					$this->appView->set('message', ['error'=>' Could not Saved about_u !']);
				}
			}

			$this->appView->render();
		}

        /* Edit about_u and update the table
        *  Getting data from Post
        *  Id from params array
        *  @author berkaPhp
        */

		function edit($params) {

			$id = $params['params'];

			if($this->is_set($this->getPost())) {
				if ($this->model->update($this->getPost())) {
					$this->appView->set('message', ['success'=>'Edited about_u']);
				} else {
					$this->appView->set('message', ['error'=>' Could not Edit about_u !']);
				}
			}

			$result = $this->model->fetchBy(['fields'=>['id'=>$id]]);
			$this->appView->set('about_u',$result);
			$this->appView->render();
		}

        /* Delete about_u from the table
        *  Getting about_u Id from params array
        *  @author berkaPhp
        */

		function delete($params) {

			$id = $params['params'];

			if($this->model->delete($id)) {
				$this->appView->set('message', ['success'=>'Deleted about_u']);
			} else {
				$this->appView->set('message', ['error'=>' Could not Delete about_u !']);
			}

			$this->index();

		}

        /* Viewing about_u from the table
        *  Getting about_u Id from params array
        *  @author berkaPhp
        */

		function view($params) {

			$id = $params['params'];

			$result = $this->model->fetchBy(['fields'=>['id'=>$id]]);
			$this->appView->set('about_u',$result);
			$this->appView->render();
		}

	}

?>