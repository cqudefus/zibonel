<?php
namespace models;

/* Using the base AppTable to extend it and  inherit table functionality
*  Default action in this controller
*  @author berkaPhp
*/

use berkaPhp\database\table\AppTable;

class PresentersTable extends AppTable
{
	function __construct() {

        /* Initializing the parent table
        *  @param current table name
        *  @author berkaPhp
        */

		parent::__construct('presenters');

		/* Initializing the primary key for this  table
        *  @author berkaPhp
        */

		$this->primary_key = 'pr_id';

        $this->contains = [
            'staffs' => 'staff_id',
            '@users' => 'user_id'
        ];

        $this->keys = [
            'staffs' => 'ref_staff_id',
            '@users' => 'staffs.ref_user_id'
        ];
	}
}
?>