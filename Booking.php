<?php
session_start();
if(isset($_SESSION['usrnam']))
{
?>
<html>
<head>
    <title>Welcome to SPK Services</title>
     <link href="favicon.ico" type="image" rel="icon">
    <style>
        #div1{
            width: 100%;
            height: auto;
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
         button[type=button],  button[type=submit]{
            padding: 15px 30px;
            border-radius: 4px;
            background-color: #10EE12;
            border: none;
            font-size: 15px;
            color: white;
           }
         input[type=text],input[type=email],input[type=date]{
            height: 40px;
            width: 350px;
          background-color: blue;
            font-size: 20px;
         border: 2px solid black;
          color: white;
         outline: none;
        }
        .bookcontent{
             text-align: justify;
           width: 550px;
            height:auto;
            font-size: 23px;
            background-color:#00008B;
            font-family: cursive;
            border-radius: 4px;
            margin: 0 auto;
            margin-top: 50px;
            padding: 15px 30px;
            box-shadow: 3px 3px 8px 8px ;
        }
    </style>
  </head>
    <body>
    <div id="div1">
        <div id="username">
      <?php

            $disp=$_SESSION['usrnam'];
            echo strtoupper("Welcome <b>$disp</b>");
          ?>
            <a href="logout.php"><button type="button">Log out</button></a>
        </div>
         <div id="menu">
     <ul>
        <li><a href="Iothome.php" shape="poly"><span class="fa fa-home fa-fw"style="color:brown"></span>HOME</a></li> 
           <li><a href="#"><i class="fa fa-male fa-fw"style="color:brown"></i>CONTACT US</a> </li>
          
         </ul>
            </div><br><br><br><br>
        <div class="bookcontent">
            <form action="bookdb.php" method="post" name="form">
<input type="text" name="slot" value="<?php
    echo $_POST["slot"];
?>"><br><br>
<input type="date" name="date" placeholder="Date" required=""><br><br>                
<input type="email" name="email" placeholder="Email Id" required=""><br><br>
<input type="text" name="vechno" placeholder="Vechile No" required=""><br><br>  
<input type="text" name="mobile" placeholder="Mobile No" required=""><br><br>
        <center><button type="submit" name="subm">BOOK</button>
             <a href="Iothome.php"><button type="button">CANCEL</button></a></center><br>
                
       </form> 
        </div>
       
        </div>
    
    </body>
</html>
<?php
    }
else{
    header("Location:IOT.html");
}
    ?>