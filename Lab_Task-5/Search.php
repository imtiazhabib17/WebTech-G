<?php
$name = " ";
//$buyingprice = " ";
//$sellingprice = " ";
if(isset($_POST['search'])){
     
   // $result = " ";
    $conn = new mysqli('localhost','root','','task5');
     
    $result = $conn->query($sql);
    if(isset($_POST['search1'])){
        $name1 = $_POST['search1'];
        $sql = "SELECT * FROM task5 where name='$name1'";
        $query_run = mysqli_query($sql,)
    }
 
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search</title>
</head>
<body>
    <div class="container col-4">
        <br/>
        <h3>Search</h3>
        <form name="search" action="" method="post">
            <input type="text" name="search1" placeholder="Search by name" >
            <input type="submit">
            <br/>
            <br/>
        <div>
         
        </div>

        </form>
         
    </div>
    
</body>
</html>