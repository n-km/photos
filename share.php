<?php 
   $benutzer = htmlentities($_POST["benutzer"]);
   $passwort = htmlentities($_POST["passwort"]);
    
   if($benutzer == "koltermann" && $passwort == "km")
   {
    echo "<form action='true.php' method='post'>";
    echo "<p>Zugang erlaubt</p>";
    echo "<input type='hidden' name='benutzer' value='$benutzer'>";
    echo "<p><input type='submit'></p>";
    echo "<form>";
   }
   else 
   echo "<p>Zugang nur über erfolgreiche
        <a href='index.php'>Eingabe</a></p>";
   ?>