<?php 
session_start();
?>

<html>  
<head>  
    <title>PHP login system</title>  
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>  
<body>  
<style type="text/css">
	body{   
    background: #ecf0f1;  
}  
#frm{  
    max-width: 600px;
    text-align: center;  
    border-radius: 20px;  
   
    background: white;  
    padding: 50px;  
}  
.textbox
{
    font-size: 20px;
    font-family: arial;
    border-radius: 5px;
} 
.btn{
    font-size: 20px;
    font-family: arial;
}
</style>

<div class="container row"> 
     <div class="col-md-2"></div>
<div id="frm" class="col-md-8">  
        <center><h1>Giriş Yap</h1> <hr> <br> </center>
        <form name="f1" method="POST">  
            <p>  
                <input placeholder="Kullanıcı Adı" class="textbox" type="text" id="user" name="user" />  
            </p>  
            <p>  
                <input placeholder="Şifre" class="textbox" type="password" id="pass" name="pass" />  
            </p>  
            <p>     
                <input type ="submit" class="btn btn-primary" id="btn" value="Giriş Yap" />  
            </p>  
        </form>  
    </div>

    <div class="col-md-2"></div>

  </div>

    
   
</body>     



</html>  


<?php   
    $host = "localhost";  
    $user = "root";  
    $password = '';  
    $db_name = "webdatabase";  
      
    $con = mysqli_connect($host, $user, $password, $db_name);  
    if(mysqli_connect_errno()) {  
        die("Failed to connect with MySQL: ". mysqli_connect_error());  
    }  


      $username = $_POST['user'];  
      $password = $_POST['pass'];  
      
        //to prevent from mysqli injection  
        $username = stripcslashes($username);  
        $password = stripcslashes($password);  
        $username = mysqli_real_escape_string($con, $username);  
        $password = mysqli_real_escape_string($con, $password);  
      
        $sql = "select * from usertb where username = '$username' and password = '$password'";  
        $result = mysqli_query($con, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
          
        if($count == 1){  

         $_SESSION['userName'] = $username;
         $mail=$row['MailAddress'];

         $_SESSION['Mail'] = $mail;

            echo "<h1><center> Giriş Başarılı </center></h1>"; 

            header("location:panel.php");
		
		exit(); 
        }  
        else{  
           // echo "<script type='text/javascript'>alert('Giriş Başarısız');</script>";

        }     






?>


