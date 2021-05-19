<?php
 
// include database and object files
include_once '../config/database.php';
include_once '../objects/doctor.php';
 
// get database connection
$database = new Database();
$db = $database->getConnection();
 
// prepare contact object
$contact = new Contact($db);
 
// set doctor property values
$contact->id = $_POST['id'];
$contact->name = $_POST['name'];
$contact->email = $_POST['email'];
$contact->password = base64_encode($_POST['password']);
$contact->phone = $_POST['phone'];

// create the contact
if($contact->update()){
    $contact_arr=array(
        "status" => true,
        "message" => "Successfully Updated!"
    );
}
else{
    $contact_arr=array(
        "status" => false,
        "message" => "Email already exists!"
    );
}
print_r(json_encode($contact_arr));
?>