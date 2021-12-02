<?php 
require_once('Registration1.php');
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
     .error {color: #FF0000;} 

     .body{
            background: lavender;
            margin: 20px;
            border: 1px solid black;
            padding: 5px; 
        }
    #success_message{ display: none;}
</style>
<body>
    <?php include("Navigation.php")?>
    <div class="container">
    <form  action=""class="body" method="post">
    <div class="container col-4">
         
    </div>
    <div class="container col-2 " style="input-">
        <div class=" " >
            <h2 style="color: green">Registration</h2> <br>
            Name:
            <input type="text"  name="name" placeholder="Enter your name"><span class="error"><?php// echo "*".$nameErr; ?></span>
             
            <br>
            Email:
            <input type="text" name="email" placeholder="Enter your email address"><span class="error"><?php //echo "*".$emailErr; ?></span>
             <br>
            User Name:
            <input type="text" name="uname" placeholder="Enter your user name">
            <span class="error"><?php //echo "*".$unameErr; ?></span>
            <br>
            Password:
            <input type="password" name="pass" placeholder="Enter your password"/><br>
            <span class="error"><?php// echo "*".$genderErr; ?></span>
            Confirm Password:
            <input type="password" name="cpass" placeholder="Enter your password"><br>
            Gender: <br>
           <input type="radio" name="gender" value="female">Female
           <input type="radio" name="gender" value="male">Male
           <input type="radio" name="gender" value="other">Other
           <br>
          Date of Birth: <br>
         <input type="date" id="start" name="dob" value="" min="2018-01-01" max="2018-12-31">
         <span class="error"><?php //echo "*".$websiteErr; ?></span>
         <br>
         <br>
         <br>
         <input type="submit" name="submit" value="submit"> <b></b>  <b></b><input type="submit" name="reset" value="Reset">
         <br>
        </div>     
    </div>
    </form>
    </div>
     
<?php include("Footer.php")?>

</body>
</html>