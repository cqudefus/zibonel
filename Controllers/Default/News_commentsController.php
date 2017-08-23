<?php
	namespace controller;
	use berkaPhp\Controller\AppController;

	class News_commentsController extends AppController
	{

		function __construct() {
			parent::__construct();
		}

        /* Add news_comment into database
        *  Getting data from Post
        *  @author berkaPhp
        */

		function add() {

			if($this->is_set($this->getPost())) {

				if ($this->model->add($this->getPost())) {
                    return $this->jsonFormat(['success'=>'Saved news_comment']);
				} else {
                    return $this->jsonFormat(['error'=>' Could not Saved news_comment !']);
				}

			} else {

                return $this->jsonFormat(['error'=>' invalid method']);

            }

		}

        /* Edit news_comment and update the table
        *  Getting data from Post
        *  Id from params array
        *  @author berkaPhp
        */

		function edit($params) {

			$id = $params['params'];

			if($this->is_set($this->getPost())) {
				if ($this->model->update($this->getPost())) {
					$this->appView->set('message', ['success'=>'Edited news_comment']);
				} else {
					$this->appView->set('message', ['error'=>' Could not Edit news_comment !']);
				}
			}

			$result = $this->model->fetchBy(['fields'=>['com_id'=>$id]]);
			$this->appView->set('news_comment',$result);
			$this->appView->render();
		}

        function load($params) {

            $result = $this->model->fetchBy(['fields'=>['com_ref_news'=>$params['params']]],['join'=>true]);
            $this->appView->set('comments',$result);
            $this->appView->renderAjax();

        }

	}

?>