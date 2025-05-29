

<?php
include "wapi.php";
$phone=$_POST['phone'];
$msg=$_POST['msg'];
$msg = str_replace("\n", "\\n",  $msg);
$url="https://wa.me/".$phone;

//echo $msg;

//$result = send_with_wapi($wapi_token, $wapi_profile_id, '120363419444787628@g.us',  $msg);

//print_r($result);

header("Location: $url");

?>