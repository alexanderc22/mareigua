<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mareigua Entero mas grande</title>
</head>
<?php

    if(isset($_GET['cadena']))
        $cadena = $_GET['cadena'];
    else
        $cadena = '';
    
    $mayor = '';
    $res = '';
    
    $arrayCadena = explode('-', $cadena);

    foreach($arrayCadena as $val) {
        if($val >= $mayor){
            $mayor = $val;
            $res = "El número mayor es: " . $mayor;
        }
    }

?>
<body>
    <div>
        <h1>Prueba Entero mas grande - Mareigua</h1>
        <p>Por Favor ingrese valores separados por guiones (-)</p>
        <br>
        <form action="mayor.php" method="get" id="multiplos">
            <div class="columns small-12 medium-8 input-container">
                <input type="text" placeholder="ex: 1-5-10-3-8" name="cadena" value="<?php echo $cadena; ?>">
            </div>
            <br>
            <div class="columns small-12 medium-8 input-container">
                <span><?php echo $res; ?></span>
            </div>
            <br>
            <div class="columns small-12 medium-2 left">
                <input type="submit" class="button round large" value="submit">
            </div>
        </form>
    </div>
</body>

</html>