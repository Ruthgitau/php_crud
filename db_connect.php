<?php
$server="localhost";
$username="root";
$password="";
$database="student_reg";

$db=mysqli_connect($server, $username,$password, $database);
if($db){
    echo "connection succeeded";

}
else{
    echo"failed";
}





// $db= mysqli_connect('localhost', 'root', '','student_reg') or
//     die('unable to connect.Check your connection parameters. ');
//     mysqli_select_db($db,'student_reg') or die(mysqli_error($db));

?>