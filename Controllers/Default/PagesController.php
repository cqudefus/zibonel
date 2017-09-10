<?php
	namespace controller;
	use berkaPhp\Controller\AppController;

	class PagesController extends AppController
	{

		function __construct() {
			parent::__construct(false);
		}

        /* Display all pages from database
        *  Defauhometitruetroller
        *  @author berkaPhp
       */

		function index() {

            $news = $this->loadModel('News')->fetchBy([
                'fields'=>[
                    'news.hide'=>'0',
                    'ref_type_id'=> '2'
                ],
                'options'=>[
                    'order by'=>['news.published_date','DESC'],
                    'limit'=>[0,3]
                ]
            ],[
                'join'=> true,
            ]);

            $this->appView->set('title', 'Zibonele FM');
            $this->appView->set('news', $news);
			$this->appView->set('show_breadcrumb', false);
            // $this->appView->set('home', false);
			$this->appView->render();

		}

        /* Add page into database
        *  Getting data from Post
        *  @author berkaPhp
        */

        function live_program() {

            $result = $this->dbInstance("
            SELECT * FROM programs JOIN broadcasts ON pr_ref_broadcast = bc_id
            JOIN broadcast_days ON pr_ref_day = bcd_id JOIN broadcast_times ON pr_ref_time = bct_id

            LIMIT 6");

            //WHERE broadcast_times.bct_to < NOW()

            $result = \zibonale\helpers\DB::extractRows($result);
            $this->appView->set('programs', $result);
            $this->appView->renderAjax();

        }



	}

?>
