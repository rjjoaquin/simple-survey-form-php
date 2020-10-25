<?php
// include database connection file
require_once'dbconfig.php';
if(isset($_POST['Submit']))
{
// Posted Values
$name=$_POST['name'];
$email=$_POST['email'];
$yearsinvesting=$_POST['yearsinvesting'];
$investedamount=$_POST['investedamount'];
$investments=$_POST['investments'];
$investmentstory=$_POST['investmentstory'];
$newsletter=$_POST['newsletter'];
$date=date("Y/m/d");
// Query for Insertion
$sql="INSERT INTO results(name,email,yearsinvesting,investedamount,investments,investmentstory,newsletter,date) VALUES(:name,:email,:yearsinvesting,:investedamount,:investments,:investmentstory,:newsletter,:date)";
//Prepare Query for Execution
$query = $dbh->prepare($sql);
// Bind the parameters
$query->bindParam(':name',$name,PDO::PARAM_STR);
$query->bindParam(':email',$email,PDO::PARAM_STR);
$query->bindParam(':yearsinvesting',$yearsinvesting,PDO::PARAM_STR);
$query->bindParam(':investedamount',$investedamount,PDO::PARAM_STR);
$query->bindParam(':investments',$investments,PDO::PARAM_STR);
$query->bindParam(':investmentstory',$investmentstory,PDO::PARAM_STR);
$query->bindParam(':newsletter',$newsletter,PDO::PARAM_STR);
$query->bindParam(':date',$date,PDO::PARAM_STR);
// Query Execution
$query->execute();
// Check that the insertion really worked. If the last inserted id is greater than zero, the insertion worked.
if($query)
{
// Message for successfull insertion
echo "<script>alert('Record inserted successfully');</script>";
echo "<script>window.location.href='form-success.html'</script>";
}
else
{
// Message for unsuccessfull insertion
echo "<script>alert('Something went wrong. Please try again');</script>";
echo "<script>window.location.href='form-failure.html'</script>";
}
}
?>
