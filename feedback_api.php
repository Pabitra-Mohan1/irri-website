<?php
header("Content-Type: application/json; charset=UTF-8");
if (isset($_SERVER['HTTP_ORIGIN'])) {
	header("Access-Control-Allow-Origin: {$_SERVER['HTTP_ORIGIN']}");
	header('Access-Control-Allow-Credentials: true');
	header('Access-Control-Max-Age: 86400');    // cache for 1 day
}

// Access-Control headers are received during OPTIONS requests
if ($_SERVER['REQUEST_METHOD'] == 'OPTIONS') {

	if (isset($_SERVER['HTTP_ACCESS_CONTROL_REQUEST_METHOD']))
		header("Access-Control-Allow-Methods: GET, POST, OPTIONS");         

	if (isset($_SERVER['HTTP_ACCESS_CONTROL_REQUEST_HEADERS']))
		header("Access-Control-Allow-Headers:        {$_SERVER['HTTP_ACCESS_CONTROL_REQUEST_HEADERS']}");

	exit(0);
}

if(!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['phone'])){
    extract($_POST);
    

// $to="contact@rkbodisha.in,girijanandini.crushaders@gmail.com";
$to="girijanandini.crushaders@gmail.com";
$subject = "New feedback from ".$_POST["name"];
$message = "<html>
<head>
<title>New Feedback</title>
</head>
<body>
<p>Feedback from <strong>".$_POST["name"]."</strong>: </p>
<table border='1' cellpadding='10'>
    <tr>
        <td><strong>Job Role</strong></td>
        <td>".$_POST["jobrole"]."</td>
    </tr>
    <tr>
        <td><strong>Comment</strong></td>
        <td>".$_POST['comment']."</td>
    </tr>
    <tr>
        <td><strong>Email</strong></td>
        <td>".$_POST["email"]."</td>
    </tr>
    <tr>
        <td><strong>Phone</strong></td>
        <td>".$_POST["phone"]."</td>
    </tr>
    <tr>
        <td><strong>Block</strong></td>
        <td>".$_POST["block"]."</td>
    </tr>
    <tr>
        <td><strong>City/GP</strong></td>
        <td>".$_POST["city"]."</td>
    </tr>
    <tr>
        <td><strong>District</strong></td>
        <td>".$_POST["district"]."</td>
    </tr>
</table>
</body>
</html>
";

// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers .= 'From: <admin@rkbodisha.in>' . "\r\n";

mail($to,$subject,$message,$headers);
echo json_encode(array(
    "status" => 1
));
/*
$conn = Database::getConnection(); 
$conn->insert('feedback_form')
     ->fields( array( 
         'sender_name' => $name, 
        'sender_email' => $email, 
         'sender_phone' => $phone,
        'sender_city' => $city,
        'sender_block' => $block,
        'sender_district' => $district,
        'sender_job_role' => $jobrole,
         'sender_message' => $comment,
         ) )
    ->execute();
*/
}else{
    echo json_encode(array(
        "status" => 0
    ));
}
?>