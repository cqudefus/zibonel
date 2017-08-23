<?php
	namespace controller;
	use berkaPhp\Controller\AppController;

	class News_categoriesController extends AppController
	{

		function __construct() {
			parent::__construct();
		}

        /* Display all news_categories from database
        *  Default action in this controller
        *  @author berkaPhp
        */

		function index() {

			$result = $this->model->fetchAll();
			$this->appView->set('news_categories', $result);
			$this->appView->render();

		}

        /* Add news_category into database
        *  Getting data from Post
        *  @author berkaPhp
        */

		function add() {

			if($this->is_set($this->getPost())) {
				if ($this->model->add($this->getPost())) {
					$this->appView->set('message', ['success'=>'Saved news_category']);
				} else {
					$this->appView->set('message', ['error'=>' Could not Saved news_category !']);
				}
			}

			$this->appView->render();
		}

        /* Edit news_category and update the table
        *  Getting data from Post
        *  Id from params array
        *  @author berkaPhp
        */

		function edit($params) {

			$id = $params['params'];

			if($this->is_set($this->getPost())) {
				if ($this->model->update($this->getPost())) {
					$this->appView->set('message', ['success'=>'Edited news_category']);
				} else {
					$this->appView->set('message', ['error'=>' Could not Edit news_category !']);
				}
			}

			$result = $this->model->fetchBy(['fields'=>['cat_id'=>$id]]);
			$this->appView->set('news_category',$result);
			$this->appView->render();
		}

        /* Delete news_category from the table
        *  Getting news_category Id from params array
        *  @author berkaPhp
        */

		function delete($params) {

			$id = $params['params'];

			if($this->model->delete($id)) {
				$this->appView->set('message', ['success'=>'Deleted news_category']);
			} else {
				$this->appView->set('message', ['error'=>' Could not Delete news_category !']);
			}

			$this->index();

		}

        /* Viewing news_category from the table
        *  Getting news_category Id from params array
        *  @author berkaPhp
        */

		function view($params) {

			$id = $params['params'];

			$result = $this->model->fetchBy(['fields'=>['cat_id'=>$id]]);
			$this->appView->set('news_category',$result);
			$this->appView->render();
		}

	}

?>