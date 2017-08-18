<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Db_master extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		
	}

	public function execute($storeproc){
		$query = $this->db->query("call ".$storeproc."");
        $result=$query->result_array();

        return $result;
	}	

}

/* End of file Db_master */
/* Location: ./application/models/Db_master */