<?php
session_start();
?>
<html>
    <head>
        <title>Home Page</title>
    </head>
    <link rel="stylesheet" type="text/css" href="CSS/style1.css"> 
    <body>
        <header>
       <h1> <center>Welcome    <?php echo $_SESSION['username'];?></center></h1><br><br> 
          <div class="button">
        <a href="alogout.php"><button position:centre>LOGOUT</button></a><br><br>
        <a  class="btn" on-click href="http://localhost/new/NOTEMAKER/CHOOSE.html"><button position:centre>CHOOSE SUBJECTS</button></a><br><br>
        <a  class="btn" on-click href="http://localhost/new/NOTEMAKER/atell.html"><button position:centre>RESPOND TO A QUESTION</button><br><br>
          </div>
            </div>
        </header>
    </body>
</html>