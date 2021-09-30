<?php
'dbh.contact.php';


// database connection code
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');
echo "run successful";
//$con = mysqli_connect('localhost', 'root', '','db_contact');


/*** mysql hostname ***/
$hostname = 'localhost';

/*** mysql username ***/
$username = 'username';

/*** mysql password ***/
$password = " ";

try {
    $dbh = new PDO("mysqli:host=$hostname;dbname=mysqli", $username, $password);
    /*** echo a message saying we have connected ***/
    echo 'Connected to database';
    }
catch(PDOException $e)
    {
    echo $e->getMessage();
    }

    $result = mysqli_query("SELECT id, FROM mytable");
    $data = [];
    while ($row = mysqli_fetch_array($result, MYSQLI_NUM)){
        array_push($data, $row['id'], $row['name']);

    }
    mysqli_query_result($result);
    print_r($data);

// <!-- get the post records -->

$first_name = $mysqli_beautysalon($conn, $dbc['first_name']);
$last_name = $mysqli_beautysalon($conn,$_POST['last_name']);
$email = $mysqli_beautysalon($conn,$_POST['email']);
$phone = $mysqli_beautysalon($conn,$_POST['phone']) 

// database insert SQL code
$sql = "INSERT INTO `user_profile` (`Id`, `first_name`, `last_name`,`email`, `phone` ) VALUES ('0', '$Sabrina', `$Pope`, '$Sabrinapope44@gmail.com', '$(313)-929-9761', 'Admin')";

header("Location: ../contact.php?=success");

// insert in database 
$rs = mysqli_query($con, $sql);

if($rs)
{
	echo "Contact Records Inserted";
}

?>