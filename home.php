<?php
session_start();
?>
<html>
    <head>
        <title>Home Page</title>
    </head>
    <link rel="stylesheet" type="text/css" href="CSS/viewstyle.css"> 
    <body>
       <h1> <center>Welcome    <?php echo $_SESSION['username'];?></center></h1><br><br> 
          <div class="button">
        <a href="logout.php"><button position:centre>LOGOUT</button></a><br><br>
        <a  class="btn" on-click href="http://localhost/new/NOTEMAKER/CHOOSE.html"><button position:centre>CHOOSE SUBJECTS</button></a><br><br>
        <a  class="btn" on-click href="http://localhost/new/NOTEMAKER/sask.html"><button position:centre>ASK A QUESTION</button><br><br>
          </div>
    </body>
</html>