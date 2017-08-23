<?php
	namespace controller;
	use berkaPhp\Controller\AppController;

	class ProgramsController extends AppController
	{

		function __construct() {
			parent::__construct();
		}

        /* Display all programs from database
        *  Default action in this controller
        *  @author berkaPhp
        */

		function index() {

            $result = $this->dbInstance("
            SELECT * FROM programs JOIN broadcasts ON pr_ref_broadcast = bc_id
            JOIN broadcast_days ON pr_ref_day = bcd_id JOIN broadcast_times ON pr_ref_time = bct_id
            LEFT JOIN broadcast_presenters ON bc_id = bp_ref_bc LEFT JOIN presenters ON broadcast_presenters.bp_ref_pres = presenters.pr_id
            LEFT JOIN staffs ON presenters.ref_staff_id = staffs.staff_id LEFT JOIN users ON staffs.ref_user_id = users.user_id
            ");

            $result = \zibonale\helpers\DB::extractRows($result);
            //print_r($result);
            $this->appView->set('title', 'Zibonel FM Programs');
            $this->appView->set('page_title', 'Zibonel FM Programs');
			$this->appView->set('programs', $result);
			$this->appView->render();

		}

        /* Add program into database
        *  Getting data from Post
        *  @author berkaPhp
        */

		function add() {

			if($this->is_set($this->getPost())) {
				if ($this->model->add($this->getPost())) {
					$this->appView->set('message', ['success'=>'Saved program']);
				} else {
					$this->appView->set('message', ['error'=>' Could not Saved program !']);
				}
			}

			$this->appView->render();
		}

        /* Edit program and update the table
        *  Getting data from Post
        *  Id from params array
        *  @author berkaPhp
        */

		function edit($params) {

			$id = $params['params'];

			if($this->is_set($this->getPost())) {
				if ($this->model->update($this->getPost())) {
					$this->appView->set('message', ['success'=>'Edited program']);
				} else {
					$this->appView->set('message', ['error'=>' Could not Edit program !']);
				}
			}

			$result = $this->model->fetchBy(['fields'=>['pr_id'=>$id]]);
			$this->appView->set('program',$result);
			$this->appView->render();
		}

        /* Delete program from the table
        *  Getting program Id from params array
        *  @author berkaPhp
        */

		function delete($params) {

			$id = $params['params'];

			if($this->model->delete($id)) {
				$this->appView->set('message', ['success'=>'Deleted program']);
			} else {
				$this->appView->set('message', ['error'=>' Could not Delete program !']);
			}

			$this->index();

		}

        /* Viewing program from the table
        *  Getting program Id from params array
        *  @author berkaPhp
        */

		function view($params) {

			$id = $params['params'];

			$result = $this->model->fetchBy(['fields'=>['pr_id'=>$id]]);
			$this->appView->set('program',$result);
			$this->appView->render();
		}

	}

?>