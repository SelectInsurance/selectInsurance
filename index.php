    <?php
    //require_once 'app/controllers/app_autoload_controller.php'; sin implementacion



    //Controller principal
    require_once 'app/controllers/ControllerSelectInsurance.php';
    $controller = new ControllerPrincipal();
    switch ($_GET['pages']) {
        case 'inicio':
            $controller->ControllerInicio();
            break;
        case 'agentes':
            $controller->ControllerAgentes();
            break;

            //Validacion para conseguir el refresco de la pagina ya que se quedaba en blanco si no aplicaba header
        case 'ValidacionLogin':
            if (isset($_POST['btnloginSalud'])) {
                $controller->ControllerLogeadoSalud('admin', $_POST['password']);
                header('Location:./?pages=Videos-de-salud');
            } elseif (isset($_POST['btnloginVida'])) {
                $controller->ControllerLogeadoVida('admin', $_POST['password']);
                header('Location:./?pages=Videos-de-Vida');
            }
            break;

            //Validacion si existe inicio de sesion en videos de salud
        case 'Videos-de-salud':
            if (!empty($_SESSION['logeado']) || !empty($_SESSION['managment'])) {
                $controller->ControllerVideosDeSalud();
            } else {
                $controller->ControllerLogeadoSalud('admin', $_POST['password']);
                header('./?pages=Videos-de-salud');
            }
            break;

            //Validacion si existe inicio de sesion en videos de Vida
        case 'Videos-de-Vida':
            if (!empty($_SESSION['logeado']) || !empty($_SESSION['managment'])) {
                $controller->ControllerVideosDeVida();
            } else {
                $controller->ControllerLogeadoVida('admin', $_POST['password']);
                header('./?pages=Videos-de-Vida');
            }
            break;

            //si no ingresa en ninguna de las condiciones anteriores
        default:
            if (!isset($_GET['pages']) && empty($_GET['managment'])) {
                $controller->ControllerInicio();
            }
            break;
    }







    //Controller del Managment
    require_once 'app/controllers/ControllerManagment.php';
    $ManagmentController = new ControllerManagment();

    switch ($_GET['managment']) {
            //login de managment
        case 'login':
            if (empty($_SESSION['managment'])) {
                $ManagmentController->ControllerManagmentLogin();
            } else {
                header('Location:?managment=Inicio');
            }
            break;

            //Validacion para conseguir el refresco de la pagina ya que se quedaba en blanco si no aplicaba header
        case 'validacion-managment-login':
            $ManagmentController->ControllerManagmentConsultaLogin($_POST['user'], $_POST['pass']);
            header('Location:?managment=Inicio');
            break;

            //Inicio para ingresar a los modulos
        case 'Inicio':
            if (!empty($_SESSION['managment'])) {
                $ManagmentController->ControllerPrincipalManagment();
            } else {
                header('Location:?managment=login');
            }
            break;

            //Carga Video de Vida
        case 'CargaVideosLife':
            if (!empty($_SESSION['managment'])) {
                $ManagmentController->ControllerManagmentCargaVideosVida();
            } else {
                $ManagmentController->ControllerManagmentLogin();
            }
            break;

            //Recibiendo Videos para subida al servidor
        case 'CargandoVideosAnico':
            if (!empty($_SESSION['managment'])) {
                if (isset($_POST['btnUploadVideoAnico'])) {
                    $ManagmentController->ControllerCargandoVideos($_POST['NombreVideoAnico'], $_FILES['Anico']['tmp_name'], $_FILES['Anico']['name'], $_FILES['Anico']['size'], $_FILES['Anico']['type'], 'VideosAnico', 'app/views/assets/videos/videos_vida/anico/');
                    header('Location:./?managment=CargaVideosLife');
                }
            } else {
                $ManagmentController->ControllerManagmentLogin();
            }
            break;
        case 'CargandoVideosAmeritas':
            if (!empty($_SESSION['managment'])) {
                if (isset($_POST['btnUploadVideoAmeritas'])) {
                    $ManagmentController->ControllerCargandoVideos($_POST['NombreVideoAmeritas'], $_FILES['Ameritas']['tmp_name'], $_FILES['Ameritas']['name'], $_FILES['Ameritas']['size'], $_FILES['Ameritas']['type'], 'VideosAmeritas', 'app/views/assets/videos/videos_vida/ameritas/');
                    header('Location:./?managment=CargaVideosLife');
                } else {
                    $controller->ControllerInicio();
                }
                break;
            }
        case 'CargandoVideosNationalLife':
            if (!empty($_SESSION['managment'])) {
                if (isset($_POST['btnUploadVideoNationalLife'])) {
                    $ManagmentController->ControllerCargandoVideos($_POST['NombreVideoNationalLife'], $_FILES['NationalLife']['tmp_name'], $_FILES['NationalLife']['name'], $_FILES['NationalLife']['size'], $_FILES['NationalLife']['type'], 'VideosNationalLife', 'app/views/assets/videos/videos_vida/national_life/');
                    header('Location:./?managment=CargaVideosLife');
                }
            } else {
                $controller->ControllerInicio();
            }




            //Carga Video de Salud
        case 'CargaVideosSalud':
            if (!empty($_SESSION['managment'])) {
                $ManagmentController->ControllerManagmentCargaVideosSalud();
            } else {
                $ManagmentController->ControllerManagmentLogin();
            }
            break;

        case 'CargandoVideosSalud':
            if (!empty($_SESSION['managment'])) {
                if (isset($_POST['btnUploadVideoSalud'])) {
                    $ManagmentController->ControllerCargandoVideos($_POST['NombreVideoDeSalud'], $_FILES['VideoSalud']['tmp_name'], $_FILES['VideoSalud']['name'], $_FILES['VideoSalud']['size'], $_FILES['VideoSalud']['type'], 'videosdesalud', 'app/views/assets/videos/videos_de_salud/');
                    header('Location:./?managment=CargaVideosSalud');
                }
            } else {
                $ManagmentController->ControllerManagmentLogin();
            }
            break;
        case 'EliminarEditarVideosSalud':
            $ManagmentController->ControllerManagmentEditarEliminarVideoSalud();
            break;

        default:
            if (!isset($_GET['pages']) && empty($_GET['managment'])) {
                $controller->ControllerInicio();
            }
            break;
    }
    ?>
