<?php
class Usuarios_model extends CI_Model{
	function __construct(){
		parent::__construct();
	}
   function ValidarUsuario($email,$password){         //   Consulta Mysql para buscar en la tabla Usuario aquellos usuarios que coincidan con el mail y password ingresados en pantalla de login
      $query = $this->db->where('Usuario',$email);   //   La consulta se efectúa mediante Active Record. Una manera alternativa, y en lenguaje más sencillo, de generar las consultas Sql.
      $query = $this->db->where('Password',$password);
      $query = $this->db->get('usuarios');
      return $query->row();       //   Devolvemos al controlador la fila que coincide con la búsqueda. (FALSE en caso que no existir coincidencias)
   }

     /* public function search_users($usertype){
        $this->db->like('Usertype', $usertype);
        $query = $this->db->get('usuarios');
        if($query->num_rows() > 0 )
        {
            return $query->result();
        }
    }

 $data['search_after_users'] = $this->consultas_model->search_users('I');*/



   public function eliminar2($email){
     $this->db->where('Usuario', $email);

     if ($this->db->delete('usuarios')){
      echo "Usuario eliminado<br><br>";
      $this->load->view('loginn');
    }
   }


   public function AddUsuario($data1){

   	if ($this->db->insert('usuarios', $data1))
   		return true;
   	else
   		return false;
   }
   
}
?>