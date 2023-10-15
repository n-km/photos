<?php 
   $key = htmlentities($_POST["key"]);
    
   if($key == "123456789")
   {
    echo "<form action='true.php' method='post'>";
    echo "<p>Zugang erlaubt</p>";
    echo "<input type='hidden' name='benutzer' value='$key'>";
    echo "<p><input type='submit'></p>";
    echo "<form>";
   }
   else 
   echo "<p>Zugang nur über erfolgreiche
        <a href='index.php'>Eingabe</a></p>";
   ?>