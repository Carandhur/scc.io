<?php
include 'db.php';

 
echo <<<_END
<html>
<head>
<title>Lector de Mente de Clemencia</title>
</head>
    <body>
        <form method='post' action='na.php'>
        <pre>
        <h2 ><center>Hola</center></h2><h1 style="color:DodgerBlue;"><center>Clemence!</center></h1><br><br>
        <h2><center>What is the first name that comes into your mind?</center></h2>  <br><center><input type='text' name='name'></center><center><input type='submit' value='Enter'></center>
        <h1 style="color:Tomato;"><center>(please do not include your boyfriend's name)</center></h1>
       </pre>
        </form>
      
        
    </body>
</html>
_END;


?>