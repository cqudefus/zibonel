<?php
namespace models;

/* Using the base AppTable to extend it and  inherit table functionality
*  Default action in this controller
*  @author berkaPhp
*/

use berkaPhp\database\table\AppTable;

class ProgramsTable extends AppTable
{
	function __construct() {

        /* Initializing the parent table
        *  @param current table name
        *  @author berkaPhp
        */

		parent::__construct('programs');

		/* Initializing the primary key for this  table
        *  @author berkaPhp
        */

		$this->primary_key = 'id';

        $this->contains = [
            'broadcasts' => 'bc_id',
            'broadcast_days'=>'bcd_id',
            'broadcast_times'=>'bct_id'
        ];

        $this->keys = [
            'broadcasts' => 'pr_ref_broadcast',
            'broadcast_days'=>'pr_ref_day',
            'broadcast_times'=>'pr_ref_time'
        ];
	}
}
?>