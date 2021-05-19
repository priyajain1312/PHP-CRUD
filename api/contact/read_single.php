<?php
// include database and object files
include_once '../config/database.php';
include_once '../objects/doctor.php';
 
// get database connection
$database = new Database();
$db = $database->getConnection();
 
// prepare contact object
$contact = new Contact($db);

// set ID property of doctor to be edited
$contact->id = isset($_GET['id']) ? $_GET['id'] : die();

// read the details of doctor to be edited
$stmt = $contact->read_single();

if($stmt->rowCount() > 0){
    // get retrieved row
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
    // create array
    $contact_arr=array(
        "id" => $row['id'],
        "name" => $row['name'],
        "email" => $row['email'],
        "password" => $row['password'],
        "phone" => $row['phone'],
        "created" => $row['created']
    );
}
// make it json format
print_r(json_encode($contact_arr));
?>