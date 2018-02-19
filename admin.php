<?php 
   

    session_start(); 
      


?>

<!Doctype html>
<html>
<head><title>ADMIN - 10TH MARKS</title></head>
<link href="style.css" rel="stylesheet">
<body>
 <div class="admin">
<form action = "admin.php" method = "post"><br> 

    Student Name:
    <br><input type = 'text' name = 'student_name'/><br>
     
    Tamil <br><input type = 'text' name = 'Tamil_mark'/><br>
    English<br><input type = 'text' name = 'English_mark'/><br>
    
    Maths <br> <input type = 'text' name = 'Maths_mark'/><br>
    Science<br><input type = 'text' name = 'Science_mark'/><br>
    Socialscience<br><input type = 'text' name = 'Socialscience_mark'/><br><br>
    

    <input class="button" type = "submit" name="admin-submit" value ="Submit"><br>
  

 </form>
</div>

<?php

  
     if(isset($_POST["admin-submit"])){

         $_SESSION[$_POST["student_name"]] = [
                

            $_POST["Tamil_mark"],$_POST["English_mark"],
            $_POST["Maths_mark"],$_POST["Science_mark"],
            $_POST["Socialscience_mark"]


         ];

        

     




     }



?>

</body>
</html>





