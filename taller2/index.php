<!DOCTYPE html>
<html lang="es"> 

    <head>
        <meta charset="utf-8"/>
        <meta http-equiv="content-type" content="text/html"; charset=utf-8/>

        <title>Taller 2</title>
    </head>
    <body>
        <div>
        <H1>algoritmo 1: </H1> 
        <p>1. Entradas al cine<br>
            Escriba un programa para averiguar cuánto paga una persona por asistir a una función de<br>
            cine. El programa debe recibir una edad a partir de una barra de seguimiento o cuadro de<br>
            texto, y después tomar una decisión con base en estas condiciones:<br>
             Si el espectador es menor de 5 años, la función es gratis;<br>
             Si tiene de 5 a 12 años, paga la mitad de la tarifa;<br>
             Si tiene de 13 a 54 años, paga la tarifa completa;<br>
             Si es mayor de 55, la función es gratis.<br>
        </p>
        <form name="form1" method="POST" action="comprar.php">
            <label>Edad:</label>
            <input type ="text" name="txtedad" placeholder="Escribe una edad*" required> 
            <input type="submit" name="btncomprar" value="comprar">
        </form>
        </div>
        <br>
        <br>
        <br>

        <div>
        <H1>algoritmo 2: </H1> 
        <p>2. Apuestas<br>
            Un grupo de personas desean apostar sobre el resultado de tres lanzamientos de dados.<br>
            Cada una de ellas debe apostar $1 para tratar de adivinar el resultado de los tres<br>
            lanzamientos. Escriba un programa que utilice el método de números aleatorios para<br>
            simular tres lanzamientos de un dado, y que muestre las ganancias de acuerdo con las<br>
            siguientes reglas:<br>
             Si los tres dados caen en seis: la persona gana $20;<br>
             Si los tres dados caen en el mismo número (pero no en seis): gana $10;<br>
             Si dos de tres dados cayeron en el mismo número: gana $5.<br>
        </p>
        <form name="form1" method="POST" action="apuesta.php">
            <label>apuesta:</label>
            <input type="submit" name="btndado" value="tirar dados">
        </form>
        </div>




















        <style>
            body{
                background:#fff;
            }
            p, h1, form{
                padding: 0px 50px;
            }

            input{
                margin-bottom: 3px;
                padding: 13px;
            }


            form{
               
               width: 500px;
               margin: 0 auto;
               padding: 20px;
               
               
           }
            input[type="submit"]{
                margin-bottom: 0;
                background: #2265b1;;
                color:#fff;
                border:none; 
                box-shadow: 1px 1px 7px #042346;
            }

            input[type="submit"]:hover{
                background: #2265b1cc;
                box-shadow: 1px 1px 8px #042346;
                cursor:pointer;
            }

            input[type="submit"]:active{
                background: #2265b1cc;
                box-shadow: 0px 0px 0px #fff;
            }

            div{
                border: inset 1px #ccc;
                background: #fff;
                width: 60%;
                font-size: 20px;
                position: relative;
                margin: 20px auto;
                box-shadow: 3px 3px 17px #042346;
            }
        
        </style>


    </body>


</html>