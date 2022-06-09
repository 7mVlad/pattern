<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>MVC</title>
    <style>
        body {
            margin-top: 100px    ;
            text-align: center;
        }
    </style>
</head>
<body>
    
    <form action="Controller.php" method="POST">
        <input type="text" name="email" placeholder="Введите E-mail" required> <br>
        <input type="password" name="password" placeholder="Введите пароль" required> <br> <br>
        <input type="submit">
    </form>

</body>
</html>

<?php

class View {
    
    public function showResult($text) {
        echo "<h1> " . $text . "</h1>";
    }
}

$view = new View();

?>



