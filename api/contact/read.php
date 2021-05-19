<?php
// include database and object files
include_once '../config/database.php';
include_once '../objects/contact.php';
 
// get database connection
$database = new Database();
$db = $database->getConnection();
 
// prepare doctor object
$contact = new Contact($db);
 
// query contact
$stmt = $contact->read();
$num = $stmt->rowCount();
// check if more than 0 record found
if($num>0){
 
    // contact array
    $contact_arr=array();
    $contact_arr["contact"]=array();
 
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
        extract($row);
        $contact_item=array(
            "id" => $id,
            "name" => $name,
            "email" => $email,
            "password" => $password,
            "phone" => $phone,
            "created" => $created
        );
        array_push($contact_arr["contact"], $contact_item);
    }
 
    echo json_encode($contact_arr["contact"]);
}
else{
    echo json_encode(array());
}
?>