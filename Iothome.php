<?php
session_start();
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
if(isset($_SESSION['usrnam'])){
?>
<html>
<head>
    <title>Welcome to SPK Services</title>
    <link href="favicon.ico" type="image" rel="icon">
    <style>
        #div1{
            width: 100%;
            height: 100%;
            background:linear-gradient(#3DA9CE,white);
            background-attachment: fixed;
            border: 2px solid black;
            background-size: 100% auto;

}
    #menu{
        display: block;
}
#menu  ul li{
            float: left;
            list-style: none;
          margin-left: 20px;
            background: saddlebrown;
            padding:0px 3% 0;
            line-height: 250%;
            border-radius: 8px;
       display: block;
 
}
    #menu    ul li:hover{
            text-decoration: none;
            font-size: none;
           background-color:olivedrab;
       
           }
#menu ul li a{
    text-decoration: none;
    color: white;
     display: block;

}  
        #username{
           
            height: 80px;
            float: right;
        }
         button[type=button]{
            padding: 15px 30px;
            border-radius: 4px;
            background-color: #10EE12;
            border: none;
            font-size: 15px;
            color: white;
           }
        img{
            float: left;
        }
    </style>
    
  
</head>
    <body>
    <div id="div1">
        <div id="username">
       <?php
//session_start();
            $disp=$_SESSION['usrnam'];
            //setcookie("user", $disp, strtotime( '+30 days' ), "/", "", "", TRUE);
            echo"<img src='defaultprofile.png' width='50px' height='50px'>";
           echo strtoupper("Welcome <b>$disp</b>");
           // echo "<script>function store(){ localStorage.setItem('Book',$disp);}</script>";
             ?>
             <script>
    function store()
        {
            var a = "<?php echo $disp?> ";
             window.localStorage.setItem("Book",a);
           }  
            </script>
            <a href="logout.php"><button type="button">Log out</button></a>
        </div>
         <div id="menu">
     <ul>
        <li><a href="#" shape="poly"><span class="fa fa-home fa-fw"style="color:brown"></span>HOME</a></li> 
          <li><a href="Retrdatafirebase.php"><i class="fa fa-pencil-square-o  fa-fw"style="color:violet"></i>BOOKING</a></li>

 <li><a href="#"><i class="fa fa-male fa-fw"style="color:brown"></i>CONTACT US</a> </li>
          
         </ul>
            </div>
    
        </div>
    
    </body>
</html>
<?php
} 
else
{
   header("Location:IOT.html");
}
?>