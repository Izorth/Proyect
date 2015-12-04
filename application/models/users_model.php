<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Users_model extends CI_Model{
	
function get_users(){
   $this->db->select('id, name, last_name, username');
   $query = $this->db->get('usuarios');
   return $query->result();
   
}

function username_check($username)
{
  $this->db->where('username', $username);
  $query = $this->db->get('usuarios');
  
  if($query->num_rows>0){
  	return FALSE;
   }else{
  		 return TRUE;
	    }
}


function add_user($name, $last_name, $username,$password){
	
	$data = array(
	'name' => $name,
	'last_name' => $last_name,
	'username' => $username,
	'password' => $password
	);
	
	return $this->db->insert('usuarios', $data);
}

function edit_user($id)
{
  $this->db->where('id', $id);
  $query = $this->db->get('usuarios');
  
return $query->result();
}

function update_user($id, $name,$last_name, $username,$password){
	
	$data = array(
               'name' => $name,
               'last_name' => $last_name,
               'username' => $username,
               'password'=>$password
            );

$this->db->where('id', $id);
return $this->db->update('usuarios', $data);

 	
}

function user_check($username, $id){
   	
$this->db->where('id !=', $id);
$this->db->where('username', $username);
$query = $this->db->get('usuarios');

   if($query->num_rows()>0){
   	
	return false;
	
   }else{
   	
	return true;
   }
 }

function delete_user($id){
	
	$this->db->where('id', $id);
	$query = $this->db->delete('usuarios'); 

return true;

}

} 
