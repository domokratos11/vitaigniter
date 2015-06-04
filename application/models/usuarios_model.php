<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Description of usuarios
 *
 * @author reynaldoalfonso
 */
class Usuarios_model extends CI_Model{

    public function __construct() {
        parent::__construct();
    }
    
    /**
     * 
     * Obtiene el listado de todos los usuarios
     */
    public function get_usuarios(){
        $query=$this->db->get('usuarios');
        if($query->num_rows()>0): 
            return $query;
        else: 
            return false;
        endif;
    }
    /**
     * 
     * @param type $id_usuario 
     * Obtiene datos de un usuario especifoco para hacer update
     */
    public function get_usuario($id_usuario){
        $this->db->where('id',$id_usuario);
        $this->db->from('usuarios');
        $query=$this->db->get();
        if($query->num_rows()>0) :
            return $query;
        else :
            return false;
        endif;
    }
    /**
     * Funcion para insertar usuario 
     */
    public function insert_usuario($data){
        $this->db->insert('usuarios',$data);
    }
    /**
     * Funcion para actualizar usuario ocupa el id y los datos
     */
    public function update_usuario($id,$data){
        $this->db->where('id',$id);
        $this->db->update('usuarios',$data);
    }
    /**
     * Función para eliminar usuario
     */
    public function delete_usuario($id){
        $this->db->where('id', $id);
        $this->db->delete('usuarios');
    }
    
}
