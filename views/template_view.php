<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Blin Forum</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    
</head>
<body style="text-align:center;">
    <div class="container">
        <h1>Форум для любителей блинов!</h1>
        <div class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a class="nav-link" href="?page=registration">Регистрация</a>&nbsp;&nbsp;&nbsp;&nbsp;
            <a class="nav-link" href="?page=login">Войти</a>&nbsp;&nbsp;&nbsp;&nbsp;
            <a class="nav-link" href="?action=logout">Выйти</a>&nbsp;&nbsp;&nbsp;&nbsp;
        </div>
        <div class="navbar navbar-expand-lg navbar-light" style="background-color: #e3f2fd;">
            <a class="nav-link" href="?page=reсipes">Рецепты</a>&nbsp;&nbsp;&nbsp;&nbsp;
            <a class="nav-link" href="?page=main">На главную</a>&nbsp;&nbsp;&nbsp;&nbsp;
        </div>
        <div class="page-container">
            <?php include 'views/'.$content_view; ?>
        </div>
    </div>
</body>
</html>