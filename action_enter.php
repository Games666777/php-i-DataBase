<!DOCTYPE html>
<html>
<head>
<meta charset ="UTF-8">
<title></title>
</head>
<boby>
<?php
 $admin = $_POST['user']; 
 $pass = $_POST['pass'];
 if ($_POST['submit']){
 if ($_POST['user']=='' or $_POST['pass']=='') 
 { 
     echo "Вы ввели не все данные";
      include "in.php"; 
      exit (); 
 }
      if ($_POST[ 'user']=='admin' or $_POST['pass']=='admin ')
  {   
    $_SESSION['login']='Bы администратор БД'; 
    echo '<p> Логин и пароль верны!</p>';
    echo $_SESSION[ 'login'];
    include "1.php";
    include "in.php";
     }
    if (($_POST['user']!==' admin ') or ($ POST['pass']!=='admin')) 
    {
             echo '<p> Логин и пароль неверны!</p>'; 
             include "in.php"; 
             exit(); 
    }
}
?> 
</form>
</html>
</boby>
