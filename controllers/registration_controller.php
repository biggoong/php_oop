<?php
class controllerRegistration extends Controller
{
    public function actionindex()
    {
        $this->output('registration_view.php', 'template_view.php');
    }
    public function reg($request)
    {
        if ($request['password'] != $request['password_confirm']){
            header('Location: ?page=registration&error=CONFIRM YOUR PASSWORD');
        }
        $salt = random_int(0, PHP_INT_MAX);
        $password_hash = md5($salt . $request['password']);
        $f = fopen('./users.txt', 'a+');
        $record = $request['login']. '|' . $salt . '|' . $password_hash."\n";
        fwrite($f, $record);
        fclose($f);
        header('Location: ?page=login');
    }
}