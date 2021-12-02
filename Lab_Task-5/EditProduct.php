<?php
 

if(isset($_POST['submit'])){
    $name = $_POST['PName'];
$bprice = $_POST['BPrice'];
$SPrice = $_POST['SPrice'];
//$cb = $_POST['cbox'];
//Database Connection
        $conn = new mysqli('localhost','root','','task5');
        if($conn -> connect_error){
            die('Connection Failed : '.$conn -> connectio_error);
        }
        else
        {
            $stmt = $conn->prepare("UPDATE task5 SET  name=$name buyingPrice=$bprice sellingPrice=$SPrice WHERE id=$name");
          //  $stmt->bind_param("sss", $name,$bprice,$SPrice);
           // $stmt->execute();
           // $stmt->close();
            $conn->close();
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
    <title>Edit Product</title>
</head>
<body>
    <div   class="container">
        <br/>
        <h3>Edit Product</h3>
        <br/>
    <form action="" name="form" method="post">
    <label>Name:</label>
    <input type="text" name="PName"/> <br/>
    <br/>
    <label>Buying Price:</label>
    <input type="text" name="BPrice"/><br/>
    <br/>
    <label>Selling Price:</label>
    <input type="text" name="SPrice"/><br/>
    <br/>
    <input type="checkbox" name="cbox"><a>Display</a><br/>
    <br/>
    <input type="submit" name="submit">

    </form>

    </div>
 
    
</body>
</html>