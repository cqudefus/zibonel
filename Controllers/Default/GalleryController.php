<?php
	namespace controller;
	use berkaPhp\Controller\AppController;

	class GalleryController extends AppController
	{

		function __construct() {
			parent::__construct();
		}

        /* Display all gallery from database
        *  Default action in this controller
        *  @author berkaPhp
        */

		function index() {

			$result = $this->model->fetchAll();
			$this->appView->set('gallery', $result);
			$this->appView->set('page_title', 'Our Gallery');
			$this->appView->render();

		}

        /* Add galler into database
        *  Getting data from Post
        *  @author berkaPhp
        */

		function add() {

			if($this->is_set($this->getPost())) {
				if ($this->model->add($this->getPost())) {
					$this->appView->set('message', ['success'=>'Saved galler']);
				} else {
					$this->appView->set('message', ['error'=>' Could not Saved galler !']);
				}
			}

			$this->appView->render();
		}

        /* Edit galler and update the table
        *  Getting data from Post
        *  Id from params array
        *  @author berkaPhp
        */

		function edit($params) {

			$id = $params['params'];

			if($this->is_set($this->getPost())) {
				if ($this->model->update($this->getPost())) {
					$this->appView->set('message', ['success'=>'Edited galler']);
				} else {
					$this->appView->set('message', ['error'=>' Could not Edit galler !']);
				}
			}

			$result = $this->model->fetchBy(['fields'=>['id'=>$id]]);
			$this->appView->set('galler',$result);
			$this->appView->render();
		}

        /* Delete galler from the table
        *  Getting galler Id from params array
        *  @author berkaPhp
        */

		function delete($params) {

			$id = $params['params'];

			if($this->model->delete($id)) {
				$this->appView->set('message', ['success'=>'Deleted galler']);
			} else {
				$this->appView->set('message', ['error'=>' Could not Delete galler !']);
			}

			$this->index();

		}

        /* Viewing galler from the table
        *  Getting galler Id from params array
        *  @author berkaPhp
        */

		function view($params) {

			$id = $params['params'];

			$result = $this->model->fetchBy(['fields'=>['id'=>$id]]);
			$this->appView->set('galler',$result);
			$this->appView->render();
		}

	}

?>
