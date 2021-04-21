<!DOCTYPE html>
<html>
    <head>
        <meta charset ="UTF-8">
        <title>CalculadoraPHP</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <style type="text/css">
            body{
                background-color:teal;
            }
            h1{
                text-align:center;
            }
            h3{
                text-align:center;
            }
            .center{
                margin:auto;
                width:60%;
                padding:10px;
                border:3px solid tan;
            }

            #answer{
                background-color:gainsboro;
                padding:30px;
                border-radius:4x;
                text-align:center;
            }
        </style>
    </head>
    <body>
        <h1>Calculadora PHP</h1>
        <h3>Insira números nas caixas abaixo</h3>
        <div class="conteudo">

            <div class="fila">

                <div class="col-lg-3"></div>

                <div class="center">
                    <form method="POST">
                        <input type="number" class=center name="x" placeholder="Número 1" class="form-control">
                        <br>
                        <br>
                        <input type="number" class=center name="y" placeholder="Número 2" class="form-control">
                        <br>
                        <br>
                        <select name="Cálculo">
                            <option value="sum">+</option>
            
                            <option value="dif">-</option>
            
                            <option value="multi">x</option>
            
                            <option value="div">÷</option>

                            <option value="exp">x^y</option>

                            <option value="raiz">√</option>

                            <option value="inv">1/x</option>

                            <option value="perc">%</option>
                        </select>
                        <br>
                        <br>
                        <input type="submit" name="subit" value="Calcular" class="btn btn-success">
                    </form>
                    <br>
                    <h3>A resposta é: </h3>
                </div>

                <div id="resposta"></div>

                <div class="col-lg-3"></div>
            </div>

        </div>
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
    elseif ($sinal == "exp"){
        echo (pow($x,$y));
    }
    elseif ($sinal == "raiz"){
        echo (sqrt($x,$y));
    }
    elseif ($sinal == "inv"){
        echo 1/$x;
    }
    elseif ($sinal == "perc"){
        echo $x+($y/100*$x);
    }
    else echo verificar($x,$y,$sinal);            
?>
        
    </body>
</html>
