<?php
// Set the login variables
$username="root";
$database="runners";
// Connect to the database
mysql_connect("localhost",$username);
// Select the proper database or exit with error message
@mysql_select_db($database) or die( "Unable to select database");

// Set variable to select all records in contacts table
$query="SELECT * FROM runners WHERE BibNumber='" . $_GET["bibNumber"] . "';";
/* Run the SELECT as a query and load results into variable 'result'
* result is now an array containing the entire contents of the
* result table */
$result=mysql_query($query);

?>

<html>
<body>
  <div>
    <h1>
      Runners List
    </h1>
Bib Number : First Name : Last Name : Age<br />
<?php
while($runner = mysql_fetch_array($result)) {
  echo $runner["BibNumber"] . " : " . $runner["FirstName"] . " : " . $runner["LastName"] . " : " . $runner["age"] . "<br />";
  //print_r($runner);
}
?>

  </div>
</body>
</html>
