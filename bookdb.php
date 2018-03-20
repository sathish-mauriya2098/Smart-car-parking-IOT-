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
$headers = "From:sathishkumar200298@gmail.com\r\n";
$slot=$_POST['slot'];
$date=$_POST['date'];
$email=$_POST['email'];
$vechno=$_POST['vechno'];
$mobile=$_POST['mobile'];
$msg="Your Slot booked";
$sql="INSERT INTO Bookdb(SLOT,DATE,EMAIL,VECHILENO,MOBILE)VALUES('$slot','$date','$email','$vechno','$mobile')";
if (mysql_query($sql)) {
	 echo"<html><body><br><br><br><br><br><br><br><br><center><h1>Your slot booked Sucessfully.</h1></center></body></html>";
    mail($email,"Smart Parking",$msg,$headers);
}
        else
        {
            echo mysql_error();
        }
mysql_close();
?>
