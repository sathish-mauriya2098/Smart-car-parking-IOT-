<html>
<head>
    <title>ADMIN LOGIN</title>
     <link href="font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="favicon.ico" type="image" rel="icon">
    <style>
        body{
            background-image: url(sy.jpg);
            background-attachment: fixed;
            background-size: 100% auto;
            border: 2px solid black;
        }
        .log{
            width: 390px;
            height: auto;
            font-size: 20px;
            font-family: cursive;
           border: 2px solid black;
        background-color:#00BFFF;
        }
        span.psw{
            float: right;
        }
        .form-input::before{
            content:"\f007" ;
            position: absolute;
            font-family: "FontAwesome";
            padding-top: 5px;
            padding-left: 5px;
            font-size: 35px;
            color: #7E5970;
        } 
        .form-input1::before{
            content:"\f023" ;
             position: absolute;
            font-family: "FontAwesome";
            padding-top: 5px;
            padding-left: 5px;
            font-size: 35px;
             color: #7E5970;
        }
       button[type=submit]{
            padding: 15px 30px;
            border-radius: 4px;
            background-color: #2ECC71;
            border: none;
            font-size: 15px;
            color: white;
        } 
         input[type=text],input[type=password]{
            height: 45px;
            width: 300px;
          background-color: white;
            font-size: 18px;
           border-radius: 4px;
             padding-left: 30px;
       
        }
        
        button[type=button]{
            padding: 15px 30px;
            border-radius: 4px;
            background-color: #10EE12;
            border: none;
            font-size: 15px;
            color: white;
           }
        h2{
            font-family: sans-serif;
            color: yellow;
        }
       #admin{
            float: right;
        }
    </style>
    
</head>
    <body>
        
       <center>
            <h2>Administrator Login</h2>
          <a href="IOT.html"><button type="button" id="admin">USER LOGIN</button></a><br>
           <div class="log">
                <img src="administrator.png" height="200px"><br><br>
               
    <form action="Adminpswdcheck.php" method="post">
       <div class="form-input">
       <input type="text" name="usrnam" placeholder="Enter Username" required=""><br><br>
        </div>
        <div class="form-input1">
            <input type="password" name="psw" placeholder="Enter Password" required=""><br><br></div>
        <button type="submit">LOGIN</button><br>
        <input type="checkbox" checked>Remember Me?<br><br>
        
        <a href="Adminregister.php"><button type="button">SIGN UP</button></a>
            <span class="psw">Forgot<a href="#" >password?</a></span>
        
       
        
        </form> 
               
            </div></center>
    </body>
</html>