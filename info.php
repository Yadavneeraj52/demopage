<?php
if(isset($_POST['Title'])){
       $gettitle=$_POST['Title'];
    }

$title = $_POST['Title'];
$Firstname = $_POST['FirstName'];
$Lastname = $_POST['LastName'];
$Date = $_POST['birthday'];
$Number = $_POST['Mobile'];
$Files = $_POST['filename'];
$Email = $_POST['email'];
$Message = $_POST['Message'];

echo "Thank You";
echo "<br>";
echo "Title : ".$title;
echo "<br>";
echo "Firstname : ".$Firstname;
echo "<br>";
echo "Lastname : ".$Lastname; 
echo "<br>";
echo "You have submitted the following details :";
echo "<br>";
echo "Date of Birth :  ".$Date; 
echo "<br>";
echo "Mobile Number :  ".$Number; 
echo "<br>";
echo " File Uploaded :  ".$Files; 
echo "<br>";
echo "Email id :" .$Email;
echo "<br>";
echo "Message :  ".$Message;
echo "<br>";

?>
