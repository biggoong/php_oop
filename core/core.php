<?php
class Core
{
    public function _construct()
    {

    }

    public function start()
    {
        session_start();

        $controller = $_REQUEST['page'] ?? 'main';
        $action = $_REQUEST['action'] ?? 'index';
        
        switch ($action) {
            case 'index':
                $c_path = __DIR__.'/../controllers/'.$controller.'_controller.php';
                $m_path = __DIR__.'/../models/'.$controller.'_model.php';
                include $c_path;
                if (file_exists($m_path)){
                    include $m_path;
                    $m_name = 'model'.ucfirst($controller);
                    $model = new $m_name;
                };
                $c_name = 'controller'.ucfirst($controller);
                $controller = new $c_name;
                $controller->actionIndex();
                break;
            case 'reg':
                $c_path = __DIR__.'/../controllers/registration_controller.php';
                include $c_path;
                $c_name = 'controllerRegistration';
                $controller = new $c_name;
                $controller->reg($_POST);
                break;
            case 'login':
                $c_path = __DIR__.'/../controllers/login_controller.php';
                include $c_path;
                $c_name = 'controllerLogin';
                $controller = new $c_name;
                $controller->login($_POST);
                break;
        };
    }
}