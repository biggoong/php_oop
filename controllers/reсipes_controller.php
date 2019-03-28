<?php
class controllerReсipes extends Controller
{
    public function actionIndex()
    {
        $model_name = $this->createModel('recipes');
        $data = $model_name->get_data();
        $this->output('recipes_view.php', 'template_view.php', $data);
    }
    public function logout()
    {
	    $_SESSION = [];
	    setcookie('token', '', time()+1);
	    header('Location: ?page=login');
    }
}