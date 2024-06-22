<?php
    echo "<link rel=stylesheet href=estilos.css>";

    if ($_SERVER['REQUEST_METHOD']=='POST')
    {
        $user=!empty($_POST['user']) ? htmlspecialchars(trim($_POST['user'])): "El nombre de usuario es requerido";
        $pass=!empty($_POST['pass']) ? htmlspecialchars(trim($_POST['pass'])): "La contraseña es requerida";
        $age=!empty($_POST['age']) ? htmlspecialchars(trim($_POST['age'])): "La edad es requerida";
        
        if($user!="El nombre de usuario es requerido" && $pass!="La contraseña es requerida" && $age!="La edad es requerida")
        {
            if ($user=='luis' && $pass=='mendoza' && $age>=18 && $age<=99) {
            echo "<p> Inicio de sesión exitoso. Bienvenido ".$user."</p>";   
            }
            else{
            echo "<p> Comprueba tu información </p>";
            echo "<center> <a href='index.html'>volver</a></center>";   
            }
        }
        else
        {
            echo "Porfavor llena los campos requeridos";
        }
    }
?>