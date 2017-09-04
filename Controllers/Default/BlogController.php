<?php
	namespace controller;
	use berkaPhp\Controller\AppController;

	class BlogController extends AppController
	{
        private $recent_posts;

		function __construct() {
			parent::__construct(false);
		}

        /* Display all news from database
        *  Default action in this controller
        *  @author berkaPhp
        */

		function index() {

			$result = $this->loadModel('News')->fetchBy([
                'fields'=>[
                    'news.hide'=>'0',
                    'ref_type_id'=> '1'
                ],
                'options'=>[
                    'order by'=>['news.published_date','DESC'],
                ]
            ],[
                'join'=> true,
            ]);

            $this->appView->set('title', 'Zibonele FM Blog');
            $this->appView->set('page_title', 'Our Blog');
			$this->appView->set('blogs', $result);
            // $this->appView->set('recent_posts', $this->result);
			$this->appView->render();

		}

        /* Add new into database
        *  Getting data from Post
        *  @author berkaPhp
        */

		function view($params) {

			$link = $params['params'];

			$result = $this->model->fetchBy(['fields'=>['link'=>$link]],['join'=>true]);

            $this->appView->set('title', 'Zibonele FM Blog');
            $this->appView->set('page_title', ' ');
			$this->appView->set('new',$result);
            $this->appView->set('recent_posts', $this->recent_posts);
			$this->appView->render();
		}

	}

?>
