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
                include __DIR__.'/../controllers/'.$controller.'_controller.php';
                $c_name = 'controller'.ucfirst($controller);
                $controller = new $c_name;
                $controller->actionIndex();
                break;
            case 'reg':
                include __DIR__.'/../controllers/registration_controller.php';
                $controller = new controllerRegistration();
                $controller->reg($_POST);
                break;
            case 'login':
                include __DIR__.'/../controllers/login_controller.php';
                $controller = new controllerLogin();
                $controller->login($_POST);
                break;
            case 'logout':
                include __DIR__.'/../controllers/'.$controller.'_controller.php';
                $c_name = 'controller'.ucfirst($controller);
                $controller = new $c_name;
                $controller->logout();
                break;
        };
    }
}