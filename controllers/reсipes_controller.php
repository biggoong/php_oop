<?php
class controllerReсipes extends Controller
{
    public function actionIndex()
    {
        $data = $this->model->get_data();
        $this->view->output('recipes_view.php', 'template_view.php', $data);
    }
}