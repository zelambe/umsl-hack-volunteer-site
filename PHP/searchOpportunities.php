<?php
session_start();

header("Content-Type: application/json");

require 'database.php';

$query = $_POST['query'];

$query = htmlspecialchars($query);
$query = mysql_real_escape_string($query);


$stmt =$mysqli->prepare("SELECT * FROM Organizations WHERE (`name` LIKE '?')");
  
echo json_encode(array("success" => true,"message" => "finished prepare statment"));


if(!$stmt){
echo json_encode(array("success" => false,"message" => "Error: new user was not created, query prep failed"));
exit;    
}

$stmt->bind_param('s', $query);
$stmt->execute();

echo json_encode(array("success" => true,"message" => "statement executed"));


if($stmt){
    //echo json_encode(array("success" => true));
}else{
   echo json_encode(array("success" => false,"message" => "Error: info could not be retrieved"));
   exit;
}
$result = $stmt->get_result();
//$stmt->bind_result($event_name, $event_start, $event_end);

echo json_encode(array("success" => true,"message" => "got result"));

$rows = array();


while($row = $result->fetch_assoc()){
   $tempArray = array("name" => htmlspecialchars($row["name"]),
   "zipcode" => htmlspecialchars($row["zipcode"]),
   "website" => htmlspecialchars($row["website"]),
   "phone_number" => htmlspecialchars($row["phone_number"]),
   "animal_welfare" => htmlspecialchars($row["animal_welfare"]),
   "arts_culture" => htmlspecialchars($row["arts_culture"]),
   "children" => htmlspecialchars($row["children"]),
   "civil_rights" => htmlspecialchars($row["civil_rights"]),
   "disaster_relief" => htmlspecialchars($row["disaster_relief"]),
   "economic_empowerment" => htmlspecialchars($row["economic_empowerment"]),
   "education" => htmlspecialchars($row["education"]),
   "health" => htmlspecialchars($row["health"]),
   "human_rights" => htmlspecialchars($row["human_rights"]),
   "politics" => htmlspecialchars($row["politics"]),
   "poverty_alleviation" => htmlspecialchars($row["poverty_alleviation"]),
   "s_and_t" => htmlspecialchars($row["s_and_t"]),
   "social_services" => htmlspecialchars($row["social_services"]));
   
   $rows[] = $tempArray;
} 

$jsonArray = json_encode($rows); //put all the data into an array

echo $jsonArray; 
exit;
?>
