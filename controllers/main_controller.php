<?php
class controllerMain extends Controller
{
    public function actionIndex()
    {
        $this->output('main_view.php', 'template_view.php');
    }
    public function logout()
    {
	    $_SESSION = [];
	    setcookie('token', '', time()+1);
	    header('Location: ?page=login');
    }
}