<?php
mysql_connect('localhost','root','');
mysql_select_db('form');
$sql="select * from bookdb";
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
                background-color: aqua;
                border: 2px solid black;
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
        <center>
            <div id="username">
         <?php
            $disp=$_SESSION['usrnam'];
           echo strtoupper("Welcome <b>$disp</b>");
             ?>
        </div>
        <h1>BOOKING DETAILS</h1></center>
       <table width="100%"  border="5px solid">
     <tr bgcolor="yellow">
    <th>S.NO</th>
    <th>SLOT</th>
    <th>DATE</th>
     <th>MAIL ID</th>
    <th>VECHILE NO</th>     
     <th>MOBILE</th>
    </tr>
    <?php
while ($result=mysql_fetch_assoc($record))
{
 
     echo"<tr>";
     echo"<td>".$result['S.NO']."</td>";
    echo"<td>".$result['SLOT']."</td>";
    echo"<td>".$result['DATE']."</td>";
     echo"<td>".$result['EMAIL']."</td>";
    echo"<td>".$result['VECHILENO']."</td>";
     echo"<td>".$result['MOBILE']."</td>";
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