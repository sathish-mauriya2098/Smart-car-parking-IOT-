<html>
<head>
    <title>REGISTRATION</title>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
      <link href="favicon.ico" type="image" rel="icon">
    <style>
        body{
            background: url(re.jpg);
            background-repeat: no-repeat;
            background-size:cover;
            background-attachment: fixed;
        }
      
        .log{
           text-align: justify;
           width: 550px;
            height:auto;
            font-size: 23px;
            background-color: white;
            font-family: cursive;
            border-radius: 4px;
            margin: 0 auto;
            margin-top: 100px;
            padding: 15px 30px;
            box-shadow: 3px 3px 8px 8px ;
           }
     input[type=text],input[type=email],input[type=password]{
            height: 30px;
            width: 350px;
          background-color: white;
            font-size: 20px;
         border: none;
         border-bottom: 2px solid black;
         outline: none;
        }
        select{
             height: 30px;
            width: 350px;
          background-color: white;
            font-size: 18px;
         border: none;
         border-bottom: 2px solid black;
         outline: none;
        }
        input[type=radio],input[type=checkbox]{
            width: 50px;
             height: 20px;
            color:dimgrey;
            }
       
       h2{
            font-family: sans-serif;
           color: red;
        }
         h0,h1{
            font-size: 35px;
            font-family:Castellar;
             text-align: center;
        }
         button[type=submit]{
            padding: 15px 30px;
            border-radius: 4px;
            background-color: gold;
            border: none;
            font-size: 15px;
            color: white;
        } 
        p{
            color: brown;
        }
       
    </style>
    <script type="text/javascript">
        
    function validation()
    {
        var x=document.forms["form"]["pwd"].value;
        var y=document.forms["form"]["repwd"].value;
        if((x.length<6)&&(y.length<6))
            {
               document.getElementById("errorlength").innerHTML = "*Password must be greater than 6 characters";
                return false;
            }
         else if(x!=y){
             document.getElementById("errorMsg").innerHTML = "*Password not matching";
            return false;
        }
        else{
            return true;
        }
       
       
    }
    </script>  
</head>
    <body> 
      
         
       <center>
            <h2><img src="car.gif" width="130px" height="30px">Registration For Car parking</h2></center>
              <center> <div class="log">
<form action="iotregister1.php" method="post" name="form" onsubmit="return validation()">
        <!--<h1>EVENT REGISTRATION</h1>-->
<p>Name<span>*</span></p> <input type="text" name="name" required=""><br><br>
<p>Password<span>*</span></p> <input type="password" name="pwd" required=""><br><br>
<p>Retype-password<span>*</span></p> <input type="password" name="repwd" required=""><br><br>        
<p>Gender</p>   <input type="radio" name="sex" value="male">Male<input type="radio" name="sex" value="female">Female<br><br>
<p>E-mail id<span>*</span></p> <input type="email" name="mail" required=""><br>
<p>Mobile.no<span>*</span></p> <input type="text" name="mbn" required=""><br>
<p>State<span>*</span></p> <select class="stat" name="state">
<option>--Others--</option>
<option>Delhi</option>
<option>Tamil Nadu</option>
<option>Andhra Pradesh</option>
<option>Kerala</option>
<option>Punjab</option>
<option>Uttar Pradesh</option>
<option>Maharastra</option>
<option>Karnataka</option>        
        </select>
<p>City </p>  <input type="text" name="city" required=""><br><br>
  <span id="errorMsg" style="color:red"></span><br><span id="errorlength" style="color:red"></span>
  <br><br>  
        <center><button type="submit">SUBMIT</button></center><br>
       
       
        
        </form> 
               
                  </div></center>
    </body>
</html>