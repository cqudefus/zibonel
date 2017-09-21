<?php
	namespace controller;
	use berkaPhp\Controller\AppController;

	class LineupscheduleController extends AppController
	{

		function __construct() {
			parent::__construct();
		}

        /* Display all lineupschedule from database
        *  Default action in this controller
        *  @author berkaPhp
        */

		function index() {

			$result = $this->model->fetchAll();
			$this->appView->set('lineupschedule', $result);
            $this->appView->set('title', 'Zibonele FM News');
            $this->appView->set('page_title', 'Our Programs');
			$this->appView->render();

		}

        /* Add lineupschedul into database
        *  Getting data from Post
        *  @author berkaPhp
        */

		function add() {

			if($this->is_set($this->getPost())) {
				if ($this->model->add($this->getPost())) {
					$this->appView->set('message', ['success'=>'Saved lineupschedul']);
				} else {
					$this->appView->set('message', ['error'=>' Could not Saved lineupschedul !']);
				}
			}

			$this->appView->render();
		}

        /* Edit lineupschedul and update the table
        *  Getting data from Post
        *  Id from params array
        *  @author berkaPhp
        */

		function edit($params) {

			$id = $params['params'];

			if($this->is_set($this->getPost())) {
				if ($this->model->update($this->getPost())) {
					$this->appView->set('message', ['success'=>'Edited lineupschedul']);
				} else {
					$this->appView->set('message', ['error'=>' Could not Edit lineupschedul !']);
				}
			}

			$result = $this->model->fetchBy(['fields'=>['id'=>$id]]);
			$this->appView->set('lineupschedul',$result);
			$this->appView->render();
		}

        /* Delete lineupschedul from the table
        *  Getting lineupschedul Id from params array
        *  @author berkaPhp
        */

		function delete($params) {

			$id = $params['params'];

			if($this->model->delete($id)) {
				$this->appView->set('message', ['success'=>'Deleted lineupschedul']);
			} else {
				$this->appView->set('message', ['error'=>' Could not Delete lineupschedul !']);
			}

			$this->index();

		}

        /* Viewing lineupschedul from the table
        *  Getting lineupschedul Id from params array
        *  @author berkaPhp
        */

		function view($params) {

			$id = $params['params'];

			$result = $this->model->fetchBy(['fields'=>['id'=>$id]]);
			$this->appView->set('lineupschedul',$result);
			$this->appView->render();
		}

	}

?>