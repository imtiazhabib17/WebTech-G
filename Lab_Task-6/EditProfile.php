<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
     .body{
            background: lavender;
            margin: 20px;
            border: 1px solid black;
            padding: 5px;    
        }
</style>
<body class="col-12">
    <?php include("Nav.php")?>
    <div class="container">
    <div class="row body">
    <div class="col-5">
    <?php include("Options.php")?>
    </div>
    <br>
    <br>
    <div class="container col-7">
    <?php  
       echo "<b>Abir</b>";
      
    ?>
    </div>
    </div>
    </div>  
<?php include("Footer.php")?>
</body>
</html>