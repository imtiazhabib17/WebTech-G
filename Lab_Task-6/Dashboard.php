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
    <style>
         .body{
            background: lavender;
            margin: 20px;
            border: 1px solid black;
            padding: 5px; 
        }
    </style>
</head>
<body>
<?php include'Nav.php'; ?>
<div class=" row body">
     
 
 <div class="col-6 ">
 

  <?php include_once 'Options.php'?>
 
 </div>
 <div class="container col-6">
      <h2>Dashboard</h2>

 </div>
 </div>
    
<?php include_once 'Footer.php'?>
</body>
</html>