<?php
namespace models;

/* Using the base AppTable to extend it and  inherit table functionality
*  Default action in this controller
*  @author berkaPhp
*/

use berkaPhp\database\table\AppTable;

class News_commentsTable extends AppTable
{
	function __construct() {

        /* Initializing the parent table
        *  @param current table name
        *  @author berkaPhp
        */

		parent::__construct('news_comments');

		/* Initializing the primary key for this  table
        *  @author berkaPhp
        */

		$this->primary_key = 'com_id';

        $this->contains = [
            'users' => 'user_id'
        ];

        $this->keys = [
            'users' => 'com_ref_user'
        ];
	}
}
?>