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
$contact->name = $_POST['name'];
$contact->email = $_POST['email'];
$contact->password = base64_encode($_POST['password']);
$contact->phone = $_POST['phone'];
$contact->created = date('Y-m-d H:i:s');

// create the contact
if($contact->create()){
    $contact_arr=array(
        "status" => true,
        "message" => "Successfully Signup!",
        "id" => $contact->id,
        "name" => $contact->name,
        "email" => $contact->email,
        "phone" => $contact->phone,
       
    );
}
else{
    $doctor_arr=array(
        "status" => false,
        "message" => "Email already exists!"
    );
}
print_r(json_encode($contact_arr));
?>