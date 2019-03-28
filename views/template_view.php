<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Blin Forum</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="/style.css" />
    
</head>
<body>
    <h1>Форум для любителей блинов!</h1>
    <div id="login-bar">
        <a href="?page=registration">Регистрация</a>&nbsp;&nbsp;&nbsp;&nbsp;
        <a href="?page=login">Войти</a>&nbsp;&nbsp;&nbsp;&nbsp;
        <a href="?action=logout">Выйти</a>&nbsp;&nbsp;&nbsp;&nbsp;
    </div>
    <div id="navigation">
        <a href="?page=reсipes">Рецепты</a>&nbsp;&nbsp;&nbsp;&nbsp;
        <a href="?page=main">На главную</a>&nbsp;&nbsp;&nbsp;&nbsp;
    </div>
    <div class="page-container">
        <?php include 'views/'.$content_view; ?>
    </div>
</body>
</html>