<?php
	namespace controller;
	use berkaPhp\Controller\AppController;
	use berkaPhp\helpers\SessionHelper;

	class UsersController extends AppController
	{

		function __construct() {
			parent::__construct();
		}

		function add() {
			if($this->is_set($this->get_post())) {
				if ($this->model->add($this->get_post())) {
					$this->flash->success(' Saved user');
				} else {
					$this->flash->error(' Could not Saved user !');
				}
			}

			$this->appView->render();
		}

		function edit($params) {
			$id = $params['params'][0];

			if($this->is_set($this->get_post())) {
				if ($this->model->update($this->get_post())) {
					$this->flash->success(' Edited user');
				} else {
					$this->flash->error(' Could not Edit user !');
				}
			}

			$result = $this->model->fetch_by(['user_id'=>$id]);
			$this->appView->set('user',$result);
			//$this->appView->render();
			$this->appView->render();
		}

        function login() {

            if($this->is_set($this->getPost())) {

                $user = $this->model->fetchWhere(['fields'=>[
                    'user_email'=>$this->getPost()['user_email'],
                    'user_password'=>$this->getPost()['user_password']
                    ]
                ]);

                if (sizeof($user) == 1) {

                    if(SessionHelper::exist('user')) {
                        SessionHelper::remove('user');
                    }

                    SessionHelper::add('user', $user[0]);

                    \berkaPhp\helpers\RedirectHelper::redirect('/admin/pages');
                } else {
                    $this->appView->set('message', ['error'=>'Invalid login details, try again']);
                }
            }

            $this->appView->set('title', 'Zibonele FM | Login');
            $this->appView->set('page_title', 'login');
            $this->appView->render();

        }

        function logout() {
            $this->session->remove('user');
            \berkaPhp\helpers\RedirectHelper::redirect('/');
        }

		function api() {
			return $this->json_format($this->model->fetch_all());
		}

		function search() {
			$tag = $this->get_POST_key('search');
			$result = $this->model->fetch_like($tag);
			$this->appView->set('users',$result);
			$this->appView->run_render('index');
		}

	}

?>
