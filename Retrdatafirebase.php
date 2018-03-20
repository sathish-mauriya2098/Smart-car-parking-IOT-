<?php
session_start();
if(isset($_SESSION['usrnam']))
{
?>
<html>
<head>
    <title>Data of Firebase</title>
    <style>
        #div1{
            width: 100%;
            height: 100%;
            background: #15C456;
            border: 2px solid black;
            background-attachment: fixed;
            background-size: 100% 100%;
        }
         #username{
            height: 80px;
            float: right;
        }
        button{
             width: 250px; 
            height: 110px;
        }
        h1{
            color: yellow;
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
            $disp=$_SESSION['usrnam'];
            echo strtoupper("Welcome <b>$disp</b>");
          ?>
        </div>
        <a href="Iothome.php"><img src="Home.png" width="50px" height="50px"></a>
    <center><h1>SELECT YOUR PARKING SLOT</h1></center>

    <div class="user">
<!--<p id="name"></p>-->
         <form action="Booking.php" method="post">
  <button  id="name" name="slot" value="SLOT 1">SLOT1</button> 
<button  id="name1" name="slot" value="SLOT 2">SLOT2</button></a>
    </form>   
  </div>  
    
<script src="https://www.gstatic.com/firebasejs/4.6.0/firebase.js"></script>
<script>
  // Initialize Firebase
  var config = {
    apiKey: "AIzaSyCuwnlWVEzuXf4At-G6dTbc-AmToNJxL0Q",
    authDomain: "retrive-data-d466c.firebaseapp.com",
    databaseURL: "https://retrive-data-d466c.firebaseio.com",
    projectId: "retrive-data-d466c",
    storageBucket: "retrive-data-d466c.appspot.com",
    messagingSenderId: "315113055199"
  };
  firebase.initializeApp(config);
    </script>
      <script>
          
   /* var dataRef = firebase.database().ref("Heading");
    var dataRefe = firebase.database().ref("User");
dataRef.on('value', function(snapshot) {
document.getElementById("new").innerHTML=snapshot.val();
});*/
var dataRefe = firebase.database().ref("User");
dataRefe.on('value', function(snapshot) {
    var res=snapshot.val();
    if(res=='Yes'){
document.getElementById("name").style.background="red";
       
    }
    else{
       document.getElementById("name").style.background="green"; 
    }
});
          var dataRefe = firebase.database().ref("User1");
dataRefe.on('value', function(snapshot) {
    var res=snapshot.val();
    if(res=='Yes'){
document.getElementById("name1").style.background="red";
       }
    else{
       document.getElementById("name1").style.background="green"; 
    }
});
</script>
 </div>
</body>
</html>
<?php
    }
else{
    header("Location:IOT.html");
}
    ?>