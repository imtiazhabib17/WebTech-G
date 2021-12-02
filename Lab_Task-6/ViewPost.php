<?php
include_once('DBConn.php');
$name = " ";
$price = " ";
$location = " ";
$img = " ";
 
$conn = new mysqli('localhost','root','','task5');
$sql = "SELECT * FROM post  ";
$result = $conn->query($sql);

if(isset($_POST['submit'])){
    if(isset($_POST['submit'])){
        $buyingprice= $_POST['buyingPrice'];
        $sellingprice = $_POST['sellingPrice'];
    }
}
?>
<!DOCTYPE html>
<html>
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
<body class="col-12">
    <?php include("Nav.php")?>
    <div class="container">
    <div class="row body">
    <div class="col-5">
    <?php include("Options.php")?>
    </div>
    <br>
    <br>
    <div class="container col-6">
    <form   name="submit" action="">  
            <div>
            <?php include_once("Options.php");?>
            </div>
            <div class="container col-12">
                            <h4 style="color: green">View Post</h4>
                        <table class="table-bordered table col">
                            <thead>
                            <tr>
                                <td>Owner</td>
                                <td>Price</td>
                                <td>Location</td>
                                <td></td>
                            </tr>

                            </thead>
                            <?php while($rows=$result->fetch_object()) { ?>
                            <tbody>
                                <td><?php echo $rows->name ?></td>
                                <td><?php echo $rows ->price ?></td>
                                <td><?php echo $rows ->location ?></td>
                                <td> <?php echo '<img src="<?php echo $row ->img ?>" alt="">'; ?> </td>
                                 <td><input class="btn btn-primary" type="submit" value="Add"></td>
                            </tbody>
                        <?php  
                        // $i++;
                        }
                        ?>
                            
                        </table>

            </div>
             
        </form>
    </div>
    </div>
    </div>  
<?php include("Footer.php")?>
</html>