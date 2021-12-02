<?php
include_once('DBConn.php');
 
if ($_SERVER["REQUEST_METHOD"] == "POST")
{ 

   
        $myusername = mysqli_real_escape_string($db,$_POST['name']);
        $mypassword = mysqli_real_escape_string($db,$_POST['pass']); 
        
        $sql = "SELECT * FROM task61 WHERE email = '".$myusername."' and password = '".$mypassword."' limit 1";
        $result = mysqli_query($db,$sql);
 

      if(mysqli_num_rows($result)==1)
      {  
        header("location: Dashboard.php");
      }else{
        echo"WRONG PASSWORD AND EMAIL. PLEASE TRY AGAIN.";
      }
   
 
}



?>

<!DOCTYPE HTML>
<html>
  <head>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>

      
      #login{
 
        padding: 20px;

       }
      input[type=text], input[type=password] {
        width: 280px;
        padding: 4px 5px;
        margin: 8px 0;
        display: inline-block;
        border: 1px solid #ccc;
        box-sizing: border-box;
    }
      input[type=submit]{
        background-color: #4CAF50;
        color: white;
        padding: 6px 6px;
        margin: 8px 0;
        border: none;
        cursor: pointer;
        width: 280px;
      }
      
       
      .body{
            background: lavender;
            margin: 20px;
            border: 1px solid black;
            padding: 5px; 
        }
 

      .error {
        color: #FF00FF;
      }
    </style>
  </head>

  <body>

    <div class="col-12"> 
      <?php   include("Navigation.php")?>
      </div>
      <div class="body col-12">
      <div  class="center" >

       <div id="login" >
         <h4 class="text-center">LOGIN</h4>
         <form name="form" method="post" action="  ">
           Name
           <br>
           <input type="text" name="name" value="<?php //echo $name;?>">
           <span class="error"> <?php //echo $nameErr;?></span>
           <br><br>
           Password
           <br>
           <input type="password" name="pass">
           <br/>
           <span class="error"> <?php //echo $abc?></span>
           <br>
           <a href = "ForgetPass.php">Forgot Password?</a>
           <br><br><br>
           <input type="submit" name="submit" value = "login"  action=" ">
    
         </form>
       </div>
       <br>
       <p>Don't have an account ? <a href= "Registration.php" >Sign Up</a></p>
     </div>

      </div>


     <div class=" container">
      <?php include("Footer.php")?>
      </div>
  </body>
</html>