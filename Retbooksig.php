<html>
    <style>
       b{
            font-size: 20px;
            font-family: Arial Black;
        }
        pre{
            font-size: 20px;
        }
    </style>
<body>
    <h6 style="font-size:20px;">Entered Details</h6>
    <script>
       /* document.write("<pre>");
    document.writeln("<b>Booking form:</b>"+localStorage.getItem('Book')+"<b>on</b> "+new Date());
       document.write("</pre>");*/
    </script>
    <?php
session_start();
            $disp=$_SESSION['usrnam'];
            echo"Booking from:<b>$disp</b>on <script>document.write(new Date());</script>";
           // echo "<script>function store(){ localStorage.setItem('Book',$disp);}</script>";
             ?>
    
     </body>
</html>