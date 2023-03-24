<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" >
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array3</title>
</head>
<body>
    
        <!--<ul>
        <?php
        
        //foreach($datos as $value):
            ?>
            <li>
                <?php
                //echo$value;
                ?>
                </li>
                <?php // endforeach;?>
    </ul>
        -->
    

    <ul>
        @foreach($datos as $value)
        <li>{{$value}}</li>
        @endforeach
        </ul>

    
</body>
</html>