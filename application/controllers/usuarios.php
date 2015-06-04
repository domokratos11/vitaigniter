<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Description of usuarios
 *
 * @author reynaldoalfonso
 */

class Usuarios extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('usuarios_model');#cargar siempre el modelo que se utilizara
    }
    /**
     * Index siempre me cargara los datos de la tabla
     */
    public function index(){
        $datos['usuarios']=$this->usuarios_model->get_usuarios();
        $cabecera['titulo']="Usuarios del sistema";
        $this->load->view('template/header',$cabecera);
        $this->load->view('usuarios/index',$datos);
        $this->load->view('template/footer');
    }
    
    /**
     * 
     */
    public function editar_usuario($id){
        $datos['usuario']=$this->usuarios_model->get_usuario($id);
        $cabecera['titulo']="Edición de usuario";
        $this->load->view('template/header',$cabecera);
        $this->load->view('usuarios/editar',$datos);
        $this->load->view('template/footer');
    }
    /**
     * 
     */
    public function agregar_usuario(){
        $cabecera['titulo']="Agregar usuario";
        $this->load->view('template/header',$cabecera);
        $this->load->view('usuarios/agregar');
        $this->load->view('template/footer');
    }
    /**
     * 
     */
    public function eliminar_usuario($id){
        $this->usuarios_model->delete_usuario($id);
        redirect(base_url().'usuarios/');
    }
    /*
     * Mando un cero cuando quiero indicar es nuevo registro
     * mando el id que sera siempre >0 cuando es un registro diferente
     * el array data tiene exactamente el nombre de los campos de la base
     * para evitar rehacerlo en el controlador
     */
    public function guardar_usuario($id){
        $data= array(
                'nombre_usuario'=> $this->input->post('nombre_usuario'),
                'password'=> $this->input->post('password'),
                'adminrights'=> $this->input->post('adminrights')
            );
        if($id>0):
            #Significa que es una actualización
            $this->usuarios_model->update_usuario($id,$data);
            redirect(base_url().'usuarios/');
        else:
            #significa que es una adición
            $this->usuarios_model->insert_usuario($data);
            redirect(base_url().'usuarios/');
        endif;
    }
}
