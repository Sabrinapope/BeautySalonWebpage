<!DOCTYPE html>
<html>
<body>
<div>
<?php //include 'mysqli_contact.php';

if (isset($_POST['submit']))
  
  $data_missing = array();

  if(empty($_POST['first_name'])){ 

    $data_missing[] = 'First Name';

  } else{

      $first_name = trim ($_POST['first_name']);
  }

         if(empty($_POST['last_name'])){

        $data_missing[] = 'Last Name';

}else{

        $last_name = Trim($_POST['last_name']);
}

         if(empty($_POST['email'])){

           $data_missing[] = 'Email';

}else{

          $email = trim($_POST['email']);
}          
           
          if(empty($_POST['phone'])){

           $data_missing[] = 'phone';

}else{
   
           $phone = Trim($_POST['phone']);


  }

   if (empty($data_missing)){

    //this statement connects to my database 
    $dbc = @mysqli_connect ('localhost', 'Ashley', 'Sabpop44', 'beautysalon');

    $query = "INSERT INTO user_profile (first_name, last_name,
    email, phone) VALUE ($first_name, $last_name,$phone , $email)";
     
   }
     
    $stmt = mysqli_prepare($dbc, $query);


    echo $first_name, $last_name, $email, $phone;

     //i Integers
     //d Doubles
     
    // b Blobs
    // s Everything else
    
    $getbeautysalon = function() use ($conn){
    
                   $stmt = $conn->prepare("SELECT value from cms_options WHERE title = 'beautysalon' ");
                   $dbc->stmt_init();
                   $stmt->excute();
                   $stmt->bind_results($beautysalon);
                   if($stmt->num_rows > 0) {
                       while ($stmt->fetch){
                           return $beautysalon;
                       }
                   }

                
            
                            
    
    if ($mysqli -> connect_errno){
        echo "failed to connect to MySQL: " . $mysqli -> connect_error;
        exit();
    }
    {

    if ($mysqli_stmt_prepare($stmt, "ssss", $first_name,
                                $last_name, $email, $phone)){

    $mysqli_statement_bind_param($stmt);

    mysqli_stmt_execute($stmt);


    $affected_rows = mysqli_stmt_affected_rows($stmt);

                                                               
                                    
    if($affected_rows == 1){ 

         echo 'success';

         mysqli_stmt_close($stmt);

         mysqli_close($dbc);
         

    }else{

        echo 'Error Occurred<br />';
        echo mysqli_error();

        mysqli_stmt_close($stmt);

        mysqli_close($dbc);

    }
    
}else{


    echo 'You need to enter the following data<br />';

    foreach($data_missing as $missing ){
    
        $arr = [];
        $mysqli_statement_bind_param = "SELECT first_name.id, last_name.id, email.id, phone.id";
        $result = mysqli_query($this->DB(),$sql);
        while($d = mysqli_fetch_row($result))
             {
                 $arr[] = $d;
             }
             return $arr; 
}

}

}

  
    ?>

<form action="confirmation.php" method="POST">
    <label for ="fname">First name:</label>
    <input type="text" id="first_name" name="first_name"><br><br>
    <label for="lname">Last name:</label>
    <input type="text" id="last_name" name="last_name"><br><br>
    <label for="text">Email:</label>
    <input type="email" id="email" name="email"><br><br>
    <label for="phone">Enter a phone number:</label><br><br>
    <input type="tel" id="phone" name="phone" placeholder="" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}"><br><br>

    <input type="submit" name="submit" value="Send" /> 
   </form>  
   
</div>
<h1>Welcome to my home page!</h1>
<p>Some text.</p>
<p>Some more text.</p>

</body>
</html>
<?php 
function () {

}
?>