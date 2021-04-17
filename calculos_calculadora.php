<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $x = $_POST["x"];
    $y = $_POST["y"];
    $sinal=$_POST["Cálculo"];
    }

    function verificar (int $x,int $y, string $sinal){
        if ($sinal=="div" && $y == 0) 
        {
            echo "Valor inserido na segunda caixa não pode ser zero durante uma divisão";
        }
        else
        {
            echo $x / $y;
        }
    }

    if ($x=="" or $y=="")
    {
        echo "Por favor, insira os números nas caixas";
    }
    elseif ($sinal == "sum"){
        echo $x + $y;
    }
    elseif ($sinal == "dif"){
        echo $x - $y;
    }
    elseif ($sinal == "multi"){
        echo $x * $y;
    }
    else echo verificar($x,$y,$sinal);            
?>
