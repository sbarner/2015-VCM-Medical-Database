<?php
// Assuming the form inputs for searches are:
// bibNumber
// firstName
// lastName
// This file should be included like a header file

$connection = mysqli_connect("TODO", "marathon", "p@sswerd", "athletes");

if(mysqli_connect_errno()) {
  echo "Failed to connect to MySQLi: " . mysqli_connect_error();
}

// Select all from rummers where they have the same bibnumber, OR, the same first and last name as the entry
$query = "SELECT * from runners WHERE BibNumber=" . $bibNumber . " OR FirstName=" . $firstName . " AND LastName=" . $lastName;

$result = mysqli_query($connection, $query);

$values = mysqli_fetch_all( $result, MYSQLI_ASSOC );

foreach($values as $runner_set) {
  // TODO how to fight against ambiguity?

  // extract values
  $bib_number = $runner_set["BibNumber"];
  $first_name = $runner_set["FirstName"];
  $middle_name = $runner_set["MiddleName"];
  $last_name = $runner_set["LastName"];
  $tent_location = $runner_set["TentLocation"];
  $age = $runner_set["age"];
  $sex = $runner_set["sex"];

  $city_address = $runner_set["addr_city"];
  $state_address = $runner_set["addr_state"];
  $country_address = $runner_set["addr_country"];

  $patient_bio = $runner_set["PatientInfo"];
  $time_in = $runner_set["TimeIn"];
  $time_out = $runner_set["TimeOut"];

  $runner_collected_chip = $runner_set["isRaceChipCollected"];
  $runner_medalgiven = $

}

// Close the connection
mysqli_close($connection);
?>
