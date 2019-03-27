<?php
class controllerMain extends Controller
{
    public function actionIndex()
    {
        $this->view->output('main_view.php', 'template_view.php');
    }
}