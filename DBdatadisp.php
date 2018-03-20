<?php
mysql_connect('localhost','root','');
mysql_select_db('form');
$sql="select * from iotregister";
$record=mysql_query($sql);
?>
<?php
session_start();
if(isset($_SESSION['usrnam']))
{
?>
<html>
    <head>
    <title>BOOKING DETAILS</title>
        <style>
            body{
                background-color:#DDA0DD;
            }
            img{
                float: left;
            }
            #username{
           height: 80px;
            float: right;
        }
        </style>
    </head>
    <body>
         <a href="Adminviewdata.php"><img src="back.png" width="50px" height="50px"></a>
         <div id="username">
         <?php
            $disp=$_SESSION['usrnam'];
           echo strtoupper("Welcome <b>$disp</b>");
             ?>
        </div>
        <center>
        <h1>CUSTOMER DETAILS</h1></center>
       
      <table width="100%"  border="5px solid">
     <tr bgcolor="green">
    <th>S.NO</th>
    <th>NAME</th>
     <th>PASSWORD</th>
     <th>REPASSWORD</th>
     <th>GENDER</th>
     <th>MAIL ID</th>
     <th>MOBILE</th>
     <th>STATE</th>
        <th>ADDRESS</th>
     <th>CITY</th>
    </tr>

  <?php    
   
while ($result=mysql_fetch_assoc($record))
{
 
   
     echo"<tr>";
     echo"<td>".$result['S.NO']."</td>";
    echo"<td>".$result['NAME']."</td>";
    echo"<td>".$result['PASSWORD']."</td>";
     echo"<td>".$result['REPASSWORD']."</td>";
     echo"<td>".$result['GENDER']."</td>";
     echo"<td>".$result['MAILID']."</td>";
     echo"<td>".$result['MOBILE']."</td>";
     echo"<td>".$result['STATE']."</td>";
    echo"<td>".$result['ADDRESS']."</td>";
     echo"<td>".$result['CITY']."</td>";
            echo"</tr>";
   
}

?>
    </table>
        </body>
</html>
<?php
    }
else{
    header("Location:Administratorlogin.php");
}
    ?>