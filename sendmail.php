<?php
header("Content-Type: application/json; charset=UTF-8");
if(!empty($_POST['fname']) && !empty($_POST['email']) && !empty($_POST['phone'])){

$fname = filter_var($_POST["fname"], FILTER_SANITIZE_STRING);
$job_role = filter_var($_POST["job-role"], FILTER_SANITIZE_STRING);
$comment = filter_var($_POST["comment"], FILTER_SANITIZE_STRING);
$email = filter_var($_POST["email"], FILTER_SANITIZE_EMAIL);
$phone = filter_var($_POST["phone"], FILTER_SANITIZE_STRING);
$block = filter_var($_POST["block"], FILTER_SANITIZE_STRING);
$city_gp = filter_var($_POST["city-gp"], FILTER_SANITIZE_STRING);
$district = filter_var($_POST["district"], FILTER_SANITIZE_STRING);


// $to="contact@rkbodisha.in,girijanandini.crushaders@gmail.com";
$to="contact@rkbodisha.in";
$subject = "New feedback from ".$_POST["fname"];
$message = "<html>
<head>
<title>New Feedback</title>
</head>
<body>
<p>Feedback from <strong>".$fname."</strong>: </p>
<table border='1' cellpadding='10'>
    <tr>
        <td><strong>Job Role</strong></td>
        <td>".$job_role."</td>
    </tr>
    <tr>
        <td><strong>Comment</strong></td>
        <td>".$comment."</td>
    </tr>
    <tr>
        <td><strong>Email</strong></td>
        <td>".$email."</td>
    </tr>
    <tr>
        <td><strong>Phone</strong></td>
        <td>".$phone."</td>
    </tr>
    <tr>
        <td><strong>Block</strong></td>
        <td>".$block."</td>
    </tr>
    <tr>
        <td><strong>City/GP</strong></td>
        <td>".$city_gp."</td>
    </tr>
    <tr>
        <td><strong>District</strong></td>
        <td>".$district."</td>
    </tr>
</table>
</body>
</html>
";

// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers .= 'From: <'.$email.'>' . "\r\n";
//$headers .= 'Cc: girijanandini.crushaders@gmail.com' . "\r\n";

mail($to,$subject,$message,$headers);
echo json_encode(array(
    "status" => 1
));



}else{
    echo json_encode(array(
        "status" => 0
    ));
}
?>