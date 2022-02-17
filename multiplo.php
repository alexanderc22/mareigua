<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mareigua Multiplos</title>
</head>
<?php

    if(isset($_GET['number']))
        $number = $_GET['number'];
    else
        $number = '';
    
    $resultado = '';
    
    if($number < 1 || $number > 100 ){
        $resultado = 'No es un valor valido';
    } else if (( $number % 3 ) == 0 && ( $number % 5 ) == 0){
        $resultado = "mareigua";
    } else if (( $number % 3 ) == 0){
        $resultado = "mare";
    } else if (( $number % 5 ) == 0){
        $resultado = "igua";
    } else {
        $resultado = "El valor es ". $number;
    } 

?>

<body>
    <div>
        <h1>Prueba Multiplos - Mareigua</h1>
        <p>Por Favor ingrese un valor entre 1 y 100</p>
        <br>
        <form action="multiplo.php" method="get" id="multiplos">
            <div class="columns small-12 medium-8 input-container">
                <input type="text" placeholder="Enter Number" name="number" value="<?php echo $number; ?>">
            </div>
            <br>
            <div class="columns small-12 medium-8 input-container">
                <span><?php echo $resultado; ?></span>
            </div>
            <br>
            <div class="columns small-12 medium-2 left">
                <input type="submit" class="button round large" value="submit">
            </div>
        </form>
    </div>
</body>

</html>