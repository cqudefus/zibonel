<?php
	namespace controller;
	use berkaPhp\Controller\AppController;

	class NewsController extends AppController
	{
        private $recent_posts;

		function __construct() {
			parent::__construct();

            $this->recent_posts = $this->model->fetchAll([
                'fields'=>[
                    'hide'=>'0',
                    'ref_type_id'=> '2'
                ],
                'options'=>[
                    'order by'=>['view','DESC'],
                    'limit'=>[0, 5]
                ]
            ]);
		}

        /* Display all news from database
        *  Default action in this controller
        *  @author berkaPhp
        */

		function index() {

			$result = $this->model->fetchBy([
                'fields'=>[
                    'news.hide'=>'0',
                    'ref_type_id'=> '2'
                ],
                'options'=>[
                    'order by'=>['news.published_date','DESC'],
                ]
            ],[
                'join'=> true,
            ]);

            $this->appView->set('title', 'Zibonele FM News');
            $this->appView->set('page_title', 'Our News');
			$this->appView->set('news', $result);
            $this->appView->set('recent_posts', $this->recent_posts);
			$this->appView->render();

		}

        /* Add new into database
        *  Getting data from Post
        *  @author berkaPhp
        */

		function view($params) {

			$link = $params['params'];

			$result = $this->model->fetchBy(['fields'=>['link'=>$link]],['join'=>true]);

            $this->appView->set('title', 'Zibonele FM News');
            $this->appView->set('page_title', ' ');
			$this->appView->set('new',$result);
            $this->appView->set('recent_posts', $this->recent_posts);
			$this->appView->render();
		}

        function viewed() {
            if($this->is_set($this->getPost())) {

                $link = $this->getPost()['link'];
                $news = $this->loadModel('News')->fetchBy(['fields'=>['link'=>$link]])[0];

                $count = (int) $news['view'] + 1;

                if ($this->model->update(['view'=> $count, 'id'=>$news['id']])){
                    //return "updated";
                }
            }
        }

	}

?>
