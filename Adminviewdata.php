<?php
session_start();
if(isset($_SESSION['usrnam']))
{
?>
<html>
    <head>
    <title>VIEW DEATILS</title>
        <style>
            body{
                border: 2px solid black;
                background: url(sysadmin.png);
                background-attachment: fixed;
                background-size: 100% auto;
            }
            a{
                color: black;
            }
             #username{
           
            height: 80px;
            float: right;
        }
         button[type=button]{
            padding: 15px 30px;
            border-radius: 4px;
            background-color:#BA55D3;
            border: none;
            font-size: 15px;
            color: white;
           }
            img{
                float: left;
            }
            #viewdata{
           width: 700px;
            height:auto;
            background-color:#F4A460;
            font-family: cursive;
            border-radius: 4px;
            margin: 0 auto;
            margin-top: 100px;
            padding: 15px 30px;
            box-shadow: 3px 3px 8px 8px ;
            }
        </style>
    </head>
<body>
     <div id="username">
       <?php
            $disp=$_SESSION['usrnam'];
           echo strtoupper("Welcome <b>$disp</b>");
           // echo "<script>function store(){ localStorage.setItem('Book',$disp);}</script>";
             ?>
            
            <a href="logoutadmin.php"><button type="button">Log out</button></a>
        </div>
    <center>
        <div id="viewdata">
<h1><a href="DBdatadisp.php">Click here to view the Registration details.</a><br><br>
   <a href="Retrivebookdet.php"> Click here to view the Booking details.</a>
    </h1>
            </div>
        </center>
    </body>
</html>
<?php
    }
else{
    header("Location:Administratorlogin.php");
}
    ?>