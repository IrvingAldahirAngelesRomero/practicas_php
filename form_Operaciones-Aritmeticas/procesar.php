<?php
//echo "<link rel=stylesheet href=estilos.css>";

    function sumar($num1,$num2){
        return $num1 + $num2;
    }
    function restar($num1,$num2){
        return $num1 - $num2;
    }
    function multiplicar($num1,$num2){
        return $num1 * $num2;
    }
    function dividir($num1,$num2){
        if($num1 != 0 || $num2!=0){
            return $num1 / $num2;
        }else{
            return "no se puede dividir entre 0";
        }
    }
    if ($_SERVER['REQUEST_METHOD']=='POST')
    {
        $valor1 = $_POST['val1'];
        $valor2 = $_POST['val2'];
        $operacion = $_POST['operacion'];
        $res="";

        $val1=!empty($_POST['val1']) ? htmlspecialchars(trim($_POST['val1'])): "El campo 1 es requerido";
        $val2=!empty($_POST['val2']) ? htmlspecialchars(trim($_POST['val2'])): "El campo 2 es requerido";
        
        if($val1!="El campo 1 es requerido" && $val2!="El campo 2 es requerido")
        {
            switch($operacion){
                case'Suma':
                    $res=sumar($valor1,$valor2);
                break;
                
                case'Resta':
                    $res=restar($valor1,$valor2);
                break;          
                
                case'Multiplicacion':
                    $res=multiplicar($valor1,$valor2);
                break;                
                
                case'Division':
                    $res=dividir($valor1,$valor2);
                break;
            }
            echo "Resultado: ". $res;
        }
        else
        {
            echo "Porfavor llena los campos requeridos";
        }
    }
?>
