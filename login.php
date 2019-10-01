<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Login</title>
        <link rel="stylesheet" href="estilos/styles1.css">
    </head>
    <body>
        <header class="classheader classdivtext">
            <h1>Login</h1>
        </header>
        <div class="classdiv classdiv4 classdiv6" align="center">
            <form action="login.php" method="post">
                <input type="text" name="user" value="" placeholder="Usuario"><br><br>
                <input type="password" name="pass" value="" placeholder="Contraseña"><br><br>
                <input class="classbutton classbutton3" type="submit" name="" value="Login">
            </form>
            <?php
                if(isset($_POST['user'])){
                    $user = $_POST['user'];
                    $pass = $_POST['pass'];
                    if($user == "admin" && $pass =="123"){
                        header("Location: inicio.php");
                    }else{
                        echo "<p class='classplogin'>Usuario o contraseña incorrectos.</p>";
                        echo "<p class='classplogin'>Intentelo nuevamente.</p>";
                    }
                }
            ?>
        </div>
    </body>
</html>
