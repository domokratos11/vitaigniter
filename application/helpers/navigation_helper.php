<?php
defined('BASEPATH') OR exit('No direct script access allowed');

if(!function_exists('menu_ul')):
   function menu_ul($nivel){
        $urls=array(
            "usuarios" => base_url()."usuarios/",
            "pacientes" => base_url()."pacientes/",
            "paquetes" => base_url()."paquetes/",
            "servicios" => base_url()."servicios/",
            "pagos_pendientes"=> base_url()."sys/"
        );
        
        $menu= ($nivel==1?"<li><a href=".$urls['usuarios']." >Usuarios</a></li> \n\t\t":"");
        $menu.="<li><a href=".$urls['pacientes']." >Pacientes</a></li> \n\t\t";
        $menu.="<li><a href=".$urls['paquetes']." >Paquetes</a></li> \n\t\t";
        $menu.="<li><a href=".$urls['servicios']." >Servicios</a></li> \n\t\t";
        $menu.="<li><a href=".$urls['pagos_pendientes']." >Pagos Pendientes</a></li>";
        return $menu;
   }
endif;