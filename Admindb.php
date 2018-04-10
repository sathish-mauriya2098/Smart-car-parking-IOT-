<?php
define('DB_NAME','form');
define('DB_USER','root');
define('DB_PASSWORD','');
define('DB_HOST','localhost');
$link=mysql_connect(DB_HOST,DB_USER,DB_PASSWORD);
if(!$link)
{
    die('Could not connect:'.mysql_error());
}
$db_selected=mysql_select_db(DB_NAME,$link);
if(!$db_selected)
{
    die('Can not use'.DB_NAME.':'.mysql_error());
}
//echo"connected successfully";
$name=$_POST['name'];
$paswrd=md5($_POST['pwd']);
$repaswrd=md5($_POST['repwd']);
$email=$_POST['mail'];
$mobile=$_POST['mbn'];
$existmail=mysql_query("select*from admindb where EMAIL='$email'");
$sql="INSERT INTO admindb(NAME,PASSWORD,REPASSWORD,EMAIL,MOBILE)
VALUES('$name','$paswrd','$repaswrd','$email','$mobile')";
if (mysql_num_rows($existmail)>0) {
    echo'<html><body bgcolor="green"><br><br><br><br><br><br><br><br><center><h1>Mail already exists.Please enter new mail id.<br>Click <a href="Administratorlogin.php">here</a> to go back.</h1></center></body></html>';
	
}
        else
        {
           mysql_query($sql);
            echo"<html><body><br><br><br><br><br><br><br><br><center><h1>Registered Sucessfully.</h1></center></body></html>";
        }
mysql_close();
?>
     