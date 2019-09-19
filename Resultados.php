<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="Resultados.css">
    <link rel="stylesheet" href="NotaFinal.css">
</head>
<body>
    <?php
            $notaP1Q1 = $_GET['notaP1Q1'];
            $notaP2Q1 = $_GET['notaP2Q1'];
            $notaP3Q1 = $_GET['notaP3Q1'];
            $examenQ1 = $_GET['examenQ1'];

            $notaP1Q2 = $_GET['notaP1Q2'];
            $notaP2Q2 = $_GET['notaP2Q2'];
            $notaP3Q2 = $_GET['notaP3Q2'];
            $examenQ2 = $_GET['examenQ2'];
        
            $sumaQ1 = $notaP1Q1+$notaP2Q1+$notaP3Q1;
            $promedioQ1 = round(($notaP1Q1+$notaP2Q1+$notaP3Q1)/3,2,PHP_ROUND_HALF_UP);
            $porcentaje1_Q1 = round($promedioQ1*0.8,2,PHP_ROUND_HALF_UP);
            $porcentaje2_Q1 = round($examenQ1*0.2,2,PHP_ROUND_HALF_UP);
            
            $notafinalQ1 = $porcentaje1_Q1+$porcentaje2_Q1;

            $sumaQ2 = $notaP1Q2+$notaP2Q2+$notaP3Q2;
            $promedioQ2 = round(($notaP1Q2+$notaP2Q2+$notaP3Q2)/3,2,PHP_ROUND_HALF_UP);
            $porcentaje1_Q2 = round($promedioQ2*0.8,2,PHP_ROUND_HALF_UP);
            $porcentaje2_Q2 = round($examenQ2*0.2,2,PHP_ROUND_HALF_UP);
            
            $notafinalQ2 = $porcentaje1_Q2+$porcentaje2_Q2;

            $resultadofinal = round(($notafinalQ1+$notafinalQ2)/2,2,PHP_ROUND_HALF_UP);
    ?>
    <div class="padre">
       <header class="main-header">
           <h1>
                 <i class="fas fa-graduation-cap"></i> Proceso de Calificacion <i class="fas fa-calculator"></i>
           </h1>
       </header>
       <div class="principal">
           <div class="formulario">
                <h2 class="header">1ª Quimenstre</h2>
                <table class="table">
                    <tr>
                        <th class="vacio"></th>
                        <th>NOTAS</th>
                        <th>SUMA</th>
                        <th>80%</th>
                        <th>EXAMEN</th>
                        <th>20%</th>
                        <th class="ultimo">NOTA FINAL</th>
                    </tr>
                    <tr>
                        <td>P1</td>
                        <td> <?php echo $notaP1Q1?> </td>
                        <td rowspan="3"> <?php echo $sumaQ1?> </td>
                        <td rowspan="3"> <?php echo $porcentaje1_Q1?> </td>
                        <td rowspan="3"> <?php echo $examenQ1?> </td>
                        <td rowspan="3"> <?php echo $porcentaje2_Q1?> </td>
                        <td rowspan="3" class="color"> <?php echo $notafinalQ1?> </td>
                    </tr>
                    <tr>
                        <td>P2</td> 
                        <td> <?php echo $notaP2Q1?> </td>                   
                    </tr>
                    <tr>
                        <td>P3</td>
                        <td> <?php echo $notaP3Q1?> </td>
                    </tr>
                </table>
           </div>
           <div class="formulario">
                <h2 class="header">2ª Quimenstre</h2>
                <table class="table">
                    <tr>
                        <th class="vacio"></th>
                        <th>NOTAS</th>
                        <th>SUMA</th>
                        <th>80%</th>
                        <th>EXAMEN</th>
                        <th>20%</th>
                        <th class="ultimo">NOTA FINAL</th>
                    </tr>
                    <tr>
                        <td>P1</td>
                        <td> <?php echo $notaP1Q2?> </td>
                        <td rowspan="3"> <?php echo $sumaQ2?> </td>
                        <td rowspan="3"> <?php echo $porcentaje1_Q2?> </td>
                        <td rowspan="3"> <?php echo $examenQ2?> </td>
                        <td rowspan="3"> <?php echo $porcentaje2_Q2?> </td>
                        <td rowspan="3" class="color"> <?php echo $notafinalQ2?> </td>
                    </tr>
                    <tr>
                        <td>P2</td> 
                        <td> <?php echo $notaP2Q2?> </td>                   
                    </tr>
                    <tr>
                        <td>P3</td>
                        <td> <?php echo $notaP3Q2?> </td>
                    </tr>
                </table>
           </div>
       </div>
       <footer>
           <?php
           if($resultadofinal < 7){
               echo "<div class='nota-red'>";
               echo "<p>Su nota final es $resultadofinal </p>";
               echo "</div>";
           }
           else{
                echo "<div class='nota-green'>";
                echo "<p>Su nota final es $resultadofinal </p>";
                echo "</div>";
           }
           ?>
            <div class="enviar" id="enviar"> 
                <button class="submit"><a id="submit" href="index.html">Regresar</a></button>
            </div>

        </footer>
    </div>
    
</body>
</html>