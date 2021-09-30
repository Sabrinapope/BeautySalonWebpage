<?php

require_once dirname(__FILE__) . "/path/to/file";

$query = "SELECT first_name, last_name, email, phone, 
 FROM user_profile";

$response = @mysqli_query($dbc, $query);

if($response){

while($row = mysqli_fetch_array($response)){

     echo 'beauty salon';

}

echo 'user profile';

}else{ 

  echo "couldn't issue database query";

  echo mySqli_error($dbc);

}

mysqli_close($dbc);


?>