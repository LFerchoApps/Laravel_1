<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
</head>
<body>
    <div align="center">
        <br>
        <br>
    <form type="" method="POST" action="" align="right">
        
    <div class="form-group-row">
           
        <input type="number" placeholder="Número1" name="numero1">
        <input type="number" placeholder="Número2"name="numero2">
        <select name="calc">
            <option value='1'>SUMA</option>
            <option value='2'>RESTA</option>
            <option value='3'>MULTIPLICACIÓN</option>
            <option value='4'>DIVISIÓN</option>
</select>
<input type="submit" value="Calcular" name="Correcto">

</div>
@csrf
    </form>
    </div>

    
</body>
</html>