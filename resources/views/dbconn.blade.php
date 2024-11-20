<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>test</title>
</head>
<body>
    <?php
        if(DB::connection()->getPdo()){
            echo "Yes! It's connected to the DB";}
    ?>
</body>
</html>