<?php
require_once 'app/views/assets/header.php';
require_once 'app/models/autoload.php';

class ControllerManagment extends Pather
{
    public function __construct() {
        $this->table = "UsuarioManagment";
    }
    public function ControllerManagmentLogin()
    {
        require_once 'app/views/assets/NavAgente.php';
        require_once 'app/views/pages/managment/login.php';
    }

    public function ControllerManagmentConsultaLogin($user, $pass){
        $consultar = new ConsultaLogin($user, $pass, $this->table);
        if ($consultar->Consulta()) {
            $_SESSION['logeado'] = 'admin';
        }else {
            require_once 'app/views/assets/NavAgente.php';
            require_once 'app/views/pages/managment/login.php';
        }
    }
}

require_once 'app/views/assets/footer.php';