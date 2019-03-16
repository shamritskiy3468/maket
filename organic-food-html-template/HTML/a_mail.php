<?php
 if(isset($_POST['first_name'])){
	$f_name = $_POST['first_name'];
	$sub = $_POST['subj'];
	$phone_no = $_POST['phone_number'];
	$em = $_POST['e_mail'];
	$messg = $_POST['msg'];
	
	$to = "deepa.chouhan@himanshusofttech.com";
	$subject = "organic food Responsive Template";
	$msg="Hi Admin..<p>".$f_name." has sent a query. User's Phone No ".$phone_no." email id as ".$em."</p><p> and users subject is : ".$sub."</p>";
	$headers = "MIME-Version: 1.0" . "\r\n";
	$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
	$headers .= 'From: <support@organic.com>' . "\r\n";

	echo mail($to,$subject,$msg,$headers);
}
?>