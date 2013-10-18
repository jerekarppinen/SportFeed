<?php

class Hutasu_sivut extends CI_Model {

	function haeKaikki() {
		
		$q = $this->db->query("SELECT menunimi FROM hutasu_sivut WHERE taso = 'paavalikko';");
		
		if($q->num_rows() > 0)
		{
		
			foreach ($q->result() as $row)
			{
				$data[] = $row;
			}
		
		return $data;
		
		}
		
	}
}

?>