<?php
if ($_SERVER["REQUEST_METHOD"] == "POST")
 {
            if(isset($_POST['submit'])){
                $name = $_POST["name"];
                $email = $_POST['email'];
                $uname = $_POST['uname'];
                $pass = $_POST['pass'];
                $cpass = $_POST['cpass'];
                $gender = $_POST['gender'];
                $dob = $_POST['dob'];
            
                    $conn = new mysqli('localhost','root','','task5');
                    if($conn -> connect_error){
                        die('Connection Failed : '.$conn -> connectio_error);
                    }
                    else
                    {
                        $stmt = $conn->prepare("INSERT INTO task61(name, email, uname, password,gender, dob) VALUES ('$name','$email','$uname','$pass','$gender','$dob')");
                        //$stmt->bind_param($name,$email,$uname, $pass , $dob);
                        $stmt->execute();
                       // $stmt->close();
                        $conn->close();
                       // break();
                    }
            }
             
}
?>