<?php

  session_start();

  




?>

<!Doctype html>
<html>
<head><title>Student - 10th Result</title></head>
<link href="style.css" rel="stylesheet">
<body>
	 <form action = "student.php" method = "post"><br><br>
	 <input type = "text" name = 'name'/>
	 <input class="click" type = "submit" value="search" name = "submit"/>

	 </form>

<div class="student">
  <ul>
  <?php

   
function showSubjectAndMarks($marksArray) {

        $subject = ["Tamil" , "English" , "Maths" , "Science" , "Social"]; 


        foreach($marksArray as $key => $value) {
            
            if($value > 100){  
              
               $value = 0;

             }

            echo "<i><li>" . $subject[$key] . ' : ' . $value ."</i></li><br>";
         
          
        }

}



    function checkStudentResult($marksArray) {

      

        foreach($marksArray as $key => $value) {
            
            if($value < 35) {
                
                $resultString = 'Fail';
                break;

            } else {
                $resultString = 'Pass';
            }
             
             if($value > 100){

              $resultString = "Fail";
              break;

             }
        }    
        
        return $resultString;
        
   }



 function getStudentTotal($marksArray) {

    $total = 0;

    foreach($marksArray as $key => $value) {

        $total += $value;
    }

      return $total; // output


   }


   function getStudentPercentage($markTotal) {

     return ($markTotal / 500) * 100;


   }




 
 // form submission
if(isset($_POST["submit"])){

  
      
   foreach($_SESSION as $key => $value) {

        if(strtolower($_POST["name"]) == strtolower($key) ) {

            echo '<h1>' .$key .'</h1>';

            // showSubjectAndMarks($marksArray)
             showSubjectAndMarks($value);

            // get the result
            $result = checkStudentResult($value);

             // get the total of a searched student
            $studentTotal = getStudentTotal($value);


            // get percentage
          $percentage = getStudentPercentage($studentTotal);



        }
    }


     echo '<h2><i>Result = ' . $result. "</i></h2>";
     echo "<h1>Total = " . $studentTotal . "</h1>"; 
     
     echo '<h1>Percentage = ' . $percentage. "</h1>";
         
}
     

  ?>
  </ul>
  </div>
  
 
</body>
</html>










