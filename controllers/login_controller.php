<?php
class controllerLogin extends Controller
{
    public function actionIndex()
    {
        $this->output('login_view.php', 'template_view.php');
    }
    public function login($request)
    {
        $users = file('./users.txt');
        $error = '';
        foreach ($users as $u) {
            $user_parts = explode('|', $u);
            if ($request['login'] == $user_parts[0]) {
                $hash_check = md5($user_parts[1] . $request['password']);
                if (trim($hash_check) == trim($user_parts[2])) {
                    $token = $user_parts[2];
                    setcookie('token', $token, time() + 86400*365);
				    $_SESSION = [
					    'login' => $user_parts[0],
					    'token' => $token,
					    'enter_date' => time()
				    ];
				
                    header('Location: ?page=recipes');
                    return;
                } else {
                    $error = 'pwd_fail';
                }
            } else {
                $error = 'login_fail';
            }
            header('Location: ?page=login&error=' . $error);
        } 
    
    }
}