<?php
 
// include database and object files
include_once '../config/database.php';
include_once '../objects/doctor.php';

// get database connection
$database = new Database();
$db = $database->getConnection();
 
// prepare contact object
$contact = new Contact($db);
 
// set contact property values
$doctor->id = $_POST['id'];
 
// remove the doctor
if($contact->delete()){
    $contact_arr=array(
        "status" => true,
        "message" => "Successfully Removed!"
    );
}
else{
    $doctor_arr=array(
        "status" => false,
        "message" => "Contact Cannot be deleted. !"
    );
}
print_r(json_encode($contact_arr));
?>