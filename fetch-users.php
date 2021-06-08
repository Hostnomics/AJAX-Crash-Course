<?php

//Create Connection
$conn = mysqli_connect('localhost', 'devadminomics', '$3llH0st1ng1nf0N0w$!$.','devadminomics_ajaxtest');

// $query = "SELECT * FROM `Users`";
$query = 'SELECT * FROM Users';

//Get Result
$result = mysqli_query($conn, $query); 

//Fetch Data
$users = mysqli_fetch($result, MYSQLI_ASSOC); 

echo json_encode($users); 


?>