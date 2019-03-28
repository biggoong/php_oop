<?php
class Controller
{
    public $models = [];

    public function createModel($name) 
    {
        if (isset($this->models[$name])){
            return $this->models[$name];
        }
        include __DIR__.'/../models/'.$name.'_model.php';
        $modelName = 'model'.ucfirst($name);
        return $this->models[$name] = new $modelName();
    }
    public function creatView($name)
    {
        if (isset($this->view[$name])){
            return $this->view[$name];
        }
        include __DIR__.'/../views/'.$name.'_view.php';
        $modelName = 'model'.ucfirst($name);
        return $this->models[$name] = new $modelName();
    }

    public function output($content_view, $template_view, $data = null){
        include 'views/'.$template_view;
    }
}
