<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Products_Model extends CI_Model {

function get_products($pagination, $segment) {
	
  $this->db->order_by('marca', 'asc'); 	
  $this->db->limit($pagination, $segment);
  $query = $this->db->get('productos')->result();
     
  		foreach ($query as $result) {
			
			if ($result->valores) {
				$result->valores = explode(',',$result->valores);
			}
			
		}
		
	return $query;	      
}
  
function get_product($id) {
		
		$query = $this->db->get_where('productos', array('id' => $id))->result();
			
		$result = $query[0];
		
		if ($result->valores) {
			$result->valores = explode(',',$result->valores);
		}
				
		return $result;
	}

    	  
}
