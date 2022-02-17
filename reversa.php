<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mareigua Reversa Cadena</title>
</head>
<?php    

    if(isset($_GET['cadena']))
        $cadena = $_GET['cadena'];
    else
        $cadena = '';
    
    $number = strlen($cadena);
    $res = '';

    for($i=$number-1; $i>=0; $i--)
        {
            $res .= $cadena[$i];
        }

?>
<body>
    <div>
        <h1>Reversa de Cadena - Mareigua</h1>
        <p>Por Favor ingrese una cadena de caracteres</p>
        <br>
        <form action="reversa.php" method="get" >
            <div class="columns small-12 medium-8 input-container">
                <input type="text" placeholder="" name="cadena" value="<?php echo $cadena; ?>">
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